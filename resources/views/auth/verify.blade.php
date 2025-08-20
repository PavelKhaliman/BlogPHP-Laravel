<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Подтверждение почты • PK-Website</title>

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
          <a href="{{ route('blog.index') }}">Blog</a>
          <a href="{{ route('cv.index') }}">CV</a>
          <a href="{{ route('myproject.index') }}">My Project</a>
          <a href="{{ route('contact.index') }}" class="btn btn-outline">Contact</a>
        </nav>
      </div>
    </header>

    <main>
      <section class="container auth-section" style="padding: 64px 0; display: grid; place-items: center;">
        <div class="auth-card" style="width: 100%; max-width: 560px; background: var(--bg-elev), #111; border-radius: 16px; padding: 32px; box-shadow: 0 20px 50px rgba(0,0,0,.35);">
          <h1 class="title" style="margin: 0 0 12px; font-size: 28px; line-height: 1.2;">Подтвердите электронную почту</h1>
          <p class="subtitle" style="color: var(--muted); margin: 0 0 18px;">Мы отправили ссылку для подтверждения на указанную почту. Перейдите по ссылке из письма, чтобы продолжить.</p>

          @if (session('status') == 'verification-link-sent')
            <div class="alert" role="alert" style="margin-bottom:16px;color:var(--text);">
              Ссылка для подтверждения повторно отправлена на ваш e‑mail.
            </div>
          @endif

          <div style="display:flex; gap:12px; flex-wrap:wrap; align-items:center;">
            <form method="POST" action="{{ route('verification.send') }}">
              @csrf
              <button type="submit" class="btn btn-primary">Отправить письмо ещё раз</button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-ghost">Выйти</button>
            </form>
          </div>
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



