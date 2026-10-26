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
<body class="bg-white text-[var(--ink)] font-sans antialiased text-[15px] m-0">
<div class="utility bg-[var(--paper)] text-[10px] max-[760px]:text-[8px] text-[#656b75] border-b border-[#e9ebee]">
    <div class="wrap utility-inner w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto h-[37px] max-[760px]:h-[30px] flex items-center justify-between gap-[15px]">
        <span class="truncate">ОГБПОУ «Иркутский базовый медицинский колледж»</span>
        <div class="flex items-center gap-[30px] shrink-0">
            <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener" class="max-[760px]:hidden hover:text-[var(--blue)] transition-colors">Сведения об образовательной организации ↗</a>
            <button id="accessibility" aria-pressed="false" class="flex items-center gap-[5px] hover:text-[var(--blue)] transition-colors cursor-pointer bg-transparent border-0 p-0 text-inherit text-[10px] max-[760px]:text-0">
                <span aria-hidden="true" class="text-[16px] max-[760px]:text-[18px] leading-none">◉</span> <span>Версия для слабовидящих</span>
            </button>
        </div>
    </div>
</div>

<header class="wrap header w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto h-[103px] max-[760px]:h-[83px] flex items-center justify-between gap-[25px] max-[1100px]:gap-[12px] relative">
    <a class="brand flex items-center gap-[12px] max-[760px]:gap-[8px]" href="{{ route('home') }}" aria-label="ИБМК — главная">
        <span class="brand-mark grid grid-cols-[18px_18px] max-[760px]:grid-cols-[14px_14px] gap-[4px] max-[760px]:gap-[3px] -rotate-8">
            <i class="w-[18px] h-[18px] max-[760px]:w-[14px] max-[760px]:h-[14px] bg-[var(--blue)] rounded-[2px] block"></i>
            <i class="w-[18px] h-[18px] max-[760px]:w-[14px] max-[760px]:h-[14px] bg-[var(--blue)] rounded-tr-[12px] rounded-[2px] block"></i>
            <i class="w-[18px] h-[18px] max-[760px]:w-[14px] max-[760px]:h-[14px] bg-[var(--blue)] rounded-bl-[12px] rounded-[2px] block"></i>
            <i class="w-[18px] h-[18px] max-[760px]:w-[14px] max-[760px]:h-[14px] bg-[var(--blue)] rounded-[2px] block"></i>
        </span>
        <strong class="text-[30px] max-[1100px]:text-[27px] max-[760px]:text-[26px] font-bold tracking-[-1.3px] leading-none">
            ИБМК
            <span class="block text-[9px] max-[1100px]:text-[8px] max-[760px]:text-[6px] tracking-normal font-[450] leading-[1.5] mt-[7px] text-neutral-500">Медицина начинается здесь</span>
        </strong>
    </a>

    <nav aria-label="Основная навигация" class="flex gap-[30px] max-[1100px]:gap-[18px] text-[12px] max-[1100px]:text-[11px] font-[550]">
        <a href="{{ route('about') }}" class="hover:text-[var(--blue)] transition-colors"{!! request()->routeIs('about') ? ' aria-current="page"' : '' !!}>О колледже</a>
        <a href="{{ route('home') }}#programs" class="hover:text-[var(--blue)] transition-colors">Образование</a>
        <a href="{{ route('applicant') }}" class="hover:text-[var(--blue)] transition-colors"{!! request()->routeIs('applicant') ? ' aria-current="page"' : '' !!}>Абитуриенту</a>
        <a href="{{ route('student') }}" class="hover:text-[var(--blue)] transition-colors"{!! request()->routeIs('student') ? ' aria-current="page"' : '' !!}>Студенту</a>
    </nav>

    <div class="header-actions flex items-center gap-[24px] max-[1100px]:gap-[12px] max-[760px]:gap-[17px]">
        <button class="icon-btn p-[5px] text-[var(--ink)] hover:text-[var(--blue)] transition-colors cursor-pointer bg-transparent border-0 max-[760px]:hidden" id="search-open" aria-label="Поиск по сайту">
            <svg class="w-[20px] h-[20px] fill-none stroke-[var(--ink)] stroke-[1.6]" viewBox="0 0 24 24"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 5 5"/></svg>
        </button>
        <a class="header-cta text-[12px] max-[1100px]:text-[11px] max-[760px]:text-[10px] font-[550] flex items-center gap-[24px] max-[1100px]:gap-[12px] border border-[#dddfe5] max-[760px]:border-0 p-[15px_20px] max-[1100px]:p-[12px] max-[760px]:p-0 rounded-[4px] hover:bg-[#f2f5ff] hover:border-[#c8d4ff] transition-all" href="{{ route('applicant') }}"{!! request()->routeIs('applicant') ? ' aria-current="page"' : '' !!}>
            <span>Хочу поступить</span>
            <span class="text-[var(--blue)] text-[20px]">↗</span>
        </a>
        <button class="icon-btn menu-toggle hidden max-[760px]:block p-[5px] text-[21px] leading-none text-[var(--ink)] cursor-pointer bg-transparent border-0" aria-label="Открыть меню" aria-expanded="false">☰</button>
    </div>
