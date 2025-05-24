# Laravel Starter



[Documentation Link- ChatGPT](https://chatgpt.com/share/6831e0fa-9520-8004-b2ad-fae10ec433e7)

[My Site](https://mykinde.github.io/site/)



## About Repository

A very simple Laravel 12 +  Application.
<p align="center">
<img src="https://i.imgur.com/TO3sknp.png">

</p>

## Tech Specification

- Laravel 12
- CRUD Oporation
- Laravel Breeze
- Bootstrap 4 + Font Awesome 5
- PHPUnit Test Case/Test Coverage


## Features

- Create Read Update Delete


## Installation

- `git clone https://github.com/mykinde/week1.git`
- `cd laravel-starter/`
- `composer install`
- `cp .env.example .env`
- Update `.env` and set your database credentials
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan passport:install`
- `npm install`
- `npm run dev`
- `php artisan serve`

## Install with Docker

- `docker-compose up -d`
- `docker exec -it vue-starter /bin/bash`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan passport:install`
- Application http://localhost:8000/
- Adminer for Database http://localhost:8000/
- DBhost: yourIP:3307, user: root, Password: password


## Unit Test

#### run PHPUnit

```bash
# run PHPUnit all test cases
vendor/bin/phpunit
# or Feature test only
vendor/bin/phpunit --testsuite Feature
```

#### Code Coverage Report

```bash
# reports is a directory name
vendor/bin/phpunit --coverage-html reports/
```
A `reports` directory has been created for code coverage report. Open the dashboard.html.


## Installation 
Make sure that you have setup the environment properly. You will need minimum PHP 8.2, MySQL/MariaDB, and composer.

1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure your database credentials
3. Go to the project's root directory using terminal window/command prompt
4. Run `composer install`
5. Set the application key by running `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate`
7. Start local server by executing `php artisan serve`
8. Visit here [http://127.0.0.1:8000/prject](http://127.0.0.1:8000/posts) to test the application
## mykinde
for full package and demo contact g3send@gmail.com

## Credit
This repository is motivated by [mykinde/laravStart](https://github.com/mykinde/laravel_12_chatgpt_app.git) and his awesome video tutorial in [Youtube](https://www.youtube.com/watch?v=ubSWfJ4Gqy8).

## License

[MIT license](https://opensource.org/licenses/MIT).