@extends('layouts.app')

@section('title', 'ИБМК — Будущее медицины начинается с тебя')
@section('description', 'Новое видение главной страницы Иркутского базового медицинского колледжа. Специальности, поступление и студенческая жизнь.')

@section('content')
<section class="hero hero-carousel relative overflow-hidden bg-[#173aca] text-white min-h-[668px] md:h-[710px]" role="region" aria-roledescription="карусель" aria-label="Знакомство с колледжем" tabindex="0" data-paused="false">
    <article class="hero-slide is-active absolute inset-0 opacity-100 visible" role="group" aria-roledescription="слайд" aria-label="1 из 3" aria-hidden="false">
        <div class="hero-image slide-image-0 absolute inset-0 md:left-[36%] bg-cover bg-no-repeat" role="img" aria-label="Студенты в медицинской лаборатории — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/medical-students.png') }}')"></div>
        <div class="hero-shade absolute inset-0 z-0"></div>
        <div class="wrap hero-content max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 pt-10 sm:pt-14 relative z-10">
            <div class="hero-kicker flex items-center gap-2.5 text-[8px] sm:text-[10px] tracking-widest font-semibold text-white/90 uppercase">
                <span class="tiny-cross text-[var(--lime)] text-xl sm:text-2xl leading-none">✳</span>УЧИСЬ ПОМОГАТЬ. МЕНЯЙ ЖИЗНИ.
            </div>
            <h1 class="hero-heading text-4xl sm:text-6xl md:text-7xl lg:text-[76px] font-semibold tracking-tight leading-[1.06] max-w-4xl my-6 md:my-8" id="hero-title">
                Будущее<br>медицины<br>начинается <em class="not-italic text-[var(--lime)]">с тебя.</em>
            </h1>
            <div class="hero-bottom mt-6">
                <p class="text-xs sm:text-[13px] leading-relaxed text-[#e6eaff] max-w-md mb-6">
                    Иркутский базовый медицинский колледж.<br>Знания, которые становятся делом.<br>Профессия, которая имеет значение.
                </p>
                <a class="lime-btn inline-flex items-center gap-6 bg-[var(--lime)] text-[#152739] text-xs font-semibold px-6 py-4 rounded hover:bg-white transition-all shadow-md" href="#programs">
                    <span>Найти свою специальность</span>
                    <span class="text-xl leading-none">↗</span>
                </a>
            </div>
        </div>
        <div class="hero-note hidden md:block absolute right-12 top-12 text-right text-sm leading-snug text-white/95">
            Люди.<br>Знания.<br><b class="text-[var(--lime)] font-semibold">Жизнь.</b>
        </div>
    </article>

    <article class="hero-slide absolute inset-0 opacity-0 invisible" role="group" aria-roledescription="слайд" aria-label="2 из 3" aria-hidden="true" inert>
        <div class="hero-image slide-image-1 absolute inset-0 md:left-[36%] bg-cover bg-no-repeat" role="img" aria-label="Практическое занятие — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/clinical-practice.png') }}')"></div>
        <div class="hero-shade absolute inset-0 z-0"></div>
        <div class="wrap hero-content max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 pt-10 sm:pt-14 relative z-10">
            <div class="hero-kicker flex items-center gap-2.5 text-[8px] sm:text-[10px] tracking-widest font-semibold text-white/90 uppercase">
                <span class="tiny-cross text-[var(--lime)] text-xl sm:text-2xl leading-none">✳</span>ОТ ПЕРВОГО ИНТЕРЕСА — К ПРОФЕССИИ.
            </div>
            <h2 class="hero-heading text-4xl sm:text-6xl md:text-7xl lg:text-[76px] font-semibold tracking-tight leading-[1.06] max-w-4xl my-6 md:my-8">
                Не просто знать.<br><em class="not-italic text-[var(--lime)]">Уметь помогать.</em>
            </h2>
            <div class="hero-bottom mt-6">
                <p class="text-xs sm:text-[13px] leading-relaxed text-[#e6eaff] max-w-md mb-6">
                    Разобраться в профессии — значит увидеть<br>за учебными задачами настоящего человека.<br>Познакомься с ИБМК.
                </p>
                <a class="lime-btn inline-flex items-center gap-6 bg-[var(--lime)] text-[#152739] text-xs font-semibold px-6 py-4 rounded hover:bg-white transition-all shadow-md" href="{{ route('about') }}">
                    <span>Узнать о колледже</span>
                    <span class="text-xl leading-none">↗</span>
                </a>
            </div>
        </div>
        <div class="hero-note hidden md:block absolute right-12 top-12 text-right text-sm leading-snug text-white/95">
            Слушать.<br>Понимать.<br><b class="text-[var(--lime)] font-semibold">Помогать.</b>
        </div>
    </article>

    <article class="hero-slide absolute inset-0 opacity-0 invisible" role="group" aria-roledescription="слайд" aria-label="3 из 3" aria-hidden="true" inert>
        <div class="hero-image slide-image-2 absolute inset-0 md:left-[36%] bg-cover bg-no-repeat" role="img" aria-label="Будущие медицинские специалисты — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/medical-students.png') }}')"></div>
        <div class="hero-shade absolute inset-0 z-0"></div>
        <div class="wrap hero-content max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 pt-10 sm:pt-14 relative z-10">
            <div class="hero-kicker flex items-center gap-2.5 text-[8px] sm:text-[10px] tracking-widest font-semibold text-white/90 uppercase">
                <span class="tiny-cross text-[var(--lime)] text-xl sm:text-2xl leading-none">✳</span>ТВОЙ ПУТЬ. ТВОЯ КОМАНДА.
            </div>
            <h2 class="hero-heading text-4xl sm:text-6xl md:text-7xl lg:text-[76px] font-semibold tracking-tight leading-[1.06] max-w-4xl my-6 md:my-8">
                Место, где<br>начинается<br><em class="not-italic text-[var(--lime)]">твой путь.</em>
            </h2>
            <div class="hero-bottom mt-6">
                <p class="text-xs sm:text-[13px] leading-relaxed text-[#e6eaff] max-w-md mb-6">
                    Учёба складывается из маленьких шагов.<br>Расписание, материалы и полезные сервисы —<br>всё рядом на странице студента.
                </p>
                <a class="lime-btn inline-flex items-center gap-6 bg-[var(--lime)] text-[#152739] text-xs font-semibold px-6 py-4 rounded hover:bg-white transition-all shadow-md" href="{{ route('student') }}">
                    <span>В пространство студента</span>
                    <span class="text-xl leading-none">↗</span>
                </a>
            </div>
        </div>
        <div class="hero-note hidden md:block absolute right-12 top-12 text-right text-sm leading-snug text-white/95">
            Учиться.<br>Находить.<br><b class="text-[var(--lime)] font-semibold">Расти.</b>
        </div>
    </article>

    <div class="wrap slider-controls max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 absolute left-0 right-0 bottom-6 md:bottom-8 flex items-center gap-5 z-20">
        <div class="slider-position flex items-baseline gap-2 text-sm tabular-nums">
            <span class="slide-current text-[var(--lime)] font-bold">01</span>
            <span class="slide-divider text-[#b1c1f9] text-[9px]">/ 03</span>
        </div>
        <div class="slider-dots flex items-center gap-2" role="group" aria-label="Выбрать слайд">
            <button class="slide-dot is-current w-8 sm:w-9 h-8 sm:h-9 relative bg-transparent border-0 cursor-pointer" aria-label="Слайд 1: Будущее медицины" aria-current="true" data-slide="0"><span></span></button>
            <button class="slide-dot w-8 sm:w-9 h-8 sm:h-9 relative bg-transparent border-0 cursor-pointer" aria-label="Слайд 2: Уметь помогать" data-slide="1"><span></span></button>
            <button class="slide-dot w-8 sm:w-9 h-8 sm:h-9 relative bg-transparent border-0 cursor-pointer" aria-label="Слайд 3: Твой путь" data-slide="2"><span></span></button>
        </div>
        <div class="slider-buttons flex items-center gap-2">
            <button data-slide-action="previous" aria-label="Предыдущий слайд" class="w-8 h-8 sm:w-9 sm:h-9 rounded-full border border-white/40 flex items-center justify-center hover:bg-[var(--lime)] hover:border-[var(--lime)] hover:text-[var(--ink)] transition-colors cursor-pointer text-base">←</button>
            <button data-slide-action="next" aria-label="Следующий слайд" class="w-8 h-8 sm:w-9 sm:h-9 rounded-full border border-white/40 flex items-center justify-center hover:bg-[var(--lime)] hover:border-[var(--lime)] hover:text-[var(--ink)] transition-colors cursor-pointer text-base">→</button>
            <button data-slide-action="pause" aria-label="Остановить автопрокрутку" aria-pressed="false" class="w-7 h-7 flex items-center justify-center text-white/80 hover:text-white transition-colors cursor-pointer ml-1">
                <svg aria-hidden="true" class="w-4 h-4 fill-none stroke-current stroke-2" viewBox="0 0 20 20"><path d="M7 5v10M13 5v10"/></svg>
            </button>
        </div>
        <span class="slider-location hidden sm:inline-block text-[8px] tracking-wider text-[#d1dcff] uppercase ml-auto font-medium">ИРКУТСК · ОБРАЗОВАНИЕ С ЗАБОТОЙ</span>
    </div>
    <p class="sr-only" aria-live="polite" aria-atomic="true" id="slide-announcement"></p>
