# UBUNTU
FROM ubuntu:20.04
LABEL description = "Imagen - Desarrollo Web"
LABEL mainteiner = "Carmen Kaplan"
LABEL version = "0.1"
 
# PYTHON
RUN apt update
RUN apt install -y python3
RUN apt install -y python3-pip
 
# WEB.PY
RUN pip3 install web.py
 
# USED TO OMIT UBICATION
RUN DEBIAN_FRONTEND=noninteractive apt install -y tzdata 
RUN apt-get update && apt-get install apt-file -y && apt-file update && apt-get install vim -y
 
# PHP INSTALL
RUN apt update 
RUN apt -y install php7.4 
RUN apt -y install php7.4-fpm 
RUN apt-get -y install php-pear
 
# Install nginx, php-fpm and supervisord from ubuntu repository
RUN apt install -y nginx php-fpm supervisor
 
# SQLITE
RUN apt -y install sqlite3 
RUN apt-get -y install sqlite3 libsqlite3-dev
 
EXPOSE 8080/tcp

# docker build -t webapp:v1 .
# docker run -it -p 8080:8080 -v /workspace/CRUD-Docker/volume:/volume --name php7 -h ubuntu webapp:v1
# docker commit webapp webapp:v2
# docker start -i php7
# docker container rm 9009f5d1d4c7
# docker images -a
# docker container ls
# docker rmi webapp:v1
# docker rmi 1baaa80bd403
# sudo chmod ugo+rwx volume
# php -S 0.0.0.0:8888 -t . index.php ---> app.py en su caso
