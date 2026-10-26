@extends('layouts.app')

@section('title', 'О колледже — ИБМК')
@section('description', 'О колледже — ИБМК. Полезная информация Иркутского базового медицинского колледжа.')

@section('content')
<div class="wrap breadcrumbs w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto flex items-center gap-[10px] text-[10px] text-[#8a8f99] py-[20px] max-[760px]:py-[16px]">
    <a href="{{ route('home') }}" class="hover:text-[var(--blue)] transition-colors">Главная</a>
    <span>/</span>
    <span aria-current="page" class="text-[var(--ink)] font-[500]">О колледже</span>
</div>

<section class="wrap route-hero about-hero w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[35px_65px] max-[760px]:py-[25px_38px] grid grid-cols-[1.1fr_1fr] max-[760px]:grid-cols-1 gap-[60px] max-[1100px]:gap-[35px] max-[760px]:gap-[30px] items-center">
    <div>
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase mb-[12px]">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ИРКУТСКИЙ БАЗОВЫЙ МЕДИЦИНСКИЙ КОЛЛЕДЖ
        </div>
        <h1 class="text-[clamp(40px,4.4vw,66px)] max-[1100px]:text-[46px] max-[760px]:text-[clamp(38px,9.5vw,62px)] font-[500] tracking-[-3.5px] max-[1100px]:tracking-[-2.6px] max-[760px]:tracking-[-2px] leading-[1.06] my-[29px_25px] max-[760px]:mt-[25px]">
            Знания —<br>в профессию.<br><em class="not-italic text-[var(--blue)]">Заботу — в дело.</em>
        </h1>
        <p class="text-[13px] max-[760px]:text-[12px] leading-[1.85] text-[var(--muted)] max-w-[480px] m-0 mb-[30px]">
            Колледж с историей. Образование с человеческим лицом.<br>Место, с которого начинается путь в медицину.
        </p>
        <a class="dark-btn inline-flex items-center justify-between gap-[30px] bg-[var(--ink)] text-white text-[12px] font-[500] p-[17px_22px] rounded-[3px] hover:bg-[var(--blue)] transition-all" href="{{ route('applicant') }}">
            <span>Стать частью ИБМК</span>
            <span class="text-[var(--lime)] text-[21px] leading-none">↗</span>
        </a>
    </div>
    <div class="about-hero-photo relative h-[450px] max-[760px]:h-[340px] overflow-hidden rounded-[3px]">
        <img src="{{ asset('assets/clinical-practice.png') }}" alt="Учебное занятие с преподавателем — иллюстрация, созданная ИИ" class="w-full h-full object-cover">
        <span class="image-caption absolute bottom-[20px] left-[20px] bg-white p-[12px_16px] text-[8px] font-semibold tracking-[1.3px] uppercase text-neutral-800">
            ЗНАТЬ. ПОНИМАТЬ. ПОМОГАТЬ.
        </span>
    </div>
</section>

<nav class="wrap page-jumps w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto flex gap-[35px] max-[1100px]:gap-[25px] border-t border-b border-[#e1e5ec] py-[20px] max-[760px]:py-[17px] overflow-x-auto whitespace-nowrap text-[11px] max-[760px]:text-[10px] text-[#646c7c]" aria-label="Разделы страницы">
    <a href="#identity" class="hover:text-[var(--blue)] transition-colors">О нас</a>
    <a href="#history" class="hover:text-[var(--blue)] transition-colors">История</a>
    <a href="#official" class="hover:text-[var(--blue)] transition-colors">Официальные сведения</a>
    <a href="#contacts" class="hover:text-[var(--blue)] transition-colors">Контакты</a>
</nav>

