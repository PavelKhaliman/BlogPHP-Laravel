#!/bin/sh
set -e

echo "🚀 Инициализация Laravel приложения..."

# Создание .env файла если его нет
if [ ! -f .env ]; then
    echo "📝 Создание .env файла..."
    cp .env.example .env
fi

# Создание папки database если её нет
mkdir -p database

# Создание SQLite базы данных если её нет
if [ ! -f database/database.sqlite ]; then
    echo "🗄️ Создание SQLite базы данных..."
    touch database/database.sqlite
    chmod 664 database/database.sqlite
fi

# Генерация ключа приложения если его нет
if ! grep -q "^APP_KEY=base64:" .env; then
    echo "🔑 Генерация ключа приложения..."
    php artisan key:generate --no-interaction --force
fi

# Очистка кэша
echo "🧹 Очистка кэша..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Выполнение миграций
echo "🔄 Выполнение миграций..."
php artisan migrate --force

# Оптимизация для продакшена
echo "⚡ Оптимизация для продакшена..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Laravel приложение готово!"

# Запуск PHP-FPM
exec "$@"
