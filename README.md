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
```

## Running the project

Open a terminal:

```bash
php artisan serve
```

Visit `http://localhost:8000/products` — you will be redirected to the product list.
Visit `http://localhost:8000/customers` — you will be redirected to the customer list.

## Features

- Product management (name, description, price, stock quantity)
- Customer management (first name, last name, email, phone)
- Form validation with dedicated Form Request classes
- Route model binding
- Pagination
