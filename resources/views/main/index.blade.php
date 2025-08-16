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
          <a href="{{ route('login') }}">Login</a>
          <a href="{{route('blog.index')}}">Blog</a>
          <a href="{{ route('cv.index') }}">CV</a>
          <a href="{{ route('myproject.index') }}">My Project</a>
          <a href="{{ route('personal.main.index') }}">ЛК</a>
          <a href="{{ route('contact.index') }}" class="btn btn-outline">Contact</a>
        </nav>
      </div>
    </header>

    <main>
      <section class="hero container">
        <div class="hero-text">
          <h1 class="title" aria-label="WELCOM TO MY WEBSITE">
            <span class="title-line">WELCOM</span>
            <span class="title-line">TO MY WEBSITE</span>
          </h1>
          
          <div class="cta">
            <a class="btn btn-primary" href="{{ route('myproject.index') }}">Посмотреть проекты</a>
            <a class="btn btn-ghost" href="{{ route('contact.index') }}">Связаться</a>
          </div>
        </div>
        <div class="hero-visual">
          <div class="photo-stack">
            <div class="photo-wrap primary" aria-hidden="true">
              <img src="assets/Main1.jpg" alt="Main photo" class="photo" />
              <span class="ring ring-1"></span>
              <span class="ring ring-2"></span>
            </div>
            <div class="photo-wrap secondary" aria-hidden="true">
              <img src="assets/main2.jpg" alt="Second photo" class="photo" />
              <span class="ring ring-1"></span>
            </div>
            <div class="photo-wrap tertiary" aria-hidden="true">
              <img src="assets/main3.jpg"" alt="Third photo" class="photo" />
              <span class="ring ring-1"></span>
            </div>
          </div>
        </div>
      </section>

      <section class="placeholder container" id="projects">
        <h2>Обо мне</h2>
        <p>Хотелось бы написать что-то интересное, но пока не придумал</p>
      </section>
    </main>

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
    </script>
  </body>
  </html>


