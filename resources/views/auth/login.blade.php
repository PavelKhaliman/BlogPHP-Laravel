<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Вход • PK-Website</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Montserrat:wght@700;900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.styles.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="container header-inner">
        <div class="brand">
          <span class="dot"></span>
          <span class="brand-name">
            <a href="{{route('main.index')}}">PK-Website</a>
          </span>
        </div>
        <nav class="site-nav" aria-label="Primary">
          <a href="{{ route('blog.index') }}">Blog</a>
          <a href="{{ route('main.index') }}" >Main</a>
          <a href="#contact" class="btn btn-outline">Contact</a>
        </nav>
      </div>
    </header>

    <main>
      <section class="container auth-section" style="padding: 64px 0; display: grid; place-items: center;">
        <div class="auth-card" style="width: 100%; max-width: 520px; background: var(--bg-elev), #111; border-radius: 16px; padding: 32px; box-shadow: 0 20px 50px rgba(0,0,0,.35);">
          <h1 class="title" style="margin: 0 0 24px; font-size: 28px; line-height: 1.2;">Вход в аккаунт</h1>

          @if (session('status'))
            <div class="alert" role="alert" style="margin-bottom:16px;color:var(--text);"><strong>{{ session('status') }}</strong></div>
          @endif

          <form method="POST" action="{{ route('login') }}" novalidate>
            @csrf

            <div class="form-field" style="margin-bottom: 16px;">
              <label for="email" style="display:block;margin-bottom:8px;">Почта</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                     class="input @error('email') input-error @enderror"
                     style="width:100%;padding:12px 14px;border-radius:10px;border:1px solid var(--border,#333);background:var(--bg,#0b0b0b);color:var(--text,#f2f2f2);" />
              @error('email')
                <div class="error" role="alert" style="color:#ff6b6b;margin-top:6px;font-size: 14px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-field" style="margin-bottom: 16px;">
              <label for="password" style="display:block;margin-bottom:8px;">Пароль</label>
              <input id="password" type="password" name="password" required autocomplete="current-password"
                     class="input @error('password') input-error @enderror"
                     style="width:100%;padding:12px 14px;border-radius:10px;border:1px solid var(--border,#333);background:var(--bg,#0b0b0b);color:var(--text,#f2f2f2);" />
              @error('password')
                <div class="error" role="alert" style="color:#ff6b6b;margin-top:6px;font-size: 14px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-row" style="display:flex;align-items:center;justify-content:space-between;margin: 12px 0 22px;gap:12px;flex-wrap:wrap;">
              <label style="display:flex;align-items:center;gap:8px;cursor:pointer;">
                <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                <span>Запомнить меня</span>
              </label>

              @if (Route::has('password.request'))
                <a class="link" href="{{ route('password.request') }}" style="text-decoration:none;">Забыли пароль?</a>
              @endif
            </div>

            <div class="form-actions" style="display:flex;align-items:center;gap:12px;flex-wrap:wrap;">
              <button type="submit" class="btn btn-primary">Войти</button>
              @if (Route::has('register'))
                <a class="btn btn-ghost" href="{{ route('register') }}">Регистрация</a>
              @endif
            </div>
          </form>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="container">
        <span>© <span id="year"></span> Pavel Khaliman </span>
      </div>
    </footer>

    <script>
      document.getElementById('year').textContent = new Date().getFullYear();
    </script>
  </body>
</html>
