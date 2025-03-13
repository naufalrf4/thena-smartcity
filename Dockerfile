FROM composer:2 as build

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install --no-dev --optimize-autoloader

COPY . .

FROM node:20-alpine as frontend

WORKDIR /app

COPY package.json package-lock.json ./

RUN npm install

COPY resources ./resources
COPY vite.config.js ./

RUN npm run build

FROM dunglas/frankenphp:1.0-php8.3

WORKDIR /var/www/html

COPY --from=build /app /var/www/html

COPY --from=frontend /app/public/build /var/www/html/public/build

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["frankenphp", "--workers=4", "--port=80", "public/index.php"]
