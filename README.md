# Laravel-Composer-Template

## Dockerの機能
~~~sh
$ docker compose up
or 
$ docker compose up -d
~~~

~~~sh
$ docker compose exec web /bin/bash
$ mkdir -p storage/framework/cache/data/
$ mkdir -p storage/framework/app/cache
$ mkdir -p storage/framework/sessions
$ mkdir -p storage/framework/views
$ composer install
$ php artisan key:generate
~~~

## Artisan
~~~sh
$ docker compose up -d
$ docker compose exec web /bin/bash

# Controllerの作成
$ php artisan make:controller [コントローラ名] /*RankutenController*/

# Viewの作成
$ php artisan make:view [ページの名前]
~~~
