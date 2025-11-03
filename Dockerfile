# ---------- Dockerfile ----------
# Use Alpine-based PHP-FPM with Nginx for better security
FROM php:8.3-fpm-alpine

# Install Nginx and other dependencies
RUN apk add --no-cache nginx

# Copy all project files to web root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Configure Nginx
RUN mkdir -p /run/nginx && \
    echo 'server { \
        listen 80; \
        root /var/www/html; \
        index index.php index.html; \
        location / { \
            try_files $uri $uri/ /index.php?$query_string; \
        } \
        location ~ \.php$ { \
            fastcgi_pass 127.0.0.1:9000; \
            fastcgi_index index.php; \
            include fastcgi_params; \
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name; \
        } \
    }' > /etc/nginx/http.d/default.conf

# Expose port 80
EXPOSE 80

# Start PHP-FPM and Nginx
CMD php-fpm -D && nginx -g 'daemon off;'
