FROM php:7.4-apache

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y git unzip zip

WORKDIR /var/www/html

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions gd pdo_mysql bcmath zip intl opcache

COPY --from=composer:2.0 /usr/bin/composer /usr/local/bin/composer