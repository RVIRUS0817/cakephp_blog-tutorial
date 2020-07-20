FROM php:7-fpm

RUN pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    docker-php-ext-install pdo_mysql

RUN apt-get update

RUN apt-get install -y git libzip-dev zip unzip \
    && docker-php-ext-install zip

RUN docker-php-ext-install pdo_mysql

RUN apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

ENV DATABASE_HOST: "psk-mysql"
ENV DATABASE_NAME=${DATABASE}
ENV DATABASE_USER=${USER_NAME}
ENV DATABASE_PASSWORD=${USER_PASSWORD}

COPY ./php/php.ini /usr/local/etc/php/php.ini
