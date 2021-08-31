## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software.

* Git.
* PHP.
* Composer.
* Laravel CLI.
* Laravel Valet (optional).
* A webserver like Nginx or Apache.

* Base on Laravel 8.0

### Install
Clone the git repository on your computer
```
$ git clone https://github.com/nopponaim603/laravel-orm.git
```

You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies. 
```
$ cd laravel-orm-demo
$ composer install
```

### Setup
When you are done with installation, copy the `.env.example` file to `.env`
```
$ cp .env.example .env
```
or
```
$ copy .env.example .env
```

Generate the application key
```
$ php artisan key:generate
```

Add your database credentials to the necessary `env` fields

Using mysql and Create DB name
```
laravel_orm
```

Migrate the application
```
$ php artisan migrate
```

### Run the application
```
$ php artisan serve
```

## Built With
* [Laravel](https://laravel.com) - The PHP framework for building the API endpoints needed for the application

## Acknowledgments
* [Laravel](https://laravel.com) - The excellent documentation explaining how to get started with Laravel and Laravel Passport made it easy to provide a step by step guide for beginners to follow the application.


## Call Route

### One to One

Add Data
```
http://127.0.0.1:8000/add-user
```

Show Data
```
http://127.0.0.1:8000/get-phone/1
```

### One to Many

Add Data
```
http://127.0.0.1:8000/add-post
```

```
http://127.0.0.1:8000/add-comment/1
```

Show Data
```
http://127.0.0.1:8000/get-comments/1
```

### Many to Many Example

Add Data
```
http://127.0.0.1:8000/add-role
```

```
http://127.0.0.1:8000/add-users
```

Show Data
```
http://127.0.0.1:8000/rolesbyuser/{$user_id}
```

```
http://127.0.0.1:8000/usersbyrole/{$role_id}
```