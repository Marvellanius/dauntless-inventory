FROM php:7.4-fpm

RUN docker-php-ext-install pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer

CMD composer install; php-fpm

EXPOSE 9000