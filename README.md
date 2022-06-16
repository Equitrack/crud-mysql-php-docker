# Programación web

Este proyecto tiene el objetivo de mostrar los conocimientos adquiridos en la asignatura de programación web.

# Requisitos

- Docker

# Despliegue de servicios

El proyecto hace uso de la tecnología de docker, y dividir los servicios de mysql y php. <br>
Para comenzar es necesario construir la imagen de php, ya que está adaptada con las dependencias necesarias para poder conectarse al servicio de mysql.

**Clonar repositorio**
```bash
git clone https://github.com/Equitrack/crud-mysql-php-docker.git
```

**Construir imagen**

Se creará una imagen de docker con el nombre de php-mysql

```bash
cd crud-mysql-php-docker
docker build ./docker -t php-mysql
```

**Desplegar aplicación**

Ejecutar el siguiente script para desplegar los servicios, y llenar algunos campos de la base de datos.

```bash
chmod +x deployCRUD.sh
sudo ./deployCRUD.sh
```
**Visualizar aplicación**

La aplicación se expone en el puerto 8000
```bash
curl -I localhost:8000
```
