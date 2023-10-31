# PROYECTO BUSYA

## Asignatura: Ing. de Software
### Este proyecto, desarrollado como parte de la asignatura de Ingeniería de Software, ofrece una solución integral para la gestión de servicios de transporte público. A continuación, se detallan los requisitos y pasos necesarios para ejecutar nuestro proyecto de manera local.
# Requisitos y pasos para ejecutar nuestro proyecto:
## Clonar el repositorio: https://github.com/jpinchao/BusYaPruebas.git

## Instalar Composer, herramienta de administración de dependencias: https://getcomposer.org/download/    

## Instalar y ejecutar un entorno de servidor web local que incluye Apache y MySQL: https://www.apachefriends.org/es/index.html

## Acceder a phpMyAdmin a través de http://localhost/phpmyadmin/ y crear una base de datos llamada "laravel"

## Abrir el repositorio, copiar el archivo .env.example y dejarlo nombrado solo con .env
     
## Ejecutar los comandos(uno a la vez) en una terminal dentro de nuestro repositorio:
    composer update
    php artisan migrate:fresh --seed
    php artisan key:generate
    php artisan serve 

## Credenciales para Pruebas:
### Admin

    Email:
    admin@admin.com

    Contraseña:
    admin

### Cliente

    Email:
    cliente1@gmail.com

    Contraseña:
    cliente1
