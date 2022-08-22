# Filament Exercice 🚀

Exercice with Filament. Developed by adeliry.

## Structure 🧱

This application contains admin panel and proposes the management of a **"products"** resource with **Filament**
A product belongs to a sub category, who belongs to a main category

### Technology

-   [Laravel](https://laravel.com/) : Framework PHP, version 9.x
-   [Filament](https://filamentphp.com/) : Filament is a collection of tools for rapidly building beautiful TALL stack apps, designed for humans.

### Requirements
- PHP 8.+
- MariaDB 10.3+ / MySQL 5.7+

### Setting up

#### Initialisation

- Create a local database
- Edit and rename .env file with appropriate information

#### Commands

- `composer install`
- `php artisan key:generate`
- `php artisan migrate:refresh --seed`
- `php artisan serve`

### Login (url/login/password)

-   [http://localhost:8000/admin](http://localhost:8000/admin)
-   `example@example.ch`
-   `password`
