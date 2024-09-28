<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Laravel Project

### To-Do Application

This project is a **dynamic To-Do application** built with the **Laravel** framework. It allows users to manage their tasks effectively with a user-friendly interface and robust features. Users can register, log in, and have a personalized experience where they can create, edit, and delete their tasks while keeping track of when tasks were started and completed.

### Features

-   **User Authentication**: Users can register and log in securely.
-   **Task Management**: Create, update, and delete tasks effortlessly.
-   **Time Tracking**: Track the start and completion times for each task.
-   **Responsive Design**: The application is mobile-friendly and accessible on various devices.
-   **Dark Mode Support**: Enjoy a comfortable viewing experience with dark mode.

### Technologies Used

-   **Laravel**: The PHP framework used for the backend.
-   **Tailwind CSS**: For styling the frontend, providing a modern, responsive design.
-   **Alpine.js**: Lightweight JavaScript framework for interactivity.
-   **MySQL**: The database used to store user and task information.

## Installation

### Prerequisites

-   PHP >= 8.0
-   Composer
-   Laravel 11.x
-   MySQL or any other database of your choice

### Steps to Install

1. **Clone the Repository**:

    git clone https://github.com/yourusername/todo-app.git
    cd todo-app

2. **Install Dependencies**:

    composer install
    npm install

3. **Create a `.env` File**:

    cp .env.example .env

4. **Generate Application Key**:

    php artisan key:generate

5. **Set Up Your Database**:

    - Create a database and update the `.env` file with your database credentials.

6. **Run Migrations**:

    php artisan migrate

7. **Serve the Application**:

    php artisan serve

    Access your application at `http://localhost:8000`.

## Usage

-   **Register**: Create a new account to start managing your tasks.
-   **Log In**: Access your dashboard to view your to-do list.
-   **Create a Task**: Add new tasks to your list, set their status, and track their completion time.
-   **Edit or Delete Tasks**: Manage your tasks by updating their details or removing them as needed.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please fork the repository and create a pull request. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
