FROM php:8.2-apache-bullseye

# Enable .htaccess overrides (if using .htaccess)
RUN a2enmod rewrite

# Copy everything to Apache’s web root
COPY . /var/www/html/

# Set permissions (optional but helpful)
RUN chmod -R 755 /var/www/html

EXPOSE 80
