FROM php:8.1-alpine as php

RUN apt-get update -y 
RUN apt-get install -y unzip libpq-dev libcur14-gnutls-dev
RUN docker-php-ext-install pdo pdo_mysql bcmatch
RUN precl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis
WORKDIR /var/www 

COPY . .

COPY --from=composer:2.6.5 /usr/bin/composer /usr/bin/composer

ENTRYPOINT [ "docker/entrypoint.sh" ]