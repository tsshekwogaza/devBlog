# === Stage 1: Build Frontend Assets ===
FROM node:20-alpine AS asset-builder
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npm run build

# === Stage 2: Main PHP/Laravel Application ===
FROM php:8.3-fpm-alpine
# (Install your standard php extensions, zip, composer etc. here)

WORKDIR /var/www/html
COPY . .

# CRITICAL: Copy the compiled assets from Stage 1 into the production directory
COPY --from=asset-builder /app/public/build ./public/build

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# (Add your standard CMD or entrypoint script to run php-fpm/nginx)


# # --- STAGE 1: Frontend Asset Compilation ---
# FROM node:20-alpine AS frontend_builder
# WORKDIR /app
# COPY package*.json ./
# RUN npm ci
# COPY . .
# RUN npm run build

# # --- STAGE 2: PHP & Production Environment ---
# FROM php:8.3-apache AS runtime

# # Install system dependencies & PHP extensions required for Laravel
# RUN apt-get update && apt-get install -y \
#     libpng-dev \
#     libjpeg-dev \
#     libfreetype6-dev \
#     zip \
#     unzip \
#     git \
#     && docker-php-ext-configure gd --with-freetype --with-jpeg \
#     && docker-php-ext-install pdo_mysql gd

# # Enable Apache mod_rewrite for Laravel routing
# RUN a2enmod rewrite

# # Change Apache document root to Laravel's public directory
# ENV APACHE_DOCUMENT_ROOT /var/www/html/public
# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# # Configure Apache to listen on the dynamic PORT provided by Sevalla
# RUN sed -i 's/Listen 80/Listen ${PORT}/g' /etc/apache2/ports.conf
# RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/g' /etc/apache2/sites-available/000-default.conf

# # Set up project workspace
# WORKDIR /var/www/html
# COPY . .

# # Copy the freshly compiled CSS/JS from Stage 1
# COPY --from=frontend_builder /app/public/build ./public/build

# # Install Composer dependencies securely for production
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# RUN composer install --no-interaction --optimize-autoloader --no-dev

# # Fix permissions so Apache can read/write Laravel files
# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# # Expose the dynamic port visually (Sevalla overrides this at runtime)
# EXPOSE 80

# CMD ["apache2-foreground"]
