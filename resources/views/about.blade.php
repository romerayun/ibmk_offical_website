@extends('layouts.app')

@section('title', 'О колледже — ИБМК')
@section('description', 'О колледже — ИБМК. Полезная информация Иркутского базового медицинского колледжа.')

@section('content')
<div class="wrap breadcrumbs max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 flex items-center gap-3 text-[10px] text-[#8a8f99] py-5">
    <a href="{{ route('home') }}" class="hover:text-[var(--blue)] transition-colors">Главная</a>
    <span>/</span>
    <span aria-current="page" class="text-[var(--ink)] font-medium">О колледже</span>
</div>

<section class="wrap route-hero about-hero max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-8 md:py-14 grid grid-cols-1 md:grid-cols-[1.1fr_1fr] gap-8 lg:gap-14 items-center">
    <div>
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase mb-3">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ИРКУТСКИЙ БАЗОВЫЙ МЕДИЦИНСКИЙ КОЛЛЕДЖ
        </div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-medium tracking-tight leading-[1.08] my-6">
            Знания —<br>в профессию.<br><em class="not-italic text-[var(--blue)]">Заботу — в дело.</em>
        </h1>
        <p class="text-xs sm:text-[13px] leading-relaxed text-[#747883] max-w-lg mb-7">
            Колледж с историей. Образование с человеческим лицом.<br>Место, с которого начинается путь в медицину.
        </p>
        <a class="dark-btn inline-flex items-center justify-between gap-7 bg-[var(--ink)] text-white text-xs font-medium px-5 py-4 rounded hover:bg-[var(--blue)] transition-all shadow-sm" href="{{ route('applicant') }}">
            <span>Стать частью ИБМК</span>
            <span class="text-[var(--lime)] text-lg leading-none">↗</span>
        </a>
    </div>
    <div class="about-hero-photo relative h-[320px] sm:h-[400px] md:h-[450px] overflow-hidden rounded shadow-sm">
        <img src="{{ asset('assets/clinical-practice.png') }}" alt="Учебное занятие с преподавателем — иллюстрация, созданная ИИ" class="w-full h-full object-cover">
        <span class="image-caption absolute bottom-4 left-4 bg-white/95 backdrop-blur-xs px-3.5 py-2.5 text-[8px] font-semibold tracking-wider uppercase text-neutral-800 rounded-xs shadow-xs">
            ЗНАТЬ. ПОНИМАТЬ. ПОМОГАТЬ.
        </span>
    </div>
</section>

<nav class="page-jumps max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 flex gap-6 md:gap-9 border-y border-[#e1e5ec] py-5 overflow-x-auto whitespace-nowrap text-xs text-[#646c7c]" aria-label="Разделы страницы">
    <a href="#identity" class="hover:text-[var(--blue)] transition-colors">О нас</a>
    <a href="#history" class="hover:text-[var(--blue)] transition-colors">История</a>
    <a href="#official" class="hover:text-[var(--blue)] transition-colors">Официальные сведения</a>
    <a href="#contacts" class="hover:text-[var(--blue)] transition-colors">Контакты</a>
</nav>

<section class="wrap section identity-layout max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24 grid grid-cols-1 md:grid-cols-[1.1fr_1fr] gap-8 lg:gap-20" id="identity">
    <div>
        <div class="section-top flex items-center justify-between gap-5 mb-8">
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>НАШЕ ОБЩЕЕ ДЕЛО
            </div>
            <span class="aside-label"></span>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
            За каждой профессией —<br><span class="blue text-[var(--blue)]">человек.</span>
        </h2>
    </div>
    <div>
        <p class="large-copy text-xl sm:text-2xl font-medium tracking-tight leading-snug mb-6 text-neutral-900">
            В медицине важны знания.<br>И то, как ты применяешь их<br>ради другого человека.
        </p>
        <p class="body-copy text-xs sm:text-[13px] leading-relaxed text-[#747883] mb-4">
            Иркутский базовый медицинский колледж — областное государственное бюджетное профессиональное образовательное учреждение. Здесь начинается путь в медицинские и фармацевтические профессии.
        </p>
        <p class="body-copy text-xs sm:text-[13px] leading-relaxed text-[#747883] mb-6">
            Выбери направление, познакомься с образовательными программами и узнай больше об условиях обучения. Первый шаг начинается с интереса к профессии.
        </p>
        <a class="text-link inline-flex items-center gap-4 text-xs font-semibold text-[var(--blue)] border-b border-[#cbd4fa] pb-2 hover:border-[var(--blue)] transition-colors" href="{{ route('applicant') }}#choose">
            <span>Направления подготовки</span>
            <span class="text-base">↗</span>
        </a>
    </div>
