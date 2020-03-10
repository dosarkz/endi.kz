#!/bin/bash

if [ ! -f "/var/www/.env" ]; then
	cp .env.example .env
fi

if [ -d "/var/www/vendor" ]; then
	composer update
else
	composer install
fi

#artisan commands
php artisan key:generate;
php artisan migrate;
#php artisan admin:install --no-interaction;
#php artisan db:seed;
exec "$@";
