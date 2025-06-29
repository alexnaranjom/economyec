# EconomyEC

**EconomyEC** is a Laravel 11 web portal built for publishing and managing curated economic articles. It features user authentication, article tagging, and a clean, responsive UI with Tailwind CSS. This project is designed to demonstrate modern Laravel development practices and is suitable as a developer portfolio piece.

---

## 🚀 Features

- User authentication (login/register/logout)
- Post creation, editing, and deletion
- Tagging system to organize articles
- Guest access to public post listings
- Responsive layout with Tailwind CSS
- Welcome page with direct access to the posts list
- Laravel Herd and Vite for local development

---

## 🛠️ Tech Stack

- **Framework:** Laravel 11
- **Frontend:** Blade, Tailwind CSS, Vite
- **Database:** MySQL (or SQLite for local testing)
- **Dev Tools:** Laravel Herd, VS Code
- **Deployment Ready:** AWS Lightsail or other PHP-friendly host

---

## 📦 Installation (Local)

```bash
# Clone the repo
git clone https://github.com/YOUR_USERNAME/economyec.git
cd economyec

# Install dependencies
composer install
npm install && npm run dev

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database (SQLite or MySQL)
php artisan migrate

# Serve the project
php artisan serve
