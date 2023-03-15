# DESPLIEGUE DE LA PAGINA EN EL SERIVDOR

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