System Requirement (Laravel 5.6)
1. PHP >= 7.1.3

How to use this

1. Download and install composer
2. Download and install xampp
3. Copy .env.example to .env
4. Open .env file and add connection to mysql. set your database,host,username,root
5. import laravel-crud.sql in phpmyadmin
6. Open your cmd and set destination to this project
7. Run "composer install" to your cmd
8. Run "php artisan key:generate" to your cmd
9. Run "php artisan serve" to your cmd
10. Enjoy

The Route

Get Route
1. localhost:8000/ -> Load index for user
2. localhost:8000/login -> Load login 
3. localhost:8000/register -> Load register
4. localhost:8000/update -> Load update
5. localhost:8000/logout -> User logout

Post Route
1. localhost:8000/login	-> User login
2. localhost:8000/register -> User register
3. localhost:8000/update/id -> User update using parameter id

username : kidaliez@gmaill.com
password : 12345
