<?php
require_once './flag.class.php';

$flagIdentifier = $_GET['parameters'];

// Extract the country requested and check if its a country name or code
$flagIdentifier = strtolower(trim(str_replace(' ', '', $flagIdentifier), '/'));
$flagIdentifier = str_replace('_', ' ', $flagIdentifier);

$flag = match (true){
    // If the user is fetching by Country Code (Two lettered shorthand)
    (strlen($flagIdentifier) === 2) => new Flag(CountryCode: $flagIdentifier),
    // if the user is fetching by full country name.
    (strlen($flagIdentifier) > 2) => new Flag(CountryName: $flagIdentifier),
    // If the user is doing something else/ empty response
    default => FALSE,
};

if ($flag):
    exit(header("location: {$flag->SourceImageURL}"));
else:
    ?>
    <p>Flag does not exist</p>
<?php
endif;
?>