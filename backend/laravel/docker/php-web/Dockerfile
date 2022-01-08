FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libpq-dev \
    libpng-dev

COPY --from=composer:1.9 /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install zip pdo pdo_mysql gd

RUN pecl install xdebug-2.8.0 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.profiler_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_host=127.0.0.1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.profiler_output_dir=/var/www/test/logs" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN cd /usr/local/etc/php/conf.d/ && \
    echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini

