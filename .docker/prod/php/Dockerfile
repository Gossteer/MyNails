# Image
FROM php:8.0.6-fpm

# Starting from scratch
RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Dependencies
RUN apt-get update

# GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Human Language and Character Encoding Support
RUN apt-get install -y zlib1g-dev libicu-dev g++
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

# PHP Redis extension
# RUN pecl install redis
# RUN docker-php-ext-enable redis

# PHP pnctl
RUN docker-php-ext-install pcntl

# Custom php.ini config
COPY .docker/prod/php/php.ini /usr/etc/php/php.ini

# Clean up
RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

ARG APP_ENV
ARG APP_NAME
# COPY . /var/www/$APP_NAME

# Set up default directory
WORKDIR /var/www/$APP_NAME
#
## Composer install
# RUN composer install -o
#
## Node install
# RUN npm i
# RUN npm run-script $APP_ENV