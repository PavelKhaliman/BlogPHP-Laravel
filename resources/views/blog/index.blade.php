@extends('layouts.main')
@section('content')

    <main>
      <section class="container" style="padding: 40px 0 60px;">
        <h1 class="title" style="margin:0 0 24px; font-size: 36px;">Последние записи</h1>

        <div class="posts-grid" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
          @foreach($posts as $post)
            <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column;">
              <a href="{{ route('blog.show', $post->id) }}" style="display:block;">
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" style="width:100%; height:180px; object-fit:cover; object-position:center; display:block;" />
              </a>
              <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
                <div class="small text-muted" style="color:var(--muted); font-size: 13px; margin-bottom: 6px;">{{ optional($post->created_at)->translatedFormat('F d, Y') }}</div>
                <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">{{ $post->title }}</h2>
                <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">{{ $post->subtitle }}</p>

                <a class="btn btn-soft btn-read" href="{{ route('blog.show', $post->id) }}" style="margin-top:auto; align-self:flex-start;">Читать →</a>
              </div>
            </article>
          @endforeach
        </div>

        <div style="margin-top: 24px; display:flex; justify-content:center;">
          {{ $posts->links() }}
        </div>
      </section>
    </main>

    @endsection
