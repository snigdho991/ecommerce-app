## Project Description

This is part of a multi-system authentication where a user logs into the ecommerce-app, they will be automatically authenticated into foodpanda-app without needing to log in again.


## Requirements

PHP >= 8.2
Laravel 12.x
Composer
Node.js and NPM
MySQL
Laravel Breeze


## Installation

1. Clone the Repository
git clone https://github.com/your-username/ecommerce-app.git
cd ecommerce-app

2. Install Dependencies
composer install
npm install && npm run dev

3. Configure Environment
Copy .env.example to .env:
cp .env.example .env

Update the following in your .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=

4. Generate App Key
php artisan key:generate

5. Run Migrations
php artisan migrate

6. Run Tinker and Generate Test Users
php artisan tinker
    >>> \App\Models\User::create(['name'=>'Test User', 'email'=>'test@example.com', 'password'=>bcrypt('password')])

7. Serve the App
php artisan serve --port=8000


## Testing
Email: test@example.com
Password: password
