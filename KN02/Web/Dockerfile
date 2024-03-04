FROM php:8.0-apache
 
RUN docker-php-ext-install mysqli
 
COPY info.php /var/www/html/
COPY db.php /var/www/html/

EXPOSE 8080