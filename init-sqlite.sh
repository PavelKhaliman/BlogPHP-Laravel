#!/bin/bash

# Скрипт для инициализации SQLite базы данных
echo "🗄️ Инициализация SQLite базы данных..."

# Создание папки database если её нет
mkdir -p database

# Создание SQLite файла базы данных
touch database/database.sqlite

# Установка прав доступа
chmod 664 database/database.sqlite

echo "✅ SQLite база данных создана: database/database.sqlite"

# Если Docker контейнеры запущены, выполнить миграции
if docker-compose ps | grep -q "laravel_app"; then
    echo "🔄 Выполнение миграций..."
    docker-compose exec app php artisan migrate --force
    
    echo "🌱 Заполнение базы данных тестовыми данными..."
    docker-compose exec app php artisan db:seed --force
    
    echo "✅ База данных инициализирована!"
else
    echo "ℹ️ Docker контейнеры не запущены. Запустите их командой: docker-compose up -d"
fi

echo ""
echo "📋 Инструкция по запуску:"
echo "1. Переименуйте .env_docker в .env: mv .env_docker .env"
echo "2. Запустите контейнеры: docker-compose up --build"
echo "3. Откройте http://localhost в браузере"

