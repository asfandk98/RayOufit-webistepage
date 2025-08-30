# -----------------------------
# Stage 1: Build (Composer dependencies)
# -----------------------------
FROM php:8.2-fpm AS build

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev curl \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files first
COPY composer.json composer.lock ./

# Install dependencies without artisan scripts
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Copy full project
COPY . .

# -----------------------------
# Stage 2: Production image
# -----------------------------
FROM php:8.2-fpm

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Copy vendor folder from build stage
COPY --from=build /var/www/html/vendor ./vendor

# Set permissions (important for Laravel)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 8080 for Render auto-detection
EXPOSE 8080

# Run Laravel with PHP built-in server
CMD php -S 0.0.0.0:8080 -t public
