FROM jarzamendia/laravel:1.0.4

COPY . /var/www/html

RUN cd /var/www/html && \
    composer install && \
    chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html
