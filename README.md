# CakePHP Lab - Basic CRUD & Authentication Project

![CakePHP](https://img.shields.io/badge/CakePHP-5.x-red.svg?style=flat-square)
![PHP](https://img.shields.io/badge/PHP-8.1%2B-blue.svg?style=flat-square)
![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-orange.svg?style=flat-square)

A comprehensive CakePHP learning project that demonstrates CRUD operations, authentication, and core CakePHP concepts. This project is designed for developers who know Core PHP and Laravel and want to understand CakePHP framework patterns and conventions.

## 🎯 Project Goals

This project aims to demonstrate:

- **Frontend**: Home page with navigation (Login/Signup)
- **Backend**: Complete authentication system (Signup, Login, Dashboard, Logout)
- **CRUD Operations**: Full Users management system
- **CakePHP Conventions**: Understanding MVC pattern, routing, and CakePHP way of doing things

## 🚀 Features

### Authentication System

- User Registration (Signup)
- User Login with session management
- Protected Dashboard area
- Secure Logout functionality
- Password hashing and validation

### Users CRUD System

- Create new users
- Read/View user details
- Update user information
- Delete users
- User listing with pagination

### Frontend Features

- Responsive home page
- Clean navigation system
- Form validation and error handling
- Flash messages for user feedback

## 🛠️ How to Create a New CakePHP Project

If you want to start your own CakePHP project from scratch:

### Prerequisites

- PHP 8.1 or higher
- Composer
- MySQL/MariaDB
- Web server (Apache/Nginx) or use built-in PHP server

### Installation Steps

1. **Install Composer** (if not already installed)

   ```bash
   # Download and install Composer globally
   curl -sS https://getcomposer.org/installer | php
   sudo mv composer.phar /usr/local/bin/composer
   ```

2. **Create New CakePHP Project**

   ```bash
   # Create project with Composer
   composer create-project --prefer-dist cakephp/app your_project_name

   # Navigate to project directory
   cd your_project_name
   ```

3. **Set up Database Configuration**

   ```bash
   # Copy the example configuration file
   cp config/app_local.example.php config/app_local.php

   # Edit the database configuration in config/app_local.php
   ```

4. **Run the Development Server**

   ```bash
   # Start built-in PHP server
   bin/cake server -p 8765

   # Visit http://localhost:8765
   ```

## 🏃‍♂️ How to Run This Project

### Step 1: Clone and Install Dependencies

```bash
# Clone this repository
git clone https://github.com/yourusername/CakePhpLab.git
cd CakePhpLab

# Install PHP dependencies via Composer
composer install
```

### Step 2: Database Setup

```bash
# Create a MySQL database named 'cakephp_lab'
mysql -u root -p -e "CREATE DATABASE cakephp_lab;"

# Copy and configure the database settings
cp config/app_local.example.php config/app_local.php
```

Edit `config/app_local.php` and update database credentials:

```php
'Datasources' => [
    'default' => [
        'host' => 'localhost',
        'username' => 'your_db_username',
        'password' => 'your_db_password',
        'database' => 'cakephp_lab',
    ],
],
```

### Step 3: Run Database Migrations

```bash
# Run migrations to create tables
bin/cake migrations migrate
```

### Step 4: Start the Development Server

```bash
# Option 1: Using CakePHP built-in server
bin/cake server -p 8765

# Option 2: Using XAMPP/MAMP
# Place project in htdocs folder and visit http://localhost/CakePhpLab
```

### Step 5: Access the Application

- **Home Page**: `http://localhost:8765` or `http://localhost/CakePhpLab`
- **Login**: `http://localhost:8765/users/login`
- **Signup**: `http://localhost:8765/users/register`
- **Dashboard**: `http://localhost:8765/dashboard` (after login)

## 📁 Project File Structure

```text
CakePhpLab/
├── README.md                          # This file
├── composer.json                      # PHP dependencies
├── config/
│   ├── app.php                       # Main application config
│   ├── app_local.php                 # Local database config
│   ├── routes.php                    # URL routing definitions
│   └── bootstrap.php                 # Application bootstrap
├── src/
│   ├── Controller/
│   │   ├── AppController.php         # Base controller
│   │   ├── PagesController.php       # Static pages (Home)
│   │   ├── UsersController.php       # User authentication & CRUD
│   │   └── DashboardController.php   # Protected dashboard
│   ├── Model/
│   │   ├── Entity/
│   │   │   └── User.php              # User entity with validation
│   │   └── Table/
│   │       └── UsersTable.php        # User database operations
│   └── View/
│       └── Helper/                   # Custom view helpers
├── templates/
│   ├── layout/
│   │   ├── default.php               # Main layout template
│   │   └── ajax.php                  # AJAX layout
│   ├── Pages/
│   │   └── home.php                  # Homepage template
│   ├── Users/
│   │   ├── login.php                 # Login form
│   │   ├── register.php              # Registration form
│   │   ├── index.php                 # Users listing (CRUD)
│   │   ├── view.php                  # User details view
│   │   ├── add.php                   # Add user form
│   │   └── edit.php                  # Edit user form
│   └── Dashboard/
│       └── index.php                 # Dashboard homepage
├── webroot/
│   ├── css/                          # Stylesheets
│   ├── js/                           # JavaScript files
│   └── img/                          # Images
├── config/Migrations/                # Database migration files
├── tests/                            # Unit and integration tests
└── logs/                             # Application logs
```

## 🎓 Learning Objectives

By working through this project, you'll understand:

### CakePHP Core Concepts

- **Convention over Configuration**: How CakePHP's naming conventions work
- **MVC Architecture**: Model-View-Controller pattern in CakePHP
- **ORM**: CakePHP's database abstraction and relationship handling
- **Bake**: Code generation tools for rapid development

### Authentication & Security

- CakePHP's Authentication plugin
- Password hashing with security best practices
- Session management and user state
- Form validation and CSRF protection

### CRUD Operations

- Creating forms with FormHelper
- Database operations using Table classes
- Entity validation and data handling
- Pagination and data display

### Routing & URLs

- URL routing configuration
- RESTful route conventions
- Custom routes and parameters

## 🔧 Development Tools

This project includes:

- **PHPStan**: Static analysis (Level 8)
- **PHP CodeSniffer**: Code style checking
- **PHPUnit**: Unit testing framework
- **Debug Kit**: Development debugging tools

Run quality checks:

```bash
# Code style checking
vendor/bin/phpcs

# Static analysis
vendor/bin/phpstan analyse

# Run tests
vendor/bin/phpunit
```

## 📚 Useful CakePHP Commands

```bash
# Generate a new controller
bin/cake bake controller ControllerName

# Generate a model (Table + Entity)
bin/cake bake model ModelName

# Generate templates
bin/cake bake template ControllerName

# Create a migration
bin/cake bake migration CreateUsersTable

# Clear cache
bin/cake cache clear_all

# Check routes
bin/cake routes
```

## 🤝 Contributing

This is a learning project, but feel free to:

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## 📖 Additional Resources

- [CakePHP Official Documentation](https://book.cakephp.org/5/)
- [CakePHP API Documentation](https://api.cakephp.org/5.0/)
- [CakePHP Authentication Plugin](https://book.cakephp.org/authentication/2/)
- [CakePHP Cookbook - Database Access & ORM](https://book.cakephp.org/5/en/orm.html)

---

**Happy Learning!** 🎉 This project will help you transition from Laravel to CakePHP by understanding the similarities and differences between these frameworks.
