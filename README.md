# Web Bug Reporting

Sebuah Web Bug Reporting

## What Inside?

-   Laravel ^8.x - [Laravel Docs](https://laravel.com/docs/8.x/)

## How To Use This?

Download or clone this repo

```shell
$ git clone https://github.com/satria4950/bugreporting.git
```

Install all dependency required by Laravel.

```shell
$ composer install
```
Or you can do composer update 

```shell
$ composer update
```

configure `.env` file 

```shell
# create copy of .env
$ cp .env.example .env
```

Add this script to .env file
```shell
# put it at the end of the .env file
FILESYSTEM_DRIVER=public
```
Generate app key and do migration. And then, you can use it

```shell
# cek apakah storage sudah terhubung dengan public
$ php artisan storage:link
```

```shell
# create laravel key
$ php artisan key:generate

# run migration
$ php artisan migrate --seed

# and you're ready to go
$ php artisan serve
```

Login using this default account
```shell
email : admin@gmail.com
password : 12345

email : user@gmail.com
password : 12345
```