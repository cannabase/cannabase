# Local setup guide

## Using Docker

1. Clone the Git repository to your local computer (GitHub Desktop, GitKraken)
2. Run the following command in your CLI:
```composer install```
3. Create a copy of the *.env.example* file and rename it to *.env*
4. After composer finished installing start Docker Desktop
5. Run the following command: 
```sail up```
6. Run the command to execute the database migrations
```sail artisan migrate```
7. Open another terminal window and run 
```npm run dev```
8. You should now be able to access your local environment on **http://localhost:8080**
9. Just register yourself an account and a new club


## Using XAMPP (Windows without WSL2)

1. Download & Install [XAMPP](https://www.apachefriends.org/download.html)
2. Download & Install [Composer for Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)
3. Start the Apache & the MySQL Service
4. Clone the Git repository in your local *htdocs* folder
5. Go to **http://localhost/phpmyadmin/** and create a new database named *cannabase*
6. Create a copy of the *.env.example* file and rename it to *.env* and set the following variables
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cannabase
DB_USERNAME=root
DB_PASSWORD=
```
7. Run the following in your terminal
```php artisan key:generate```
8. Then run
```php artisan migrate```
9. And run (With Node installed)
```npm run dev```
10. Then finally run
```php artisan serve```
11. Now you should be able to access the application under **http://localhost:8000**
