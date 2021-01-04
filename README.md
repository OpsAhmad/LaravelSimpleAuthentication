# Simple Authentication WIth Laravel 8

This is an simple authentication system built with laravel 8.

## Features :
* Login user
* Register new user
* Display user name
* Edit user name

## Preview
![Login Page preview](https://raw.githubusercontent.com/OpsAhmad/LaravelSimpleAuthentication/main/screenshoot/2.jpg)

![Login Page preview](https://raw.githubusercontent.com/OpsAhmad/LaravelSimpleAuthentication/main/screenshoot/1.jpg)

![Login Page preview](https://raw.githubusercontent.com/OpsAhmad/LaravelSimpleAuthentication/main/screenshoot/3.jpg)

## Instalation
1. Download package [here](https://github.com/OpsAhmad/LaravelSimpleAuthentication/archive/main.zip)
2. Unzip package
3. Create database and setup on your .env file
4. Run migration 
```bash
php artisan migrate
```
5. Seed the user table
```bash
php artisan db:seed --class=userSeeder
```
6. On root directory run this command to activate local server
```bash
php artisan serve
```
7. Now open http://127.0.0.1:8000 on your browser


Thanks.


