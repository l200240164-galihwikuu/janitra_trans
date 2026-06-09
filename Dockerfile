FROM dunglas/frankenphp

RUN install-php-extensions \
    mysqli \
    pdo_mysql \
    zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install --no-dev --optimize-autoloader

COPY . .

COPY Caddyfile /etc/frankenphp/Caddyfile