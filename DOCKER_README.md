# 🐳 Развертывание Laravel проекта с Docker

Этот проект настроен для развертывания на VPS с использованием Docker и Docker Compose.

## 🗄️ SQLite вместо MySQL

Проект использует SQLite вместо MySQL для упрощения развертывания:

### ✅ Преимущества SQLite:
- **Простота**: Не требует отдельного сервера БД
- **Производительность**: Быстрее для небольших проектов
- **Ресурсы**: Меньше потребление RAM и CPU
- **Портативность**: Один файл базы данных
- **Бэкапы**: Простое копирование файла

### 📊 Когда использовать:
- Небольшие и средние проекты
- Прототипы и MVP
- Проекты с ограниченными ресурсами
- Разработка и тестирование

## 📋 Требования

- Docker (версия 20.10+)
- Docker Compose (версия 2.0+)
- Минимум 1GB RAM на VPS (SQLite требует меньше ресурсов)
- 5GB свободного места на диске

## 🚀 Быстрый старт

### 1. Клонирование проекта
```bash
git clone <your-repository-url>
cd blog
```

### 2. Настройка переменных окружения
Создайте файл `.env` на основе `.env.example`:
```bash
cp .env.example .env
```

Отредактируйте `.env` файл:
```env
APP_NAME="Laravel Blog"
APP_ENV=production
APP_KEY=base64:your-key-here
APP_DEBUG=false
APP_URL=http://your-domain.com

DB_CONNECTION=sqlite
DB_DATABASE=/var/www/html/database/database.sqlite

CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

### 3. Инициализация SQLite базы данных
```bash
# Сделать скрипты исполняемыми
chmod +x deploy.sh
chmod +x init-sqlite.sh

# Инициализировать базу данных
./init-sqlite.sh
```

### 4. Запуск проекта
```bash
# Запустить развертывание
./deploy.sh
```

Или вручную:
```bash
# Создание SQLite базы данных
mkdir -p database
touch database/database.sqlite
chmod 664 database/database.sqlite

# Сборка и запуск
docker-compose up -d --build

# Выполнение миграций
docker-compose exec app php artisan migrate --force

# Очистка и кэширование
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache
```

## 🔧 Конфигурация

### Изменение портов
Отредактируйте `docker-compose.yml`:
```yaml
nginx:
  ports:
    - "8080:80"  # Изменить 8080 на нужный порт
```

### Настройка SQLite базы данных
```yaml
app:
  volumes:
    - ./database:/var/www/html/database  # Монтирование папки с базой данных
```

### Настройка SSL/HTTPS
1. Добавьте SSL сертификаты в папку `ssl/`
2. Обновите `nginx.conf` для поддержки HTTPS
3. Измените порты в `docker-compose.yml`:
```yaml
nginx:
  ports:
    - "80:80"
    - "443:443"
  volumes:
    - ./ssl:/etc/nginx/ssl
```

## 📊 Управление

### Просмотр логов
```bash
# Все сервисы
docker-compose logs -f

# Конкретный сервис
docker-compose logs -f app
docker-compose logs -f nginx
docker-compose logs -f mysql
```

### Остановка проекта
```bash
docker-compose down
```

### Перезапуск
```bash
docker-compose restart
```

### Обновление кода
```bash
# Остановить контейнеры
docker-compose down

# Получить обновления
git pull

# Пересобрать и запустить
docker-compose up -d --build

# Выполнить миграции
docker-compose exec app php artisan migrate --force
```

## 🛠️ Полезные команды

### Выполнение Artisan команд
```bash
# Миграции
docker-compose exec app php artisan migrate

# Создание пользователя
docker-compose exec app php artisan tinker

# Очистка кэша
docker-compose exec app php artisan cache:clear

# Создание символических ссылок
docker-compose exec app php artisan storage:link
```

### Доступ к базе данных
```bash
# SQLite CLI
docker-compose exec app sqlite3 /var/www/html/database/database.sqlite

# Создание дампа
docker-compose exec app sqlite3 /var/www/html/database/database.sqlite ".dump" > backup.sql

# Копирование базы данных
docker cp laravel_app:/var/www/html/database/database.sqlite ./database_backup.sqlite
```

### Управление файлами
```bash
# Копирование файлов в контейнер
docker cp local_file.txt laravel_app:/var/www/html/

# Копирование файлов из контейнера
docker cp laravel_app:/var/www/html/file.txt ./
```

## 🔒 Безопасность

### Рекомендации для продакшена:
1. Измените все пароли по умолчанию
2. Настройте SSL сертификаты
3. Ограничьте доступ к портам
4. Регулярно обновляйте образы
5. Настройте бэкапы базы данных

### Настройка файрвола:
```bash
# UFW (Ubuntu)
sudo ufw allow 80
sudo ufw allow 443
sudo ufw allow 22
sudo ufw enable
```

## 📈 Мониторинг

### Проверка статуса
```bash
docker-compose ps
```

### Использование ресурсов
```bash
docker stats
```

### Проверка здоровья приложения
```bash
curl -I http://localhost
```

## 🆘 Устранение неполадок

### Проблемы с правами доступа
```bash
# Исправить права на storage
docker-compose exec app chown -R www:www /var/www/html/storage
docker-compose exec app chmod -R 755 /var/www/html/storage
```

### Проблемы с базой данных
```bash
# Проверить подключение
docker-compose exec app php artisan tinker
# DB::connection()->getPdo();

# Проверить права доступа к базе данных
docker-compose exec app ls -la /var/www/html/database/

# Сбросить миграции
docker-compose exec app php artisan migrate:fresh --seed

# Создать новую базу данных
docker-compose exec app touch /var/www/html/database/database.sqlite
docker-compose exec app chmod 664 /var/www/html/database/database.sqlite
```

### Проблемы с Nginx
```bash
# Проверить конфигурацию
docker-compose exec nginx nginx -t

# Перезапустить Nginx
docker-compose restart nginx
```

## 📞 Поддержка

При возникновении проблем:
1. Проверьте логи: `docker-compose logs`
2. Убедитесь, что все порты свободны
3. Проверьте права доступа к файлам
4. Убедитесь, что Docker и Docker Compose установлены корректно

---

**Удачного развертывания! 🚀**
