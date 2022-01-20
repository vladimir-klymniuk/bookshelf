FROM php:7.4-fpm

# Set working directory
WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libpq-dev \
    libpng-dev

#RUN apt-get install -y git
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    mbstring \
    tokenizer \
    intl \
    xml \
    ctype \
    json \
    zip \
    gd

COPY --from=composer:2.0.4 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/app
