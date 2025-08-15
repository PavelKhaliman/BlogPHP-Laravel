<h1 align="center">PK-Website • BlogPHP-Laravel</h1>

Небольшой сайт-портфолио на Laravel: главная, блог с постами, страница резюме (CV), проекты (My Project) и контакты. Аутентификация стандартная (Laravel UI), есть личный кабинет и админ-панель. Проект готов к запуску локально и в Docker.

— Репозиторий: https://github.com/PavelKhaliman/BlogPHP-Laravel

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


```

## Лицензия
MIT © Pavel Khaliman
