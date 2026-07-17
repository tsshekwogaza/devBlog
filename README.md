# Laravel Blog Project

A clean, production-ready blogging platform built to master the core 20% of Laravel that drives 80% of real-world applications. This project serves as a practical implementation of fundamental Laravel concepts, focusing heavily on secure authentication, fine-grained authorization, and asset management.

## 🚀 Features

*   **User Authentication**: Secure user registration, login, and session management.
*   **Complete CRUD**: Create, read, update, and delete blog articles with rich text.
*   **Media Uploads**: Cover image uploads for articles and custom avatar uploads for user profiles.
*   **Advanced Authorization**: Gate and Policy-driven access control ensuring users only modify their own content.
*   **Modern UI**: Fully responsive, clean interface built entirely with Tailwind CSS.

## 🧠 Core Laravel Concepts Covered

*   **Routing & Controllers**: Resource routing mapped to clean, thin controllers.
*   **Authentication**: Built-in session authentication and secure route protection.
*   **Middleware**: Custom and core middleware layers to filter HTTP requests and protect routes.
*   **Gates & Policies**: Strict authorization logic restricting article modification to its rightful author.
*   **Eloquent ORM**: Database schema design, mass assignment protection, and One-to-Many relationships (`User` -> `hasMany` -> `Article`).
*   **File Storage**: Local file disk manipulation and asset path resolutions for user-uploaded media.
*   **Blade Templating**: Dynamic layouts, component partials, and conditional Tailwind styling.

## 🛠️ Prerequisites

Ensure you have the following installed on your local machine:

*   PHP >= 8.2
*   Composer
*   MySQL or SQLite
*   Node.js & NPM

## 💻 Installation & Setup

Follow these steps to run the project locally.

### 1. Clone the Repository
```bash
git clone https://github.com
cd your-repo-name
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Environment Configuration
Copy the example environment file and generate your application key:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Setup
Configure your database credentials in your `.env` file. Then, run the migrations:
```bash
php artisan migrate
```

### 5. Link Storage
Create a symbolic link to make uploaded avatars and article images accessible from the web:
```bash
php artisan storage:link
```

### 6. Compile Assets & Start Server
Run the Tailwind compiler and launch the Laravel local development server in separate terminal windows:
```bash
# Compile assets
npm run dev

# Start local server
php artisan serve
```
Visit `http://127.0.0.1:8000` in your web browser.

## 📂 Architecture Details

### Database Schema
*   **users**: `id`, `name`, `email`, `password`, `avatar`, `timestamps`
*   **articles**: `id`, `user_id` (Foreign Key), `title`, `content`, `image`, `category`, `timestamps`

### Security & Authorization
*   **Auth Middleware**: Unauthenticated guests are automatically blocked from creating, editing, or deleting articles.
*   **Article Policy**: Restricts `update` and `delete` actions, verifying `auth()->id() === $article->user_id`.
*   **Gates**: Utilized for global administrator actions or targeted inline authorization checks in Blade views.

## 📝 License

This project is open-source software licensed under the [MIT license](https://opensource.org).
