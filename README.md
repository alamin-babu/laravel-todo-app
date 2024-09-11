# Todo App

This is a simple Todo application built with Laravel 11 using Laravel Breeze for authentication. Todos are stored in session storage, meaning they persist as long as the session is active.

## Features
- User authentication (register, login, password reset) via Laravel Breeze.
- Todo management:
  - Add a new todo.
   - Edit an existing todo.
   - Delete a todo.
- All todo operations are restricted to authenticated users only.
- Todos are stored in session storage, so each user's todos are unique to their session.
- 
## Requirements
- PHP >= 8.2
- Composer
- Node.js & npm
- Laravel 11

## Installation

### Step 1: Clone the Repository

```
git clone https://github.com/alamin-babu/laravel-todo-app.git

cd laravel-todo-app
```

### Step 2: Install Dependencies
Install PHP dependencies:
```
composer install
```

 Install NPM dependencies
```
npm install
npm run dev
```
### Step 3: Configure Environment
Copy the .env.example file to .env and update it:
```
cp .env.example .env
```
Generate an application key:

```
php artisan key:generate
```
## Step 4: Set Up Database and Migrations
open .env file - update the database name or create a same database configaration on you local device.
Run the migrations to set up the necessary authentication tables:

```
php artisan migrate
```

## Step 5: Run the Application
Start the Laravel development server:

```
php artisan serve
```
The app will be available at:
``` http://localhost:8000```
