FROM ubuntu:20.04

RUN apt-get update

RUN apt-get install -y php-fpm
RUN apt-get install -y php7.4-sqlite 
RUN apt-get install -y sqlite
EXPOSE 8080/tcp

FROM php:8.0-apache
WORKDIR /var/www/html
COPY webapp/ ./
EXPOSE 80