# Многоэтапный Dockerfile для Laravel проекта
FROM php:8.2-fpm-alpine AS base

# Установка системных зависимостей
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    oniguruma-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    icu-dev \
    sqlite-dev \
    nodejs \
    npm

# Установка PHP расширений
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install \
    pdo_sqlite \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    intl

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Установка рабочей директории
WORKDIR /var/www/html

# Копирование файлов зависимостей
COPY composer.json composer.lock ./
COPY package.json package-lock.json ./

# Копирование исходного кода (до composer install)
COPY . .

# Установка PHP зависимостей
RUN composer install --optimize-autoloader --no-interaction

# Установка Node.js зависимостей и сборка assets
RUN npm ci && npm run build

# Создание пользователя для безопасности
RUN addgroup -g 1000 www && \
    adduser -u 1000 -G www -s /bin/sh -D www

# Установка прав доступа (после копирования всех файлов)
RUN chown -R www:www /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Создание символических ссылок для storage
RUN php artisan storage:link

# Копирование entrypoint скрипта
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Переключение на пользователя www
USER www

# Открытие порта
EXPOSE 9000

# Использование entrypoint
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm"]
