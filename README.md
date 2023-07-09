# Laravel project

This repository contains a Laravel project that requires some configuration steps before running. Follow the instructions below to properly set up your development environment.

## Prerequisites

Before proceeding, make sure you have the following requirements installed on your system:

* Composer: Composer is a dependency management tool for PHP.
* Node.js: Node.js is a JavaScript runtime environment.

## Settings
Follow the steps below to configure the Laravel project:

1. Clone this repository to your local environment.
2. Open a terminal or command prompt in the project's root folder.

### Installation of Dependencies

Run the following commands to install project dependencies:
```bash
composer install
npm install
```

### Database Configuration

1. Create an `.env` file in the root folder of the project. You can copy the `.env.example` file and rename it to `.env.`

2. Open the `.env` file and configure the database information according to your environment. Make sure you correctly set the following variables:
```php
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### Database Migration

Run the following command to migrate the database tables:
```bash
php artisan migrate
```

### Run the Development Server
To start the Laravel development server, run the following command:
```bash
php artisan serve
```

After running the above command, you will be able to access the project at [http://localhost:8000](http://localhost:8000) in your browser.

# Tests

To perform E2E tests, enter the following user in the database:
OBS: The tests that will be executed will be based on this user's information.
```
INSERT INTO users (id, username, password) VALUES ('8653dff5-ef28-4f6b-b872-04895e0330da', 'liliane', 's3nh@Liliane');
```
## Prerequisites for Tests

* Xdebug: Xdebug is an extension for PHP, and provides a range of features to improve the PHP development experience.

### Unit Tests

To run the tests, you can use the following command:

```bash
vendor/bin/phpunit
```
### Mutation Tests

To run the tests, you can use the following command:

```bash
vendor/bin/infection --initial-tests-php-options="-d xdebug.mode=coverage"
```