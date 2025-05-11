<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Introduction
Hello, Kemal's here. This is my last project for bachelor's degree. I propose a title "Design of Management Inventory Data Stock Sparepart System Based Web with Pick To Light System". This project based on real case when i was internship in manufactur industry on Karawang. This web using Laravel as a framework and pick to light system using I2C protocol to connect a expander pin GPIO(PCF8574). For connecting web to pick to light system, i'm using http encode protocol to send data from web and otherwise.

## How To Install On Your Computer
- First, to simplefied the proccess you can download the xampp
- Then you can download this repository using git cli
    1. clone repository
    2. composer install
    3. php artisan key:generate
    4. php artisan migrate
- Open xampp again, run apache server and mysql. (make sure port and database on xampp same as .env file)
- Open the url on your browser(example : localhost/projectapp/)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
