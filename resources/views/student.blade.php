@extends('layouts.app')

@section('title', 'Студенту — ИБМК')
@section('description', 'Пространство студента Иркутского базового медицинского колледжа. Расписание занятий, образовательная среда, документы и поддержка.')

@section('content')
<div class="wrap breadcrumbs w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto flex items-center gap-[10px] text-[10px] text-[#8a8f99] py-[20px] max-[760px]:py-[16px]">
    <a href="{{ route('home') }}" class="hover:text-[var(--blue)] transition-colors">Главная</a>
    <span>/</span>
    <span aria-current="page" class="text-[var(--ink)] font-[500]">Студенту</span>
</div>

<section class="wrap route-hero student-hero w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[35px_65px] max-[760px]:py-[25px_38px] grid grid-cols-[1.25fr_1fr] max-[760px]:grid-cols-1 gap-[60px] max-[1100px]:gap-[35px] max-[760px]:gap-[30px] items-center">
    <div>
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase mb-[12px]">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ТВОЙ СТУДЕНЧЕСКИЙ НАВИГАТОР
        </div>
        <h1 class="text-[clamp(45px,4.8vw,72px)] max-[1100px]:text-[54px] max-[760px]:text-[clamp(38px,9.5vw,62px)] font-[500] tracking-[-3.5px] max-[1100px]:tracking-[-2.6px] max-[760px]:tracking-[-2px] leading-[1.06] my-[29px_25px] max-[760px]:mt-[25px]">
            В своём ритме.<br><em class="not-italic text-[var(--blue)]">На своём месте.</em>
        </h1>
        <p class="text-[13px] max-[760px]:text-[12px] leading-[1.85] text-[var(--muted)] max-w-[480px] m-0 mb-[30px]">
            Расписание, учебные материалы и важные документы.<br>Всё, что помогает сосредоточиться на учёбе.
        </p>
        <a class="dark-btn inline-flex items-center justify-between gap-[28px] bg-[var(--ink)] text-white text-[12px] font-[500] p-[17px_22px] rounded-[3px] hover:bg-[var(--blue)] transition-all" href="#services">
            <span>Найти нужный сервис</span>
            <span class="text-[var(--lime)] text-[21px] leading-none">↓</span>
        </a>
    </div>
    <a class="schedule-feature bg-[var(--blue)] p-[30px_32px] max-[1100px]:p-[25px] max-[760px]:p-[25px] text-white rounded-[4px] relative overflow-hidden block transition-all" href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">
        <div class="resource-meta flex justify-between items-center text-[8px] tracking-[1.4px] text-[#c4d1ff] uppercase font-semibold">
            <span>НАЧНИ С ГЛАВНОГО</span>
            <span class="text-[20px]">↗</span>
        </div>
        <div class="calendar-glyph grid grid-cols-3 gap-[4px] w-[50px] my-[20px]" aria-hidden="true">
            <span class="w-[14px] h-[14px] bg-white/20 rounded-[1px] block"></span>
            <span class="w-[14px] h-[14px] bg-white/20 rounded-[1px] block"></span>
            <span class="w-[14px] h-[14px] bg-white/20 rounded-[1px] block"></span>
            <span class="w-[14px] h-[14px] bg-white/20 rounded-[1px] block"></span>
            <span class="w-[14px] h-[14px] bg-[var(--lime)] rounded-[1px] block"></span>
            <span class="w-[14px] h-[14px] bg-white/20 rounded-[1px] block"></span>
            <span class="w-[14px] h-[14px] bg-white/20 rounded-[1px] block"></span>
            <span class="w-[14px] h-[14px] bg-white/20 rounded-[1px] block"></span>
            <span class="w-[14px] h-[14px] bg-white/20 rounded-[1px] block"></span>
        </div>
        <h2 class="text-[37px] max-[1100px]:text-[32px] max-[760px]:text-[34px] font-[500] tracking-[-1.7px] leading-tight my-[18px_14px]">Что сегодня<br>в расписании?</h2>
        <p class="text-[12px] max-[760px]:text-[13px] text-[#d1dcff] leading-[1.7] max-w-[320px] m-0 mb-[16px]">Посмотри занятия и актуальные изменения<br class="desktop max-[760px]:hidden">на странице расписания колледжа.</p>
        <strong class="text-[12px] font-[500] text-[var(--lime)] block">Открыть расписание ↗</strong>
    </a>
</section>

