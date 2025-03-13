FROM dunglas/frankenphp:latest

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

COPY . .

RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache \
    && chmod -R 775 /app/storage /app/bootstrap/cache

EXPOSE 80

CMD ["frankenphp", "--config=/app/frankenphp.json", "--workers=4", "--port=80", "public/index.php"]
