# GESTION PRODUCTOS

La aplicación <b>gestión de productos</b> esta diseñada en arquitectura hexagonal para ayudar a los usuarios a administrar de manera eficiente su inventario, precios, niveles de stock y otra información relevante sobre sus productos. Facilita la organización y seguimiento de los productos, mejorando así la eficiencia en la gestión de inventarios y ventas.

## Instalación

1. <b>Clona este repositorio:</b> Clona el repositorio de GitHub u otro sistema de control de versiones en tu máquina local.<br>
   <b>$</b> git clone https://github.com/ShinobiDev/aquitecturahexagonal.git
   
2. <b>Instalar Dependencias:</b> Accede al directorio del proyecto y utiliza Composer para instalar las dependencias del proyecto Laravel.<br>
   <b>$</b> cd gestion-productos<br>
   <b>$</b> composer install

3. <b>Crear Archivo .env:</b> Copia el archivo de configuración de ejemplo .env.example y créalo como .env. Luego genera una clave de aplicación.<br>
   <b>$</b> cp .env.example .env<br>
   <b>$</b> php artisan key:generate
   
4. <b>Configurar la Base de Datos:</b> Edita el archivo .env con la información de tu base de datos (nombre, usuario, contraseña, etc.).<br>

5. <b>Migrar la Base de Datos:</b> Ejecuta las migraciones para crear las tablas de la base de datos.<br>
   <b>$</b> php artisan migrate --seed

6. <b>Iniciar Servidor de Desarrollo:</b> Ejecuta el servidor de desarrollo de Laravel.<br>
   <b>$</b> php artisan serve

7. <b>Acceder al Proyecto:</b> Abre tu navegador web y accede a http://localhost:8000 (o la dirección que indique la terminal) para ver tu proyecto Laravel funcionando.<br>
                                                                                     

## Postman

<b>Crear Producto</b><br>
<b>URL</b> http://localhost:8000/api/products<br>
<b>Metodo</b> POST<br>
<b>Body</b>{
                "name": "Computador",
                "price": 28.58,
                "stock": 10
            }<br><br>
<b>Lista Producto</b><br>
<b>URL</b> http://localhost:8000/api/products<br>
<b>Metodo</b> GET    
