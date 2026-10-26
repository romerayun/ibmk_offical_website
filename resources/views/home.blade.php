@extends('layouts.app')

@section('title', 'ИБМК — Будущее медицины начинается с тебя')
@section('description', 'Новое видение главной страницы Иркутского базового медицинского колледжа. Специальности, поступление и студенческая жизнь.')

@section('content')
<section class="hero hero-carousel relative overflow-hidden bg-[#173aca] text-white h-[710px] max-[1100px]:h-[690px] max-[760px]:h-[700px]" role="region" aria-roledescription="карусель" aria-label="Знакомство с колледжем" tabindex="0" data-paused="false">
    <article class="hero-slide is-active absolute inset-0 isolation-auto" role="group" aria-roledescription="слайд" aria-label="1 из 3" aria-hidden="false">
        <div class="hero-image slide-image-0 absolute inset-0 left-[36%] max-[760px]:left-[15%] bg-cover bg-no-repeat z-[-3]" role="img" aria-label="Студенты в медицинской лаборатории — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/medical-students.png') }}')"></div>
        <div class="hero-shade absolute inset-0 z-[-2]"></div>
        <div class="wrap hero-content w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto pt-[48px] max-[760px]:pt-[33px]">
            <div class="hero-kicker flex items-center gap-[10px] max-[760px]:gap-[7px] text-[10px] max-[760px]:text-[7px] tracking-[1.5px] max-[760px]:tracking-[0.8px] uppercase">
                <span class="tiny-cross text-[var(--lime)] text-[25px] leading-none">✳</span>УЧИСЬ ПОМОГАТЬ. МЕНЯЙ ЖИЗНИ.
            </div>
            <h1 class="hero-heading text-[clamp(58px,5.35vw,80px)] max-[1100px]:text-[70px] max-[760px]:text-[clamp(42px,10.8vw,64px)] font-[550] tracking-[-4px] max-[760px]:tracking-[-2.5px] leading-[1.05] max-[760px]:leading-[1.08] max-w-[900px] max-[1100px]:max-w-[760px] max-[760px]:max-w-full my-[25px] max-[760px]:mt-[27px] max-[760px]:mb-[23px]" id="hero-title">
                Будущее<br>медицины<br>начинается <em class="not-italic text-[var(--lime)]">с тебя.</em>
            </h1>
            <div class="hero-bottom max-[760px]:mt-0">
                <p class="text-[12px] max-[760px]:text-[11px] leading-[1.75] max-[760px]:leading-[1.85] text-[#e6eaff] m-0 mb-[22px] max-[760px]:max-w-[330px]">
                    Иркутский базовый медицинский колледж.<br>Знания, которые становятся делом.<br>Профессия, которая имеет значение.
                </p>
                <a class="lime-btn inline-flex items-center gap-[28px] max-[760px]:gap-[22px] bg-[var(--lime)] text-[#152739] text-[12px] max-[760px]:text-[11px] font-[550] py-[18px] px-[21px] max-[760px]:py-[17px] max-[760px]:px-[18px] rounded-[3px] hover:bg-white hover:-translate-y-0.5 transition-all" href="#programs">
                    <span>Найти свою специальность</span>
                    <span class="text-[21px] leading-none">↗</span>
                </a>
            </div>
        </div>
        <div class="hero-note max-[760px]:hidden absolute right-[55px] max-[1100px]:right-[32px] min-[1600px]:right-[calc((100%-1360px)/2)] top-[47px] text-[15px] leading-[1.35] tracking-[-0.3px] text-white text-right">
            Люди.<br>Знания.<br><b class="text-[var(--lime)] font-[500]">Жизнь.</b>
        </div>
    </article>

    <article class="hero-slide absolute inset-0 isolation-auto" role="group" aria-roledescription="слайд" aria-label="2 из 3" aria-hidden="true" inert>
        <div class="hero-image slide-image-1 absolute inset-0 left-[36%] max-[760px]:left-[15%] bg-cover bg-no-repeat z-[-3]" role="img" aria-label="Практическое занятие — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/clinical-practice.png') }}')"></div>
        <div class="hero-shade absolute inset-0 z-[-2]"></div>
        <div class="wrap hero-content w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto pt-[48px] max-[760px]:pt-[33px]">
            <div class="hero-kicker flex items-center gap-[10px] max-[760px]:gap-[7px] text-[10px] max-[760px]:text-[7px] tracking-[1.5px] max-[760px]:tracking-[0.8px] uppercase">
                <span class="tiny-cross text-[var(--lime)] text-[25px] leading-none">✳</span>ОТ ПЕРВОГО ИНТЕРЕСА — К ПРОФЕССИИ.
            </div>
            <h2 class="hero-heading text-[clamp(58px,5.35vw,80px)] max-[1100px]:text-[70px] max-[760px]:text-[clamp(42px,10.8vw,64px)] font-[550] tracking-[-4px] max-[760px]:tracking-[-2.5px] leading-[1.05] max-[760px]:leading-[1.08] max-w-[900px] max-[1100px]:max-w-[760px] max-[760px]:max-w-full my-[25px] max-[760px]:mt-[27px] max-[760px]:mb-[23px]">
                Не просто знать.<br><em class="not-italic text-[var(--lime)]">Уметь помогать.</em>
            </h2>
            <div class="hero-bottom max-[760px]:mt-0">
                <p class="text-[12px] max-[760px]:text-[11px] leading-[1.75] max-[760px]:leading-[1.85] text-[#e6eaff] m-0 mb-[22px] max-[760px]:max-w-[330px]">
                    Разобраться в профессии — значит увидеть<br>за учебными задачами настоящего человека.<br>Познакомься с ИБМК.
                </p>
                <a class="lime-btn inline-flex items-center gap-[28px] max-[760px]:gap-[22px] bg-[var(--lime)] text-[#152739] text-[12px] max-[760px]:text-[11px] font-[550] py-[18px] px-[21px] max-[760px]:py-[17px] max-[760px]:px-[18px] rounded-[3px] hover:bg-white hover:-translate-y-0.5 transition-all" href="{{ route('about') }}">
                    <span>Узнать о колледже</span>
                    <span class="text-[21px] leading-none">↗</span>
                </a>
            </div>
        </div>
        <div class="hero-note max-[760px]:hidden absolute right-[55px] max-[1100px]:right-[32px] min-[1600px]:right-[calc((100%-1360px)/2)] top-[47px] text-[15px] leading-[1.35] tracking-[-0.3px] text-white text-right">
            Слушать.<br>Понимать.<br><b class="text-[var(--lime)] font-[500]">Помогать.</b>
        </div>
    </article>

    <article class="hero-slide absolute inset-0 isolation-auto" role="group" aria-roledescription="слайд" aria-label="3 из 3" aria-hidden="true" inert>
        <div class="hero-image slide-image-2 absolute inset-0 left-[36%] max-[760px]:left-[15%] bg-cover bg-no-repeat z-[-3]" role="img" aria-label="Будущие медицинские специалисты — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/medical-students.png') }}')"></div>
        <div class="hero-shade absolute inset-0 z-[-2]"></div>
        <div class="wrap hero-content w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto pt-[48px] max-[760px]:pt-[33px]">
            <div class="hero-kicker flex items-center gap-[10px] max-[760px]:gap-[7px] text-[10px] max-[760px]:text-[7px] tracking-[1.5px] max-[760px]:tracking-[0.8px] uppercase">
                <span class="tiny-cross text-[var(--lime)] text-[25px] leading-none">✳</span>ТВОЙ ПУТЬ. ТВОЯ КОМАНДА.
            </div>
            <h2 class="hero-heading text-[clamp(58px,5.35vw,80px)] max-[1100px]:text-[70px] max-[760px]:text-[clamp(42px,10.8vw,64px)] font-[550] tracking-[-4px] max-[760px]:tracking-[-2.5px] leading-[1.05] max-[760px]:leading-[1.08] max-w-[900px] max-[1100px]:max-w-[760px] max-[760px]:max-w-full my-[25px] max-[760px]:mt-[27px] max-[760px]:mb-[23px]">
                Место, где<br>начинается<br><em class="not-italic text-[var(--lime)]">твой путь.</em>
            </h2>
            <div class="hero-bottom max-[760px]:mt-0">
                <p class="text-[12px] max-[760px]:text-[11px] leading-[1.75] max-[760px]:leading-[1.85] text-[#e6eaff] m-0 mb-[22px] max-[760px]:max-w-[330px]">
                    Учёба складывается из маленьких шагов.<br>Расписание, материалы и полезные сервисы —<br>всё рядом на странице студента.
                </p>
                <a class="lime-btn inline-flex items-center gap-[28px] max-[760px]:gap-[22px] bg-[var(--lime)] text-[#152739] text-[12px] max-[760px]:text-[11px] font-[550] py-[18px] px-[21px] max-[760px]:py-[17px] max-[760px]:px-[18px] rounded-[3px] hover:bg-white hover:-translate-y-0.5 transition-all" href="{{ route('student') }}">
                    <span>В пространство студента</span>
                    <span class="text-[21px] leading-none">↗</span>
                </a>
            </div>
        </div>
        <div class="hero-note max-[760px]:hidden absolute right-[55px] max-[1100px]:right-[32px] min-[1600px]:right-[calc((100%-1360px)/2)] top-[47px] text-[15px] leading-[1.35] tracking-[-0.3px] text-white text-right">
            Учиться.<br>Находить.<br><b class="text-[var(--lime)] font-[500]">Расти.</b>
        </div>
    </article>

    <div class="wrap slider-controls w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto absolute left-0 right-0 bottom-[27px] max-[760px]:bottom-[24px] flex items-center gap-[19px] max-[760px]:gap-[12px] max-[760px]:flex-wrap z-[3]">
        <div class="slider-position flex items-baseline gap-[8px] text-[13px] max-[760px]:text-[12px] tabular-nums">
            <span class="slide-current text-[var(--lime)] font-[550]">01</span>
            <span class="slide-divider text-[#b1c1f9] text-[9px]">/ 03</span>
        </div>
        <div class="slider-dots flex gap-[8px] max-[760px]:gap-[7px]" role="group" aria-label="Выбрать слайд">
            <button class="slide-dot is-current w-[36px] max-[760px]:w-[28px] h-[36px] py-[16px] px-0 border-0 bg-transparent relative cursor-pointer" aria-label="Слайд 1: Будущее медицины" aria-current="true" data-slide="0"><span></span></button>
            <button class="slide-dot w-[36px] max-[760px]:w-[28px] h-[36px] py-[16px] px-0 border-0 bg-transparent relative cursor-pointer" aria-label="Слайд 2: Уметь помогать" data-slide="1"><span></span></button>
            <button class="slide-dot w-[36px] max-[760px]:w-[28px] h-[36px] py-[16px] px-0 border-0 bg-transparent relative cursor-pointer" aria-label="Слайд 3: Твой путь" data-slide="2"><span></span></button>
        </div>
        <div class="slider-buttons flex gap-[8px] ml-[8px] max-[760px]:ml-auto max-[760px]:gap-[7px]">
            <button data-slide-action="previous" aria-label="Предыдущий слайд" class="w-[36px] h-[36px] max-[760px]:w-[34px] max-[760px]:h-[34px] rounded-full border border-white/40 flex items-center justify-center bg-transparent text-white text-[18px] hover:bg-[var(--lime)] hover:border-[var(--lime)] hover:text-[var(--ink)] transition-colors cursor-pointer">←</button>
            <button data-slide-action="next" aria-label="Следующий слайд" class="w-[36px] h-[36px] max-[760px]:w-[34px] max-[760px]:h-[34px] rounded-full border border-white/40 flex items-center justify-center bg-transparent text-white text-[18px] hover:bg-[var(--lime)] hover:border-[var(--lime)] hover:text-[var(--ink)] transition-colors cursor-pointer">→</button>
            <button data-slide-action="pause" aria-label="Остановить автопрокрутку" aria-pressed="false" class="w-[30px] h-[30px] max-[760px]:w-[28px] max-[760px]:h-[28px] mt-[3px] ml-[5px] border-0 bg-transparent text-white flex items-center justify-center cursor-pointer">
                <svg aria-hidden="true" class="w-[17px] h-[17px] fill-none stroke-current stroke-[1.5]" viewBox="0 0 20 20"><path d="M7 5v10M13 5v10"/></svg>
            </button>
        </div>
        <span class="slider-location text-[8px] max-[1100px]:text-[7px] max-[760px]:text-[6px] tracking-[1.4px] max-[1100px]:tracking-[1px] max-[760px]:tracking-[1.1px] text-[#d1dcff] ml-auto max-[760px]:basis-full max-[760px]:mt-[4px]">ИРКУТСК · ОБРАЗОВАНИЕ С ЗАБОТОЙ</span>
    </div>
    <p class="sr-only" aria-live="polite" aria-atomic="true" id="slide-announcement"></p>
