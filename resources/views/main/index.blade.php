@extends('layouts.main')
@section('content')

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
    
@endsection
    


