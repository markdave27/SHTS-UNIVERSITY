<p align="center"><a href="https://laravel.com" target="_blank"><img width="150"src="https://laravel.com/laravel.png"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## About SHTS University
SHTS is made using LARAVEL 5 PHP Framework. It is one of the most popular frameworks at present with a detailed documentation and active support community. 
See detailed description on the bottom portion of the docs.

## Run SHTS University on your local machine
- clone project: https://github.com/charlesm31/SHTS-UNIVERSITY.git
- copy .env.example as .env
- open .env file
- update mysql credentials to your local mysql credentials (database name, username, password)
- create the database: (db name: shts), otherwise what you specified on your .env file
- Open project path on the terminal
- install dependencies: composer install
- Generate app key: php artisan key:generate
- Create database tables: php artisan migrate
- Populate tables: php artisan db:seed
- Serve the project: php artisan serve
- Open the app on the browser: localhost:8000

## Default Users
- admin account: admin / password123!
- user account: user / user123!

## Working Features
- Landing Page responsive layout for destkop, ipad, and mobile view using bootstrap, CSS and media queries
- Login Feature: Admin and user view
- Sign in Form Validation
- Content restriction base on user type
- Admin CRUD for user management
- Fibonacci Series
- Palindrome Tester
- Anagram Tester
- Number Sorting

## About SHTS with Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Laravel framework

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
