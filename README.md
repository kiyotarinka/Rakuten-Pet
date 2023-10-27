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
