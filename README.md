<h1 align="center">PK-Website • BlogPHP-Laravel</h1>

Небольшой сайт‑портфолио на Laravel: главная, блог, резюме (CV), проекты (My Project), контакты. Аутентификация (Laravel UI), личный кабинет и админ‑панель. Готов к запуску локально и в Docker. 

— Репозиторий: https://github.com/PavelKhaliman/BlogPHP-Laravel

### О mini‑игре /game

Раздел `/game/*` проксируется на отдельный сервис, написанный на Go (репозиторий `PerfectWorld`). Игра и решатель задачи из Perfect World (ГШ) синхронизированы с Laravel через Nginx (reverse‑proxy), при этом фронт на блоге использует те же стили, что и основная тема. Статика и API внутри Go‑сервиса настроены на относительные пути, поэтому корректно работают под префиксом `/game/`.

## Стек
- PHP 8.2+/8.4, Laravel 11
- SQLite (по умолчанию) / PDO
- Vite, npm, SCSS/CSS
- Docker + Nginx (пример конфигурации прилагается)

## Разделы
- `/` — главная (PK-Website)
- `/blog`, `/blog/{post}` — блог
- `/cv` — резюме
- `/my-project` — проекты
- `/contact` — контакты
- `/personal/*` — личный кабинет (auth)
- `/admin/*` — админка (auth + policy)
- `/game/*` — решение задачи в игре Perfect World для ГШ и сама игра(9 сфер)

## Возможности
- Современный UI для главной/блога/страниц входа/регистрации
- Загрузка изображений для постов (через `storage:link` и алиас в Nginx)
- Подтверждение регистрации по email (email verification)
- Оповещение в Telegram о новых регистрациях (через listener)
- Готовые конфиги Nginx + Docker Compose + SSL (Let's Encrypt)



## Лицензия
MIT © Pavel Khaliman