</section>

<div class="wrap shortcut-bar w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto grid grid-cols-[1fr_1fr_1.22fr] max-[760px]:grid-cols-1 border-b border-[#dfe2e9]">
    <a href="{{ route('applicant') }}" class="flex items-center gap-[20px] py-[29px] pr-[26px] pl-0 max-[1100px]:py-[23px] max-[1100px]:px-[17px] max-[760px]:py-[20px] max-[760px]:px-0 border-r border-[#dfe2e9] max-[760px]:border-r-0 max-[760px]:border-b max-[760px]:border-[#e1e4eb] text-[13px] max-[1100px]:text-[11px] max-[760px]:text-[12px] font-[500] hover:text-[var(--blue)] transition-colors">
        <span class="shortcut-no text-[9px] text-[#90949e] font-normal">01</span>
        <span>Как поступить</span>
        <b class="ml-auto text-[19px] text-[var(--blue)] font-normal">↗</b>
    </a>
    <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener" class="flex items-center gap-[20px] py-[29px] px-[26px] max-[1100px]:py-[23px] max-[1100px]:px-[17px] max-[760px]:py-[20px] max-[760px]:px-0 border-r border-[#dfe2e9] max-[760px]:border-r-0 max-[760px]:border-b max-[760px]:border-[#e1e4eb] text-[13px] max-[1100px]:text-[11px] max-[760px]:text-[12px] font-[500] hover:text-[var(--blue)] transition-colors">
        <span class="shortcut-no text-[9px] text-[#90949e] font-normal">02</span>
        <span>Расписание занятий</span>
        <b class="ml-auto text-[19px] text-[var(--blue)] font-normal">↗</b>
    </a>
    <a href="https://dpo.irkbmk.ru/" target="_blank" rel="noopener" class="flex items-center gap-[20px] py-[29px] pl-[26px] pr-0 max-[1100px]:py-[23px] max-[1100px]:px-[17px] max-[760px]:py-[20px] max-[760px]:px-0 text-[13px] max-[1100px]:text-[11px] max-[760px]:text-[12px] font-[500] hover:text-[var(--blue)] transition-colors">
        <span class="shortcut-no text-[9px] text-[#90949e] font-normal">03</span>
        <span>Дополнительное образование</span>
        <b class="ml-auto text-[19px] text-[var(--blue)] font-normal">↗</b>
    </a>
</div>

<section class="wrap section programs w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px]" id="programs">
    <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] uppercase">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span> ОБРАЗОВАНИЕ
        </div>
        <span class="aside-label text-[10px] text-[var(--muted)] max-[760px]:hidden">Найди дело, которое будет важным</span>
    </div>
    <div class="section-heading flex justify-between items-end gap-[30px] mb-[38px] max-[760px]:block max-[760px]:mb-[28px]">
        <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] max-[760px]:tracking-[-1.6px] leading-[1.12] m-0">
            Разные пути.<br>Одно <span class="blue text-[var(--blue)]">призвание.</span>
        </h2>
        <p class="text-[12px] max-[760px]:text-[11px] leading-[1.8] text-[var(--muted)] m-0 mb-[5px] max-[760px]:mt-[20px]">
            Выбери направление, в котором твои знания<br class="desktop max-[760px]:hidden"> и внимание к людям станут профессией.
        </p>
    </div>
    <div class="program-layout grid grid-cols-[1.75fr_1fr] max-[1100px]:gap-[25px] max-[760px]:grid-cols-1 gap-[45px] max-[760px]:gap-[20px]">
        <div class="program-list border-t border-[#dfe2e9]">
            <button class="program active w-full text-left flex items-center gap-[30px] max-[1100px]:gap-[14px] max-[760px]:gap-[13px] bg-white border-0 border-b border-[#dfe2e9] py-[25px] pr-[18px] pl-0 max-[760px]:py-[23px] max-[760px]:pr-[6px] transition-all cursor-pointer" data-program="0" aria-expanded="true">
                <span class="program-code text-[9px] max-[760px]:text-[8px] text-[var(--muted)] tracking-[0.3px] min-w-[58px] max-[760px]:min-w-[50px]">31.02.01</span>
                <span>
                    <strong class="block text-[22px] max-[1100px]:text-[20px] max-[760px]:text-[20px] font-[450] tracking-[-0.5px]">Лечебное дело</strong>
                    <small class="block text-[10px] max-[760px]:text-[9px] text-[var(--muted)] mt-[8px] max-[760px]:max-w-[220px] max-[760px]:leading-[1.5]">Быть рядом, когда помощь нужна больше всего</small>
                </span>
                <i class="text-[21px] font-normal not-italic ml-auto text-[#7e8491]">↗</i>
            </button>
            <button class="program w-full text-left flex items-center gap-[30px] max-[1100px]:gap-[14px] max-[760px]:gap-[13px] bg-white border-0 border-b border-[#dfe2e9] py-[25px] pr-[18px] pl-0 max-[760px]:py-[23px] max-[760px]:pr-[6px] transition-all cursor-pointer" data-program="1" aria-expanded="false">
                <span class="program-code text-[9px] max-[760px]:text-[8px] text-[var(--muted)] tracking-[0.3px] min-w-[58px] max-[760px]:min-w-[50px]">34.02.01</span>
                <span>
                    <strong class="block text-[22px] max-[1100px]:text-[20px] max-[760px]:text-[20px] font-[450] tracking-[-0.5px]">Сестринское дело</strong>
                    <small class="block text-[10px] max-[760px]:text-[9px] text-[var(--muted)] mt-[8px] max-[760px]:max-w-[220px] max-[760px]:leading-[1.5]">Забота, знания и внимание к каждому</small>
                </span>
                <i class="text-[21px] font-normal not-italic ml-auto text-[#7e8491]">↗</i>
            </button>
            <button class="program w-full text-left flex items-center gap-[30px] max-[1100px]:gap-[14px] max-[760px]:gap-[13px] bg-white border-0 border-b border-[#dfe2e9] py-[25px] pr-[18px] pl-0 max-[760px]:py-[23px] max-[760px]:pr-[6px] transition-all cursor-pointer" data-program="2" aria-expanded="false">
                <span class="program-code text-[9px] max-[760px]:text-[8px] text-[var(--muted)] tracking-[0.3px] min-w-[58px] max-[760px]:min-w-[50px]">31.02.02</span>
                <span>
                    <strong class="block text-[22px] max-[1100px]:text-[20px] max-[760px]:text-[20px] font-[450] tracking-[-0.5px]">Акушерское дело</strong>
                    <small class="block text-[10px] max-[760px]:text-[9px] text-[var(--muted)] mt-[8px] max-[760px]:max-w-[220px] max-[760px]:leading-[1.5]">Помогать новой жизни начинаться</small>
                </span>
                <i class="text-[21px] font-normal not-italic ml-auto text-[#7e8491]">↗</i>
            </button>
            <button class="program w-full text-left flex items-center gap-[30px] max-[1100px]:gap-[14px] max-[760px]:gap-[13px] bg-white border-0 border-b border-[#dfe2e9] py-[25px] pr-[18px] pl-0 max-[760px]:py-[23px] max-[760px]:pr-[6px] transition-all cursor-pointer" data-program="3" aria-expanded="false">
                <span class="program-code text-[9px] max-[760px]:text-[8px] text-[var(--muted)] tracking-[0.3px] min-w-[58px] max-[760px]:min-w-[50px]">33.02.01</span>
                <span>
                    <strong class="block text-[22px] max-[1100px]:text-[20px] max-[760px]:text-[20px] font-[450] tracking-[-0.5px]">Фармация</strong>
                    <small class="block text-[10px] max-[760px]:text-[9px] text-[var(--muted)] mt-[8px] max-[760px]:max-w-[220px] max-[760px]:leading-[1.5]">Понимать точную науку о лекарствах</small>
                </span>
                <i class="text-[21px] font-normal not-italic ml-auto text-[#7e8491]">↗</i>
            </button>
        </div>
        <article class="program-preview bg-[#eaf0ff] p-[26px_30px] max-[760px]:p-[25px] relative overflow-hidden min-h-[365px] max-[760px]:min-h-[310px] rounded-[3px]" aria-live="polite">
            <div class="preview-top flex justify-between items-center text-[8px] tracking-[1.4px] text-[var(--blue)] font-semibold uppercase">
                <span id="preview-tag">ТВОЯ БУДУЩАЯ ПРОФЕССИЯ</span>
                <span class="line-cross text-[27px] leading-none">✳</span>
            </div>
            <span class="preview-number block mt-[26px] text-[9px] text-[#6d7a9f]" id="preview-number">01 / 04</span>
            <h3 class="text-[32px] max-[760px]:text-[30px] font-[500] tracking-[-1px] my-[17px]" id="preview-title">Фельдшер</h3>
            <p class="text-[11px] text-[#5e6c8c] leading-[1.8] max-w-[230px] max-[760px]:max-w-[270px] m-0" id="preview-description">Оценивать состояние пациента, оказывать медицинскую помощь и принимать ответственные решения.</p>
            <a id="preview-link" href="https://irkbmk.ru/node/613" target="_blank" rel="noopener" class="text-[10px] text-[var(--blue)] flex items-center gap-[16px] mt-[27px] font-[500]">
                <span>Подробнее о программе</span>
                <span class="text-[20px] leading-none">↗</span>
            </a>
            <div class="preview-art absolute -right-[70px] -bottom-[90px] rotate-[-27deg] opacity-70 z-[-1]" aria-hidden="true">
                <span class="block border-[20px] border-[#d5e0ff] w-[160px] h-[160px] absolute right-0 bottom-0"></span>
                <span class="block border-[20px] border-[#d5e0ff] w-[250px] h-[250px] absolute right-0 bottom-0"></span>
                <span class="block border-[20px] border-[#d5e0ff] w-[340px] h-[340px] absolute right-0 bottom-0"></span>
            </div>
        </article>
    </div>
    <p class="source-note text-[9px] text-[#777e8c] leading-[1.7] mt-[19px]">Условия и наличие набора уточняйте в приёмной комиссии. <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="underline underline-offset-[3px]">Информация на действующем сайте ↗</a></p>
