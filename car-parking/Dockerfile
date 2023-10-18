FROM php:8.1-fpm-alpine

# RUN apt-get update -y 
# # RUN apt-get install -y unzip libpq-dev libcur14-gnutls-dev
WORKDIR /var/www/html

# RUN apt-get update && apt-get install -y unzip libpq-dev libcurl4-openssl-dev
RUN docker-php-ext-install pdo pdo_mysql bcmath
# RUN pecl install -o -f redis \
#     && rm -rf /tmp/pear \
#     && docker-php-ext-enable redis

# # WORKDIR /var/www/html
# COPY . .
# COPY --from=composer:2.6.5 /usr/bin/composer /usr/bin/composer

# ENV PORT=8000

# ENTRYPOINT [  "./docker/entrypoint.sh"]