</section>

<div class="wrap shortcut-bar max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 grid grid-cols-1 md:grid-cols-3 border-b border-[#dfe2e9]">
    <a href="{{ route('applicant') }}" class="flex items-center gap-4 py-5 md:py-7 md:pr-6 md:border-r border-[#dfe2e9] hover:text-[var(--blue)] transition-colors group">
        <span class="shortcut-no text-[9px] text-[#90949e]">01</span>
        <span class="text-xs sm:text-sm font-medium">Как поступить</span>
        <b class="ml-auto text-lg text-[var(--blue)] font-normal group-hover:translate-x-1 transition-transform">↗</b>
    </a>
    <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener" class="flex items-center gap-4 py-5 md:py-7 md:px-6 md:border-r border-[#dfe2e9] hover:text-[var(--blue)] transition-colors group">
        <span class="shortcut-no text-[9px] text-[#90949e]">02</span>
        <span class="text-xs sm:text-sm font-medium">Расписание занятий</span>
        <b class="ml-auto text-lg text-[var(--blue)] font-normal group-hover:translate-x-1 transition-transform">↗</b>
    </a>
    <a href="https://dpo.irkbmk.ru/" target="_blank" rel="noopener" class="flex items-center gap-4 py-5 md:py-7 md:pl-6 hover:text-[var(--blue)] transition-colors group">
        <span class="shortcut-no text-[9px] text-[#90949e]">03</span>
        <span class="text-xs sm:text-sm font-medium">Дополнительное образование</span>
        <b class="ml-auto text-lg text-[var(--blue)] font-normal group-hover:translate-x-1 transition-transform">↗</b>
    </a>
</div>

<section class="wrap section programs max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24" id="programs">
    <div class="section-top flex items-center justify-between gap-5 mb-8">
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ОБРАЗОВАНИЕ
        </div>
        <span class="aside-label text-xs text-[#747883]">Найди дело, которое будет важным</span>
    </div>
    <div class="section-heading flex flex-col md:flex-row justify-between md:items-end gap-4 mb-10">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
            Разные пути.<br>Одно <span class="blue text-[var(--blue)]">призвание.</span>
        </h2>
        <p class="text-xs leading-relaxed text-[#747883]">
            Выбери направление, в котором твои знания<br class="hidden md:inline"> и внимание к людям станут профессией.
        </p>
    </div>
    <div class="program-layout grid grid-cols-1 lg:grid-cols-[1.75fr_1fr] gap-8 lg:gap-11">
        <div class="program-list border-t border-[#dfe2e9] divide-y divide-[#dfe2e9]">
            <button class="program active w-full text-left flex items-center gap-6 py-6 transition-all hover:bg-[#f0f3ff] hover:pl-4" data-program="0" aria-expanded="true">
                <span class="program-code text-[9px] text-[#747883] tracking-wide min-w-[58px]">31.02.01</span>
                <span>
                    <strong class="block text-xl sm:text-2xl font-medium tracking-tight">Лечебное дело</strong>
                    <small class="block text-[10px] text-[#747883] mt-1.5">Быть рядом, когда помощь нужна больше всего</small>
                </span>
                <i class="ml-auto text-xl font-normal not-italic text-[#7e8491]">↗</i>
            </button>
            <button class="program w-full text-left flex items-center gap-6 py-6 transition-all hover:bg-[#f0f3ff] hover:pl-4" data-program="1" aria-expanded="false">
                <span class="program-code text-[9px] text-[#747883] tracking-wide min-w-[58px]">34.02.01</span>
                <span>
                    <strong class="block text-xl sm:text-2xl font-medium tracking-tight">Сестринское дело</strong>
                    <small class="block text-[10px] text-[#747883] mt-1.5">Забота, знания и внимание к каждому</small>
                </span>
                <i class="ml-auto text-xl font-normal not-italic text-[#7e8491]">↗</i>
            </button>
            <button class="program w-full text-left flex items-center gap-6 py-6 transition-all hover:bg-[#f0f3ff] hover:pl-4" data-program="2" aria-expanded="false">
                <span class="program-code text-[9px] text-[#747883] tracking-wide min-w-[58px]">31.02.02</span>
                <span>
                    <strong class="block text-xl sm:text-2xl font-medium tracking-tight">Акушерское дело</strong>
                    <small class="block text-[10px] text-[#747883] mt-1.5">Помогать новой жизни начинаться</small>
                </span>
                <i class="ml-auto text-xl font-normal not-italic text-[#7e8491]">↗</i>
            </button>
            <button class="program w-full text-left flex items-center gap-6 py-6 transition-all hover:bg-[#f0f3ff] hover:pl-4" data-program="3" aria-expanded="false">
                <span class="program-code text-[9px] text-[#747883] tracking-wide min-w-[58px]">33.02.01</span>
                <span>
                    <strong class="block text-xl sm:text-2xl font-medium tracking-tight">Фармация</strong>
                    <small class="block text-[10px] text-[#747883] mt-1.5">Понимать точную науку о лекарствах</small>
                </span>
                <i class="ml-auto text-xl font-normal not-italic text-[#7e8491]">↗</i>
            </button>
        </div>
        <article class="program-preview bg-[#eaf0ff] p-7 rounded relative overflow-hidden min-h-[350px] flex flex-col justify-between" aria-live="polite">
            <div>
                <div class="preview-top flex justify-between items-center text-[8px] tracking-wider text-[var(--blue)] font-semibold uppercase mb-4">
                    <span id="preview-tag">ТВОЯ БУДУЩАЯ ПРОФЕССИЯ</span>
                    <span class="line-cross text-2xl text-[var(--blue)] leading-none">✳</span>
                </div>
                <span class="preview-number block text-[9px] text-[#6d7a9f] font-medium" id="preview-number">01 / 04</span>
                <h3 class="text-2xl sm:text-3xl font-medium tracking-tight text-neutral-900 my-4" id="preview-title">Фельдшер</h3>
                <p class="text-[11px] leading-relaxed text-[#5e6c8c] max-w-xs" id="preview-description">Оценивать состояние пациента, оказывать медицинскую помощь и принимать ответственные решения.</p>
            </div>
            <a id="preview-link" href="https://irkbmk.ru/node/613" target="_blank" rel="noopener" class="text-xs font-semibold text-[var(--blue)] flex items-center gap-3 hover:underline pt-4">
                <span>Подробнее о программе</span>
                <span class="text-lg leading-none">↗</span>
            </a>
            <div class="preview-art absolute -right-16 -bottom-20 rotate-[-27deg] opacity-70 pointer-events-none" aria-hidden="true">
                <span class="block border-[20px] border-[#d5e0ff] w-40 h-40 absolute right-0 bottom-0"></span>
                <span class="block border-[20px] border-[#d5e0ff] w-64 h-64 absolute right-0 bottom-0"></span>
            </div>
        </article>
    </div>
    <p class="source-note text-[10px] text-[#777e8c] mt-5">Условия и наличие набора уточняйте в приёмной комиссии. <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">Информация на действующем сайте ↗</a></p>
</section>

<section class="about-section bg-[var(--paper)] py-14 md:py-20" id="about">
    <div class="wrap about-layout max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-24 items-center">
        <div class="about-photo relative h-[320px] sm:h-[400px] md:h-[470px] overflow-hidden rounded shadow-sm">
            <img src="{{ asset('assets/clinical-practice.png') }}" alt="Практическое занятие с преподавателем — иллюстрация, созданная ИИ" loading="lazy" class="w-full h-full object-cover saturate-80">
            <span class="photo-sticker absolute bottom-5 left-5 bg-[var(--lime)] text-[#152739] px-5 py-3 -rotate-4 text-base sm:text-xl font-medium tracking-tight rounded-xs shadow-sm">
                Дело жизни.<br>Каждый день.
            </span>
        </div>
        <div class="about-text">
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase mb-3">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ЗНАКОМЬСЯ, ИБМК
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight my-6">
                Больше, чем<br>образование.<br><span class="blue text-[var(--blue)]">Ближе к людям.</span>
            </h2>
            <p class="text-xs sm:text-[13px] leading-relaxed text-[#747883] mb-4">
                Медицина начинается с желания помочь. А профессиональный путь — с места, где учат понимать человека и действовать осознанно.
            </p>
            <p class="text-xs sm:text-[13px] leading-relaxed text-[#747883] mb-6">
                Иркутский базовый медицинский колледж — пространство, где ты можешь сделать первый шаг в профессию и найти своё направление.
            </p>
            <a class="text-link inline-flex items-center gap-4 text-xs font-semibold text-[var(--blue)] border-b border-[#cbd4fa] pb-2 hover:border-[var(--blue)] transition-colors" href="{{ route('about') }}">
                <span>Познакомиться с колледжем</span>
                <span class="text-base">↗</span>
            </a>
            <div class="about-values flex flex-wrap gap-2 mt-6">
                <span class="text-[9px] px-3 py-1.5 border border-[#d8dde6] rounded-full text-neutral-600 font-medium">Знания для жизни</span>
                <span class="text-[9px] px-3 py-1.5 border border-[#d8dde6] rounded-full text-neutral-600 font-medium">Внимание к человеку</span>
                <span class="text-[9px] px-3 py-1.5 border border-[#d8dde6] rounded-full text-neutral-600 font-medium">Профессиональное развитие</span>
            </div>
        </div>
    </div>
</section>

<section class="wrap section admission max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24" id="admission">
    <div class="section-top flex items-center justify-between gap-5 mb-8">
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ПОСТУПАЮЩИМ
        </div>
        <span class="aside-label text-xs text-[#747883]">Твой первый шаг в медицину</span>
    </div>
    <div class="section-heading flex flex-col md:flex-row justify-between md:items-end gap-4 mb-10">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
            Большой путь.<br><span class="blue text-[var(--blue)]">Понятное начало.</span>
        </h2>
        <p class="text-xs leading-relaxed text-[#747883]">
            От первого интереса к профессии<br class="hidden md:inline">до решения, которое меняет будущее.
        </p>
    </div>
    <div class="steps grid grid-cols-1 md:grid-cols-3 gap-8 my-10 md:my-12">
        <article class="border-t border-[#d8dee8] pt-6">
            <span class="step-number text-xs font-semibold text-[var(--blue)] flex justify-between items-center mb-4">
                <span>01</span>
                <i class="not-italic text-lg">↗</i>
            </span>
            <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Выбери направление</h3>
            <p class="text-xs leading-relaxed text-[#747883] mb-4">Познакомься со специальностями и подумай, какая работа ближе именно тебе.</p>
            <a href="#programs" class="text-xs font-semibold text-[var(--blue)] hover:underline inline-block">Смотреть специальности ↗</a>
        </article>
        <article class="border-t border-[#d8dee8] pt-6">
            <span class="step-number text-xs font-semibold text-[var(--blue)] flex justify-between items-center mb-4">
                <span>02</span>
                <i class="not-italic text-lg">↗</i>
            </span>
            <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Узнай условия приёма</h3>
            <p class="text-xs leading-relaxed text-[#747883] mb-4">Уточни доступные программы, необходимые документы и сроки подачи заявления.</p>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="text-xs font-semibold text-[var(--blue)] hover:underline inline-block">На официальный сайт ↗</a>
        </article>
        <article class="border-t border-[#d8dee8] pt-6">
            <span class="step-number text-xs font-semibold text-[var(--blue)] flex justify-between items-center mb-4">
                <span>03</span>
                <i class="not-italic text-lg">↗</i>
            </span>
            <h3 class="text-xl font-medium tracking-tight text-neutral-900 mb-3">Сделай первый шаг</h3>
            <p class="text-xs leading-relaxed text-[#747883] mb-4">Проверь актуальные правила приёма и способ подачи документов в колледж.</p>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="text-xs font-semibold text-[var(--blue)] hover:underline inline-block">Информация о поступлении ↗</a>
        </article>
    </div>
    <div class="divide-y divide-[#e0e3e9] border-y border-[#e0e3e9]">
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Можно ли поступить после 9 или 11 класса?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <p class="text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Требования к уровню образования зависят от специальности и действующего плана приёма. Уточните актуальные условия на официальном сайте или в приёмной комиссии колледжа.</p>
        </details>
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Какие документы понадобятся?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <p class="text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Точный перечень документов, требования к медицинскому осмотру и сроки подачи публикуются в действующих правилах приёма колледжа. Перед подачей заявления проверьте актуальную редакцию на irkbmk.ru.</p>
        </details>
    </div>
</section>

<section class="student-section bg-[#1239dd] text-white py-14 md:py-20" id="students">
    <div class="wrap student-layout max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-24 items-center">
        <div>
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-white/90 uppercase mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--lime)] block"></span>УЖЕ С НАМИ
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight mb-4">
                Всё нужное<br>для <em class="not-italic text-[var(--lime)]">твоего ритма.</em>
            </h2>
            <p class="text-xs sm:text-[13px] text-[#c7d2ff] leading-relaxed">Меньше поисков. Больше времени на главное.</p>
        </div>
        <div class="student-links divide-y divide-white/20 border-y border-white/20">
            <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener" class="flex items-center justify-between py-5 hover:text-[var(--lime)] transition-colors group">
                <div>
                    <small class="block text-[8px] tracking-wider text-[#bac9ff] uppercase mb-1">ПЛАНИРУЙ СВОЙ ДЕНЬ</small>
                    <span class="text-lg sm:text-xl font-medium tracking-tight">Расписание занятий</span>
                </div>
                <b class="text-2xl text-[var(--lime)] font-light group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://dpo.irkbmk.ru/moodle/" target="_blank" rel="noopener" class="flex items-center justify-between py-5 hover:text-[var(--lime)] transition-colors group">
                <div>
                    <small class="block text-[8px] tracking-wider text-[#bac9ff] uppercase mb-1">УЧИСЬ ОНЛАЙН</small>
                    <span class="text-lg sm:text-xl font-medium tracking-tight">Образовательная среда</span>
                </div>
                <b class="text-2xl text-[var(--lime)] font-light group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="flex items-center justify-between py-5 hover:text-[var(--lime)] transition-colors group">
                <div>
                    <small class="block text-[8px] tracking-wider text-[#bac9ff] uppercase mb-1">ОСТАВАЙСЯ В КУРСЕ</small>
                    <span class="text-lg sm:text-xl font-medium tracking-tight">Новости колледжа</span>
                </div>
                <b class="text-2xl text-[var(--lime)] font-light group-hover:translate-x-1 transition-transform">↗</b>
            </a>
        </div>
    </div>
</section>

<section class="wrap final-cta max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-8">
    <div class="flex items-center gap-6">
        <span class="cta-spark text-6xl sm:text-7xl text-[var(--blue)] leading-none select-none" aria-hidden="true">✳</span>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
            Твоя профессия —<br>чья-то <span class="blue text-[var(--blue)]">новая жизнь.</span>
        </h2>
    </div>
    <a href="{{ route('applicant') }}" class="inline-flex items-center gap-6 bg-[var(--ink)] text-white text-xs font-semibold px-6 py-4 rounded hover:bg-[var(--blue)] transition-all shadow-sm shrink-0">
        <span>Начни свой путь</span>
        <span class="text-[var(--lime)] text-xl leading-none">↗</span>
    </a>
</section>
@endsection
