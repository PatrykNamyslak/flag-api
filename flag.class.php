<?php
/**
 * DEFINE THE queryDatabase FUNCTION in a separate file!
 */

class Flag{
    public string $CountryName;
    public string $CountryCode;
    public string $SourceImageURL;

    public function __construct(?string $CountryName = NULL, ?string $CountryCode = NULL){
        if (!$CountryCode and !$CountryName){
            return FALSE;
        }
        // Fetch flag data
        $FlagData = self::getFlagData($CountryName ?? $CountryCode);
        if ($FlagData){
            $this->CountryName = $FlagData['Country Name'];
            $this->CountryCode = $FlagData['Country Code'];
            $this->SourceImageURL = "https://flagcdn.com/" . strtolower($this->CountryCode) . ".svg";
        }else{
            return FALSE;
        }
    }

    public static function getFlagData(string $CountryIdentifier){
        $Column = match(true){
            (strlen($CountryIdentifier) === 2) => 'Country Code',
            (strlen($CountryIdentifier) > 2) => 'Country Name',
            default => FALSE,
        };
        if ($Column){
        $SearchReferenceValue = $CountryIdentifier;
        $query = "SELECT * FROM `flags` WHERE `{$Column}` = '{$SearchReferenceValue}';";
        return queryDatabase(query: $query, method: 'fetch');
        }else{
            return FALSE;
        }
    }
}
?>