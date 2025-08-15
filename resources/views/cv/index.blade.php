<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CV • PK-Website</title>

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
          <a href="{{ route('cv.index') }}" aria-current="page">CV</a>
          <a href="{{ route('myproject.index') }}">My Project</a>
          <a href="{{ route('contact.index') }}" class="btn btn-outline">Contact</a>
        </nav>
      </div>
    </header>

    <main>
      <section class="container" style="padding: 48px 0 80px; max-width: 980px;">
        <header style="margin-bottom: 24px;">
          <h1 class="title" style="font-size: clamp(28px, 5vw, 48px);">Резюме</h1>
          <p class="subtitle">Павел Халиман, 29 лет, г. Сергиев Посад, Россия</p>
          <p class="subtitle">Ищу работу в городе Санкт-Петербург</p>
        </header>

        <div class="cv-grid" style="display:grid; grid-template-columns: 1fr 1fr; gap: 24px;">
          <section class="card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; padding: 18px;">
            <h2 style="margin:0 0 10px; font-size: 20px;">Контакты</h2>
            <ul style="list-style:none; padding:0; margin:0; color: var(--muted);">
              <li>Email: pinnadeee@gmail.com</li>
              <li>GitHub: <a href="https://github.com/PavelKhaliman" target="_blank" rel="noopener">github.com/PavelKhaliman</a></li>
              <li>Telegram: <a href="https://t.me/pinnade" target="_blank" rel="noopener">@pinnade</a></li>
              <li>Phone: +79242244888</li>
            </ul>
          </section>

          <section class="card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; padding: 18px;">
            <h2 style="margin:0 0 10px; font-size: 20px;">Навыки</h2>
            <ul style="columns: 2; gap: 18px; padding-left: 18px; margin:0; color: var(--muted);">
              <li>PHP / Laravel</li>
              <li>MySQL / SQLite</li>
              <li>REST / HTTP</li>
              <li>Git / CI</li>
              <li>Docker (базово)</li>
              <li>HTML / CSS</li>
              <li>Go</li>
            </ul>
          </section>

          <section class="card" style="grid-column: 1 / -1; background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; padding: 18px;">
            <h2 style="margin:0 0 10px; font-size: 20px;">Опыт</h2>
            <div style="display:grid; gap: 12px;">
              <div>
                <div style="display:flex; justify-content:space-between; gap: 12px;">
                  <strong>Backend разработчик</strong>
                  <span style="color:var(--muted)">2024 — наст. время</span>
                </div>
                <div style="color:var(--muted)">Проектная деятельность</div>
                <p style="margin:8px 0 0; color:var(--text)">Разработка Pet-проектов, можно посмотреть на github или на сайте в My Project</p>
              </div>
            </div>
            <div style="display:grid; gap: 12px; margin-top: 24px;">
              <div>
                <div style="display:flex; justify-content:space-between; gap: 12px;">
                  <strong>Инженер по АСУ ТП</strong>
                  <span style="color:var(--muted)">2022 — наст. время</span>
                </div>
                <div style="color:var(--muted)">Компания • СОТЕКС</div>
                <p style="margin:8px 0 0; color:var(--text)">Обслуживание автоматизированных систем, SCADA систем, разработка ПО для автоматизации, работа с ПО (Step7, WinCC, PcVue, DreamReport, Owen, SimpleSCADA, HMI)</p>
              </div>
            </div>
            
          </section>

          <section class="card" style="grid-column: 1 / -1; background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; padding: 18px;">
            <h2 style="margin:0 0 10px; font-size: 20px;">Образование</h2>
            <div style="display:flex; justify-content:space-between; gap:12px;">
              <strong>ВУЗ - Комсомольский-на-Амуре государственный технический университет</strong>
              <span style="color:var(--muted)">2013-2019</span>
            </div>
            <div style="color:var(--muted)">Управление в технических системах</div>
          </section>

          <section class="card" style="grid-column: 1 / -1; background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; padding: 18px;">
            <h2 style="margin:0 0 10px; font-size: 20px;">Повышение квалификации, курсы</h2>
            <div style="display:flex; justify-content:space-between; gap:12px;">
              <strong>Яндекс Практикум</strong>
              <span style="color:var(--muted)">2024-2025</span>
            </div>
            <div style="color:var(--muted)">Go - разработчик с нуля</div>

            <div style="display:flex; justify-content:space-between; gap:12px; margin-top: 24px;">
              <strong>Томский государственный университет систем управления и радиоэлектроники</strong>
              <span style="color:var(--muted)">2024-2025</span>
            </div>
            <div style="color:var(--muted)">Введение в сетевые технологии</div>
            
          </section>

          <section class="card" style="grid-column: 1 / -1; background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; padding: 18px;">
            <h2 style="margin:0 0 10px; font-size: 20px;">О себе:</h2>
            
            <div style="color:var(--muted)">Инженер АСУ ТП с опытом автоматизации и переходом в Go-разработку. Имею практические навыки 
              в создании REST API (Go, Docker), работе с базами данных (SQLite) и CI/CD. Ищу позицию, где смогу 
              применять знания в backend-разработке и масштабировать их в команде.
            </div>  
            
          </section>

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



