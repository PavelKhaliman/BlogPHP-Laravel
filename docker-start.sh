#!/bin/bash

echo "🚀 Запуск Laravel проекта в Docker..."

# Проверка наличия .env файла
if [ ! -f .env ]; then
    if [ -f .env_docker ]; then
        echo "📝 Копирование .env_docker в .env..."
        cp .env_docker .env
    else
        echo "❌ Файл .env не найден! Создайте .env файл на основе .env.example"
        exit 1
    fi
fi

# Создание SQLite базы данных
echo "🗄️ Инициализация SQLite базы данных..."
mkdir -p database
touch database/database.sqlite
chmod 664 database/database.sqlite

# Остановка существующих контейнеров
echo "🛑 Остановка существующих контейнеров..."
docker-compose down

# Сборка и запуск контейнеров
echo "🔨 Сборка и запуск контейнеров..."
docker-compose up --build -d

# Ожидание запуска контейнеров
echo "⏳ Ожидание запуска контейнеров..."
sleep 10

# Проверка статуса контейнеров
echo "📊 Статус контейнеров:"
docker-compose ps

echo ""
echo "✅ Проект запущен!"
echo "🌐 Откройте http://localhost в браузере"
echo ""
echo "📋 Полезные команды:"
echo "  - Просмотр логов: docker-compose logs -f"
echo "  - Остановка: docker-compose down"
echo "  - Перезапуск: docker-compose restart"
echo "  - Выполнить команду в контейнере: docker-compose exec app php artisan [команда]"

