# Sistema de Gestión de Tareas con Autenticación y Roles (Laravel 12)

## Descripción del proyecto

Este proyecto corresponde al desarrollo de una mini aplicación web
utilizando **Laravel 12** con un **Starter Kit Livewire**, cuyo objetivo
es implementar autenticación de usuarios, control de acceso basado en
roles y un CRUD de tareas.

El sistema permite gestionar tareas y controlar el acceso según el rol
del usuario mediante el paquete **Spatie Laravel Permission**.

## Objetivos de la actividad

Implementar una aplicación que permita:

-   Registro y autenticación de usuarios
-   Gestión de roles y permisos
-   CRUD completo de tareas
-   Listado de usuarios
-   Control de acceso basado en roles

## Tecnologías utilizadas

-   Laravel 12
-   Livewire Starter Kit
-   PHP 8.2
-   MySQL / MariaDB
-   TailwindCSS
-   Spatie Laravel Permission

## Roles del sistema

El sistema implementa los siguientes roles:

### Administrador

Puede: - Ver tareas - Crear tareas - Editar tareas - Eliminar tareas -
Ver listado de usuarios

### Editor

Puede: - Ver tareas - Crear tareas - Editar tareas - Eliminar tareas

### Usuario

Puede: - Ver tareas únicamente

Los nuevos usuarios registrados reciben automáticamente el rol
**Usuario**.

## Estructura principal del proyecto

### Modelos

-   User
-   Task

### Controladores

-   TaskController
-   UserController

### Vistas

-   tasks/index.blade.php
-   tasks/create.blade.php
-   tasks/edit.blade.php
-   users/index.blade.php

### Seeders

-   RolePermissionSeeder

## Instalación del proyecto

### 1 Clonar repositorio

``` bash
git clone URL_DEL_REPOSITORIO
cd nombre-proyecto
```

### 2 Instalar dependencias

``` bash
composer install
npm install
```

### 3 Configurar variables de entorno

Copiar el archivo:

``` bash
cp .env.example .env
```

Configurar base de datos:

    DB_DATABASE=nombre_bd
    DB_USERNAME=root
    DB_PASSWORD=

### 4 Generar clave de aplicación

``` bash
php artisan key:generate
```

### 5 Ejecutar migraciones

``` bash
php artisan migrate
```

### 6 Ejecutar seeders

``` bash
php artisan db:seed --class=RolePermissionSeeder
```

### 7 Compilar assets

``` bash
npm run build
```

### 8 Ejecutar el proyecto

``` bash
php artisan serve
```

Abrir:

    http://127.0.0.1:8000

## Usuarios de prueba (ejemplo)

Se pueden crear usuarios manualmente o mediante seeders.

Ejemplo:

Administrador: admin@test.com

Editor: editor@test.com

Usuario: user@test.com

## Funcionalidades implementadas

-   Autenticación con Laravel Fortify
-   Registro de usuarios
-   Asignación automática de rol Usuario
-   CRUD completo de tareas
-   Restricción de acciones según permisos
-   Visualización de usuarios solo para administradores
-   Middleware de permisos
-   Protección de rutas

## Seguridad implementada

Se utilizó:

-   Middleware auth
-   Middleware permission
-   Directivas Blade @can
-   Validación de permisos en controladores

## Conclusión

Esta aplicación demuestra la implementación de un sistema de
autenticación y autorización en Laravel utilizando buenas prácticas como
el uso de roles, permisos y control de acceso por middleware. Además,
permite gestionar tareas de forma estructurada y segura según el tipo de
usuario.

El proyecto cumple con los requisitos solicitados en la actividad
académica y demuestra la integración de Laravel con paquetes externos
para la gestión de permisos de manera profesional.

## Autor

Desarrollado por: Andres Criollo

Proyecto académico -- Seguridad y desarrollo web
