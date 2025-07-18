# 📝 Task Management App (Laravel 12+)

A dynamic web-based task management system built with Laravel. This application allows Admins, Team Members, and Guests to create, assign, track, and manage tasks with deadlines and priorities.

---

## 🚀 Features

- 🧑‍💼 Role-based Access (Admin, Team Member, Guest)
- ✅ Create, edit, and delete tasks
- 📌 Assign tasks to users
- 📂 Categorize tasks (e.g., Design, Admin)
- ⏰ Set deadlines and priorities (Low, Medium, High)
- 📬 Email reminders on task creation (Mailpit integration)
- 🔐 Authentication via Laravel Breeze
- 📊 Dynamic dashboard based on user role
- 🧪 Unit & Feature tests included
- 📦 Seeded with test users and data

---

## 🧑‍💻 Technologies Used

- Laravel 12+
- Laravel Breeze (Auth)
- Blade (Templating)
- MySQL / SQLite
- Mailpit (for local email)
- Bootstrap / Tailwind CSS (template converted to Blade)
- PHPUnit (Testing)
---

## ⚙️ Installation

### Prerequisites
- PHP 8.1+
- Composer
- Node.js & npm
- MySQL or SQLite
- Mailpit (for email testing)

### Steps

```bash
# 1. Clone the repository
git clone https://github.com/your-username/task-management-app.git
cd task-management-app

# 2. Install PHP dependencies
composer install

# 3. Install frontend dependencies
npm install && npm run dev

# 4. Copy .env and configure
cp .env.example .env

# 5. Set database config in .env (use SQLite or MySQL)
php artisan key:generate

# 6. Run migrations and seeders
php artisan migrate --seed

# 7. Start local server
php artisan serve


 ## 🧑‍💼 Guide: How to Use the Application
 ### 👥 User Roles
 - **Admin** - View, create, assign, and delete all tasks and categories - Manage users and monitor overall task activity
 - **Team Member** - View and manage only the tasks assigned to them
- **Guest** - View-only access to their own assigned tasks (no edit or delete) ---
 ### 🔐 User Registration & Login - Register at: `/register` - Login at: `/login` - Laravel Breeze handles authentication securely ---
 ### 📋 Task Management - Create tasks from the dashboard: `/tasks/create`
- Admins can assign tasks to specific team members - Set task **priority**, **deadline**, and **category**
 - Update or delete tasks from the task list - An email notification is sent to the assignee via **Mailpit** ---
 ### 📁 Category Management - Admins can create, view, and delete categories - Access categories via: `/categories` ---
 ### 🖥 Dashboards
 - **Admin Dashboard**: Displays all tasks and team activity
- **Team Member Dashboard**: Shows only tasks assigned to the logged-in team member
 - **Guest Dashboard**: Provides read-only access to their assigned tasks

## 🧾 Additional Documentation Inside the Code

To ensure clarity and maintainability, the following commenting practices have been used throughout the codebase:

- **PHPDoc-style comments** (`/** */`)  
  Placed above all functions and classes to describe their purpose, parameters, return values, and any relevant annotations.

- **Blade comments** (`{{-- --}}`)  
  Used within Blade view files to explain template logic, especially for complex UI structures or conditional rendering.

- **Inline comments** (`//`)  
  Found inside controllers, models, and seeders to provide context for business logic and explain critical operations or decisions.

These practices help keep the codebase clean, understandable, and easy to maintain.
