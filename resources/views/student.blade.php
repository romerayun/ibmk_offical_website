@extends('layouts.app')

@section('title', 'Студенту — ИБМК')
@section('description', 'Пространство студента Иркутского базового медицинского колледжа. Расписание занятий, образовательная среда, документы и поддержка.')

@section('content')
<div class="wrap breadcrumbs max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 flex items-center gap-3 text-[10px] text-[#8a8f99] py-5">
    <a href="{{ route('home') }}" class="hover:text-[var(--blue)] transition-colors">Главная</a>
    <span>/</span>
    <span aria-current="page" class="text-[var(--ink)] font-medium">Студенту</span>
</div>

<section class="wrap route-hero student-hero max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-8 md:py-14 grid grid-cols-1 md:grid-cols-[1.25fr_1fr] gap-8 lg:gap-14 items-center">
    <div>
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase mb-3">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ТВОЙ СТУДЕНЧЕСКИЙ НАВИГАТОР
        </div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-medium tracking-tight leading-[1.06] my-6">
            В своём ритме.<br><em class="not-italic text-[var(--blue)]">На своём месте.</em>
        </h1>
        <p class="text-xs sm:text-[13px] leading-relaxed text-[#747883] max-w-lg mb-7">
            Расписание, учебные материалы и важные документы.<br>Всё, что помогает сосредоточиться на учёбе.
        </p>
        <a class="dark-btn inline-flex items-center justify-between gap-6 bg-[var(--ink)] text-white text-xs font-medium px-5 py-4 rounded hover:bg-[var(--blue)] transition-all shadow-sm" href="#services">
            <span>Найти нужный сервис</span>
            <span class="text-[var(--lime)] text-lg leading-none">↓</span>
        </a>
    </div>
    <a class="schedule-feature bg-[var(--blue)] p-6 sm:p-8 text-white rounded-lg relative overflow-hidden block group hover:shadow-lg transition-all" href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">
        <div class="resource-meta flex justify-between items-center text-[10px] text-[#c4d1ff] tracking-wider uppercase font-semibold">
            <span>НАЧНИ С ГЛАВНОГО</span>
            <span class="text-xl group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
        </div>
        <div class="calendar-glyph grid grid-cols-3 gap-1 w-16 my-6" aria-hidden="true">
            <span class="w-4 h-4 bg-white/20 rounded-xs block"></span>
            <span class="w-4 h-4 bg-white/20 rounded-xs block"></span>
            <span class="w-4 h-4 bg-white/20 rounded-xs block"></span>
            <span class="w-4 h-4 bg-white/20 rounded-xs block"></span>
            <span class="w-4 h-4 bg-[var(--lime)] rounded-xs block"></span>
            <span class="w-4 h-4 bg-white/20 rounded-xs block"></span>
            <span class="w-4 h-4 bg-white/20 rounded-xs block"></span>
            <span class="w-4 h-4 bg-white/20 rounded-xs block"></span>
            <span class="w-4 h-4 bg-white/20 rounded-xs block"></span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-medium tracking-tight mb-2">Что сегодня<br>в расписании?</h2>
        <p class="text-xs text-[#d1dcff] leading-relaxed max-w-xs mb-4">Посмотри занятия и актуальные изменения<br class="hidden sm:inline">на странице расписания колледжа.</p>
        <strong class="text-xs font-semibold text-[var(--lime)] block">Открыть расписание ↗</strong>
    </a>
</section>

<nav class="page-jumps max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 flex gap-6 md:gap-9 border-y border-[#e1e5ec] py-5 overflow-x-auto whitespace-nowrap text-xs text-[#646c7c]" aria-label="Разделы страницы">
    <a href="#services" class="hover:text-[var(--blue)] transition-colors">Сервисы</a>
    <a href="#study-guide" class="hover:text-[var(--blue)] transition-colors">Учебный маршрут</a>
    <a href="#support" class="hover:text-[var(--blue)] transition-colors">Поддержка</a>
    <a href="#student-faq" class="hover:text-[var(--blue)] transition-colors">Вопросы и ответы</a>
</nav>

