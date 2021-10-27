<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre la Aplicación

La aplicacion fue construida como API para ser consumida por el proyecto [ACV CRUD Simple](https://github.com/govydev/acv-crud-simple).
Esta aplicacion incorpora

- Metodos para registrarse.
- Metodos para autenticarse.
- Metodos para modificar usuario.
- Metodos para eliminar usuario.

Se agrego un extra. Un CRUD de biblioteca que incorpora los metodos CRUD (listar, crear, modificar, eliminar) de las siguientes tablas.
- Temas
- Editorial
- Autor
- Libros


Esta aplicación requiere la ejecucion de las migraciones y para su prueba se genero datos de prueba que tambien deben ser ejecutados por comandos

## Primeros pasos

Una ves descargado, Ingresar a la carpeta del proyecto y ejecutar el comando.

    $composer install
Para descargar las dependencias necesarias.

Revisar el archivo **.env.example** y generar la base de datos que se indica ademas de generar una copia y recnombrarlo como **.env**.

Ejecutar el comando.

    $php artisan migration
Para ejecutar las migraciones del proyecto y se pueda crear las tablas.

Ejecutar el comando.

    $php artisan db:seed
Para cargar la base de datos con datos de prueba

Ejecutar el comando.

    $php artisan serve --port=8000
Para ejecutar la aplicacion

## Pruebas

