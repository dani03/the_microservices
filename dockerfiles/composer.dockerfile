FROM composer:2.6.5

WORKDIR /var/www/html

ENTRYPOINT [ "composer", "--ignore-plateform-reqs" ]