<section class="wrap section max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24" id="services">
    <div class="section-top flex items-center justify-between gap-5 mb-8">
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ПОД РУКОЙ
        </div>
        <span class="aside-label text-xs text-[#747883]">Один раздел — меньше поисков</span>
    </div>
    <div class="section-heading flex flex-col md:flex-row justify-between md:items-end gap-4 mb-10">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
            Учиться.<br><span class="blue text-[var(--blue)]">Успевать. Развиваться.</span>
        </h2>
        <p class="text-xs leading-relaxed text-[#747883]">Выбери категорию или найди сервис по названию.</p>
    </div>
    <div class="resource-controls flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4 mb-8">
        <div class="filter-tabs flex flex-wrap gap-2" role="group" aria-label="Категории сервисов">
            <button class="selected px-4 py-2 bg-[var(--ink)] text-white border border-[var(--ink)] rounded-full text-xs font-medium cursor-pointer transition-colors" data-filter="all" aria-pressed="true">Все сервисы</button>
            <button class="px-4 py-2 bg-white text-[#687181] border border-[#e0e4ed] rounded-full text-xs font-medium cursor-pointer hover:border-[#ccd2e0] transition-colors" data-filter="study" aria-pressed="false">Учёба</button>
            <button class="px-4 py-2 bg-white text-[#687181] border border-[#e0e4ed] rounded-full text-xs font-medium cursor-pointer hover:border-[#ccd2e0] transition-colors" data-filter="documents" aria-pressed="false">Документы</button>
            <button class="px-4 py-2 bg-white text-[#687181] border border-[#e0e4ed] rounded-full text-xs font-medium cursor-pointer hover:border-[#ccd2e0] transition-colors" data-filter="support" aria-pressed="false">Поддержка</button>
        </div>
        <label class="resource-search relative">
            <span class="sr-only">Поиск сервиса</span>
            <input type="search" id="resource-search" placeholder="Найти сервис…" class="w-full sm:w-60 border border-[#dfe4ee] rounded px-3.5 py-2 text-xs bg-white focus:border-[var(--blue)] focus:outline-none transition-colors pr-9">
            <span aria-hidden="true" class="absolute right-3 top-2 text-neutral-400 select-none">⌕</span>
        </label>
    </div>
    <div class="resource-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5" id="resource-grid">
        <a class="resource-card border border-[#e1e5ed] rounded-lg p-6 flex flex-col justify-between hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-all group" data-category="study" href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[10px] text-[var(--blue)] font-medium mb-3">
                    <span>01</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-2">Расписание занятий</h3>
                <p class="text-xs leading-relaxed text-[#747883] mb-6">Пары, аудитории и изменения. Проверяй перед началом учебного дня.</p>
            </div>
            <small class="text-[8px] tracking-wider text-[#9198a4] uppercase font-semibold">РАСПИСАНИЕ</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-lg p-6 flex flex-col justify-between hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-all group" data-category="study" href="https://dpo.irkbmk.ru/moodle/" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[10px] text-[var(--blue)] font-medium mb-3">
                    <span>02</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-2">Образовательная среда</h3>
                <p class="text-xs leading-relaxed text-[#747883] mb-6">Переход к онлайн-курсам и учебным материалам. Доступ — по учётной записи.</p>
            </div>
            <small class="text-[8px] tracking-wider text-[#9198a4] uppercase font-semibold">ОНЛАЙН-ОБУЧЕНИЕ</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-lg p-6 flex flex-col justify-between hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-all group" data-category="study" href="https://irkbmk.ru/biblioteka" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[10px] text-[var(--blue)] font-medium mb-3">
                    <span>03</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-2">Библиотека</h3>
                <p class="text-xs leading-relaxed text-[#747883] mb-6">Электронные ресурсы, библиотечные сервисы и информация для читателей.</p>
            </div>
            <small class="text-[8px] tracking-wider text-[#9198a4] uppercase font-semibold">ЗНАНИЯ И РЕСУРСЫ</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-lg p-6 flex flex-col justify-between hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-all group" data-category="documents" href="https://irkbmk.ru/sveden/document" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[10px] text-[var(--blue)] font-medium mb-3">
                    <span>04</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-2">Документы и правила</h3>
                <p class="text-xs leading-relaxed text-[#747883] mb-6">Локальные акты, правила внутреннего распорядка и этический кодекс.</p>
            </div>
            <small class="text-[8px] tracking-wider text-[#9198a4] uppercase font-semibold">ОФИЦИАЛЬНЫЕ ДОКУМЕНТЫ</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-lg p-6 flex flex-col justify-between hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-all group" data-category="support" href="https://irkbmk.ru/sveden/grants" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[10px] text-[var(--blue)] font-medium mb-3">
                    <span>05</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-2">Стипендии и поддержка</h3>
                <p class="text-xs leading-relaxed text-[#747883] mb-6">Актуальная информация о стипендиях и материальной помощи.</p>
            </div>
            <small class="text-[8px] tracking-wider text-[#9198a4] uppercase font-semibold">СОЦИАЛЬНАЯ ПОДДЕРЖКА</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-lg p-6 flex flex-col justify-between hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-all group" data-category="support" href="https://irkbmk.ru/node/791" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[10px] text-[var(--blue)] font-medium mb-3">
                    <span>06</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 group-hover:text-[var(--blue)] transition-colors mb-2">Общежитие</h3>
                <p class="text-xs leading-relaxed text-[#747883] mb-6">Информация о наличии общежития и количестве мест. Уточняй условия заселения.</p>
            </div>
            <small class="text-[8px] tracking-wider text-[#9198a4] uppercase font-semibold">СТУДЕНЧЕСКИЙ БЫТ</small>
        </a>
    </div>
    <p id="resource-empty" class="empty-state p-8 bg-[var(--paper)] text-xs text-center text-[#747883] rounded-lg mt-6" role="status" hidden>Такого сервиса не нашли. Измени запрос или выбери другую категорию.</p>
    <p class="source-note text-[10px] text-[#777e8c] mt-6">Сервисы открываются на действующих ресурсах колледжа. Доступ к отдельным материалам может требовать авторизации.</p>
