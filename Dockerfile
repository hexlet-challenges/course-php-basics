FROM php:7

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

RUN apt update && apt install -y git
RUN composer global require "phpunit/phpunit=5.1.*"
RUN composer global require "squizlabs/php_codesniffer=*"

ENV PATH /root/.composer/vendor/bin/:$PATH
