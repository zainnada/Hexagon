# Hexagon Software Company Website

A modern web application built with **Laravel** to showcase the services of **Hexagon**, a software company that provides high-quality software solutions and professional development services.

---

## 🚀 Project Overview

This project represents the official website for **Hexagon**, a software company specialized in delivering scalable, clean, and high-performance software solutions.  
The website focuses on presenting the company’s services with a **beautiful, consistent, and user-friendly design**.

---

## 🛠️ Technologies & Tools

- **Laravel** – Backend framework
- **Blade** – Templating engine for building dynamic and reusable UI components
- **MySQL** – Relational database
- **Astrotomic Laravel Translatable** – Database translations
- **MVC Architecture** – Clean and maintainable code structure

---

## 🌍 Localization & Translation

The project supports multi-language content:

### 🔹 Database Translation
- Implemented using  
  **`astrotomic/laravel-translatable`**
- Enables dynamic translation of database content (e.g. services, titles, descriptions).

### 🔹 Static Text Translation
- Language files are organized under:
  - `lang/en`
  - `lang/ar`
- Used for translating static UI texts across the website.

---

## 🗄️ Database Structure

- Database engine: **MySQL**
- Fully prepared:
  - **Migrations**
  - **Models**
  - **Factories** for seeding dummy/default data
- Well-structured schema to support scalability and multilingual content.

---

## 🧭 Routing

- Clean and organized **Laravel routes**
- Separation between public-facing pages and backend logic
- Easy to extend and maintain

---

## 🎨 UI & Design

- Built using **Blade templates**
- Consistent, clean, and responsive design
- Focused on readability and professional appearance
- Designed to reflect the identity of a modern software company

---

## ⚙️ Setup Instructions

    ```bash
    # Install dependencies
    composer install
    
    # Copy environment file
    cp .env.example .env
    
    # Generate application key
    php artisan key:generate
    
    # Run migrations
    php artisan migrate
    
    # (Optional) Seed database
    php artisan db:seed
    
    # Run the application
    php artisan serve

---
    
## 📌 Notes

* .env file is excluded for security reasons

* Make sure MySQL is running before migrating

* This project follows Laravel best practices

---

## 🏢 About Hexagon

Hexagon is a software company focused on delivering reliable, scalable, and high-quality software solutions tailored to client needs.

---

## 📄 License

This project is developed for demonstration and internal use.