</header>

<main class="w-full">
    @yield('content')
</main>

<footer class="bg-[var(--paper)]">
    <div class="wrap footer-main w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[52px] max-[760px]:py-[38px] grid grid-cols-[1.4fr_1fr_1.3fr_1fr] max-[1100px]:gap-[20px] max-[760px]:grid-cols-2 max-[760px]:gap-[30px] gap-[30px]">
        <a class="brand flex items-center gap-[12px] self-start max-[760px]:col-span-full" href="{{ route('home') }}">
            <span class="brand-mark grid grid-cols-[18px_18px] gap-[4px] -rotate-8">
                <i class="w-[18px] h-[18px] bg-[var(--blue)] rounded-[2px] block"></i>
                <i class="w-[18px] h-[18px] bg-[var(--blue)] rounded-tr-[12px] rounded-[2px] block"></i>
                <i class="w-[18px] h-[18px] bg-[var(--blue)] rounded-bl-[12px] rounded-[2px] block"></i>
                <i class="w-[18px] h-[18px] bg-[var(--blue)] rounded-[2px] block"></i>
            </span>
            <strong class="text-[30px] font-bold tracking-[-1.3px] leading-none">
                ИБМК
                <span class="block text-[9px] tracking-normal font-[450] leading-[1.5] mt-[7px] text-neutral-500">Иркутский базовый<br>медицинский колледж</span>
            </strong>
        </a>
        <div>
            <span class="footer-label text-[7px] tracking-[1.4px] text-[#868c95] block mt-[5px] mb-[19px] uppercase font-semibold">НАВИГАЦИЯ</span>
            <div class="space-y-[12px] text-[10px] text-[#5d6573] max-[760px]:leading-[1.6]">
                <a href="{{ route('about') }}" class="block hover:text-[var(--blue)] transition-colors">О колледже</a>
                <a href="{{ route('home') }}#programs" class="block hover:text-[var(--blue)] transition-colors">Специальности</a>
                <a href="{{ route('applicant') }}" class="block hover:text-[var(--blue)] transition-colors">Абитуриенту</a>
                <a href="{{ route('student') }}" class="block hover:text-[var(--blue)] transition-colors">Студенту</a>
            </div>
        </div>
        <div>
            <span class="footer-label text-[7px] tracking-[1.4px] text-[#868c95] block mt-[5px] mb-[19px] uppercase font-semibold">ПОЛЕЗНЫЕ ССЫЛКИ</span>
            <div class="space-y-[12px] text-[10px] text-[#5d6573] max-[760px]:leading-[1.6]">
                <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener" class="block hover:text-[var(--blue)] transition-colors">Официальные сведения ↗</a>
                <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener" class="block hover:text-[var(--blue)] transition-colors">Расписание ↗</a>
                <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="block hover:text-[var(--blue)] transition-colors">Действующий сайт ↗</a>
            </div>
        </div>
        <div class="footer-location max-[760px]:hidden">
            <span class="footer-label text-[7px] tracking-[1.4px] text-[#868c95] block mt-[5px] mb-[19px] uppercase font-semibold">ОБРАЗОВАНИЕ С ЗАБОТОЙ</span>
            <p class="text-[11px] leading-[1.6] text-neutral-800 m-0">Иркутск.<br>Здесь начинается твой путь.</p>
            <span class="footer-dot text-[var(--blue)] text-[17px] mt-[5px] inline-block">●</span>
        </div>
    </div>
    <div class="border-t border-[#dee2e9]">
        <div class="wrap footer-bottom w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[20px] flex max-[760px]:flex-col justify-between items-center gap-[20px] max-[760px]:gap-[12px] text-[8px] max-[760px]:leading-[1.6] text-[#858b95]">
            <span>© <span id="year">2026</span> ОГБПОУ «Иркутский базовый медицинский колледж»</span>
            <span>Концепция сайта ИБМК · Изображения созданы ИИ для концепции</span>
            <a href="#" class="hover:text-[var(--blue)] transition-colors max-[760px]:self-end">Наверх ↑</a>
        </div>
    </div>
</footer>

<dialog id="search-dialog" class="backdrop:bg-[#0d1c4e9c] backdrop:backdrop-blur-[5px] p-[40px] rounded-[6px] border-0 shadow-[0_20px_100px_#0003] w-[min(600px,calc(100%-32px))]">
    <form method="dialog" class="relative">
        <button class="close-search absolute right-[20px] top-[12px] text-[30px] text-neutral-500 hover:text-neutral-900 bg-transparent border-0 cursor-pointer" aria-label="Закрыть поиск">×</button>
    </form>
    <h2 class="text-[36px] font-medium m-0 mb-[25px]">Что ищем?</h2>
    <label for="site-search" class="text-[11px] block my-[14px]">Специальность или раздел</label>
    <input id="site-search" type="search" placeholder="Например, сестринское дело" autocomplete="off" class="w-full border border-[#ccd2e2] p-[15px] text-[14px] focus:outline-none focus:border-[var(--blue)]">
    <div id="search-results" aria-live="polite" class="mt-[15px] max-h-[40vh] overflow-y-auto"></div>
</dialog>

</body>
</html>
