FROM php:7.2.2-apache
COPY ./../ /var/www/html
RUN docker-php-ext-install pdo pdo_mysql mysqli
EXPOSE 80