<section class="wrap section identity-layout w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px] grid grid-cols-[1.1fr_1fr] max-[760px]:grid-cols-1 gap-[90px] max-[1100px]:gap-[45px] max-[760px]:gap-[30px] max-[760px]:pt-[50px]" id="identity">
    <div>
        <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>НАШЕ ОБЩЕЕ ДЕЛО
            </div>
            <span class="aside-label"></span>
        </div>
        <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] m-0">
            За каждой профессией —<br><span class="blue text-[var(--blue)]">человек.</span>
        </h2>
    </div>
    <div>
        <p class="large-copy text-[26px] max-[760px]:text-[22px] leading-[1.4] tracking-[-0.6px] font-[450] m-0 mb-[25px] text-neutral-900">
            В медицине важны знания.<br>И то, как ты применяешь их<br>ради другого человека.
        </p>
        <p class="body-copy text-[13px] leading-[1.85] text-[var(--muted)] m-0 mb-[16px] max-w-[490px]">
            Иркутский базовый медицинский колледж — областное государственное бюджетное профессиональное образовательное учреждение. Здесь начинается путь в медицинские и фармацевтические профессии.
        </p>
        <p class="body-copy text-[13px] leading-[1.85] text-[var(--muted)] m-0 mb-[24px] max-w-[490px]">
            Выбери направление, познакомься с образовательными программами и узнай больше об условиях обучения. Первый шаг начинается с интереса к профессии.
        </p>
        <a class="text-link inline-flex items-center gap-[25px] text-[var(--blue)] text-[11px] font-[500] border-b border-[#cbd4fa] py-[15px] hover:border-[var(--blue)] transition-colors" href="{{ route('applicant') }}#choose">
            <span>Направления подготовки</span>
            <span class="text-[18px]">↗</span>
        </a>
    </div>
</section>

<section class="history-section bg-[var(--blue)] text-white py-[75px] max-[760px]:py-[55px]" id="history">
    <div class="wrap history-grid w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto grid grid-cols-[1fr_1.1fr] max-[760px]:grid-cols-1 gap-[90px] max-[1100px]:gap-[45px] max-[760px]:gap-[30px] items-center">
        <div>
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-white/90 uppercase mb-[16px]">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--lime)] block"></span>С ИСТОРИЕЙ. С ПЕРСПЕКТИВОЙ.
            </div>
            <span class="history-year block text-[clamp(100px,12vw,180px)] max-[760px]:text-[130px] font-[500] tracking-[-10px] max-[760px]:tracking-[-7px] leading-none mt-[40px] max-[760px]:mt-[30px] text-[var(--lime)]">
                1893
                <span class="block text-[9px] tracking-[3px] text-[#ccdbff] font-[500] mt-[20px] max-[760px]:mt-[15px] ml-[10px]">ГОД ОСНОВАНИЯ</span>
            </span>
        </div>
        <div>
            <h2 class="text-[39px] max-[1100px]:text-[32px] max-[760px]:text-[28px] font-[500] tracking-[-1.6px] leading-tight mb-[16px]">
                Традиция помогать.<br><em class="not-italic text-[var(--lime)]">Продолжение — в тебе.</em>
            </h2>
            <p class="text-[12px] leading-[1.9] text-[#d0dbff] max-w-[480px] m-0 mb-[16px]">
                Дата создания колледжа — 3 октября 1893 года. За этой датой — история медицинского образования и поколения людей, выбравших профессию помощи.
            </p>
            <p class="text-[12px] leading-[1.9] text-[#d0dbff] max-w-[480px] m-0 mb-[24px]">
                Сегодня знакомство с колледжем может стать началом твоего собственного профессионального пути.
            </p>
            <a class="history-link inline-flex items-center gap-[15px] text-[var(--lime)] text-[11px] mt-[15px] hover:text-white transition-colors" href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener">
                <span>Основные сведения о колледже</span>
                <span aria-hidden="true">↗</span>
            </a>
        </div>
    </div>
</section>

