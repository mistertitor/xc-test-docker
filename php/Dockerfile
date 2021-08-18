FROM php:7.2-apache
COPY src /var/www/html
RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN chown -R www-data:www-data /var/www/html

EXPOSE 8080
