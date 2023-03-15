# DESPLIEGUE DE LA PAGINA EN EL SERIVDOR
## Instalación de Apache

1. Abre una terminal en tu sistema operativo Linux.
2. Actualiza los repositorios de paquetes ejecutando el comando: `sudo apt update`
3. Instala Apache con el siguiente comando: `sudo apt install apache2`
4. Verifica que Apache se haya instalado correctamente ingresando la dirección IP de tu servidor en un navegador web. Debería mostrarse una página de bienvenida de Apache.

## Configuración de Apache

### Variables de entorno
Para este paso se puede realizar en el propio archivo "htppd.conf" o en un archivo ".env" ubicado en la carpeta de la pagina web.

Es aconsejable realizar una copia de este archivo como respaldo por si hiciera falta revertirlo.

Habremos de escribir lo siguiente:

```
SetEnv DB_USERNAME Tu_Usuario
SetEnv DB_PASSWORD Tu_Contraseña
```

Habremos de escribir "phpinfo" en la lista de funciones deshabilitas del archivo php.ini.

Una vez hecho esto, habremos de reiniciar el servidor.

## Instalación de PHP

1. En la misma terminal que usaste anteriormente, ejecuta el siguiente comando para instalar PHP: `sudo apt install php libapache2-mod-php`
2. Verifica que PHP se haya instalado correctamente creando un archivo PHP de prueba en el directorio `/var/www/html/`. Para hacer esto, ejecuta el siguiente comando: `sudo nano /var/www/html/info.php`
3. Dentro del editor nano, ingresa lo siguiente: `<?php phpinfo(); ?>`
4. Guarda y cierra el archivo. Ahora, accede a `http://<dirección-IP-del-servidor>/info.php` en tu navegador web. Debería aparecer una página que muestre información sobre la configuración de PHP.

## Instalación de MySQL

1. Ejecuta el siguiente comando en la misma terminal: `sudo apt install mysql-server`
2. Durante la instalación, se te pedirá que ingreses una contraseña para el usuario root de MySQL. Elige una contraseña segura y guárdala en un lugar seguro.
3. Verifica que MySQL se haya instalado correctamente ejecutando el siguiente comando: `sudo systemctl status mysql`. Debería mostrarse un mensaje que indique que el servicio está activo.

## Instalación de phpMyAdmin

1. Instala phpMyAdmin ejecutando el siguiente comando: `sudo apt install phpmyadmin`
2. Durante la instalación, se te pedirá que elijas un servidor web para configurar phpMyAdmin. Selecciona Apache y presiona Enter.
3. Luego, se te pedirá que ingreses una contraseña para el usuario de phpMyAdmin. Elige una contraseña segura y guárdala en un lugar seguro.
4. Verifica que phpMyAdmin se haya instalado correctamente accediendo a `http://<dirección-IP-del-servidor>/phpmyadmin` en tu navegador web. Deberías ver la página de inicio de sesión de phpMyAdmin.

## Instalación de Git

1. Ejecuta el siguiente comando para instalar Git: `sudo apt install git`
2. Verifica que Git se haya instalado correctamente ejecutando el siguiente comando: `git --version`. Debería mostrarse la versión de Git instalada.

¡Listo! Ahora tienes instalados y configurados Apache, PHP, phpMyAdmin, MySQL y Git en tu sistema operativo Linux.