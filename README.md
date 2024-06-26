## Instalación

### Clonar el repositorio

```bash
git clone https://github.com/jcamilovallejos/prueba-linktic.git
cd prueba-linktic
```
Instalar dependencias de Composer
Asegúrate de tener Composer instalado. Luego, ejecuta:

```bash
composer install
```
Configurar el archivo .env
Copia el archivo de configuración de ejemplo y edita las variables de entorno:

```bash
cp .env.example .env
```
Edita el archivo .env para configurar los detalles de tu base de datos y otros ajustes necesarios:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=usuario_de_tu_base_de_datos
DB_PASSWORD=contraseña_de_tu_base_de_datos
```
Crear la base de datos
Crea manualmente la base de datos utilizando herramientas como phpMyAdmin o ejecuta el comando adecuado si has configurado un comando personalizado en tu proyecto.

Ejecutar migraciones
Una vez configurada la base de datos, ejecuta las migraciones para crear las tablas necesarias:

```bash
php artisan migrate
```
Iniciar el servidor de desarrollo
```bash
php artisan serve
```
El servidor de desarrollo debería estar disponible en http://localhost:8000.
