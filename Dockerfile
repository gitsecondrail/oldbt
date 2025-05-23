FROM php:8.2-apache

# Copy everything into the Apache web root
COPY . /var/www/html/

# Enable Apache Rewrite Module (optional if using .htaccess)
RUN a2enmod rewrite

# Set permissions (optional, for safety)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