<nav class="wrap page-jumps w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto flex gap-[35px] max-[1100px]:gap-[25px] border-t border-b border-[#e1e5ec] py-[20px] max-[760px]:py-[17px] overflow-x-auto whitespace-nowrap text-[11px] max-[760px]:text-[10px] text-[#646c7c]" aria-label="Разделы страницы">
    <a href="#services" class="hover:text-[var(--blue)] transition-colors">Сервисы</a>
    <a href="#study-guide" class="hover:text-[var(--blue)] transition-colors">Учебный маршрут</a>
    <a href="#support" class="hover:text-[var(--blue)] transition-colors">Поддержка</a>
    <a href="#student-faq" class="hover:text-[var(--blue)] transition-colors">Вопросы и ответы</a>
</nav>

<section class="wrap section w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px]" id="services">
    <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ПОД РУКОЙ
        </div>
        <span class="aside-label text-[10px] text-[var(--muted)] max-[760px]:hidden">Один раздел — меньше поисков</span>
    </div>
    <div class="section-heading flex justify-between items-end gap-[30px] mb-[38px] max-[760px]:block max-[760px]:mb-[28px]">
        <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] m-0">
            Учиться.<br><span class="blue text-[var(--blue)]">Успевать. Развиваться.</span>
        </h2>
        <p class="text-[12px] text-[var(--muted)] leading-[1.8] m-0 mb-[5px] max-[760px]:mt-[20px]">Выбери категорию или найди сервис по названию.</p>
    </div>
    <div class="resource-controls flex max-[760px]:flex-col items-center max-[760px]:items-start justify-between gap-[20px] mb-[28px]">
        <div class="filter-tabs flex flex-wrap gap-[8px]" role="group" aria-label="Категории сервисов">
            <button class="selected border border-[var(--ink)] bg-[var(--ink)] text-white rounded-[30px] p-[10px_16px] max-[1100px]:p-[10px_13px] text-[11px] font-[500] cursor-pointer transition-colors" data-filter="all" aria-pressed="true">Все сервисы</button>
            <button class="border border-[#e0e4ed] bg-white text-[#687181] rounded-[30px] p-[10px_16px] max-[1100px]:p-[10px_13px] text-[11px] font-[500] cursor-pointer hover:border-[#ccd2e0] transition-colors" data-filter="study" aria-pressed="false">Учёба</button>
            <button class="border border-[#e0e4ed] bg-white text-[#687181] rounded-[30px] p-[10px_16px] max-[1100px]:p-[10px_13px] text-[11px] font-[500] cursor-pointer hover:border-[#ccd2e0] transition-colors" data-filter="documents" aria-pressed="false">Документы</button>
            <button class="border border-[#e0e4ed] bg-white text-[#687181] rounded-[30px] p-[10px_16px] max-[1100px]:p-[10px_13px] text-[11px] font-[500] cursor-pointer hover:border-[#ccd2e0] transition-colors" data-filter="support" aria-pressed="false">Поддержка</button>
        </div>
        <label class="resource-search relative">
            <span class="sr-only">Поиск сервиса</span>
            <input type="search" id="resource-search" placeholder="Найти сервис…" class="w-[240px] max-[1100px]:w-[190px] max-[760px]:w-full border border-[#dfe4ee] rounded-[3px] p-[10px_14px] text-[12px] bg-white focus:border-[var(--blue)] focus:outline-none transition-colors pr-[36px]">
            <span aria-hidden="true" class="absolute right-[13px] top-[7px] text-[23px] text-[#838c9a] select-none">⌕</span>
        </label>
    </div>
    <div class="resource-grid grid grid-cols-3 max-[760px]:grid-cols-2 max-[360px]:grid-cols-1 gap-[18px] max-[760px]:gap-[12px]" id="resource-grid">
        <a class="resource-card border border-[#e1e5ed] rounded-[4px] p-[24px] max-[1100px]:p-[20px] max-[760px]:p-[18px] flex flex-col min-h-[235px] max-[760px]:min-h-[220px] hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-colors group" data-category="study" href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[9px] text-[var(--blue)] font-medium mb-[10px]">
                    <span>01</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-[21px] max-[1100px]:text-[19px] tracking-[-0.7px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors my-[25px_12px]">Расписание занятий</h3>
                <p class="text-[11px] text-[var(--muted)] leading-[1.8] m-0 mb-[25px]">Пары, аудитории и изменения. Проверяй перед началом учебного дня.</p>
            </div>
            <small class="mt-auto text-[7px] text-[#9198a4] tracking-[1px] uppercase">РАСПИСАНИЕ</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-[4px] p-[24px] max-[1100px]:p-[20px] max-[760px]:p-[18px] flex flex-col min-h-[235px] max-[760px]:min-h-[220px] hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-colors group" data-category="study" href="https://dpo.irkbmk.ru/moodle/" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[9px] text-[var(--blue)] font-medium mb-[10px]">
                    <span>02</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-[21px] max-[1100px]:text-[19px] tracking-[-0.7px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors my-[25px_12px]">Образовательная среда</h3>
                <p class="text-[11px] text-[var(--muted)] leading-[1.8] m-0 mb-[25px]">Переход к онлайн-курсам и учебным материалам. Доступ — по учётной записи.</p>
            </div>
            <small class="mt-auto text-[7px] text-[#9198a4] tracking-[1px] uppercase">ОНЛАЙН-ОБУЧЕНИЕ</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-[4px] p-[24px] max-[1100px]:p-[20px] max-[760px]:p-[18px] flex flex-col min-h-[235px] max-[760px]:min-h-[220px] hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-colors group" data-category="study" href="https://irkbmk.ru/biblioteka" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[9px] text-[var(--blue)] font-medium mb-[10px]">
                    <span>03</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-[21px] max-[1100px]:text-[19px] tracking-[-0.7px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors my-[25px_12px]">Библиотека</h3>
                <p class="text-[11px] text-[var(--muted)] leading-[1.8] m-0 mb-[25px]">Электронные ресурсы, библиотечные сервисы и информация для читателей.</p>
            </div>
            <small class="mt-auto text-[7px] text-[#9198a4] tracking-[1px] uppercase">ЗНАНИЯ И РЕСУРСЫ</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-[4px] p-[24px] max-[1100px]:p-[20px] max-[760px]:p-[18px] flex flex-col min-h-[235px] max-[760px]:min-h-[220px] hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-colors group" data-category="documents" href="https://irkbmk.ru/sveden/document" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[9px] text-[var(--blue)] font-medium mb-[10px]">
                    <span>04</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-[21px] max-[1100px]:text-[19px] tracking-[-0.7px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors my-[25px_12px]">Документы и правила</h3>
                <p class="text-[11px] text-[var(--muted)] leading-[1.8] m-0 mb-[25px]">Локальные акты, правила внутреннего распорядка и этический кодекс.</p>
            </div>
            <small class="mt-auto text-[7px] text-[#9198a4] tracking-[1px] uppercase">ОФИЦИАЛЬНЫЕ ДОКУМЕНТЫ</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-[4px] p-[24px] max-[1100px]:p-[20px] max-[760px]:p-[18px] flex flex-col min-h-[235px] max-[760px]:min-h-[220px] hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-colors group" data-category="support" href="https://irkbmk.ru/sveden/grants" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[9px] text-[var(--blue)] font-medium mb-[10px]">
                    <span>05</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-[21px] max-[1100px]:text-[19px] tracking-[-0.7px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors my-[25px_12px]">Стипендии и поддержка</h3>
                <p class="text-[11px] text-[var(--muted)] leading-[1.8] m-0 mb-[25px]">Актуальная информация о стипендиях и материальной помощи.</p>
            </div>
            <small class="mt-auto text-[7px] text-[#9198a4] tracking-[1px] uppercase">СОЦИАЛЬНАЯ ПОДДЕРЖКА</small>
        </a>
        <a class="resource-card border border-[#e1e5ed] rounded-[4px] p-[24px] max-[1100px]:p-[20px] max-[760px]:p-[18px] flex flex-col min-h-[235px] max-[760px]:min-h-[220px] hover:bg-[#f1f4ff] hover:border-[#b6c5ff] transition-colors group" data-category="support" href="https://irkbmk.ru/node/791" target="_blank" rel="noopener">
            <div>
                <div class="resource-meta flex justify-between items-center text-[9px] text-[var(--blue)] font-medium mb-[10px]">
                    <span>06</span>
                    <span class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                </div>
                <h3 class="text-[21px] max-[1100px]:text-[19px] tracking-[-0.7px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors my-[25px_12px]">Общежитие</h3>
                <p class="text-[11px] text-[var(--muted)] leading-[1.8] m-0 mb-[25px]">Информация о наличии общежития и количестве мест. Уточняй условия заселения.</p>
            </div>
            <small class="mt-auto text-[7px] text-[#9198a4] tracking-[1px] uppercase">СТУДЕНЧЕСКИЙ БЫТ</small>
        </a>
    </div>
    <p id="resource-empty" class="empty-state p-[35px] bg-[var(--paper)] text-[13px] text-center text-[#747883] leading-[1.8] mt-[24px]" role="status" hidden>Такого сервиса не нашли. Измени запрос или выбери другую категорию.</p>
    <p class="source-note text-[10px] text-[#777e8c] mt-[24px]">Сервисы открываются на действующих ресурсах колледжа. Доступ к отдельным материалам может требовать авторизации.</p>
</section>

<section class="soft-section bg-[var(--paper)] py-[70px] max-[760px]:py-[55px]" id="study-guide">
    <div class="wrap w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto">
        <div class="split-heading flex max-[760px]:flex-col justify-between max-[760px]:items-start items-end gap-[35px] max-[760px]:gap-[20px]">
            <div>
                <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
                    <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
                        <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ОТ ПЕРВОЙ ПАРЫ ДО ПРАКТИКИ
                    </div>
                    <span class="aside-label"></span>
                </div>
                <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] m-0">
                    Не всё сразу.<br><span class="blue text-[var(--blue)]">Шаг за шагом.</span>
                </h2>
            </div>
            <p class="text-[12px] text-[var(--muted)] leading-[1.8] m-0 max-[760px]:mt-[10px]">
                Небольшой ориентир, который поможет<br class="desktop max-[760px]:hidden">организовать учебный процесс.
            </p>
        </div>
        <div class="route-timeline grid grid-cols-3 max-[760px]:grid-cols-1 gap-[35px] max-[760px]:gap-[25px] mt-[45px]">
            <article class="border-t border-[#d6dce8] pt-[22px]">
                <span class="text-[8px] tracking-[1px] text-[var(--blue)] block mb-[10px]">01 / НАЧАЛО СЕМЕСТРА</span>
                <h3 class="text-[22px] font-[500] tracking-[-0.6px] text-neutral-900 my-[25px_14px]">Собери свою базу</h3>
                <p class="text-[12px] leading-[1.8] text-[var(--muted)] max-w-[320px] max-[760px]:max-w-none m-0">Проверь расписание, доступ к учебной среде и список дисциплин. Сохрани контакты куратора.</p>
            </article>
            <article class="border-t border-[#d6dce8] pt-[22px]">
                <span class="text-[8px] tracking-[1px] text-[var(--blue)] block mb-[10px]">02 / В ТЕЧЕНИЕ УЧЁБЫ</span>
                <h3 class="text-[22px] font-[500] tracking-[-0.6px] text-neutral-900 my-[25px_14px]">Держи свой темп</h3>
                <p class="text-[12px] leading-[1.8] text-[var(--muted)] max-w-[320px] max-[760px]:max-w-none m-0">Следи за заданиями и сроками. Если нужна помощь — обратись к преподавателю до того, как накопятся вопросы.</p>
            </article>
            <article class="border-t border-[#d6dce8] pt-[22px]">
                <span class="text-[8px] tracking-[1px] text-[var(--blue)] block mb-[10px]">03 / ПРАКТИКА И АТТЕСТАЦИЯ</span>
                <h3 class="text-[22px] font-[500] tracking-[-0.6px] text-neutral-900 my-[25px_14px]">Подготовься заранее</h3>
                <p class="text-[12px] leading-[1.8] text-[var(--muted)] max-w-[320px] max-[760px]:max-w-none m-0">Уточни требования к практике, отчётным материалам и аттестации у своего руководителя.</p>
            </article>
        </div>
    </div>
</section>

<section class="wrap section support-layout w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px] grid grid-cols-[1fr_1.1fr] max-[760px]:grid-cols-1 gap-[90px] max-[1100px]:gap-[45px] max-[760px]:gap-[30px]" id="support">
    <div>
        <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>НЕ ОСТАВАЙСЯ С ВОПРОСОМ
            </div>
            <span class="aside-label"></span>
        </div>
        <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] m-0 mb-[20px]">
            Поддержка —<br><span class="blue text-[var(--blue)]">часть пути.</span>
        </h2>
        <p class="body-copy text-[13px] leading-[1.85] text-[var(--muted)] m-0 mb-[30px] max-w-[490px]">
            Справка, вопрос об учёбе или сложность с доступом? Начни с правильного адресата.
        </p>
        <a class="text-link inline-flex items-center gap-[25px] text-[var(--blue)] text-[11px] font-[500] border-b border-[#cbd4fa] py-[15px] hover:border-[var(--blue)] transition-colors" href="https://irkbmk.ru/studentu" target="_blank" rel="noopener">
            <span>Все материалы для обучающихся</span>
            <span aria-hidden="true">↗</span>
        </a>
    </div>
    <div class="support-list">
        <article class="py-[22px] flex gap-[24px] border-t border-[#e0e5ed]">
            <span class="text-[10px] text-[var(--blue)] pt-[3px] font-semibold">01</span>
            <div>
                <h3 class="text-[18px] font-[500] tracking-[-0.3px] text-neutral-900 m-0 mb-[10px]">Учебные вопросы</h3>
                <p class="text-[12px] text-[var(--muted)] leading-[1.8] m-0">Преподаватель дисциплины или куратор группы помогут разобраться с заданиями, пропусками и организацией учёбы.</p>
            </div>
        </article>
        <article class="py-[22px] flex gap-[24px] border-t border-[#e0e5ed]">
            <span class="text-[10px] text-[var(--blue)] pt-[3px] font-semibold">02</span>
            <div>
                <h3 class="text-[18px] font-[500] tracking-[-0.3px] text-neutral-900 m-0 mb-[10px]">Справки и документы</h3>
                <p class="text-[12px] text-[var(--muted)] leading-[1.8] m-0 mb-[8px]">Уточни порядок получения справки в учебной части. Контакты подразделений доступны на официальном сайте.</p>
                <a class="text-[10px] text-[var(--blue)] hover:underline inline-block" href="https://irkbmk.ru/sveden/struct" target="_blank" rel="noopener">Структура и подразделения ↗</a>
            </div>
        </article>
        <article class="py-[22px] flex gap-[24px] border-t border-b border-[#e0e5ed]">
            <span class="text-[10px] text-[var(--blue)] pt-[3px] font-semibold">03</span>
            <div>
                <h3 class="text-[18px] font-[500] tracking-[-0.3px] text-neutral-900 m-0 mb-[10px]">Не получается войти в систему?</h3>
                <p class="text-[12px] text-[var(--muted)] leading-[1.8] m-0">Проверь раскладку и данные учётной записи. Для восстановления доступа обратись к ответственному за образовательную среду через колледж.</p>
            </div>
        </article>
    </div>
</section>

<section class="wrap section compact-top w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px] pt-[10px]" id="student-faq">
    <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ЧАСТЫЕ ВОПРОСЫ
        </div>
        <span class="aside-label"></span>
    </div>
    <h2 class="faq-title text-[36px] max-[760px]:text-[28px] font-[500] tracking-[-1.5px] leading-tight mb-[30px]">Разберёмся вместе.</h2>
    <div class="faq-list">
        <details class="border-t border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Где посмотреть изменения в расписании?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">Открой <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">страницу расписания</a> и проверь актуальные данные своей группы. Если есть расхождение с сообщением преподавателя, уточни информацию у куратора.</div>
        </details>
        <details class="border-t border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Как получить справку об обучении?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">Обратись в учебную часть и уточни порядок подачи запроса, необходимые сведения и срок готовности. На этой странице заявления не принимаются.</div>
        </details>
        <details class="border-t border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Где узнать условия назначения стипендии?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">Действующие положения и сведения опубликованы в разделе <a href="https://irkbmk.ru/sveden/grants" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">«Стипендии и иные виды материальной поддержки»</a> официального сайта.</div>
        </details>
        <details class="border-t border-b border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Что делать, если пропустил занятие?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">Сообщи куратору или преподавателю, уточни порядок подтверждения причины пропуска и согласуй выполнение пропущенных заданий.</div>
        </details>
    </div>
</section>

<section class="wrap route-banner w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto bg-[#eaf0ff] p-[42px] max-[760px]:p-[28px] rounded-[4px] mb-[70px] max-[760px]:mb-[50px] flex max-[760px]:flex-col items-center max-[760px]:items-start justify-between gap-[35px] max-[760px]:gap-[20px]">
    <div>
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase mb-[8px]">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>МЫ РЯДОМ
        </div>
        <h2 class="text-[34px] max-[760px]:text-[26px] tracking-[-1.2px] font-[500] text-neutral-900 mt-[22px] mb-[10px]">Есть вопрос?<br>Начни с разговора.</h2>
        <p class="text-[11px] text-[#6b7893] leading-[1.8] m-0">Официальные контакты колледжа — на странице «О колледже».</p>
    </div>
    <a href="{{ route('about') }}#contacts" class="lime-btn shrink-0 inline-flex items-center gap-[28px] bg-[var(--lime)] text-[#152739] text-[12px] font-[550] py-[18px] px-[21px] rounded-[3px] hover:bg-white hover:-translate-y-0.5 transition-all shadow-xs">
        <span>Найти контакты</span>
        <span class="text-[21px]">↗</span>
    </a>
</section>
@endsection
