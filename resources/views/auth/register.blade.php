<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Регистрация • PK-Website</title>

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
          <a href="{{ route('main.index') }}">Main</a>
          <a href="#contact" class="btn btn-outline">Contact</a>
        </nav>
      </div>
    </header>

    <main>
      <section class="container auth-section" style="padding: 64px 0; display: grid; place-items: center;">
        <div class="auth-card" style="width: 100%; max-width: 520px; background: var(--bg-elev), #111; border-radius: 16px; padding: 32px; box-shadow: 0 20px 50px rgba(0,0,0,.35);">
          <h1 class="title" style="margin: 0 0 24px; font-size: 28px; line-height: 1.2;">Регистрация</h1>

          @if ($errors->any())
            <div class="alert" role="alert" style="margin-bottom:16px;color:#ff6b6b;">
              <ul style="margin:0;padding-left:18px;">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ route('register') }}" novalidate>
            @csrf

            <div class="form-field" style="margin-bottom: 16px;">
              <label for="name" style="display:block;margin-bottom:8px;">Имя</label>
              <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                     class="input @error('name') input-error @enderror"
                     style="width:100%;padding:12px 14px;border-radius:10px;border:1px solid var(--border,#333);background:var(--bg,#0b0b0b);color:var(--text,#f2f2f2);" />
              @error('name')
                <div class="error" role="alert" style="color:#ff6b6b;margin-top:6px;font-size: 14px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-field" style="margin-bottom: 16px;">
              <label for="email" style="display:block;margin-bottom:8px;">Почта</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                     class="input @error('email') input-error @enderror"
                     style="width:100%;padding:12px 14px;border-radius:10px;border:1px solid var(--border,#333);background:var(--bg,#0b0b0b);color:var(--text,#f2f2f2);" />
              @error('email')
                <div class="error" role="alert" style="color:#ff6b6b;margin-top:6px;font-size: 14px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-field" style="margin-bottom: 16px;">
              <label for="password" style="display:block;margin-bottom:8px;">Пароль</label>
              <input id="password" type="password" name="password" required autocomplete="new-password"
                     class="input @error('password') input-error @enderror"
                     style="width:100%;padding:12px 14px;border-radius:10px;border:1px solid var(--border,#333);background:var(--bg,#0b0b0b);color:var(--text,#f2f2f2);" />
              @error('password')
                <div class="error" role="alert" style="color:#ff6b6b;margin-top:6px;font-size: 14px;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-field" style="margin-bottom: 24px;">
              <label for="password-confirm" style="display:block;margin-bottom:8px;">Повторить пароль</label>
              <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
                     class="input"
                     style="width:100%;padding:12px 14px;border-radius:10px;border:1px solid var(--border,#333);background:var(--bg,#0b0b0b);color:var(--text,#f2f2f2);" />
            </div>

            <div class="form-actions" style="display:flex;align-items:center;gap:12px;flex-wrap:wrap;">
              <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
              <a class="btn btn-ghost" href="{{ route('login') }}">У меня уже есть аккаунт</a>
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
