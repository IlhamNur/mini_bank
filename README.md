
# 💳 mini_bank

**mini_bank** is a mini web-based banking application built with Laravel. This project provides basic features like user management, authentication, and role-based access control, making it suitable for learning or further development.

## 🛠️ Features

- User authentication (Login & Register)
- User and role management
- Blade template-based interface
- Multilingual support (English available)
- Modular structure following Laravel standards

## 📁 Directory Structure

- `app/` - Main application logic (controllers, models, etc.)
- `bootstrap/` - Laravel bootstrap files
- `config/` - Application configuration files
- `database/` - Database migrations and seeders
- `lang/en/` - English language localization files
- `public/` - Public assets (images, CSS, JS)
- `resources/` - Blade views and frontend assets
- `routes/` - Application routing files (`web.php`, etc.)
- `storage/` - Application-generated files (logs, cache)
- `tests/` - Unit and feature tests

## 🚀 Installation

```bash
# Clone the repository
git clone https://github.com/IlhamNur/mini_bank.git
cd mini_bank

# Install dependencies
composer install
npm install && npm run dev

# Copy the environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Set up the database and run migrations
php artisan migrate

# Start the local development server
php artisan serve
```

## 🧪 Testing

To run the tests:
```bash
php artisan test
```

## 📌 Technologies Used

- Laravel (PHP Framework)
- Blade Templating
- JavaScript
- CSS
- MySQL

## 👥 Contributors

- [Ilham Nur Romdoni](https://github.com/IlhamNur)
- [Kristian Budi Pradana Putra](https://github.com/ianKrstn)

## 📜 License

This project is open-sourced under the [MIT license](LICENSE).
