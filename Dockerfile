FROM php:8.2-apache
RUN a2enmod autoindex
RUN docker-php-ext-install mysqli
COPY ./projeto/ /var/www/html/