</section>

<section class="history-section bg-[var(--blue)] text-white py-14 md:py-20" id="history">
    <div class="wrap history-grid max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 grid grid-cols-1 md:grid-cols-[1fr_1.1fr] gap-10 lg:gap-20 items-center">
        <div>
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-white/90 uppercase mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--lime)] block"></span>С ИСТОРИЕЙ. С ПЕРСПЕКТИВОЙ.
            </div>
            <span class="history-year block text-7xl sm:text-9xl lg:text-[160px] font-medium tracking-tighter text-[var(--lime)] leading-none mt-6">
                1893
                <span class="block text-[9px] tracking-[3px] text-[#ccdbff] font-medium mt-3">ГОД ОСНОВАНИЯ</span>
            </span>
        </div>
        <div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight mb-5">
                Традиция помогать.<br><em class="not-italic text-[var(--lime)]">Продолжение — в тебе.</em>
            </h2>
            <p class="text-xs sm:text-[13px] leading-relaxed text-[#d0dbff] mb-4">
                Дата создания колледжа — 3 октября 1893 года. За этой датой — история медицинского образования и поколения людей, выбравших профессию помощи.
            </p>
            <p class="text-xs sm:text-[13px] leading-relaxed text-[#d0dbff] mb-6">
                Сегодня знакомство с колледжем может стать началом твоего собственного профессионального пути.
            </p>
            <a class="history-link inline-flex items-center gap-3 text-xs font-medium text-[var(--lime)] hover:text-white transition-colors" href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener">
                <span>Основные сведения о колледже</span>
                <span aria-hidden="true">↗</span>
            </a>
        </div>
    </div>
</section>

<section class="wrap section max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24">
    <div class="section-top flex items-center justify-between gap-5 mb-8">
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ЧТО ОБЪЕДИНЯЕТ НАШ ПУТЬ
        </div>
        <span class="aside-label"></span>
    </div>
    <div class="principles grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">
        <article class="border-t border-[#dee4ed] pt-6">
            <span class="text-[8px] font-semibold tracking-wider text-[var(--blue)] block mb-3">01 / ЗНАНИЯ</span>
            <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Понимать глубже</h3>
            <p class="text-xs leading-relaxed text-[#747883]">Разбираться в основах профессии, задавать вопросы и связывать теорию с профессиональными задачами.</p>
        </article>
        <article class="border-t border-[#dee4ed] pt-6">
            <span class="text-[8px] font-semibold tracking-wider text-[var(--blue)] block mb-3">02 / ОТВЕТСТВЕННОСТЬ</span>
            <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Действовать осознанно</h3>
            <p class="text-xs leading-relaxed text-[#747883]">Быть внимательным к деталям, соблюдать профессиональную этику и понимать значение своих решений.</p>
        </article>
        <article class="border-t border-[#dee4ed] pt-6">
            <span class="text-[8px] font-semibold tracking-wider text-[var(--blue)] block mb-3">03 / ЧЕЛОВЕК</span>
            <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Видеть личность</h3>
            <p class="text-xs leading-relaxed text-[#747883]">Сохранять уважение, учиться слышать другого и помнить, ради кого существует медицина.</p>
        </article>
    </div>
</section>

