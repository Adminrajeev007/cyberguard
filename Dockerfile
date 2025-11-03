# ---------- Dockerfile ----------
# Use the official PHP 8.2 + Apache image
FROM php:8.2-apache

# Copy all project files to Apache web root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Enable Apache mod_rewrite (if you use pretty URLs)
RUN a2enmod rewrite

# Expose port 80 (Render automatically maps it)
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
