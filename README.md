# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.7/installation#installation)


Clone the repository

    git clone git@github.com:astondihor/laravel-crud-example.git

Switch to the repo folder

    cd laravel-crud-example

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the `.env` file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Create mysql database with the name of `laravel_crud_example` on your local machine, and edit `.env` file. Replace `DB_USERNAME` and `DB_PASSWORD` value with your username and password


Run the database migrations (**Set the database connection in .env before migrating**)

```dot
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crud_example
DB_USERNAME=root
DB_PASSWORD=root
```

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at `http://localhost:8000`

**TL;DR command list**

    git clone git@github.com:astondihor/laravel-crud-example.git
    cd laravel-crud-example
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations**

    php artisan migrate
    php artisan serve
