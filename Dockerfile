FROM php:7-fpm

RUN apt-get update && \
    apt-get install -y git zip

# TODO: CURL
# RUN curl --silent --show-error https://getcomposer.org/installer | php && \
# mv composer.phar /usr/local/bin/composer