
===

# SetUp

```
$ cp .env.example .env
$ composer install
```

# CREATE DATABASE

```
$ mysql -u root

mysql> CREATE DATABASE jobboard_development CHARACTER SET utf8mb4;
mysql> CREATE USER jobboard
mysql> GRANT ALL ON jobboard_development.* TO jobboard@localhost identified by 'passw0rd';
mysql> exit;

$ mysql -u jobboard jobboard_development -ppassw0rd
```

# Migration

```
$ php artisan migrate
$ php artisan db:seed

(php artisan migrate:refresh --seed)
```

# Launch

```
$ php artisan serve --host=127.0.0.1 --port=19999
```

-> http://localhost:19999/jobs