</section>

<section class="soft-section bg-[var(--paper)] py-14 md:py-20" id="study-guide">
    <div class="wrap max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0">
        <div class="split-heading flex flex-col md:flex-row justify-between md:items-end gap-4 mb-10">
            <div>
                <div class="section-top flex items-center justify-between gap-5 mb-4">
                    <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
                        <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ОТ ПЕРВОЙ ПАРЫ ДО ПРАКТИКИ
                    </div>
                    <span class="aside-label"></span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
                    Не всё сразу.<br><span class="blue text-[var(--blue)]">Шаг за шагом.</span>
                </h2>
            </div>
            <p class="text-xs leading-relaxed text-[#747883]">
                Небольшой ориентир, который поможет<br class="hidden md:inline">организовать учебный процесс.
            </p>
        </div>
        <div class="route-timeline grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 mt-8">
            <article class="border-t border-[#d6dce8] pt-6">
                <span class="text-[8px] font-semibold tracking-wider text-[var(--blue)] block mb-3">01 / НАЧАЛО СЕМЕСТРА</span>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Собери свою базу</h3>
                <p class="text-xs leading-relaxed text-[#747883]">Проверь расписание, доступ к учебной среде и список дисциплин. Сохрани контакты куратора.</p>
            </article>
            <article class="border-t border-[#d6dce8] pt-6">
                <span class="text-[8px] font-semibold tracking-wider text-[var(--blue)] block mb-3">02 / В ТЕЧЕНИЕ УЧЁБЫ</span>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Держи свой темп</h3>
                <p class="text-xs leading-relaxed text-[#747883]">Следи за заданиями и сроками. Если нужна помощь — обратись к преподавателю до того, как накопятся вопросы.</p>
            </article>
            <article class="border-t border-[#d6dce8] pt-6">
                <span class="text-[8px] font-semibold tracking-wider text-[var(--blue)] block mb-3">03 / ПРАКТИКА И АТТЕСТАЦИЯ</span>
                <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Подготовься заранее</h3>
                <p class="text-xs leading-relaxed text-[#747883]">Уточни требования к практике, отчётным материалам и аттестации у своего руководителя.</p>
            </article>
        </div>
    </div>
</section>

