# Simple Ecommerce Web

Simple Ecommerce Web es una aplicación web de comercio electrónico que ofrece las funciones básicas para la gestión de productos y compras. La aplicación incluye un panel de administración para gestionar productos, registrar usuarios y simular compras.

## Características

- **Gestión de productos**: Crea, edita y elimina información de productos.
- **Registro de usuarios**: Permite a los usuarios registrarse y gestionar su cuenta.
- **Carrito de compra**: Añade productos al carrito y gestiona el proceso de compra.
- **Simulación de compra**: Realiza una simulación de la compra de productos.
- **Interfaz sencilla**: Diseño limpio y funcional sin utilizar frameworks de CSS

## Tecnologías Usadas

- **PHP**
- **Laravel**
- **CSS3 puro**: Estilos implementados sin utilizar frameworks o librerías de CSS.

## Instalación

1. Clona el repositorio:

   ```bash
   git clone https://github.com/tu-usuario/simple-ecommerce-web.git

2. Navega al directorio del proyecto:

   ```bash
   cd simple-ecommerce-web

3. Instala las dependencias de Laravel:

   ```bash
   composer install

4. Configura el archivo de entorno:

    * Renombra .env.example a .env y configura las credenciales de tu base de datos.

5. Genera la clave de la aplicación:

   ```bash
   php artisan key:generate

6. Ejecuta las migraciones para crear las tablas en la base de datos:

   ```bash
   php artisan migrate
   
## Uso
Para iniciar la aplicación, ejecuta el servidor de desarrollo de Laravel:

   ```bash
   php artisan serve
   ```
Esto abrirá la aplicación en tu navegador por defecto en http://localhost:8000.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas mejorar el proyecto, por favor crea un fork y envía un pull request.

## Contacto

Para preguntas o sugerencias, puedes contactarme a través de [ezioeg@gmail.com].
