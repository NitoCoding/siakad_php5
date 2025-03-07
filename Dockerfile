FROM php:5.6-apache

# Install MySQL extension for mysql_connect support
RUN docker-php-ext-install mysql mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set PHP configurations
RUN echo "output_buffering = On" >> /usr/local/etc/php/php.ini
RUN echo "session.auto_start = 1" >> /usr/local/etc/php/php.ini

COPY apache.conf /etc/apache2/httpd.conf
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]