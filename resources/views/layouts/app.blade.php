<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#163ae4">
    <title>@yield('title', 'ИБМК — Будущее медицины начинается с тебя')</title>
    <meta name="description" content="@yield('description', 'Новое видение главной страницы Иркутского базового медицинского колледжа. Специальности, поступление и студенческая жизнь.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;450;500;550;600;650;700;750;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('pages.css') }}">
</head>
<body>
<div class="utility">
    <div class="wrap utility-inner">
        <span>ОГБПОУ «Иркутский базовый медицинский колледж»</span>
        <div>
            <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener">Сведения об образовательной организации ↗</a>
            <button id="accessibility" aria-pressed="false"><span aria-hidden="true">◉</span> Версия для слабовидящих</button>
        </div>
    </div>
</div>
<header class="wrap header">
    <a class="brand" href="{{ route('home') }}" aria-label="ИБМК — главная">
        <span class="brand-mark"><i></i><i></i><i></i><i></i></span>
        <strong>ИБМК<span>Медицина начинается здесь</span></strong>
    </a>
    <nav aria-label="Основная навигация">
        <a href="{{ route('about') }}"{!! request()->routeIs('about') ? ' aria-current="page"' : '' !!}>О колледже</a>
        <a href="{{ route('home') }}#programs">Образование</a>
        <a href="{{ route('applicant') }}"{!! request()->routeIs('applicant') ? ' aria-current="page"' : '' !!}>Абитуриенту</a>
        <a href="{{ route('student') }}"{!! request()->routeIs('student') ? ' aria-current="page"' : '' !!}>Студенту</a>
    </nav>
    <div class="header-actions">
        <button class="icon-btn" id="search-open" aria-label="Поиск по сайту">
            <svg viewBox="0 0 24 24"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 5 5"/></svg>
        </button>
        <a class="header-cta" href="{{ route('applicant') }}"{!! request()->routeIs('applicant') ? ' aria-current="page"' : '' !!}>Хочу поступить <span>↗</span></a>
        <button class="icon-btn menu-toggle" aria-label="Открыть меню" aria-expanded="false">☰</button>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="wrap footer-main">
        <a class="brand" href="{{ route('home') }}">
            <span class="brand-mark"><i></i><i></i><i></i><i></i></span>
            <strong>ИБМК<span>Иркутский базовый<br>медицинский колледж</span></strong>
        </a>
        <div>
            <span class="footer-label">НАВИГАЦИЯ</span>
            <a href="{{ route('about') }}">О колледже</a>
            <a href="{{ route('home') }}#programs">Специальности</a>
            <a href="{{ route('applicant') }}">Абитуриенту</a>
            <a href="{{ route('student') }}">Студенту</a>
        </div>
        <div>
            <span class="footer-label">ПОЛЕЗНЫЕ ССЫЛКИ</span>
            <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener">Официальные сведения ↗</a>
            <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">Расписание ↗</a>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener">Действующий сайт ↗</a>
        </div>
        <div class="footer-location">
            <span class="footer-label">ОБРАЗОВАНИЕ С ЗАБОТОЙ</span>
            <p>Иркутск.<br>Здесь начинается твой путь.</p>
            <span class="footer-dot">●</span>
        </div>
    </div>
    <div class="wrap footer-bottom">
        <span>© <span id="year">2026</span> ОГБПОУ «Иркутский базовый медицинский колледж»</span>
        <span>Концепция сайта ИБМК · Изображения созданы ИИ для концепции</span>
        <a href="#">Наверх ↑</a>
    </div>
</footer>

<dialog id="search-dialog">
    <form method="dialog">
        <button class="close-search" aria-label="Закрыть поиск">×</button>
    </form>
    <h2>Что ищем?</h2>
    <label for="site-search">Специальность или раздел</label>
    <input id="site-search" type="search" placeholder="Например, сестринское дело" autocomplete="off">
    <div id="search-results" aria-live="polite"></div>
</dialog>

<script src="{{ asset('app.js') }}"></script>
</body>
</html>