<section class="wrap section support-layout max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24 grid grid-cols-1 lg:grid-cols-[1fr_1.1fr] gap-10 lg:gap-20" id="support">
    <div>
        <div class="section-top flex items-center justify-between gap-5 mb-8">
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>НЕ ОСТАВАЙСЯ С ВОПРОСОМ
            </div>
            <span class="aside-label"></span>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight mb-4">
            Поддержка —<br><span class="blue text-[var(--blue)]">часть пути.</span>
        </h2>
        <p class="body-copy text-xs sm:text-[13px] leading-relaxed text-[#747883] mb-8">
            Справка, вопрос об учёбе или сложность с доступом? Начни с правильного адресата.
        </p>
        <a class="text-link inline-flex items-center gap-4 text-xs font-semibold text-[var(--blue)] border-b border-[#cbd4fa] pb-2 hover:border-[var(--blue)] transition-colors" href="https://irkbmk.ru/studentu" target="_blank" rel="noopener">
            <span>Все материалы для обучающихся</span>
            <span aria-hidden="true">↗</span>
        </a>
    </div>
    <div class="support-list divide-y divide-[#e0e5ed] border-y border-[#e0e5ed]">
        <article class="py-6 flex gap-6 items-start">
            <span class="text-xs font-semibold text-[var(--blue)] pt-0.5">01</span>
            <div>
                <h3 class="text-lg font-medium text-neutral-900 mb-1">Учебные вопросы</h3>
                <p class="text-xs leading-relaxed text-[#747883]">Преподаватель дисциплины или куратор группы помогут разобраться с заданиями, пропусками и организацией учёбы.</p>
            </div>
        </article>
        <article class="py-6 flex gap-6 items-start">
            <span class="text-xs font-semibold text-[var(--blue)] pt-0.5">02</span>
            <div>
                <h3 class="text-lg font-medium text-neutral-900 mb-1">Справки и документы</h3>
                <p class="text-xs leading-relaxed text-[#747883] mb-2">Уточни порядок получения справки в учебной части. Контакты подразделений доступны на официальном сайте.</p>
                <a class="text-xs font-semibold text-[var(--blue)] hover:underline inline-block" href="https://irkbmk.ru/sveden/struct" target="_blank" rel="noopener">Структура и подразделения ↗</a>
            </div>
        </article>
        <article class="py-6 flex gap-6 items-start">
            <span class="text-xs font-semibold text-[var(--blue)] pt-0.5">03</span>
            <div>
                <h3 class="text-lg font-medium text-neutral-900 mb-1">Не получается войти в систему?</h3>
                <p class="text-xs leading-relaxed text-[#747883]">Проверь раскладку и данные учётной записи. Для восстановления доступа обратись к ответственному за образовательную среду через колледж.</p>
            </div>
        </article>
    </div>
</section>

<section class="wrap section compact-top max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-12 md:py-16" id="student-faq">
    <div class="section-top flex items-center justify-between gap-5 mb-6">
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ЧАСТЫЕ ВОПРОСЫ
        </div>
        <span class="aside-label"></span>
    </div>
    <h2 class="faq-title text-2xl sm:text-3xl md:text-4xl font-medium tracking-tight mb-8">Разберёмся вместе.</h2>
    <div class="faq-list divide-y divide-[#dfe3eb] border-y border-[#dfe3eb]">
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Где посмотреть изменения в расписании?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Открой <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">страницу расписания</a> и проверь актуальные данные своей группы. Если есть расхождение с сообщением преподавателя, уточни информацию у куратора.</div>
        </details>
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Как получить справку об обучении?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Обратись в учебную часть и уточни порядок подачи запроса, необходимые сведения и срок готовности. На этой странице заявления не принимаются.</div>
        </details>
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Где узнать условия назначения стипендии?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Действующие положения и сведения опубликованы в разделе <a href="https://irkbmk.ru/sveden/grants" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">«Стипендии и иные виды материальной поддержки»</a> официального сайта.</div>
        </details>
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Что делать, если пропустил занятие?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Сообщи куратору или преподавателю, уточни порядок подтверждения причины пропуска и согласуй выполнение пропущенных заданий.</div>
        </details>
    </div>
</section>

<section class="wrap route-banner max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 bg-[#eaf0ff] p-7 md:p-10 rounded-lg mb-16 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
    <div>
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase mb-2">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>МЫ РЯДОМ
        </div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium tracking-tight text-neutral-900 mb-2">Есть вопрос?<br>Начни с разговора.</h2>
        <p class="text-xs text-[#6b7893] leading-relaxed">Официальные контакты колледжа — на странице «О колледже».</p>
    </div>
    <a href="{{ route('about') }}#contacts" class="lime-btn shrink-0 inline-flex items-center gap-5 bg-[var(--lime)] text-[#152739] text-xs font-semibold px-6 py-4 rounded hover:bg-white transition-all shadow-xs">
        <span>Найти контакты</span>
        <span class="text-xl">↗</span>
    </a>
</section>
@endsection
