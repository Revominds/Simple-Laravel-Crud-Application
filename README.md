
# Simple Laravel CRUD Application

A beginner-friendly Laravel CRUD (Create, Read, Update, Delete) application demonstrating
basic Laravel concepts such as routing, controllers, models, migrations, and Blade views.

## Features
- Create, read, update, and delete records
- Clean and simple UI
- Laravel MVC structure
- Validation and error handling

## Requirements
- PHP 8.5.2
- Composer
- Laravel 12
- MySQL 

## Installation
```bash
git clone https://github.com/revominds/Simple-Laravel-Crud-Application.git
cd Simple-Laravel-Crud-Application
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