<section class="wrap section w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px]">
    <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ЧТО ОБЪЕДИНЯЕТ НАШ ПУТЬ
        </div>
        <span class="aside-label"></span>
    </div>
    <div class="principles grid grid-cols-3 max-[760px]:grid-cols-1 gap-[40px] max-[760px]:gap-[25px]">
        <article class="border-t border-[#dee4ed] pt-[22px]">
            <span class="text-[8px] font-semibold tracking-[1px] text-[var(--blue)] block mb-[10px]">01 / ЗНАНИЯ</span>
            <h3 class="text-[22px] font-[500] tracking-[-0.6px] my-[15px_12px] text-neutral-900">Понимать глубже</h3>
            <p class="text-[12px] leading-[1.8] text-[var(--muted)] max-w-[320px] max-[760px]:max-w-none m-0">Разбираться в основах профессии, задавать вопросы и связывать теорию с профессиональными задачами.</p>
        </article>
        <article class="border-t border-[#dee4ed] pt-[22px]">
            <span class="text-[8px] font-semibold tracking-[1px] text-[var(--blue)] block mb-[10px]">02 / ОТВЕТСТВЕННОСТЬ</span>
            <h3 class="text-[22px] font-[500] tracking-[-0.6px] my-[15px_12px] text-neutral-900">Действовать осознанно</h3>
            <p class="text-[12px] leading-[1.8] text-[var(--muted)] max-w-[320px] max-[760px]:max-w-none m-0">Быть внимательным к деталям, соблюдать профессиональную этику и понимать значение своих решений.</p>
        </article>
        <article class="border-t border-[#dee4ed] pt-[22px]">
            <span class="text-[8px] font-semibold tracking-[1px] text-[var(--blue)] block mb-[10px]">03 / ЧЕЛОВЕК</span>
            <h3 class="text-[22px] font-[500] tracking-[-0.6px] my-[15px_12px] text-neutral-900">Видеть личность</h3>
            <p class="text-[12px] leading-[1.8] text-[var(--muted)] max-w-[320px] max-[760px]:max-w-none m-0">Сохранять уважение, учиться слышать другого и помнить, ради кого существует медицина.</p>
        </article>
    </div>
</section>