<section class="soft-section bg-[var(--paper)] py-14 md:py-20" id="official">
    <div class="wrap max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0">
        <div class="section-top flex items-center justify-between gap-5 mb-8">
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ОТКРЫТО И ПО СУЩЕСТВУ
            </div>
            <span class="aside-label"></span>
        </div>
        <div class="section-heading flex flex-col md:flex-row justify-between md:items-end gap-4 mb-10">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
                Важное —<br><span class="blue text-[var(--blue)]">в открытом доступе.</span>
            </h2>
            <p class="text-xs leading-relaxed text-[#747883]">
                Официальные документы и сведения<br class="hidden md:inline">на действующем сайте колледжа.
            </p>
        </div>
        <div class="official-grid grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-2">
            <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener" class="flex items-center gap-5 border-t border-[#d9e0eb] py-6 group hover:text-[var(--blue)] transition-colors">
                <span class="text-xs font-medium text-[var(--blue)]">01</span>
                <div>
                    <h3 class="text-base sm:text-lg font-medium text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-1">Основные сведения</h3>
                    <p class="text-[10px] text-[#747883]">Наименование, учредитель, адрес и контакты.</p>
                </div>
                <b class="ml-auto text-xl font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/struct" target="_blank" rel="noopener" class="flex items-center gap-5 border-t border-[#d9e0eb] py-6 group hover:text-[var(--blue)] transition-colors">
                <span class="text-xs font-medium text-[var(--blue)]">02</span>
                <div>
                    <h3 class="text-base sm:text-lg font-medium text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-1">Структура и управление</h3>
                    <p class="text-[10px] text-[#747883]">Подразделения и органы управления.</p>
                </div>
                <b class="ml-auto text-xl font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/document" target="_blank" rel="noopener" class="flex items-center gap-5 border-t border-[#d9e0eb] py-6 group hover:text-[var(--blue)] transition-colors">
                <span class="text-xs font-medium text-[var(--blue)]">03</span>
                <div>
                    <h3 class="text-base sm:text-lg font-medium text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-1">Документы</h3>
                    <p class="text-[10px] text-[#747883]">Устав, локальные акты и правила.</p>
                </div>
                <b class="ml-auto text-xl font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/education" target="_blank" rel="noopener" class="flex items-center gap-5 border-t border-[#d9e0eb] py-6 group hover:text-[var(--blue)] transition-colors">
                <span class="text-xs font-medium text-[var(--blue)]">04</span>
                <div>
                    <h3 class="text-base sm:text-lg font-medium text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-1">Образование</h3>
                    <p class="text-[10px] text-[#747883]">Образовательные программы и учебные материалы.</p>
                </div>
                <b class="ml-auto text-xl font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/employees" target="_blank" rel="noopener" class="flex items-center gap-5 border-t border-[#d9e0eb] py-6 group hover:text-[var(--blue)] transition-colors">
                <span class="text-xs font-medium text-[var(--blue)]">05</span>
                <div>
                    <h3 class="text-base sm:text-lg font-medium text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-1">Руководство и педагоги</h3>
                    <p class="text-[10px] text-[#747883]">Официальная информация о сотрудниках.</p>
                </div>
                <b class="ml-auto text-xl font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/objects" target="_blank" rel="noopener" class="flex items-center gap-5 border-t border-[#d9e0eb] py-6 group hover:text-[var(--blue)] transition-colors">
                <span class="text-xs font-medium text-[var(--blue)]">06</span>
                <div>
                    <h3 class="text-base sm:text-lg font-medium text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-1">Материальная база</h3>
                    <p class="text-[10px] text-[#747883]">Учебные кабинеты, библиотека и условия обучения.</p>
                </div>
                <b class="ml-auto text-xl font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
        </div>
    </div>
</section>

<section class="wrap section contact-layout max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24 grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-24 items-center" id="contacts">
    <div>
        <div class="section-top flex items-center justify-between gap-5 mb-8">
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>БУДЕМ НА СВЯЗИ
            </div>
            <span class="aside-label"></span>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight mb-4">
            Встретимся<br><span class="blue text-[var(--blue)]">в Иркутске.</span>
        </h2>
        <p class="body-copy text-xs sm:text-[13px] leading-relaxed text-[#747883] mb-8">
            Официальный адрес колледжа.<br>Перед визитом уточни нужный корпус и часы приёма.
        </p>
        <div class="contact-address space-y-4">
            <div>
                <small class="block text-[8px] tracking-wider text-[#858e9e] uppercase mb-1">Адрес</small>
                <strong class="text-xl sm:text-2xl font-medium text-neutral-900 leading-snug">664043, г. Иркутск,<br>ул. Сергеева, 3</strong>
            </div>
            <div>
                <small class="block text-[8px] tracking-wider text-[#858e9e] uppercase mb-1">Телефон</small>
                <a href="tel:+73952487513" class="text-lg sm:text-xl text-[var(--blue)] hover:underline">+7 (3952) 48-75-13 ↗</a>
            </div>
            <div>
                <small class="block text-[8px] tracking-wider text-[#858e9e] uppercase mb-1">Электронная почта</small>
                <a href="mailto:irkbmk@mail.ru" class="text-lg sm:text-xl text-[var(--blue)] hover:underline">irkbmk@mail.ru ↗</a>
            </div>
        </div>
    </div>
    <div class="location-card border border-[#e0e5ed] rounded-lg overflow-hidden bg-white shadow-xs">
        <div class="location-art h-[220px] sm:h-[250px] relative bg-[#eaf0f8] overflow-hidden" aria-hidden="true">
            <div class="location-road road-one absolute w-[120%] h-6 bg-white top-[100px] -left-5 -rotate-24"></div>
            <div class="location-road road-two absolute w-24 h-5 bg-white top-20 -left-14 rotate-65"></div>
            <div class="location-road road-three absolute w-24 h-4 bg-white top-32 left-36 rotate-65"></div>
            <span class="location-point absolute top-[75px] left-[55%] text-5xl sm:text-6xl text-[var(--blue)] leading-none select-none">✳</span>
            <span class="location-city absolute bottom-5 left-6 text-[9px] tracking-[3px] text-[#6c829b] font-medium uppercase">ИРКУТСК</span>
        </div>
        <div class="p-6 sm:p-7">
            <span class="eyebrow flex items-center gap-2 text-[9px] tracking-[1.5px] font-semibold text-[var(--blue)] uppercase mb-2">ТВОЯ ТОЧКА НАЧАЛА</span>
            <h3 class="text-2xl sm:text-3xl font-medium tracking-tight text-neutral-900 mb-2">Сергеева, 3</h3>
            <p class="text-[11px] leading-relaxed text-[#747883] mb-6">Схема иллюстративная. Точный маршрут открой на карте.</p>
            <a class="dark-btn inline-flex items-center gap-4 bg-[var(--ink)] text-white text-xs font-medium px-5 py-3.5 rounded hover:bg-[var(--blue)] transition-colors" href="https://yandex.ru/maps/?text=Иркутск%20Сергеева%203%20медицинский%20колледж" target="_blank" rel="noopener">
                <span>Построить маршрут</span>
                <span aria-hidden="true">↗</span>
            </a>
        </div>
    </div>
</section>

<section class="wrap route-banner max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 bg-[#eaf0ff] p-7 md:p-10 rounded-lg mb-16 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
    <div>
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase mb-2">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>МЫ РЯДОМ
        </div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium tracking-tight text-neutral-900 mb-2">История продолжается.<br>Присоединяйся.</h2>
        <p class="text-xs text-[#6b7893] leading-relaxed">Познакомься со специальностями и сделай первый шаг в профессию.</p>
    </div>
    <a href="{{ route('applicant') }}" class="lime-btn shrink-0 inline-flex items-center gap-5 bg-[var(--lime)] text-[#152739] text-xs font-semibold px-6 py-4 rounded hover:bg-white transition-all shadow-xs">
        <span>Я хочу поступить</span>
        <span class="text-xl">↗</span>
    </a>
</section>
@endsection
