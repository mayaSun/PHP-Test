# PHP Test
###To run the application on localhost
###Run the following commend (on linux terminal)
* git clone https://github.com/mayaSun/PHP-Test
* cd PHP-Test
* create database on localhost named test (root user and without password)
* mysqldump -u root test > db_backup.sql
* composer update
* cd public
* php -S localhost:8000
