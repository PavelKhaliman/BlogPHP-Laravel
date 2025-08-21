<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PK-Website</title> 

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Montserrat:wght@700;900&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.styles.css" />
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
          <a href="{{route('blog.index')}}">Blog</a>
          <a href="{{ route('cv.index') }}">CV</a>
          <a href="{{ route('myproject.index') }}">My Project</a>
          <a href="{{ route('personal.main.index') }}">ЛК</a>
          <a href="{{ route('contact.index') }}">Contact</a>
          <div class="dropdown">
            <button class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Other</button>
            <ul class="dropdown-menu" role="menu" aria-label="Other">
              <li><a href="/game">PW-ГШ</a></li>
            </ul>
          </div>
          @auth
  <form method="POST" action="{{ route('logout') }}" style="display:inline">
    @csrf
    <button type="submit" class="btn btn-outline">Выйти</button>
  </form>
@else
  <a href="{{ route('login') }}">Login</a>
@endauth
        </nav>
      </div>
    </header>

    @yield('content')

    <footer class="site-footer">
      <div class="container">
        <span>© <span id="year"></span> Pavel Khaliman </span>
      </div>
    </footer>

    <script>
      // Update year
      document.getElementById('year').textContent = new Date().getFullYear();

      // Swap photos: click/tap on secondary or tertiary moves it to primary position
      (function () {
        const primaryImg = document.querySelector('.photo-wrap.primary .photo');
        const swapWraps = document.querySelectorAll('.photo-wrap.secondary, .photo-wrap.tertiary');
        if (!primaryImg || !swapWraps.length) return;

        swapWraps.forEach((wrap) => {
          wrap.setAttribute('role', 'button');
          wrap.setAttribute('tabindex', '0');
          const label = (wrap.querySelector('.photo') && wrap.querySelector('.photo').getAttribute('alt')) || 'фото';
          wrap.setAttribute('aria-label', 'Сделать главным: ' + label);

          const onActivate = () => {
            const clickedImg = wrap.querySelector('.photo');
            if (!clickedImg) return;
            const tmpSrc = primaryImg.src;
            const tmpAlt = primaryImg.alt;
            primaryImg.src = clickedImg.src;
            primaryImg.alt = clickedImg.alt;
            clickedImg.src = tmpSrc;
            clickedImg.alt = tmpAlt;
          };

          wrap.addEventListener('click', onActivate);
          wrap.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
              e.preventDefault();
              onActivate();
            }
          });
        });
      })();

      // Simple accessible dropdown for "Other"
      (function () {
        const dd = document.querySelector('.dropdown');
        if (!dd) return;
        const toggle = dd.querySelector('.dropdown-toggle');
        const menu = dd.querySelector('.dropdown-menu');
        if (!toggle || !menu) return;
        const close = () => { dd.classList.remove('open'); toggle.setAttribute('aria-expanded','false'); };
        const open = () => { dd.classList.add('open'); toggle.setAttribute('aria-expanded','true'); };
        toggle.addEventListener('click', (e) => {
          e.preventDefault();
          if (dd.classList.contains('open')) close(); else open();
        });
        // Hide when pointer leaves dropdown area (after short delay to allow moving into menu)
        let hideTimer;
        dd.addEventListener('mouseleave', () => {
          hideTimer = setTimeout(() => close(), 200);
        });
        dd.addEventListener('mouseenter', () => { if (hideTimer) clearTimeout(hideTimer); });
        document.addEventListener('click', (e) => {
          if (!dd.contains(e.target)) close();
        });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') close(); });
      })();
    </script>
  </body>
  </html>


