FROM php:7.4.12-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql bcmath 

RUN mkdir -p /var/www/html

RUN apk --no-cache add shadow && usermod -u 1000 www-data && groupmod -g 1000 www-data
