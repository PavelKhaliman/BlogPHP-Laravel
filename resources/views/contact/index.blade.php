<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact • PK-Website</title>

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
          <a href="{{ route('myproject.index') }}">My Project</a>
          <a href="{{ route('contact.index') }}" aria-current="page" class="btn btn-outline">Contact</a>
        </nav>
      </div>
    </header>

    <main>
      <section class="container" style="padding: 48px 0 80px; max-width: 720px;">
        <header style="margin-bottom: 24px;">
          <h1 class="title" style="font-size: clamp(28px, 5vw, 48px);">Контакты</h1>
          <p class="subtitle">Связаться со мной (+79242244888)</p>
        </header>

        <div class="contact-icons" style="display:grid; grid-template-columns: repeat(3, minmax(140px, 1fr)); gap: 18px; place-items:center; margin: 10px 0 24px;">
          <a href="https://t.me/pinnade" target="_blank" rel="noopener" aria-label="Telegram"
             title="Telegram"
             style="width: 120px; height: 120px; display:grid; place-items:center; border-radius: 20px; background: var(--bg-elev); border:1px solid var(--border); box-shadow: var(--shadow); text-decoration:none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="54" height="54" fill="currentColor" style="color: var(--text); opacity:.95;">
              <path d="M9.036 15.293 8.89 19.23c.404 0 .579-.173.788-.38l1.894-1.83 3.924 2.874c.72.4 1.232.19 1.43-.665l2.591-12.141.001-.001c.23-1.072-.387-1.489-1.096-1.227L3.48 9.62c-1.048.408-1.032.995-.178 1.26l4.41 1.376 10.24-6.46c.48-.292.919-.13.558.162"/>
            </svg>
          </a>

          <a href="https://mail.google.com/mail/?view=cm&fs=1&to=pinnadeee@gmail.com" target="_blank" rel="noopener" aria-label="Email" title="Email"
             style="width: 120px; height: 120px; display:grid; place-items:center; border-radius: 20px; background: var(--bg-elev); border:1px solid var(--border); box-shadow: var(--shadow); text-decoration:none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="54" height="54" fill="currentColor" style="color: var(--text); opacity:.95;">
              <path d="M2 6.5A2.5 2.5 0 0 1 4.5 4h15A2.5 2.5 0 0 1 22 6.5v11A2.5 2.5 0 0 1 19.5 20h-15A2.5 2.5 0 0 1 2 17.5v-11Zm2.1-.5 7.4 5.04L19 6H4.1Zm15.4 2.1-6.56 4.46a2 2 0 0 1-2.28 0L4.1 8.1V17.5c0 .22.18.5.4.5h15c.22 0 .5-.28.5-.5V8.1Z"/>
            </svg>
          </a>

          <a href="https://wa.me/79242244888" target="_blank" rel="noopener" aria-label="WhatsApp"
             title="WhatsApp"
             style="width: 120px; height: 120px; display:grid; place-items:center; border-radius: 20px; background: var(--bg-elev); border:1px solid var(--border); box-shadow: var(--shadow); text-decoration:none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="54" height="54" fill="currentColor" style="color: var(--text); opacity:.95;">
              <path d="M20.52 3.48A11.5 11.5 0 0 0 2.64 16.92L2 22l5.2-1.6a11.46 11.46 0 0 0 5.3 1.34h.01A11.5 11.5 0 0 0 20.52 3.48Zm-3.2 13.98a9.1 9.1 0 0 1-4.81 1.39h-.01c-1.6 0-3.17-.43-4.54-1.25l-.33-.2-3.09.95.94-3.02-.21-.35A9.11 9.11 0 1 1 17.32 17.46Zm-1.18-2.7c-.19-.1-1.12-.55-1.29-.62-.17-.06-.29-.1-.41.1-.12.19-.47.62-.58.75-.11.12-.21.14-.4.05-.19-.1-.8-.29-1.52-.92-.56-.5-.94-1.11-1.05-1.3-.11-.19-.01-.29.08-.39.08-.08.19-.21.29-.32.1-.11.14-.19.21-.32.07-.14.03-.25-.01-.35-.05-.1-.41-1-.56-1.36-.15-.36-.3-.31-.41-.31-.11 0-.24-.01-.36-.01-.12 0-.33.05-.5.25-.17.19-.66.65-.66 1.57 0 .92.68 1.81.78 1.93.1.12 1.33 2.11 3.23 2.96.45.2.79.31 1.06.39.45.14.86.12 1.18.07.36-.05 1.12-.46 1.28-.9.16-.44.16-.81.11-.9-.05-.09-.17-.14-.36-.24Z"/>
            </svg>
          </a>
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


