# Personal Task Manager

A simple web-based task management system built using Laravel.  
The system helps users organize their tasks by allowing them to create, view, edit, and delete tasks.


---Developer---
WST21-PM-2026-SF
Clif Jhonford Abanes
BSIT 2 SEC 3
MySQL / MariaDB
Personal Task Manager  
Laravel Project

---Development Assistance---
Developed with assistance from **ChatGPT (OpenAI)** for
coding guidance, debugging, UI/CSS suggestions, and project documentation.

---Features---
- Create new tasks
- View all tasks
- Edit existing tasks
- Delete tasks
- Set task status
- Set due dates
- Responsive user interface

---Technologies Used---
- Laravel 12
- PHP 8.2
- MySQL / MariaDB
- HTML
- CSS
- JavaScript
- Vite
- XAMPP
- Visual Studio Code

---Task Information---
Each task contains:

- Task Name
- Description
- Status
- Due Date

---Project Structure---
personal-task-manager/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── TaskController.php
│   │
│   └── Models/
│       └── Task.php
│
├── database/
│   └── migrations/
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   └── views/
│       └── tasks/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
│
├── routes/
│   └── web.php
│
└── README.md

Setup Instructions
1. **Start XAMPP**
   Open the XAMPP Control Panel and start the **Apache** and **MySQL** modules.

2. **Create the database**
   Go to `http://localhost/phpmyadmin` and create a new database matching the `DB_DATABASE` value you'll set in `.env` (e.g. `task_manager`).

3. **Install PHP dependencies**
   ```bash
   composer install
   ```

4. **Create the environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate the application key**
   ```bash
   php artisan key:generate
   ```

6. **Run fresh database migrations**
   ```bash
   php artisan migrate:fresh
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

8. **Open the app in your browser**
   ```
   http://127.0.0.1:8000
   ```

> In your `.env` file, make sure `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, and `DB_USERNAME=root` with an empty `DB_PASSWORD` (XAMPP's default MySQL credentials), unless you've changed them in XAMPP.

## Screenshots

<img width="4160" height="3120" alt="IMG_20260926_030739_225" src="https://github.com/user-attachments/assets/2baa47df-fa4b-4fb1-8a55-6e4047dc3412" />
<img width="4160" height="3120" alt="IMG_20260926_030804_595" src="https://github.com/user-attachments/assets/64ed134e-ca93-474d-a287-90e026f9103a" />
