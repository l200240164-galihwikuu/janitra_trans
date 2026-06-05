FROM dunglas/frankenphp

RUN install-php-extensions mysqli pdo_mysql

COPY . /app
COPY Caddyfile /etc/frankenphp/Caddyfile