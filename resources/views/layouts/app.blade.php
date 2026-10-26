<!doctype html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#163ae4">
    <title>@yield('title', 'ИБМК — Будущее медицины начинается с тебя')</title>
    <meta name="description" content="@yield('description', 'Новое видение главной страницы Иркутского базового медицинского колледжа. Специальности, поступление и студенческая жизнь.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;450;500;550;600;650;700;750;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-[var(--ink)] font-sans antialiased text-[15px]">
<div class="utility bg-[var(--paper)] text-[10px] text-[#656b75] border-b border-[#e9ebee]">
    <div class="wrap utility-inner max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 h-[37px] flex items-center justify-between gap-4">
        <span class="truncate">ОГБПОУ «Иркутский базовый медицинский колледж»</span>
        <div class="flex items-center gap-5 sm:gap-7 shrink-0">
            <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener" class="hidden sm:inline-block hover:text-[var(--blue)] transition-colors">Сведения об образовательной организации ↗</a>
            <button id="accessibility" aria-pressed="false" class="flex items-center gap-1.5 hover:text-[var(--blue)] transition-colors cursor-pointer bg-transparent border-0 p-0 text-inherit text-[10px]">
                <span aria-hidden="true" class="text-base leading-none">◉</span> <span class="hidden sm:inline">Версия для слабовидящих</span>
            </button>
        </div>
    </div>
</div>

<header class="wrap header max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 h-[83px] md:h-[103px] flex items-center justify-between gap-6 relative">
    <a class="brand flex items-center gap-3 group" href="{{ route('home') }}" aria-label="ИБМК — главная">
        <span class="brand-mark grid grid-cols-2 gap-1 -rotate-8 transition-transform group-hover:rotate-0">
            <i class="w-3.5 h-3.5 sm:w-[18px] sm:h-[18px] bg-[var(--blue)] rounded-xs block"></i>
            <i class="w-3.5 h-3.5 sm:w-[18px] sm:h-[18px] bg-[var(--blue)] rounded-tr-xl rounded-xs block"></i>
            <i class="w-3.5 h-3.5 sm:w-[18px] sm:h-[18px] bg-[var(--blue)] rounded-bl-xl rounded-xs block"></i>
            <i class="w-3.5 h-3.5 sm:w-[18px] sm:h-[18px] bg-[var(--blue)] rounded-xs block"></i>
        </span>
        <strong class="text-2xl sm:text-[30px] font-bold tracking-[-1.3px] leading-none">
            ИБМК
            <span class="block text-[6px] sm:text-[9px] tracking-normal font-medium leading-tight mt-1.5 text-neutral-500">Медицина начинается здесь</span>
        </strong>
    </a>

    <nav aria-label="Основная навигация" class="hidden md:flex items-center gap-6 lg:gap-[30px] text-xs font-semibold">
        <a href="{{ route('about') }}" class="hover:text-[var(--blue)] transition-colors py-1 relative"{!! request()->routeIs('about') ? ' aria-current="page"' : '' !!}>О колледже</a>
        <a href="{{ route('home') }}#programs" class="hover:text-[var(--blue)] transition-colors py-1">Образование</a>
        <a href="{{ route('applicant') }}" class="hover:text-[var(--blue)] transition-colors py-1 relative"{!! request()->routeIs('applicant') ? ' aria-current="page"' : '' !!}>Абитуриенту</a>
        <a href="{{ route('student') }}" class="hover:text-[var(--blue)] transition-colors py-1 relative"{!! request()->routeIs('student') ? ' aria-current="page"' : '' !!}>Студенту</a>
    </nav>

    <div class="header-actions flex items-center gap-4 sm:gap-6">
        <button class="icon-btn p-1.5 text-neutral-700 hover:text-[var(--blue)] transition-colors cursor-pointer bg-transparent border-0" id="search-open" aria-label="Поиск по сайту">
            <svg class="w-5 h-5 fill-none stroke-current stroke-[1.6]" viewBox="0 0 24 24"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 5 5"/></svg>
        </button>
        <a class="header-cta text-xs font-semibold flex items-center gap-3 sm:gap-6 border border-[#dddfe5] px-3.5 sm:px-5 py-2.5 sm:py-3.5 rounded hover:bg-[#f2f5ff] hover:border-[#c8d4ff] transition-all" href="{{ route('applicant') }}"{!! request()->routeIs('applicant') ? ' aria-current="page"' : '' !!}>
            <span>Хочу поступить</span>
            <span class="text-[var(--blue)] text-base sm:text-lg">↗</span>
        </a>
        <button class="icon-btn menu-toggle md:hidden p-1.5 text-2xl leading-none text-neutral-800 cursor-pointer bg-transparent border-0" aria-label="Открыть меню" aria-expanded="false">☰</button>
    </div>
