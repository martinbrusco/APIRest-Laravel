<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Laravel REST API

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## Descripción

Esta es una API REST desarrollada en Laravel que implementa un sistema completo de CRUD (Crear, Leer, Actualizar y Eliminar). La API utiliza:
- **PHP** y **Laravel** como framework backend.
- **MySQL** como base de datos.
- **Composer** para la gestión de dependencias.

## Características
- Sistema de autenticación con Laravel Sanctum (opcional).
- Validación de datos en las solicitudes.
- Respuestas en formato JSON.
- Manejo de errores y excepciones.
- Rutas protegidas mediante middlewares.
- Migrations y Seeders para inicialización de la base de datos.

## Requisitos Previos

Asegúrate de tener instalados los siguientes requerimientos:
- PHP >= 8.0
- Composer
- MySQL o MariaDB
- Laravel >= 10

## Instalación

Clona este repositorio e instala las dependencias:
```bash
    git clone https://github.com/tu-usuario/tu-repositorio.git
    cd tu-repositorio
    composer install
```

Configura tu archivo `.env`:
```bash
    cp .env.example .env
    php artisan key:generate
```

Configura la base de datos en el archivo `.env` y ejecuta las migraciones:
```bash
    php artisan migrate --seed
```

## Uso

Levanta el servidor de desarrollo:
```bash
    php artisan serve
```

Prueba la API con herramientas como **Postman** o **cURL**.

## Endpoints Principales

| Método | Endpoint | Descripción |
|--------|---------|-------------|
| GET | `/api/recursos` | Listar todos los recursos |
| GET | `/api/recursos/{id}` | Obtener un recurso por ID |
| POST | `/api/recursos` | Crear un nuevo recurso |
| PUT | `/api/recursos/{id}` | Actualizar un recurso |
| DELETE | `/api/recursos/{id}` | Eliminar un recurso |

## Autenticación (opcional)

Si la API requiere autenticación, puedes usar Laravel Sanctum:
1. Instala Sanctum:
```bash
    composer require laravel/sanctum
```
2. Publica la configuración:
```bash
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```
3. Ejecuta las migraciones:
```bash
    php artisan migrate
```

Para obtener un token, envía una solicitud **POST** a `/api/login` con tus credenciales.

## Contribución

Si deseas contribuir, sigue estos pasos:
1. Haz un fork del repositorio.
2. Crea una nueva rama: `git checkout -b feature-nueva-funcionalidad`
3. Realiza tus cambios y haz commit: `git commit -m 'Agrega nueva funcionalidad'`
4. Envía tus cambios: `git push origin feature-nueva-funcionalidad`
5. Abre un Pull Request.

## Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).


 
 
