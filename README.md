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

Para hacer las pruebas de todas las funciones CRUD  se utilizo [Postman](https://www.postman.com/).

Metodos Disponibles
- Metodo de registro y login


        (POST)      http://localhost:8000/register/ 
        (POST)      http://localhost:8000/login/ 

- Metodo CRUD usuarios

        (GET)       http://localhost:8000/usuarios/
        (GET)       http://localhost:8000/usuarios/{id}
        (POST)      http://localhost:8000/usuarios/
        (PUT)       http://localhost:8000/usuarios/{id}
        (DELETE)    http://localhost:8000/usuarios/{id} 

- Metodo CRUD editoriales


        (GET)       http://localhost:8000/editoriales/
        (GET)       http://localhost:8000/editoriales/{id}
        (POST)      http://localhost:8000/editoriales/
        (PUT)       http://localhost:8000/editoriales/{id}
        (DELETE)    http://localhost:8000/editoriales/{id} 

- Metodo CRUD temas


        (GET)       http://localhost:8000/temas/
        (GET)       http://localhost:8000/temas/{id}
        (POST)      http://localhost:8000/temas/
        (PUT)       http://localhost:8000/temas/{id}
        (DELETE)    http://localhost:8000/temas/{id} 

- Metodo CRUD autores


        (GET)       http://localhost:8000/autores/
        (GET)       http://localhost:8000/autores/{id}
        (POST)      http://localhost:8000/autores/
        (PUT)       http://localhost:8000/autores/{id}
        (DELETE)    http://localhost:8000/autores/{id} 

- Metodo CRUD libros


        (GET)       http://localhost:8000/libros/
        (GET)       http://localhost:8000/libros/{id}
        (POST)      http://localhost:8000/libros/
        (PUT)       http://localhost:8000/libros/{id}
        (DELETE)    http://localhost:8000/libros/{id}

    

## Precaución
Si el proyecto se ejecuto en el puerto **(8000)** puede hacer las pruebas en http://localhost:8000, si ejecuto el proyecto en otro puerto es necesario hacer modificaciones a el proyecto [ACV CRUD Simple](https://github.com/govydev/acv-crud-simple) a los archivos ubicados en de la carpeta [Controllers](https://github.com/govydev/acv-crud-simple/tree/main/app/Http/Controllers), especificamente a los archivos.

- [AuthController.php](https://github.com/govydev/acv-crud-simple/blob/main/app/Http/Controllers/AuthController.php).
- [LibroController.php](https://github.com/govydev/acv-crud-simple/blob/main/app/Http/Controllers/LibroController.php).
- [UserController.php](https://github.com/govydev/acv-crud-simple/blob/main/app/Http/Controllers/UserController.php).

Se debe modificar el contenido de la variable **uri** y cambiar a el puerto en el que se ejecuto la API.

    $uri = 'http://localhost:8000/api/';



