# ej6_vista
## Bienvenido al repositorio oficial de Vista! 
![2023-06-22_104941](https://github.com/FF5-DW1/ej6_vista/assets/126791645/7fa9b148-f607-4030-85b8-95c0259adfad)

### Introducción:
Proyecto de una app sobre una  red social para un cliente.
El cliente nos pide hacer una red social que tenga login y registro de usuario, dar likes, publicaciones, seguir a otros usuarios, 
editar perfil ,que los comentarios puedan solo eliminarse no editarse,
y que otras personas puedan acceder como visitantes, pero que no puedan comentar.
## Programas usados
Laravel|
php|
tailwind|
html,css|
Docker|

**Instalación.**

1.Debes tener instalado GIT BASH una vez hayas clonado el proyecto.
posteriormente ejecutar el comando:

*GIT BASH install*

2.Una vez ejecutado este comando git clone. Se creará la carpeta la cual contiene
los archivos y códigos de terceros.

3.Si tienes Docker para levantar, en este caso lo hicimos en Docker

4.Ir a la terminal de tu carpeta cd y poner docker-compose up -d.

5.Ir al Docker en php-1 y a la terminal ejecutar los comandos 

6.composer install

7.luego los permisos 

8.chgrp -R www-data storage bootstrap/cache

9.chmod -R ug+rwx storage bootstrap/cache

10. Instala las dependencias de PHP utilizando Composer:

11.composer install o composer update

12. Copia el archivo de configuración .env.example y renómbralo a .env. Luego, actualiza las variables de entorno segun tu base de datos en el archivo .env:
    
13.Genera una clave de aplicación:

14.php artisan key:generate

15.Ejecuta las migraciones y los seeders:

16.php artisan migrate --seed

17.Instala las dependencias de JavaScript:

18.npm install

19.Compila los assets de JavaScript y CSS:

20.npm run dev

### Desarollo:

> Hicimos uno login y registro de usuario
> Realizamos un perfil donde se puede editar, comentar y otras fases de desarrollo sobre dar likes.

## Requisitos Previos
* PHP o Docker
* MySQL o XAMPP
* Composer o Docker
* Node.js
* NPM
* Laravel

## Fuentes
* Laravel: https://laravel.com
* Docker: https://www.docker.com
* Tailwind CSS: https://tailwindcss.com
* Composer : https://getcomposer.org/download/

## Desarrolladores
[Ivon](https://github.com/ivon4)

[Daniel](https://github.com/DanielDW23)

[Gladys](https://github.com/gladystarea1)

