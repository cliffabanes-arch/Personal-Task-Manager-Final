# Personal Task Manager

A simple web-based task management system built using Laravel.  
The system helps users organize their tasks by allowing them to create, view, edit, and delete tasks.


---Developer---
Remart S. Belhida
BSIT 2 SEC 1
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