# doctor-appoinment-Laravel-

To set up a Laravel-based doctor appointment dashboard project, you'll need a mix of software tools, libraries, and services. Below are the installation requirements categorized by type:

1. System Requirements
Ensure your system meets the following:

Operating System: Linux, macOS, or Windows
PHP: Version 8.1 or higher
Web Server: Apache, Nginx, or PHP’s built-in server
Database: MySQL 8+, PostgreSQL, SQLite, or SQL Server
Composer: Installed (dependency manager for PHP) 

Frontend
Blade Templates: For UI rendering.
CSS Framework: Bootstrap, TailwindCSS, or another preferred framework.
JavaScript Library: plain JS for dynamic interactions. 

 Required PHP Extensions
Ensure the following extensions are enabled in your PHP setup:

BCMath: For arithmetic operations.
Ctype
Fileinfo: For file uploads.
JSON
Mbstring
OpenSSL
PDO
Tokenizer
XML 

4. Database Setup
Create a database specific to the project.
Update .env with credentials:
env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=doctor_dashboard
DB_USERNAME=root
DB_PASSWORD=password


 Installation Steps

Clone the Repository:
git clone <repository-url>
cd <project-folder>


Install Dependencies:
composer install
npm install

Set Up Environment:
cp .env.example .env
php artisan key:generate

Run Migrations and Seeders:
php artisan migrate
php artisan db:seed

Compile Frontend Assets:
npm run dev

Start the Development Server:
php artisan serve

Testing the Application
Navigate to http://127.0.0.1:8000 (default Laravel local server URL).
Test user roles (admin, doctor, patient). 


