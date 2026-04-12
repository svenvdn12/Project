# Environment Variables (.env) Setup Guide

## ✅ What I Fixed

1. **Added autoloader loading** in `index.php`
2. **Added .env file loading** using `vlucas/phpdotenv`
3. **Fixed database connection** in `SignUpModel` and `EvenementenModel`
4. **Updated database schema** to include `event_id` and `note` fields
5. **Connected SignUpModel to database** instead of JSON file

## 🔧 How .env Works Now

### 1. Loading Environment Variables
In `index.php`, I added:
```php
// Load Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
```

### 2. Using Environment Variables
Now you can access your environment variables anywhere in your application:
```php
$_ENV['DB_HOST']      // localhost
$_ENV['DB_DATABASE']  // project
$_ENV['DB_USERNAME']  // Keo
$_ENV['DB_PASSWORD']  // PHg22eKvQRPj6b
```

## 📋 Setup Steps

### 1. Run Database Setup
Execute the updated SQL file to create/update tables:
```sql
-- Run this in your MySQL database
SOURCE c:/xampp/htdocs/Project/db_setup.sql;
```

### 2. Verify Environment Variables
Add this to any PHP file to test:
```php
echo "DB Host: " . $_ENV['DB_HOST'] . "\n";
echo "DB Name: " . $_ENV['DB_DATABASE'] . "\n";
// Don't echo passwords in production!
```

## 🔒 Security Best Practices

### ✅ DO:
- Keep `.env` in your project root
- Add `.env` to `.gitignore` (never commit it to version control)
- Use descriptive variable names
- Validate environment variables exist before using them

### ❌ DON'T:
- Commit `.env` files to Git
- Put production credentials in development `.env` files
- Use quotes around values unless they contain spaces
- Share `.env` files publicly

## 📝 .env File Best Practices

### Current Format (Good):
```env
DB_HOST=localhost
DB_DATABASE=project
DB_USERNAME=Keo
DB_PASSWORD=PHg22eKvQRPj6b
```

### If You Need Spaces or Special Characters:
```env
DB_HOST=localhost
DB_DATABASE=project
DB_USERNAME="User With Spaces"
DB_PASSWORD="Password!@#$%"
APP_NAME="My Amazing App"
```

## 🚨 Important Notes

1. **Updated Database Connection**: Both `SignUpModel` and `EvenementenModel` now properly connect to the database
2. **JSON File Replaced**: Participant data is now stored in the database, not the JSON file
3. **Event ID Tracking**: The database now properly tracks which event each participant signed up for

## 🔍 Troubleshooting

### If Environment Variables Aren't Loading:
1. Make sure `.env` file is in project root (same folder as `index.php`)
2. Check that `vendor/autoload.php` exists
3. Verify the `.env` file has no syntax errors

### If Database Connection Fails:
1. Check MySQL is running in XAMPP
2. Verify database credentials in `.env`
3. Make sure the `project` database exists
4. Run the updated `db_setup.sql` script

## 🏃‍♂️ Next Steps

1. Run the database setup script
2. Test the participant registration functionality
3. Add `.env` to your `.gitignore` file
4. Consider creating a `.env.example` file with dummy values for other developers