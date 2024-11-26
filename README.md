# EPPDB

## Requirements
- PHP ^8.2
- Laravel 11

## Initial setup guide
Buat file konfigurasi .env salin dari .env.example

Buat mysql database dan atur konfigurasinya di file konfigurasi .env

Install  dependency composer

`composer install`

`php artisan key:generate`

`php artisan migrate:fresh --seed`


Install modules required by vite.

`npm install`


Run the server:

`php artisan serve`


Open new terminal then run vite

`npm run dev`
