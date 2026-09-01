# Diagnostic Center Management System

A web-based Diagnostic Center Management System built using Laravel and MySQL.

This project was developed during the Ramadan holidays as one of my first experiences working with backend development and object-oriented programming. The goal of this project was to gain practical experience with databases, authentication, user roles, and backend development.

## Features

### Guest Access
- View the diagnostic center homepage.
- View available diagnostic services.(Currently no further pages exist)
- Guests attempting to book a test are redirected toward authentication and account creation.

### User Features
- User registration and authentication.
- Separate user dashboard after login.
- Role-based redirection.

### Admin Features
- Separate admin dashboard.
- View registered users.
- View administrator accounts.
- Display user roles and account information.
- Admin accounts are currently created manually through XAMPP control panels MySQL servers Admin dashboard.

## Technologies Used

- Laravel
- PHP
- MySQL
- Bootstrap
- HTML
- CSS
- JavaScript
- Vite
- XAMPP

## Authentication and User Roles

The application uses authentication and a `usertype` field to distinguish between normal users and administrators.

After logging in:

- Normal users are redirected to the User Dashboard.
- Administrators are redirected to the Admin Dashboard.

Administrators can access the User Management page to view registered users and administrator accounts.

## Database

The project uses MySQL for database management.

Database migrations are included in the repository to help recreate the database structure.

## Installation

### 1. Clone the repository

```
git clone <repository-url>
```

### 2. Navigate to the project directory

```
cd Diagnostic-Center-Management-System
```

### 3. Install PHP dependencies

```
composer install
```

### 4. Install frontend dependencies

```
npm install
```

### 5. Create the environment file

Copy `.env.example` and rename it to `.env`.

Alternatively, you can use:

```
cp .env.example .env
```

### 6. Generate an application key

```
php artisan key:generate
```

### 7. Configure the database

Update the database configuration inside your `.env` file:

-In the env.example I already added these configuration, but remember if you use different ports, you need to configure it accordingly
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DMS
DB_USERNAME=root
DB_PASSWORD=
```

> The database port may need to be changed depending on your local MySQL configuration.

### 8. Run database migrations

```
php artisan migrate
```

### 9. Start the Laravel server

```
php artisan serve
```

### 10. Start Vite

Open another terminal and run:

```
npm run dev
```

The application should now be available at:

```text
http://127.0.0.1:8000
```
## Learning Experience

This project was developed as a learning experience during the Ramadan holidays.

At the time of development, I was learning backend development and object-oriented programming. I used Laravel documentation, online resources, and AI assistance throughout the development process to understand concepts, debug issues, and learn how different parts of the application work together.

Through this project, I gained practical experience with:

- Laravel project structure
- MVC architecture
- Authentication
- Role-based access
- MySQL database integration
- Backend and frontend integration
- Object-oriented programming concepts

## Future Improvements

Possible improvements include:

- Diagnostic test management functionality.
- Appointment booking and management.
- Dedicated pages for individual diagnostic tests.
- Test pricing and detailed service information.
- Medical report management.
- Improved authorization using Laravel middleware.

## Author

**muntakimdev**

Computer Science and Engineering Student  
Bangladesh