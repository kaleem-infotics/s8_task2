# app/Dockerfile

From php:8.1-apache

#install PostgreSQL extension

RUN apt-get update && apt-get install -y libpq-dev \
	&& docker-php-ext-install pdo pdo_pgsql

# copy website files to apache's root
COPY . /var/www/html