</section>

<section class="about-section bg-[var(--paper)] py-[80px] max-[760px]:pt-[40px] max-[760px]:pb-[55px]" id="about">
    <div class="wrap about-layout w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto grid grid-cols-2 max-[760px]:grid-cols-1 gap-[95px] max-[1100px]:gap-[45px] max-[760px]:gap-[35px] items-center">
        <div class="about-photo h-[470px] max-[1100px]:h-[420px] max-[760px]:h-[350px] relative">
            <img src="{{ asset('assets/clinical-practice.png') }}" alt="Практическое занятие с преподавателем — иллюстрация, созданная ИИ" loading="lazy" class="w-full h-full object-cover saturate-70">
            <span class="photo-sticker absolute bottom-[24px] left-[24px] bg-[var(--lime)] p-[18px_24px] -rotate-5 text-[20px] leading-[1.2] tracking-[-0.7px]">
                Дело жизни.<br>Каждый день.
            </span>
        </div>
        <div class="about-text">
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] uppercase">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span> ЗНАКОМЬСЯ, ИБМК
            </div>
            <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[38px] font-[500] tracking-[-2px] leading-[1.12] my-[27px]">
                Больше, чем<br>образование.<br><span class="blue text-[var(--blue)]">Ближе к людям.</span>
            </h2>
            <p class="text-[12px] leading-[1.85] text-[var(--muted)] max-w-[380px] max-[760px]:max-w-none m-0 mb-[16px]">
                Медицина начинается с желания помочь. А профессиональный путь — с места, где учат понимать человека и действовать осознанно.
            </p>
            <p class="text-[12px] leading-[1.85] text-[var(--muted)] max-w-[380px] max-[760px]:max-w-none m-0 mb-[16px]">
                Иркутский базовый медицинский колледж — пространство, где ты можешь сделать первый шаг в профессию и найти своё направление.
            </p>
            <a class="text-link inline-flex items-center gap-[25px] text-[var(--blue)] text-[11px] font-[500] border-b border-[#cbd4fa] py-[15px] hover:border-[var(--blue)] transition-colors" href="{{ route('about') }}">
                <span>Познакомиться с колледжем</span>
                <span class="text-[18px]">↗</span>
            </a>
            <div class="about-values flex flex-wrap gap-[8px] mt-[27px]">
                <span class="text-[8px] p-[9px_12px] border border-[#d8dde6] rounded-[30px]">Знания для жизни</span>
                <span class="text-[8px] p-[9px_12px] border border-[#d8dde6] rounded-[30px]">Внимание к человеку</span>
                <span class="text-[8px] p-[9px_12px] border border-[#d8dde6] rounded-[30px]">Профессиональное развитие</span>
            </div>
        </div>
    </div>
