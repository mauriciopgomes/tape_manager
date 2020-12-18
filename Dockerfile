FROM php:7.3-fpm-alpine
WORKDIR /app
COPY . .
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/bin --filename=composer
RUN composer install
EXPOSE 80
CMD php -S 0.0.0.0:80 -t public
