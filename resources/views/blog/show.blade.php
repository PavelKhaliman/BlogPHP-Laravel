@extends('layouts.main')
@section('content')

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
@endsection

