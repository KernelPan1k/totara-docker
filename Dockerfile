FROM php:7.3-apache

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions && sync

RUN apt-get update \
    && apt-get dist-upgrade -y \
    # && apt-get install php7.3-opcache -y --no-install-recommends --no-install-suggests \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN install-php-extensions mysqli zip gd intl xmlrpc soap opcache
RUN mkdir /var/www/sitedata && chmod 777 /var/www/sitedata

COPY ./additional.ini /usr/local/etc/php/conf.d/additional.ini
