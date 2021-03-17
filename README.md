# Programación web

Este proyecto tiene el objetivo de mostrar los conocimientos adquiridos en la asignatura de programación web.

# Requisitos

- Docker

# Despliegue de servicios

El proyecto hace uso de la tecnología de docker, y dividir los servicios de mysql y php. <br>
Para comenzar es necesario construir la imagen de php, ya que está adaptada con las dependencias necesarias para poder conectarse al servicio de mysql.

## Build php

Se creará una imagen de docker con el nombre de php-mysql

```bash
sudo docker build ./docker -t php-mysql
```

## Deploy services

Ejecutar el siguiente script para desplegar los servicios, y llenar algunos campos de la base de datos.

```bash
chmod +x deployCRUD.sh
sudo ./deployCRUD.sh
```
