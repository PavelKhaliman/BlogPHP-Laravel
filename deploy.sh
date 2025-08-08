#!/bin/bash

# Скрипт для развертывания Laravel проекта на VPS
# Использование: ./deploy.sh

set -e

echo "🚀 Начинаем развертывание Laravel проекта..."

# Проверка наличия Docker и Docker Compose
if ! command -v docker &> /dev/null; then
    echo "❌ Docker не установлен. Установите Docker сначала."
    exit 1
fi

if ! command -v docker-compose &> /dev/null; then
    echo "❌ Docker Compose не установлен. Установите Docker Compose сначала."
    exit 1
fi

# Остановка и удаление существующих контейнеров
echo "🛑 Останавливаем существующие контейнеры..."
docker-compose down --remove-orphans

# Удаление старых образов (опционально)
read -p "Удалить старые образы? (y/n): " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
    echo "🗑️ Удаляем старые образы..."
    docker system prune -f
fi

# Сборка новых образов
echo "🔨 Собираем новые образы..."
docker-compose build --no-cache

# Запуск контейнеров
echo "🚀 Запускаем контейнеры..."
docker-compose up -d

# Ожидание запуска контейнеров
echo "⏳ Ожидаем запуск контейнеров..."
sleep 10

# Выполнение миграций
echo "📊 Выполняем миграции базы данных..."
docker-compose exec app php artisan migrate --force

# Очистка и кэширование
echo "🧹 Очищаем кэш..."
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan route:clear

echo "💾 Кэшируем конфигурацию..."
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache

# Проверка статуса контейнеров
echo "📋 Проверяем статус контейнеров..."
docker-compose ps

echo "✅ Развертывание завершено!"
echo "🌐 Ваше приложение доступно по адресу: http://localhost"
echo "📊 SQLite база данных: ./database/database.sqlite"
echo "🔴 Redis доступен на порту: 6379"

# Показ логов (опционально)
read -p "Показать логи? (y/n): " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]; then
    docker-compose logs -f
fi
