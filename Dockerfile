FROM php:8.0

#install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet

COPY ./ /app
WORKDIR /app

RUN composer install && \
    chmod +x oxxy-fuck

ENTRYPOINT ["/app/oxxy-fuck"]