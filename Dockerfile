FROM dunglas/frankenphp

RUN install-php-extensions mysqli pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy composer files terlebih dahulu
COPY composer.json composer.lock ./

# Install dependency
RUN composer install --no-dev --optimize-autoloader

# Copy seluruh project
COPY . .

COPY Caddyfile /etc/frankenphp/Caddyfile