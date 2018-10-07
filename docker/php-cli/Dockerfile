# Image
FROM php:7.2-cli

RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN apt-get update
RUN apt-get install -y zip
RUN docker-php-ext-install pdo pdo_mysql

# Composer
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www
