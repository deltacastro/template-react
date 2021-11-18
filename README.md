# Template React

## Descripción

Template generico con administrador de usuarios, roles y permisos, api tokens y prediseño.

## Stack

* Laravel
* React
* Bootstrap

## Instrucciones

Instalamos los paquetes

```
composer install
```

Generamos nuestra apikey de la aplicacion
```
php artisan key:generate
```

Modificamos el archivo .env para la conexión de BD, nombre app, entre otros.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=template-react
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Ejecutamos las migraciones y los seeders preestablecidos
```
php artisan migrate --seed
```
