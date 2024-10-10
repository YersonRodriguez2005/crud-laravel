# Papelería CRUD

## Descripción
Este proyecto es una aplicación web simple de gestión de productos de papelería. Permite a los usuarios agregar, editar, eliminar y visualizar productos. La interfaz está construida con un diseño moderno utilizando Tailwind CSS, y la lógica del backend se gestiona a través de Laravel.

## Tecnologías Utilizadas
- ![Laravel](https://laravel.com/img/logotype.min.svg) **Laravel** - Framework de PHP para el desarrollo de aplicaciones web.
- ![Tailwind CSS](https://tailwindcss.com/img/tailwind-css-logo.svg) **Tailwind CSS** - Framework CSS para un diseño personalizable y moderno.
- **PHP** - Lenguaje de programación utilizado en el backend.
- **MySQL** - Sistema de gestión de bases de datos utilizado para almacenar los productos.
- **HTML** - Lenguaje de marcado utilizado para estructurar la página web.
- **Blade** - Motor de plantillas de Laravel para la generación de vistas.

## Proceso de Configuración y Uso

### Requisitos Previos
1. **Composer**: Asegúrate de tener [Composer](https://getcomposer.org/) instalado en tu sistema.
2. **PHP**: Debes tener PHP 7.3 o superior instalado.
3. **MySQL**: Asegúrate de tener MySQL o MariaDB instalado y en funcionamiento.

### Instalación

1. **Clona el repositorio**
   ```bash
   git clone https://tu-repositorio.git
   cd papeleria-crud
   ```

2. **Instala las dependencias de Laravel**
   ```bash
   composer install
   ```

3. **Crea el archivo de configuración .env**
   ```bash
   cp .env.example .env
   ```
   Luego, edita el archivo `.env` y configura los datos de conexión a tu base de datos:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

4. **Genera la clave de la aplicación**
   ```bash
   php artisan key:generate
   ```

5. **Ejecuta las migraciones para crear las tablas en la base de datos**
   ```bash
   php artisan migrate
   ```

6. **Inicia el servidor de desarrollo**
   ```bash
   php artisan serve
   ```
   Ahora puedes acceder a la aplicación en tu navegador en `http://localhost:8000`.

### Uso
- **Agregar un producto**: Navega a la sección de productos y utiliza el formulario para añadir nuevos productos.
- **Editar un producto**: Haz clic en el icono de editar junto al producto que deseas modificar.
- **Eliminar un producto**: Haz clic en el icono de eliminar junto al producto que deseas quitar de la lista.

## Contribuciones
Las contribuciones son bienvenidas. Si deseas contribuir a este proyecto, por favor abre un issue o envía un pull request.

## Licencia
Este proyecto está bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.