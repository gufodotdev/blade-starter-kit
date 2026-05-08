# Blade Starter Kit

A Blade starter kit with the modern styling of the [official starter kits](https://laravel.com/starter-kits).

This starter kit is intended to give you the same look and feel as the official Laravel starter kits like React and Vue — but using plain Blade, so no JavaScript framework is required. This is made possible by using [Starting Point UI](https://startingpointui.com), a framework-agnostic alternative to shadcn/ui (the component library behind the official React and Vue starter kits).

## Installation

Create a new Laravel application using this starter kit through the [official Laravel installer](https://laravel.com/docs/13.x/installation):

```bash
laravel new my-app --using=gufodotdev/blade-starter-kit
```

Then run `composer run dev` to start the dev server.

## Features

- Registration, login and logout
- Email verification
- Password reset and confirmation
- Two-factor authentication
- Profile settings (update name and email, delete account)
- Password updates
- Light, dark, and system appearance

## Configuring features

Authentication is powered by [Laravel Fortify](https://laravel.com/docs/fortify). All features ship enabled — see the Fortify docs for how to disable any of them via `config/fortify.php` and the matching `User` model / middleware changes.

## License

[MIT](LICENSE)
