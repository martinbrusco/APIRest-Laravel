
    <h1 align="center">Laravel REST API</h1>
    <p align="center">
        <a href="https://laravel.com" target="_blank">
            <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
        </a>
    </p>

    <h2>Descripción</h2>
    <p>Esta es una API REST desarrollada en Laravel que implementa un sistema completo de CRUD (Crear, Leer, Actualizar y Eliminar). La API utiliza:</p>
    <ul>
        <li><strong>PHP</strong> y <strong>Laravel</strong> como framework backend.</li>
        <li><strong>MySQL</strong> como base de datos.</li>
        <li><strong>Composer</strong> para la gestión de dependencias.</li>
    </ul>

    <h2>Características</h2>
    <ul>
        <li>Sistema de autenticación con Laravel Sanctum (opcional).</li>
        <li>Validación de datos en las solicitudes.</li>
        <li>Respuestas en formato JSON.</li>
        <li>Manejo de errores y excepciones.</li>
        <li>Rutas protegidas mediante middlewares.</li>
        <li>Migrations y Seeders para inicialización de la base de datos.</li>
    </ul>

    <h2>Requisitos Previos</h2>
    <ul>
        <li>PHP >= 8.0</li>
        <li>Composer</li>
        <li>MySQL o MariaDB</li>
        <li>Laravel >= 10</li>
    </ul>

    <h2>Instalación</h2>
    <pre>
    git clone https://github.com/tu-usuario/tu-repositorio.git
    cd tu-repositorio
    composer install
    </pre>
    <p>Configura tu archivo <code>.env</code>:</p>
    <pre>
    cp .env.example .env
    php artisan key:generate
    </pre>
    <p>Configura la base de datos en el archivo <code>.env</code> y ejecuta las migraciones:</p>
    <pre>
    php artisan migrate --seed
    </pre>

    <h2>Uso</h2>
    <p>Levanta el servidor de desarrollo:</p>
    <pre>
    php artisan serve
    </pre>
    <p>Prueba la API con herramientas como <strong>Postman</strong> o <strong>cURL</strong>.</p>

    <h2>Endpoints Principales</h2>
<table border="1">
    <tr>
        <th>Método</th>
        <th>Endpoint</th>
        <th>Descripción</th>
    </tr>
    <tr>
        <td>GET</td>
        <td>/api/v1/invoices</td>
        <td>Listar todas las facturas</td>
    </tr>
    <tr>
        <td>GET</td>
        <td>/api/v1/customers/340</td>
        <td>Obtener un cliente por ID</td>
    </tr>
    <tr>
        <td>PUT</td>
        <td>/api/v1/customers/340</td>
        <td>Actualizar un cliente por ID</td>
    </tr>
    <tr>
        <td>DELETE</td>
        <td>/api/v1/customers/337</td>
        <td>Eliminar un cliente por ID</td>
    </tr>
    <tr>
        <td>POST</td>
        <td>/api/v1/customers</td>
        <td>Agregar un nuevo cliente</td>
    </tr>
    <tr>
        <td>GET</td>
        <td>/api/v1/invoices?status[eq]=p</td>
        <td>Listar facturas por estado</td>
    </tr>
</table>


    <h2>Contribución</h2>
    <p>Si deseas contribuir, sigue estos pasos:</p>
    <ol>
        <li>Haz un fork del repositorio.</li>
        <li>Crea una nueva rama: <code>git checkout -b feature-nueva-funcionalidad</code></li>
        <li>Realiza tus cambios y haz commit: <code>git commit -m 'Agrega nueva funcionalidad'</code></li>
        <li>Envía tus cambios: <code>git push origin feature-nueva-funcionalidad</code></li>
        <li>Abre un Pull Request.</li>
    </ol>

    <h2>Licencia</h2>
    <p>Este proyecto está bajo la licencia <a href="https://opensource.org/licenses/MIT">MIT</a>.</p>





 
 
