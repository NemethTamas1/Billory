FROM php:8.3-fpm-alpine3.20

WORKDIR /www

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN apk add --no-cache \
    unzip \
    git \
    curl \
    sqlite-dev \
    mariadb-connector-c-dev \
    netcat-openbsd \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite \
    && rm -rf /var/cache/apk/*

COPY . .

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

EXPOSE 8000

CMD ["php-fpm"]
