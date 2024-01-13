FROM php:7.4-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo_mysql

COPY . /var/www/html

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
