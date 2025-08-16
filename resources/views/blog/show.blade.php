<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>{{ $post->title }} • PK-Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Montserrat:wght@700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/main.styles.css"/>
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
          <a href="{{ route('blog.index') }}" aria-current="page">Blog</a>
          <a href="{{ route('cv.index') }}">CV</a>
          <a href="{{ route('contact.index') }}" class="btn btn-outline">Contact</a>
        </nav>
      </div>
    </header>

    <main>
      <article class="container" style="padding: 40px 0 80px; max-width: 860px;">
        <header style="margin-bottom: 16px;">
          <div style="color:var(--muted); font-size: 14px;">{{ optional($post->created_at)->translatedFormat('F d, Y') }}</div>
          <h1 class="title" style="font-size: clamp(28px, 5vw, 46px); margin: 6px 0 12px; filter: brightness(0.92);">{{ $post->title }}</h1>
          @if($post->post_image)
            <img src="{{ $post->image_url }}" alt="{{ $post->title }}" style="width:100%; border-radius: 16px; border:1px solid var(--border); box-shadow: var(--shadow); margin: 10px 0 18px; object-fit:cover;"/>
          @endif
        </header>
        
        <div style="color: var(--text); line-height: 1.7;">
          {!! nl2br(e($post->content)) !!}
        </div>
      </article>
    </main>

    <footer class="site-footer">
      <div class="container">
        <span>© <span id="year"></span> Pavel Khaliman</span>
      </div>
    </footer>
    <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
  </body>
</html>

