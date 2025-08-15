<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Project • PK-Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Montserrat:wght@700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/css/main.styles.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="container header-inner">
        <div class="brand">
          <span class="dot"></span>
          <span class="brand-name"><a href="{{ route('main.index') }}">PK-Website</a></span>
        </div>
        <nav class="site-nav" aria-label="Primary">
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('blog.index') }}">Blog</a>
          <a href="{{ route('cv.index') }}">CV</a>
          <a href="{{ route('myproject.index') }}" aria-current="page">My Project</a>
          <a href="{{ route('contact.index') }}" class="btn btn-outline">Contact</a>
        </nav>
      </div>
    </header>

    <main>
      <section class="container" style="padding: 48px 0 80px; max-width: 980px;">
        <header style="margin-bottom: 24px;">
          <h1 class="title" style="font-size: clamp(28px, 5vw, 48px);">Мои проекты:</h1>
          <p class="subtitle">Проекты написанные для себя и для учебных целей</p>
        </header>

        <div class="posts-grid" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
         
        <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">Мой сайт</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">Сайт на котором вы сейчас находитесь</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/BlogPHP-Laravel">Репозиторий</a>              
              </div>
            </div>
          </article>

          <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">Планировщик задач / TasksScheduler</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">Данный проект реализует функциональность планировщика задач. Планировщик хранит задачи; каждая из них содержит дату дедлайна и 
                заголовок с комментарием, pадачи повторяются по заданному правилу 
                (ежегодно или через некторое колличество дней)</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/TasksScheduler">Репозиторий</a>                
              </div>
            </div>
          </article>

          <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">Web версия KeySwitcher</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">представляет собой простой HTTP-сервис на Go, 
                предназначенный для автоматической смены клавиатурной раскладки с английской (EN) на русскую (RU). Сервис получает текст от клиента, заменяет символы согласно заранее заданному соответствию между 
                английскими и русскими символами и возвращает преобразованный текст обратно клиенту.</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/KeySwitcher-web-">Репозиторий</a>              
              </div>
            </div>
          </article>

          <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">Desktop версия KeySwitcher</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">KeySwitcher — это десктопное приложение, 
                которое позволяет переводить текст с английской раскладки клавиатуры на русскую. 
                Например, если вы неправильно набрали текст «Ghbdtn vbh!», п
                риложение переделает его на «Привет Мир!».</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/KeySwitcher-Desktop-s">Репозиторий</a>              
              </div>
            </div>
          </article>

         


        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container">
        <span>© <span id="year"></span> Pavel Khaliman</span>
      </div>
    </footer>

    <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
  </body>
</html>


