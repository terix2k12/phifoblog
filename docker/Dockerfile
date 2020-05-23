FROM php:7.4.6-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
EXPOSE 80
CMD [ "wget", "-O phpunit https://phar.phpunit.de/phpunit-9.phar" ]