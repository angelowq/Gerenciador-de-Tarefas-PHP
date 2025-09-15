FROM php:8.2-apache
RUN a2enmod autoindex
COPY ./projeto/ /var/www/html/