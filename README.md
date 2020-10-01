# Boilerplate PHP

A Barebones PHP boilerplate for creating bespoke modern web based projects in a short time. A perfect solution for shared hosting environments that run on Apache, where containerization options aren't available.

## Using the boilerplate

Make your own copy of the `site` directory.

Update the config file `site/public/bin/Lycanware/Core/Config/Web.php`. You can add your own config settings to these files as needed, or create your own config file in the same directory. `DB.php` is an example of where to put database credentials.

You should now have a fully functioning barebones site and router, ready for development.

Examples of how to use the boilerplate for different situations are included in the `router.php` file and `controller` and `view` directories.

## Features / Supports

- Router
- Server rendering
- API calls
- Referrer spam prevention
- Enforces HTTPS
