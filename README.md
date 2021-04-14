<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to install () 

1. git clone https://github.com/addityap/inventorysystem.git
2. go to terminal " composer install " .
3. rename file .env.example  to .env and change db_database on line 13 to your database name.
4. go to terminal again write " php artisan key:generate " after you done installing composer on step 2.
5. then you need migrate the table of database write this on your terminal " php artisan migrate "
6. after that you need to add dummy user to login on admin page you can write this command " php artisan db:seed " .
7. write again on terminal " php artisan serve " and open your browser.
