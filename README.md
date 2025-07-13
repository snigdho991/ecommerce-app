## Project Description

This is part of a multi-system authentication where a user logs into the ecommerce-app, they will be automatically authenticated into foodpanda-app without needing to log in again.


## Requirements

PHP >= 8.2 <br>
Laravel 12.x <br>
Composer <br>
Node.js and NPM <br>
MySQL <br>
Laravel Breeze <br>


## Installation

1. Clone the Repository <br>
git clone https://github.com/snigdho991/ecommerce-app.git <br>
cd ecommerce-app

2. Install Dependencies <br>
composer install <br>
npm install && npm run dev

3. Configure Environment <br>
Copy .env.example to .env: <br>

Update the following in your .env: <br>
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=ecommerce <br>
DB_USERNAME=root <br>
DB_PASSWORD= <br>

4. Generate App Key <br>
php artisan key:generate

5. Run Migrations <br>
php artisan migrate

6. Run Tinker and Generate Test Users <br>
php artisan tinker <br>
    >>> \App\Models\User::create(['name'=>'Test User', 'email'=>'test@example.com', 'password'=>bcrypt('password')])

7. Serve the Application- <br>
php artisan serve --port=8000


## Testing
Email: test@example.com <br>
Password: password