<section class="soft-section bg-[var(--paper)] py-[70px] max-[760px]:py-[55px]" id="official">
    <div class="wrap w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto">
        <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ОТКРЫТО И ПО СУЩЕСТВУ
            </div>
            <span class="aside-label"></span>
        </div>
        <div class="section-heading flex justify-between items-end gap-[30px] mb-[38px] max-[760px]:block max-[760px]:mb-[28px]">
            <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] m-0">
                Важное —<br><span class="blue text-[var(--blue)]">в открытом доступе.</span>
            </h2>
            <p class="text-[12px] text-[var(--muted)] leading-[1.8] m-0 mb-[5px] max-[760px]:mt-[20px]">
                Официальные документы и сведения<br class="desktop max-[760px]:hidden">на действующем сайте колледжа.
            </p>
        </div>
        <div class="official-grid grid grid-cols-2 max-[760px]:grid-cols-1 column-gap-[45px] max-[1100px]:column-gap-[25px]">
            <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener" class="flex items-center gap-[22px] border-t border-[#d9e0eb] py-[25px] hover:text-[var(--blue)] transition-colors group">
                <span class="text-[9px] text-[var(--blue)] shrink-0">01</span>
                <div>
                    <h3 class="text-[17px] tracking-[-0.4px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors m-0 mb-[10px]">Основные сведения</h3>
                    <p class="text-[10px] text-[var(--muted)] leading-[1.7] m-0">Наименование, учредитель, адрес и контакты.</p>
                </div>
                <b class="ml-auto text-[22px] font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/struct" target="_blank" rel="noopener" class="flex items-center gap-[22px] border-t border-[#d9e0eb] py-[25px] hover:text-[var(--blue)] transition-colors group">
                <span class="text-[9px] text-[var(--blue)] shrink-0">02</span>
                <div>
                    <h3 class="text-[17px] tracking-[-0.4px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors m-0 mb-[10px]">Структура и управление</h3>
                    <p class="text-[10px] text-[var(--muted)] leading-[1.7] m-0">Подразделения и органы управления.</p>
                </div>
                <b class="ml-auto text-[22px] font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/document" target="_blank" rel="noopener" class="flex items-center gap-[22px] border-t border-[#d9e0eb] py-[25px] hover:text-[var(--blue)] transition-colors group">
                <span class="text-[9px] text-[var(--blue)] shrink-0">03</span>
                <div>
                    <h3 class="text-[17px] tracking-[-0.4px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors m-0 mb-[10px]">Документы</h3>
                    <p class="text-[10px] text-[var(--muted)] leading-[1.7] m-0">Устав, локальные акты и правила.</p>
                </div>
                <b class="ml-auto text-[22px] font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/education" target="_blank" rel="noopener" class="flex items-center gap-[22px] border-t border-[#d9e0eb] py-[25px] hover:text-[var(--blue)] transition-colors group">
                <span class="text-[9px] text-[var(--blue)] shrink-0">04</span>
                <div>
                    <h3 class="text-[17px] tracking-[-0.4px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors m-0 mb-[10px]">Образование</h3>
                    <p class="text-[10px] text-[var(--muted)] leading-[1.7] m-0">Образовательные программы и учебные материалы.</p>
                </div>
                <b class="ml-auto text-[22px] font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/employees" target="_blank" rel="noopener" class="flex items-center gap-[22px] border-t border-[#d9e0eb] py-[25px] hover:text-[var(--blue)] transition-colors group">
                <span class="text-[9px] text-[var(--blue)] shrink-0">05</span>
                <div>
                    <h3 class="text-[17px] tracking-[-0.4px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors m-0 mb-[10px]">Руководство и педагоги</h3>
                    <p class="text-[10px] text-[var(--muted)] leading-[1.7] m-0">Официальная информация о сотрудниках.</p>
                </div>
                <b class="ml-auto text-[22px] font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/objects" target="_blank" rel="noopener" class="flex items-center gap-[22px] border-t border-[#d9e0eb] py-[25px] hover:text-[var(--blue)] transition-colors group">
                <span class="text-[9px] text-[var(--blue)] shrink-0">06</span>
                <div>
                    <h3 class="text-[17px] tracking-[-0.4px] font-[500] text-neutral-900 group-hover:text-[var(--blue)] transition-colors m-0 mb-[10px]">Материальная база</h3>
                    <p class="text-[10px] text-[var(--muted)] leading-[1.7] m-0">Учебные кабинеты, библиотека и условия обучения.</p>
                </div>
                <b class="ml-auto text-[22px] font-normal text-[var(--blue)] group-hover:translate-x-1 transition-transform">↗</b>
            </a>
        </div>
    </div>
</section>

<section class="wrap section contact-layout w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px] grid grid-cols-2 max-[760px]:grid-cols-1 gap-[95px] max-[1100px]:gap-[45px] max-[760px]:gap-[30px] items-center" id="contacts">
    <div>
        <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>БУДЕМ НА СВЯЗИ
            </div>
            <span class="aside-label"></span>
        </div>
        <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] mb-[20px]">
            Встретимся<br><span class="blue text-[var(--blue)]">в Иркутске.</span>
        </h2>
        <p class="body-copy text-[13px] leading-[1.85] text-[var(--muted)] m-0 mb-[30px] max-w-[490px]">
            Официальный адрес колледжа.<br>Перед визитом уточни нужный корпус и часы приёма.
        </p>
        <div class="contact-address space-y-[4px]">
            <div>
                <small class="block text-[8px] text-[#858e9e] tracking-[1.3px] uppercase mt-[24px] mb-[12px]">Адрес</small>
                <strong class="font-[500] text-[23px] max-[760px]:text-[20px] leading-[1.45] tracking-[-0.5px] text-neutral-900 block">664043, г. Иркутск,<br>ул. Сергеева, 3</strong>
            </div>
            <div>
                <small class="block text-[8px] text-[#858e9e] tracking-[1.3px] uppercase mt-[24px] mb-[12px]">Телефон</small>
                <a href="tel:+73952487513" class="text-[19px] max-[760px]:text-[17px] text-[var(--blue)] block tracking-[-0.3px] hover:underline">+7 (3952) 48-75-13 ↗</a>
            </div>
            <div>
                <small class="block text-[8px] text-[#858e9e] tracking-[1.3px] uppercase mt-[24px] mb-[12px]">Электронная почта</small>
                <a href="mailto:irkbmk@mail.ru" class="text-[19px] max-[760px]:text-[17px] text-[var(--blue)] block tracking-[-0.3px] hover:underline">irkbmk@mail.ru ↗</a>
            </div>
        </div>
    </div>
    <div class="location-card border border-[#e0e5ed] rounded-[4px] overflow-hidden bg-white shadow-xs">
        <div class="location-art h-[250px] relative bg-[#eaf0f8] overflow-hidden" aria-hidden="true">
            <div class="location-road road-one absolute w-[120%] h-[24px] bg-white top-[100px] -left-[20px] -rotate-24"></div>
            <div class="location-road road-two absolute w-[96px] h-[19px] bg-white top-[80px] -left-[60px] rotate-65"></div>
            <div class="location-road road-three absolute w-[96px] h-[15px] bg-white top-[130px] left-[150px] rotate-65"></div>
            <span class="location-point absolute top-[75px] left-[55%] text-[60px] text-[var(--blue)] leading-none select-none">✳</span>
            <span class="location-city absolute bottom-[24px] left-[25px] text-[9px] tracking-[3px] text-[#6c829b] font-[500] uppercase">ИРКУТСК</span>
        </div>
        <div class="p-[27px] max-[760px]:p-[22px]">
            <span class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.5px] font-[550] text-[var(--blue)] uppercase mb-[10px]">ТВОЯ ТОЧКА НАЧАЛА</span>
            <h3 class="text-[27px] tracking-[-0.8px] font-[500] text-neutral-900 mt-[17px] mb-[12px]">Сергеева, 3</h3>
            <p class="text-[10px] leading-[1.9] text-[var(--muted)] m-0 mb-[23px]">Схема иллюстративная. Точный маршрут открой на карте.</p>
            <a class="dark-btn inline-flex items-center gap-[28px] bg-[var(--ink)] text-white text-[12px] font-[500] p-[17px_22px] rounded-[3px] hover:bg-[var(--blue)] transition-colors" href="https://yandex.ru/maps/?text=Иркутск%20Сергеева%203%20медицинский%20колледж" target="_blank" rel="noopener">
                <span>Построить маршрут</span>
                <span aria-hidden="true">↗</span>
            </a>
        </div>
    </div>
</section>

<section class="wrap route-banner w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto bg-[#eaf0ff] p-[42px] max-[760px]:p-[28px] rounded-[4px] mb-[70px] max-[760px]:mb-[50px] flex max-[760px]:flex-col items-center max-[760px]:items-start justify-between gap-[35px] max-[760px]:gap-[20px]">
    <div>
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase mb-[8px]">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>МЫ РЯДОМ
        </div>
        <h2 class="text-[34px] max-[760px]:text-[26px] tracking-[-1.2px] font-[500] text-neutral-900 mt-[22px] mb-[10px]">История продолжается.<br>Присоединяйся.</h2>
        <p class="text-[11px] text-[#6b7893] leading-[1.8] m-0">Познакомься со специальностями и сделай первый шаг в профессию.</p>
    </div>
    <a href="{{ route('applicant') }}" class="lime-btn shrink-0 inline-flex items-center gap-[28px] bg-[var(--lime)] text-[#152739] text-[12px] font-[550] py-[18px] px-[21px] rounded-[3px] hover:bg-white hover:-translate-y-0.5 transition-all shadow-xs">
        <span>Я хочу поступить</span>
        <span class="text-[21px]">↗</span>
    </a>
</section>
@endsection
