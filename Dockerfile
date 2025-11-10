FROM php:8.2-apache

# Install OS packages required for building/extending PHP and for MySQL extensions
RUN apt-get update \
	&& apt-get install -y --no-install-recommends \
	   libzip-dev \
	   libpng-dev \
	   libonig-dev \
	   zlib1g-dev \
	&& docker-php-ext-install mysqli pdo pdo_mysql \
	&& a2enmod autoindex \
	&& rm -rf /var/lib/apt/lists/*

COPY ./projeto/ /var/www/html/