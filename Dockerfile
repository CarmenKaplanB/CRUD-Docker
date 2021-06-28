FROM php:8.0-apache
WORKDIR /var/www/html
COPY volume/ ./
EXPOSE 80

# $ docker run -it -p 8080:80 --name phpsql -h phpsql phpsql:v1