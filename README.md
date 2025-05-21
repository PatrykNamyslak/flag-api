
# PHP Country Flag API

Have you ever needed a quick and simple way to get a countries flag by using the full name or just the country code? Well now you can by using this API



## License
The limitations for the SOURCE CODE are:
- You cannot trademark this source code unless you modify it.
- Even if you do modify it you must give me credit somewhere in your project and it must be visible to the user but also it needs to be where it is actually used not on just some random page of your project that utilises my project.
- You can make profits using this API SOURCE CODE and only when adapted to your use case.

The limitations for the [Open API](https://api.frontendfoundry.dev/v1/flags/) are:
- You cannot use it commercially unless credit is given and/or written consent is given.
- You can use this for personal use.

## API Reference

#### Fetch a Flag

```http
  GET /v1/flags/${Identifier}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `Identifier` | `string` | **Required**. Either a full country name or a country code i.e GB |


## Tech Stack

**Client:** HTML, CSS, JS (Just basics)

**Server:** PHP, MYSQL


## Authors

- [@patryknamyslak](https://www.github.com/patryknamyslak)


## FAQ

#### What makes this API Stand out from the already existing APIs?

The whole idea sparked for when I wanted to implement a nice flag image/ icon to appear next to a users location on their profile over on [frontendfoundry.dev](https://frontendfoundry.dev) (Launching soon), this flag would use the users stored location which was the full country name including spaces, So I went surfing the interwebs and I could not find an API that allows you to fetch country flags by full name e.g: United Kingdom. So I just broke the entire api down to the absolute basics and boom its done and it works flawlessly so far.

#### Will I need any prerequisites if I want to self host this?

Ideally you should have a mysql database with a database called whatever you'd like and a table called flags, in that you need columns calledL: Country Name, Country Code and Flag (Optional if you want to cache links, I did not use this column at all) and then you can tweak the code a bit, of course make yourself the queryDatabase function first as that is what I have used but I will not provide the source code for that for obvious security reasons. Then you need a .htaccess file in the same directory you want the users to visit i.e /v1/flags/.htaccess in that you can place my .htaccess that I have used with apache, you can find that in the prerequisites folder.


## Used By

This project is used by the following websites:

- [Frontend Foundry](https://frontendfoundry.dev)


## Credits

- This project uses [flagcdn](https://flagcdn.com/) direct backlink -> [flagpedia](https://flagpedia.net).
