FROM php:7.4-fpm-buster

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

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.0.13
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN usermod -u 1000 -o www-data
WORKDIR /var/www
RUN chown -R www-data:www-data /var/www

