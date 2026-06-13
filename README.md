# Laravel CRUD Project

## Requirements

- PHP 8+
- Composer
- Docker & Docker Compose
- MySQL

## Installation

```bash
git clone <repo-url>
cd <project-folder>
composer install
cp .env.example .env
php artisan key:generate
```

## Database

Configure your `.env`:
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password

Then run:

```bash
php artisan migrate
npm install && npm run dev
```

## Running the project

Open two terminals:

```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

Visit `http://localhost:8000` — you will be redirected to the login page.

## Register & Login

Go to `/register` to create an account, then log in to access the app.

## Features

- Authentication (Laravel Breeze)
- Product management (name, description, price, stock quantity)
- Customer management (first name, last name, email, phone)
- Form validation with dedicated Form Request classes
- Route model binding
- Pagination
