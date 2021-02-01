# Create image php
docker build docker/. -t phpcrud

#Execute service mysql
docker run -itd -p 33060:3306 --name mysqlDocker -e MYSQL_ROOT_PASSWORD=antonioCastellanos mysql
sleep 20

#Execute service php
docker run -itd --name phpserver -v "$PWD":/opt -p 8000:8000 phpcrud

#Check mysql conection
docker exec -it phpserver php /opt/init/checkConection.php

#Create database
docker exec -it mysqlDocker mysql -u root -pantonioCastellanos -e "create database web"

#Create table, and inser information: with script sql
docker exec -it mysqlDocker mysql -u root -pantonioCastellanos -e "use web; $(cat ./init/alumnos.sql)"

#Start php server
docker exec -itd phpserver php -S 172.17.0.7:8000
