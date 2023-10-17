#!/bin/bash
chmod +x entrypoint.sh

if [ !  -f "vendor/autoload.php" ]; then 
  composer install  --no-progress --no-interaction
fi

if [ ! -f ".env" ]; then
  echo "creation du fichier env $APP_ENV"
  cp .env.exemple .env
else
  echo "le fichier env  exist deja "
fi

php artisan migrate 
php artisan key:generate
php artisan cache:clear
php artisan config:clear
php artisan optimize

php artisan serve --port=$PORT --host=0.0.0.0 --env=.env
exec docker-php-entrypoint "$@"