</section>

<section class="wrap section admission w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px]" id="admission">
    <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] uppercase">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span> ПОСТУПАЮЩИМ
        </div>
        <span class="aside-label text-[10px] text-[var(--muted)] max-[760px]:hidden">Твой первый шаг в медицину</span>
    </div>
    <div class="section-heading flex justify-between items-end gap-[30px] mb-[38px] max-[760px]:block max-[760px]:mb-[28px]">
        <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] max-[760px]:tracking-[-1.6px] leading-[1.12] m-0">
            Большой путь.<br><span class="blue text-[var(--blue)]">Понятное начало.</span>
        </h2>
        <p class="text-[12px] max-[760px]:text-[11px] leading-[1.8] text-[var(--muted)] m-0 mb-[5px] max-[760px]:mt-[20px]">
            От первого интереса к профессии<br>до решения, которое меняет будущее.
        </p>
    </div>
    <div class="steps grid grid-cols-3 max-[760px]:grid-cols-1 gap-[35px] max-[760px]:gap-[24px] my-[48px_46px] max-[760px]:my-[32px]">
        <article class="border-t border-[#d8dee8] pt-[20px]">
            <span class="step-number text-[12px] text-[var(--blue)] flex justify-between items-center">
                <span>01</span>
                <i class="not-italic text-[18px]">↗</i>
            </span>
            <h3 class="text-[19px] max-[760px]:text-[20px] tracking-[-0.5px] font-[500] mt-[27px] max-[760px]:mt-[18px] mb-[12px]">Выбери направление</h3>
            <p class="text-[11px] max-[760px]:text-[12px] leading-[1.8] text-[var(--muted)] max-w-[290px] max-[760px]:max-w-none m-0">Познакомься со специальностями и подумай, какая работа ближе именно тебе.</p>
            <a href="#programs" class="inline-block mt-[13px] max-[760px]:mt-[6px] text-[10px] max-[760px]:text-[11px] text-[var(--blue)]">Смотреть специальности ↗</a>
        </article>
        <article class="border-t border-[#d8dee8] pt-[20px]">
            <span class="step-number text-[12px] text-[var(--blue)] flex justify-between items-center">
                <span>02</span>
                <i class="not-italic text-[18px]">↗</i>
            </span>
            <h3 class="text-[19px] max-[760px]:text-[20px] tracking-[-0.5px] font-[500] mt-[27px] max-[760px]:mt-[18px] mb-[12px]">Узнай условия приёма</h3>
            <p class="text-[11px] max-[760px]:text-[12px] leading-[1.8] text-[var(--muted)] max-w-[290px] max-[760px]:max-w-none m-0">Уточни доступные программы, необходимые документы и сроки подачи заявления.</p>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="inline-block mt-[13px] max-[760px]:mt-[6px] text-[10px] max-[760px]:text-[11px] text-[var(--blue)]">На официальный сайт ↗</a>
        </article>
        <article class="border-t border-[#d8dee8] pt-[20px]">
            <span class="step-number text-[12px] text-[var(--blue)] flex justify-between items-center">
                <span>03</span>
                <i class="not-italic text-[18px]">↗</i>
            </span>
            <h3 class="text-[19px] max-[760px]:text-[20px] tracking-[-0.5px] font-[500] mt-[27px] max-[760px]:mt-[18px] mb-[12px]">Сделай первый шаг</h3>
            <p class="text-[11px] max-[760px]:text-[12px] leading-[1.8] text-[var(--muted)] max-w-[290px] max-[760px]:max-w-none m-0">Проверь актуальные правила приёма и способ подачи документов в колледж.</p>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="inline-block mt-[13px] max-[760px]:mt-[6px] text-[10px] max-[760px]:text-[11px] text-[var(--blue)]">Информация о поступлении ↗</a>
        </article>
    </div>
    <div class="admission">
        <details class="border-t border-[#e0e3e9]">
            <summary class="py-[20px] cursor-pointer text-[12px] flex justify-between items-center list-none max-[760px]:gap-[20px] max-[760px]:leading-[1.5]">
                <span>Можно ли поступить после 9 или 11 класса?</span>
                <span class="text-[22px] font-[400] text-[var(--blue)] leading-none">+</span>
            </summary>
            <p class="text-[12px] leading-[1.8] max-w-[800px] text-[var(--muted)] pb-[16px] m-0">Требования к уровню образования зависят от специальности и действующего плана приёма. Уточните актуальные условия на официальном сайте или в приёмной комиссии колледжа.</p>
        </details>
        <details class="border-t border-[#e0e3e9] border-b">
            <summary class="py-[20px] cursor-pointer text-[12px] flex justify-between items-center list-none max-[760px]:gap-[20px] max-[760px]:leading-[1.5]">
                <span>Какие документы понадобятся?</span>
                <span class="text-[22px] font-[400] text-[var(--blue)] leading-none">+</span>
            </summary>
            <p class="text-[12px] leading-[1.8] max-w-[800px] text-[var(--muted)] pb-[16px] m-0">Точный перечень документов, требования к медицинскому осмотру и сроки подачи публикуются в действующих правилах приёма колледжа. Перед подачей заявления проверьте актуальную редакцию на irkbmk.ru.</p>
        </details>
    </div>