</header>

<main class="w-full">
    @yield('content')
</main>

<footer class="bg-[var(--paper)] mt-auto border-t border-[#dee2e9]/50">
    <div class="wrap footer-main max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-10 md:py-[52px] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1.3fr_1fr] gap-8 lg:gap-[30px]">
        <a class="brand flex items-center gap-3 self-start" href="{{ route('home') }}">
            <span class="brand-mark grid grid-cols-2 gap-1 -rotate-8">
                <i class="w-3.5 h-3.5 bg-[var(--blue)] rounded-xs block"></i>
                <i class="w-3.5 h-3.5 bg-[var(--blue)] rounded-tr-lg rounded-xs block"></i>
                <i class="w-3.5 h-3.5 bg-[var(--blue)] rounded-bl-lg rounded-xs block"></i>
                <i class="w-3.5 h-3.5 bg-[var(--blue)] rounded-xs block"></i>
            </span>
            <strong class="text-2xl font-bold tracking-tight leading-none">
                ИБМК
                <span class="block text-[9px] tracking-normal font-normal leading-relaxed mt-1 text-neutral-500">Иркутский базовый<br>медицинский колледж</span>
            </strong>
        </a>
        <div>
            <span class="footer-label text-[7px] tracking-[1.4px] text-[#868c95] block mb-4 font-semibold uppercase">Навигация</span>
            <div class="flex flex-col gap-2.5 text-[10px] text-[#5d6573]">
                <a href="{{ route('about') }}" class="hover:text-[var(--blue)] transition-colors">О колледже</a>
                <a href="{{ route('home') }}#programs" class="hover:text-[var(--blue)] transition-colors">Специальности</a>
                <a href="{{ route('applicant') }}" class="hover:text-[var(--blue)] transition-colors">Абитуриенту</a>
                <a href="{{ route('student') }}" class="hover:text-[var(--blue)] transition-colors">Студенту</a>
            </div>
        </div>
        <div>
            <span class="footer-label text-[7px] tracking-[1.4px] text-[#868c95] block mb-4 font-semibold uppercase">Полезные ссылки</span>
            <div class="flex flex-col gap-2.5 text-[10px] text-[#5d6573]">
                <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener" class="hover:text-[var(--blue)] transition-colors">Официальные сведения ↗</a>
                <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener" class="hover:text-[var(--blue)] transition-colors">Расписание ↗</a>
                <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="hover:text-[var(--blue)] transition-colors">Действующий сайт ↗</a>
            </div>
        </div>
        <div class="footer-location hidden lg:block">
            <span class="footer-label text-[7px] tracking-[1.4px] text-[#868c95] block mb-4 font-semibold uppercase">Образование с заботой</span>
            <p class="text-[11px] leading-relaxed text-neutral-600 mb-2">Иркутск.<br>Здесь начинается твой путь.</p>
            <span class="footer-dot text-[var(--blue)] text-base">●</span>
        </div>
    </div>
    <div class="border-t border-[#dee2e9]">
        <div class="wrap footer-bottom max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-5 flex flex-col sm:flex-row justify-between items-center gap-3 text-[8px] text-[#858b95]">
            <span>© <span id="year">2026</span> ОГБПОУ «Иркутский базовый медицинский колледж»</span>
            <span>Концепция сайта ИБМК · Изображения созданы ИИ для концепции</span>
            <a href="#" class="hover:text-[var(--blue)] transition-colors self-end sm:self-auto">Наверх ↑</a>
        </div>
    </div>
</footer>

<dialog id="search-dialog" class="backdrop:bg-[#0d1c4e9c] backdrop:backdrop-blur-sm p-6 sm:p-10 rounded-lg border-0 shadow-2xl max-w-[600px] w-[calc(100%-32px)]">
    <form method="dialog" class="relative">
        <button class="close-search absolute right-0 -top-2 text-3xl text-neutral-400 hover:text-neutral-800 bg-transparent border-0 cursor-pointer" aria-label="Закрыть поиск">×</button>
    </form>
    <h2 class="text-2xl sm:text-4xl font-semibold mb-4 tracking-tight">Что ищем?</h2>
    <label for="site-search" class="text-xs text-neutral-500 block mb-2">Специальность или раздел</label>
    <input id="site-search" type="search" placeholder="Например, сестринское дело" autocomplete="off" class="w-full border border-[#ccd2e2] rounded p-3 text-sm focus:border-[var(--blue)] focus:outline-none transition-colors">
    <div id="search-results" aria-live="polite" class="mt-4 max-h-[40vh] overflow-y-auto divide-y divide-[#e2e5ee]"></div>
</dialog>

</body>
</html>
