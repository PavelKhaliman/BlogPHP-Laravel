@extends('layouts.main')
@section('content')

    <main>
      <section class="container" style="padding: 48px 0 80px; max-width: 980px;">
        <header style="margin-bottom: 24px;">
          <h1 class="title" style="font-size: clamp(28px, 5vw, 48px);">Мои проекты:</h1>
          <p class="subtitle">Проекты написанные для себя и для учебных целей</p>
        </header>

        <div class="posts-grid" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px;">
         
        <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">Мой сайт</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">Сайт на котором вы сейчас находитесь</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/BlogPHP-Laravel">Репозиторий</a>              
              </div>
            </div>
          </article>

          <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">ГШ-созвездия</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">Решение задачи в игре Perfect World для ГШ и сама игра(9 сфер) 
                с привязкой к текущему сайту(GOleng)</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/PerfectWorld">Репозиторий</a>              
              </div>
            </div>
          </article>

          <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">Планировщик задач / TasksScheduler</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">Данный проект реализует функциональность планировщика задач. Планировщик хранит задачи; каждая из них содержит дату дедлайна и 
                заголовок с комментарием, pадачи повторяются по заданному правилу 
                (ежегодно или через некторое колличество дней)</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/TasksScheduler">Репозиторий</a>                
              </div>
            </div>
          </article>

          <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">Web версия KeySwitcher</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">представляет собой простой HTTP-сервис на Go, 
                предназначенный для автоматической смены клавиатурной раскладки с английской (EN) на русскую (RU). Сервис получает текст от клиента, заменяет символы согласно заранее заданному соответствию между 
                английскими и русскими символами и возвращает преобразованный текст обратно клиенту.</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/KeySwitcher-web-">Репозиторий</a>              
              </div>
            </div>
          </article>

          <article class="post-card" style="background: var(--bg-elev); border:1px solid var(--border); border-radius: 16px; overflow:hidden; box-shadow: var(--shadow); display:flex; flex-direction:column; min-height: 260px;">
            <div style="padding: 14px 16px; display:flex; flex-direction:column; flex:1;">
              <h2 style="margin:0 0 8px; font-size: 20px; line-height:1.2;">Desktop версия KeySwitcher</h2>
              <p style="margin:0 0 12px; color:var(--muted); font-size: 14px;">KeySwitcher — это десктопное приложение, 
                которое позволяет переводить текст с английской раскладки клавиатуры на русскую. 
                Например, если вы неправильно набрали текст «Ghbdtn vbh!», п
                риложение переделает его на «Привет Мир!».</p>
              <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:auto;">
                <a class="btn btn-soft" target="_blank" rel="noopener" href="https://github.com/PavelKhaliman/KeySwitcher-Desktop-s">Репозиторий</a>              
              </div>
            </div>
          </article>

         


        </div>
      </section>
    </main>
@endsection