</section>

<section class="student-section bg-[#1239dd] text-white py-[72px] max-[760px]:py-[50px]" id="students">
    <div class="wrap student-layout w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto grid grid-cols-2 max-[760px]:grid-cols-1 gap-[95px] max-[1100px]:gap-[45px] max-[760px]:gap-[30px] items-center">
        <div>
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] uppercase">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--lime)] block"></span> УЖЕ С НАМИ
            </div>
            <h2 class="text-[47px] max-[760px]:text-[36px] mt-[30px] max-[760px]:mt-[25px] mb-[18px] leading-tight">
                Всё нужное<br>для <em class="not-italic text-[var(--lime)]">твоего ритма.</em>
            </h2>
            <p class="text-[11px] text-[#c7d2ff] m-0">Меньше поисков. Больше времени на главное.</p>
        </div>
        <div class="student-links">
            <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener" class="flex items-center justify-between border-t border-b border-[#ffffff3b] py-[21px] max-[760px]:py-[24px] text-[20px] tracking-[-0.6px] hover:text-[var(--lime)] transition-colors">
                <span><small class="block text-[7px] tracking-[1.4px] text-[#bac9ff] mb-[10px]">ПЛАНИРУЙ СВОЙ ДЕНЬ</small>Расписание занятий</span>
                <b class="text-[26px] font-[400] text-[var(--lime)]">↗</b>
            </a>
            <a href="https://dpo.irkbmk.ru/moodle/" target="_blank" rel="noopener" class="flex items-center justify-between border-b border-[#ffffff3b] py-[21px] max-[760px]:py-[24px] text-[20px] tracking-[-0.6px] hover:text-[var(--lime)] transition-colors">
                <span><small class="block text-[7px] tracking-[1.4px] text-[#bac9ff] mb-[10px]">УЧИСЬ ОНЛАЙН</small>Образовательная среда</span>
                <b class="text-[26px] font-[400] text-[var(--lime)]">↗</b>
            </a>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener" class="flex items-center justify-between border-b border-[#ffffff3b] py-[21px] max-[760px]:py-[24px] text-[20px] tracking-[-0.6px] hover:text-[var(--lime)] transition-colors">
                <span><small class="block text-[7px] tracking-[1.4px] text-[#bac9ff] mb-[10px]">ОСТАВАЙСЯ В КУРСЕ</small>Новости колледжа</span>
                <b class="text-[26px] font-[400] text-[var(--lime)]">↗</b>
            </a>
        </div>
    </div>
</section>

<section class="wrap final-cta w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[80px] max-[760px]:py-[55px] flex items-center gap-[35px] max-[760px]:flex-wrap max-[760px]:gap-[15px]">
    <span class="cta-spark text-[85px] max-[760px]:text-[58px] leading-none text-[var(--blue)]" aria-hidden="true">✳</span>
    <h2 class="text-[40px] max-[760px]:text-[27px] max-[760px]:tracking-[-1px] flex-1 leading-tight m-0">
        Твоя профессия —<br>чья-то <span class="blue text-[var(--blue)]">новая жизнь.</span>
    </h2>
    <a href="{{ route('applicant') }}" class="text-[12px] flex items-center gap-[34px] bg-[var(--ink)] text-white p-[18px_22px] rounded-[3px] max-[760px]:mt-[15px] max-[760px]:w-full max-[760px]:justify-between hover:bg-[var(--blue)] transition-all">
        <span>Начни свой путь</span>
        <span class="text-[21px] text-[var(--lime)]">↗</span>
    </a>
</section>
@endsection
