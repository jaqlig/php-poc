FROM php:8.5-apache AS base

RUN apt-get update && apt-get install -y \
    unzip \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY app/composer.json ./
RUN composer install

COPY app/ ./
RUN composer dump-autoload

# /etc/environment variables
COPY env/environment.sample /etc/environment
COPY docker/entrypoint.sh /usr/bin/entrypoint.sh
RUN chmod +x /usr/bin/entrypoint.sh 
ENTRYPOINT ["/usr/bin/entrypoint.sh"]

CMD ["apache2-foreground"]

FROM base AS dev

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
