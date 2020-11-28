FROM jarzamendia/laravel:1.0.3

COPY . /var/www/html

RUN cd /var/www/html && \
    composer install && \
    chown -R www-data:www-data /var/www/html