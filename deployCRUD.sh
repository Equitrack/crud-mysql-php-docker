#Execute service mysql
docker run -itd -p 33060:3306 --name mysqlDocker -e MYSQL_ROOT_PASSWORD=antonioCastellanos mysql
sleep 20

#Execute service php
docker run -itd --name phpserver -v "$PWD":/opt -p 8000:8000 php-mysql

#Check IP from PHP Server
ipMysqlContainer=$(docker inspect --format='{{range .NetworkSettings.Networks}}{{println .IPAddress}}{{end}}' mysqlDocker)

#Replace Correct IP container on files PHP

sed -i "s/ipMysqlContainer/$ipMysqlContainer/g" src/mysqlConection.php
sed -i "s/ipMysqlContainer/$ipMysqlContainer/g" init/checkConection.php

#Check mysql conection
docker exec -it phpserver php /opt/init/checkConection.php

#Create database
docker exec -it mysqlDocker mysql -u root -pantonioCastellanos -e "create database web"

#Create table, and inser information: with script sql
docker exec -it mysqlDocker mysql -u root -pantonioCastellanos -e "use web; $(cat ./init/alumnos.sql)"

#Check IP from PHP Server
ipPhpContainer=$(docker inspect --format='{{range .NetworkSettings.Networks}}{{println .IPAddress}}{{end}}' phpserver)

#Start php server
docker exec -itd phpserver php -S $ipPhpContainer:8000

echo "Deployment completed!"
