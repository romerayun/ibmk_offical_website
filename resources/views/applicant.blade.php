@extends('layouts.app')

@section('title', 'Абитуриенту — ИБМК')
@section('description', 'Поступление в Иркутский базовый медицинский колледж. Специальности, условия приёма, перечень документов и чек-лист подготовки.')

@section('content')
<div class="wrap breadcrumbs w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto flex items-center gap-[10px] text-[10px] text-[#8a8f99] py-[20px] max-[760px]:py-[16px]">
    <a href="{{ route('home') }}" class="hover:text-[var(--blue)] transition-colors">Главная</a>
    <span>/</span>
    <span aria-current="page" class="text-[var(--ink)] font-[500]">Абитуриенту</span>
</div>

<section class="applicant-hero bg-[var(--blue)] text-white py-[52px_0_60px] max-[760px]:py-[35px_0_45px]">
    <div class="wrap applicant-hero-grid w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto grid grid-cols-[1.05fr_1fr] max-[760px]:grid-cols-1 gap-[70px] max-[1100px]:gap-[35px] max-[760px]:gap-[30px] items-center">
        <div>
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-white/90 uppercase mb-[16px]">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--lime)] block"></span>ТВОЙ ПЕРВЫЙ ШАГ В МЕДИЦИНУ
            </div>
            <h1 class="text-[clamp(45px,4.8vw,72px)] max-[1100px]:text-[54px] max-[760px]:text-[clamp(38px,9.5vw,62px)] font-[500] tracking-[-3.5px] max-[1100px]:tracking-[-2.6px] max-[760px]:tracking-[-2px] leading-[1.06] my-[28px_25px] max-[760px]:mt-[20px]">
                Выбирай дело.<br>Которое <em class="not-italic text-[var(--lime)]">важно.</em>
            </h1>
            <p class="text-[13px] max-[760px]:text-[12px] leading-[1.85] text-[#d3dcff] max-w-[480px] m-0 mb-[30px]">
                Сначала — интерес к человеку.<br>Потом — знания и профессиональный путь.<br>Найди своё направление в ИБМК.
            </p>
            <a class="lime-btn inline-flex items-center gap-[28px] bg-[var(--lime)] text-[#152739] text-[12px] font-[550] py-[18px] px-[21px] rounded-[3px] hover:bg-white hover:-translate-y-0.5 transition-all shadow-md" href="#choose">
                <span>Выбрать специальность</span>
                <span class="text-[21px] leading-none">↓</span>
            </a>
        </div>
        <div class="applicant-photo relative h-[400px] max-[1100px]:h-[380px] max-[760px]:h-[290px] rounded-[3px] overflow-hidden">
            <img src="{{ asset('assets/medical-students.png') }}" alt="Студенты медицинского колледжа — иллюстрация, созданная ИИ" class="w-full h-full object-cover object-[75%_center]">
            <span class="photo-sticker absolute -bottom-[15px] -left-[20px] max-[760px]:bottom-[12px] max-[760px]:left-[12px] bg-[var(--lime)] text-[#152739] p-[16px_22px] max-[760px]:p-[12px_16px] text-[22px] max-[760px]:text-[16px] font-[550] leading-[1.2] tracking-[-0.7px] -rotate-3 rounded-[2px]">
                Твой выбор.<br>Чья-то надежда.
            </span>
        </div>
    </div>
</section>

<nav class="wrap page-jumps w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto flex gap-[35px] max-[1100px]:gap-[25px] border-t border-b border-[#e1e5ec] py-[20px] max-[760px]:py-[17px] overflow-x-auto whitespace-nowrap text-[11px] max-[760px]:text-[10px] text-[#646c7c]" aria-label="Разделы страницы">
    <a href="#choose" class="hover:text-[var(--blue)] transition-colors">Специальности</a>
    <a href="#admission-route" class="hover:text-[var(--blue)] transition-colors">Как поступить</a>
    <a href="#checklist" class="hover:text-[var(--blue)] transition-colors">Чек-лист</a>
    <a href="#applicant-faq" class="hover:text-[var(--blue)] transition-colors">Вопросы</a>
</nav>

<section class="wrap section w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px]" id="choose">
    <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>НАЙДИ СВОЁ НАПРАВЛЕНИЕ
        </div>
        <span class="aside-label text-[10px] text-[var(--muted)] max-[760px]:hidden">Разные профессии. Общая ценность — человек.</span>
    </div>
    <div class="section-heading flex justify-between items-end gap-[30px] mb-[38px] max-[760px]:block max-[760px]:mb-[28px]">
        <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] m-0">
            Кем ты хочешь<br><span class="blue text-[var(--blue)]">стать для людей?</span>
        </h2>
        <p class="text-[12px] text-[var(--muted)] leading-[1.8] m-0 mb-[5px] max-[760px]:mt-[20px]">
            Изучи направления подготовки.<br class="desktop max-[760px]:hidden">Наличие набора проверь в текущем плане приёма.
        </p>
    </div>
    <div class="specialty-grid grid grid-cols-2 max-[760px]:grid-cols-1 gap-[20px] max-[760px]:gap-[16px]">
        <article class="specialty-card p-[30px] max-[760px]:p-[25px] bg-[var(--paper)] border border-[#e8ebf1] rounded-[3px] flex flex-col items-start hover:border-[var(--blue)] hover:shadow-xs transition-all">
            <div class="resource-meta w-full flex justify-between items-center text-[9px] text-[#7a859c] font-medium">
                <span>31.02.01</span>
                <span class="text-[11px]">01</span>
            </div>
            <h3 class="text-[30px] max-[760px]:text-[28px] font-[500] tracking-[-1px] text-neutral-900 my-[25px_15px]">Лечебное дело</h3>
            <span class="role-tag text-[9px] text-[var(--blue)] border border-[#cbd6fd] p-[7px_10px] rounded-[30px] leading-[1.5]">Фельдшер</span>
            <p class="text-[12px] leading-[1.9] text-[var(--muted)] my-[20px_5px] max-w-[350px]">Оценивать состояние, оказывать медицинскую помощь и принимать ответственные решения.</p>
            <a class="text-link mt-auto inline-flex items-center gap-[25px] text-[var(--blue)] text-[11px] font-[500] border-b border-[#cbd4fa] py-[15px] hover:border-[var(--blue)] transition-colors" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">
                <span>Условия и план приёма</span>
                <span aria-hidden="true">↗</span>
            </a>
        </article>
        <article class="specialty-card p-[30px] max-[760px]:p-[25px] bg-[var(--paper)] border border-[#e8ebf1] rounded-[3px] flex flex-col items-start hover:border-[var(--blue)] hover:shadow-xs transition-all">
            <div class="resource-meta w-full flex justify-between items-center text-[9px] text-[#7a859c] font-medium">
                <span>34.02.01</span>
                <span class="text-[11px]">02</span>
            </div>
            <h3 class="text-[30px] max-[760px]:text-[28px] font-[500] tracking-[-1px] text-neutral-900 my-[25px_15px]">Сестринское дело</h3>
            <span class="role-tag text-[9px] text-[var(--blue)] border border-[#cbd6fd] p-[7px_10px] rounded-[30px] leading-[1.5]">Медицинская сестра / медицинский брат</span>
            <p class="text-[12px] leading-[1.9] text-[var(--muted)] my-[20px_5px] max-w-[350px]">Помогать пациентам, выполнять сестринский уход и работать в медицинской команде.</p>
            <a class="text-link mt-auto inline-flex items-center gap-[25px] text-[var(--blue)] text-[11px] font-[500] border-b border-[#cbd4fa] py-[15px] hover:border-[var(--blue)] transition-colors" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">
                <span>Условия и план приёма</span>
                <span aria-hidden="true">↗</span>
            </a>
        </article>
        <article class="specialty-card p-[30px] max-[760px]:p-[25px] bg-[var(--paper)] border border-[#e8ebf1] rounded-[3px] flex flex-col items-start hover:border-[var(--blue)] hover:shadow-xs transition-all">
            <div class="resource-meta w-full flex justify-between items-center text-[9px] text-[#7a859c] font-medium">
                <span>31.02.02</span>
                <span class="text-[11px]">03</span>
            </div>
            <h3 class="text-[30px] max-[760px]:text-[28px] font-[500] tracking-[-1px] text-neutral-900 my-[25px_15px]">Акушерское дело</h3>
            <span class="role-tag text-[9px] text-[var(--blue)] border border-[#cbd6fd] p-[7px_10px] rounded-[30px] leading-[1.5]">Акушер / акушерка</span>
            <p class="text-[12px] leading-[1.9] text-[var(--muted)] my-[20px_5px] max-w-[350px]">Заботиться о здоровье женщины и ребёнка и помогать в начале новой жизни.</p>
            <a class="text-link mt-auto inline-flex items-center gap-[25px] text-[var(--blue)] text-[11px] font-[500] border-b border-[#cbd4fa] py-[15px] hover:border-[var(--blue)] transition-colors" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">
                <span>Условия и план приёма</span>
                <span aria-hidden="true">↗</span>
            </a>
        </article>
        <article class="specialty-card p-[30px] max-[760px]:p-[25px] bg-[var(--paper)] border border-[#e8ebf1] rounded-[3px] flex flex-col items-start hover:border-[var(--blue)] hover:shadow-xs transition-all">
            <div class="resource-meta w-full flex justify-between items-center text-[9px] text-[#7a859c] font-medium">
                <span>33.02.01</span>
                <span class="text-[11px]">04</span>
            </div>
            <h3 class="text-[30px] max-[760px]:text-[28px] font-[500] tracking-[-1px] text-neutral-900 my-[25px_15px]">Фармация</h3>
            <span class="role-tag text-[9px] text-[var(--blue)] border border-[#cbd6fd] p-[7px_10px] rounded-[30px] leading-[1.5]">Фармацевт</span>
            <p class="text-[12px] leading-[1.9] text-[var(--muted)] my-[20px_5px] max-w-[350px]">Разбираться в лекарственных препаратах и оказывать фармацевтическую помощь.</p>
            <a class="text-link mt-auto inline-flex items-center gap-[25px] text-[var(--blue)] text-[11px] font-[500] border-b border-[#cbd4fa] py-[15px] hover:border-[var(--blue)] transition-colors" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">
                <span>Условия и план приёма</span>
                <span aria-hidden="true">↗</span>
            </a>
        </article>
    </div>
    <div class="info-strip flex max-[760px]:flex-col items-center max-[760px]:items-start gap-[15px] p-[22px] bg-[#f0f4ff] mt-[25px] rounded-[3px]">
        <span class="text-[23px] text-[var(--blue)] leading-none select-none shrink-0" aria-hidden="true">ⓘ</span>
        <p class="text-[10px] leading-[1.9] text-[#687693] m-0 flex-1">База поступления, сроки обучения, бюджетные места и стоимость зависят от программы и года приёма. Проверяй их в актуальных документах колледжа.</p>
        <a class="text-[10px] text-[var(--blue)] whitespace-nowrap shrink-0 hover:underline" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Смотреть документы ↗</a>
    </div>
</section>

<section class="soft-section bg-[var(--paper)] py-[70px] max-[760px]:py-[55px]" id="admission-route">
    <div class="wrap w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto">
        <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ПОНЯТНЫЙ МАРШРУТ
            </div>
            <span class="aside-label"></span>
        </div>
        <div class="section-heading flex justify-between items-end gap-[30px] mb-[38px] max-[760px]:block max-[760px]:mb-[28px]">
            <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] m-0">
                От «хочу»<br><span class="blue text-[var(--blue)]">к первому шагу.</span>
            </h2>
            <p class="text-[12px] text-[var(--muted)] leading-[1.8] m-0 mb-[5px] max-[760px]:mt-[20px]">
                Ориентир для подготовки к поступлению.<br class="desktop max-[760px]:hidden">Точные сроки и порядок определяют правила приёма.
            </p>
        </div>
        <div class="admission-road divide-y divide-[#dce1eb] border-t border-b border-[#dce1eb]">
            <article class="grid grid-cols-[60px_1fr_220px] max-[1100px]:grid-cols-[45px_1fr_175px] max-[760px]:grid-cols-[35px_1fr] gap-[25px] max-[760px]:gap-[15px] items-center py-[25px]">
                <span class="road-number text-[27px] max-[760px]:text-[22px] font-bold tracking-[-1px] text-[var(--blue)]">01</span>
                <div>
                    <h3 class="text-[20px] max-[760px]:text-[18px] tracking-[-0.5px] font-[500] text-neutral-900 m-0 mb-[10px]">Изучи правила</h3>
                    <p class="text-[12px] text-[var(--muted)] leading-[1.85] m-0 max-w-[530px]">Выбери специальность и проверь базу образования, количество мест, сроки и стоимость.</p>
                </div>
                <a class="text-[10px] text-[var(--blue)] justify-self-end max-[760px]:justify-self-start max-[760px]:col-span-full max-[760px]:mt-[5px] hover:underline" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Правила и план набора ↗</a>
            </article>
            <article class="grid grid-cols-[60px_1fr_220px] max-[1100px]:grid-cols-[45px_1fr_175px] max-[760px]:grid-cols-[35px_1fr] gap-[25px] max-[760px]:gap-[15px] items-center py-[25px]">
                <span class="road-number text-[27px] max-[760px]:text-[22px] font-bold tracking-[-1px] text-[var(--blue)]">02</span>
                <div>
                    <h3 class="text-[20px] max-[760px]:text-[18px] tracking-[-0.5px] font-[500] text-neutral-900 m-0 mb-[10px]">Подготовь документы</h3>
                    <p class="text-[12px] text-[var(--muted)] leading-[1.85] m-0 max-w-[530px]">Сверь комплект с официальным перечнем. Отдельно уточни требования к медицинскому осмотру.</p>
                </div>
                <a class="text-[10px] text-[var(--blue)] justify-self-end max-[760px]:justify-self-start max-[760px]:col-span-full max-[760px]:mt-[5px] hover:underline" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Перечень документов ↗</a>
            </article>
            <article class="grid grid-cols-[60px_1fr_220px] max-[1100px]:grid-cols-[45px_1fr_175px] max-[760px]:grid-cols-[35px_1fr] gap-[25px] max-[760px]:gap-[15px] items-center py-[25px]">
                <span class="road-number text-[27px] max-[760px]:text-[22px] font-bold tracking-[-1px] text-[var(--blue)]">03</span>
                <div>
                    <h3 class="text-[20px] max-[760px]:text-[18px] tracking-[-0.5px] font-[500] text-neutral-900 m-0 mb-[10px]">Уточни порядок подачи</h3>
                    <p class="text-[12px] text-[var(--muted)] leading-[1.85] m-0 max-w-[530px]">Проверь доступные способы направления заявления и необходимость вступительных испытаний.</p>
                </div>
                <a class="text-[10px] text-[var(--blue)] justify-self-end max-[760px]:justify-self-start max-[760px]:col-span-full max-[760px]:mt-[5px] hover:underline" href="https://irkbmk.ru/abitur/perechen_vi" target="_blank" rel="noopener">Вступительные испытания ↗</a>
            </article>
            <article class="grid grid-cols-[60px_1fr_220px] max-[1100px]:grid-cols-[45px_1fr_175px] max-[760px]:grid-cols-[35px_1fr] gap-[25px] max-[760px]:gap-[15px] items-center py-[25px]">
                <span class="road-number text-[27px] max-[760px]:text-[22px] font-bold tracking-[-1px] text-[var(--blue)]">04</span>
                <div>
                    <h3 class="text-[20px] max-[760px]:text-[18px] tracking-[-0.5px] font-[500] text-neutral-900 m-0 mb-[10px]">Следи за результатом</h3>
                    <p class="text-[12px] text-[var(--muted)] leading-[1.85] m-0 max-w-[530px]">Проверяй официальные объявления, списки и дальнейшие действия для зачисления.</p>
                </div>
                <a class="text-[10px] text-[var(--blue)] justify-self-end max-[760px]:justify-self-start max-[760px]:col-span-full max-[760px]:mt-[5px] hover:underline" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Информация приёмной комиссии ↗</a>
            </article>
        </div>
    </div>
</section>

<section class="wrap section checklist-layout w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px] grid grid-cols-[1fr_1.15fr] max-[760px]:grid-cols-1 gap-[80px] max-[1100px]:gap-[45px] max-[760px]:gap-[25px]" id="checklist">
    <div>
        <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
            <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
                <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>СОБЕРИСЬ БЕЗ СУЕТЫ
            </div>
            <span class="aside-label"></span>
        </div>
        <h2 class="text-[clamp(35px,3.5vw,53px)] max-[760px]:text-[36px] font-[500] tracking-[-2px] leading-[1.12] m-0 mb-[20px]">
            Твой список<br><span class="blue text-[var(--blue)]">готовности.</span>
        </h2>
        <p class="body-copy text-[13px] leading-[1.85] text-[var(--muted)] m-0 mb-[24px] max-w-[490px]">
            Отмечай шаги по мере подготовки.<br>Это личная памятка, а не подача заявления.
        </p>
        <div class="check-progress mt-[32px] max-w-[340px]">
            <strong id="check-count" aria-live="polite" class="text-[12px] font-[500] text-[var(--blue)] block">0 из 5 шагов</strong>
            <div role="progressbar" aria-label="Готовность к поступлению" aria-valuemin="0" aria-valuemax="5" aria-valuenow="0" id="check-progressbar" class="bg-[#e9edf5] h-[5px] rounded-[10px] my-[14px] overflow-hidden">
                <span id="check-fill" class="block h-full bg-[var(--blue)] w-0 transition-[width] duration-200"></span>
            </div>
            <small class="text-[9px] leading-[1.7] block text-[var(--muted)]">Отметки сохраняются в этом браузере, если доступно локальное хранение.</small>
        </div>
    </div>
    <div class="checklist">
        <label class="py-[22px] border-b border-[#e0e5ec] first:border-t flex gap-[16px] items-start text-[13px] max-[760px]:text-[12px] leading-[1.7] cursor-pointer">
            <input type="checkbox" data-check="0" class="accent-[var(--blue)] w-[19px] h-[19px] shrink-0 mt-[2px] cursor-pointer">
            <span>Выбрал(а) специальность и проверил(а) план набора</span>
        </label>
        <label class="py-[22px] border-b border-[#e0e5ec] first:border-t flex gap-[16px] items-start text-[13px] max-[760px]:text-[12px] leading-[1.7] cursor-pointer">
            <input type="checkbox" data-check="1" class="accent-[var(--blue)] w-[19px] h-[19px] shrink-0 mt-[2px] cursor-pointer">
            <span>Изучил(а) действующие правила и сроки приёма</span>
        </label>
        <label class="py-[22px] border-b border-[#e0e5ec] first:border-t flex gap-[16px] items-start text-[13px] max-[760px]:text-[12px] leading-[1.7] cursor-pointer">
            <input type="checkbox" data-check="2" class="accent-[var(--blue)] w-[19px] h-[19px] shrink-0 mt-[2px] cursor-pointer">
            <span>Уточнил(а) перечень документов и медицинские требования</span>
        </label>
        <label class="py-[22px] border-b border-[#e0e5ec] first:border-t flex gap-[16px] items-start text-[13px] max-[760px]:text-[12px] leading-[1.7] cursor-pointer">
            <input type="checkbox" data-check="3" class="accent-[var(--blue)] w-[19px] h-[19px] shrink-0 mt-[2px] cursor-pointer">
            <span>Проверил(а) вступительные испытания и способ подачи</span>
        </label>
        <label class="py-[22px] border-b border-[#e0e5ec] first:border-t flex gap-[16px] items-start text-[13px] max-[760px]:text-[12px] leading-[1.7] cursor-pointer">
            <input type="checkbox" data-check="4" class="accent-[var(--blue)] w-[19px] h-[19px] shrink-0 mt-[2px] cursor-pointer">
            <span>Сохранил(а) контакты и официальные объявления</span>
        </label>
    </div>
</section>

<section class="wrap section compact-top w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto py-[96px] max-[1100px]:py-[75px] max-[760px]:py-[60px] pt-[10px]" id="applicant-faq">
    <div class="section-top flex items-center justify-between gap-[20px] mb-[35px] max-[760px]:mb-[25px]">
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>ДО ТОГО, КАК ПОДАТЬ ЗАЯВЛЕНИЕ
        </div>
        <span class="aside-label"></span>
    </div>
    <h2 class="faq-title text-[36px] max-[760px]:text-[28px] font-[500] tracking-[-1.5px] leading-tight mb-[30px]">Хорошие вопросы.<br>Понятные ориентиры.</h2>
    <div class="faq-list">
        <details class="border-t border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Можно ли поступить после 9 класса?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">База образования определяется для каждой программы в текущем плане приёма. Проверь, открыт ли набор по выбранной специальности после 9 или 11 класса, в разделе <a href="https://irkbmk.ru/abitur" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">«Абитуриенту»</a>.</div>
        </details>
        <details class="border-t border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Есть ли бюджетные места?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">Количество бюджетных и платных мест публикуется в плане приёма на соответствующий год. Актуальный план доступен в разделе «Абитуриенту» на официальном сайте.</div>
        </details>
        <details class="border-t border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Нужно ли проходить вступительные испытания?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">Это зависит от специальности. Изучи официальный <a href="https://irkbmk.ru/abitur/perechen_vi" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">перечень вступительных испытаний</a> и уточни их формат и расписание в приёмной комиссии.</div>
        </details>
        <details class="border-t border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Можно подать заявление на этом сайте?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">Сейчас эта страница помогает выбрать направление и подготовиться. Подача заявления осуществляется способами, предусмотренными действующими правилами приёма колледжа.</div>
        </details>
        <details class="border-t border-b border-[#dfe3eb]">
            <summary class="flex items-center justify-between gap-[20px] py-[22px] text-[13px] list-none cursor-pointer">
                <span>Предоставляется ли общежитие?</span>
                <span class="text-[22px] text-[var(--blue)] transition-transform font-normal leading-none">+</span>
            </summary>
            <div class="faq-answer pb-[23px] pr-[30px] pl-0 max-w-[850px] text-[12px] text-[var(--muted)] leading-[1.9]">В колледже опубликована <a href="https://irkbmk.ru/node/791" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">информация о наличии общежития и количестве мест</a>. Наличие свободных мест и условия заселения нужно уточнять отдельно.</div>
        </details>
    </div>
</section>

<section class="wrap route-banner w-[min(1360px,calc(100%-100px))] max-[1100px]:w-[calc(100%-64px)] max-[760px]:w-[calc(100%-40px)] mx-auto bg-[#eaf0ff] p-[42px] max-[760px]:p-[28px] rounded-[4px] mb-[70px] max-[760px]:mb-[50px] flex max-[760px]:flex-col items-center max-[760px]:items-start justify-between gap-[35px] max-[760px]:gap-[20px]">
    <div>
        <div class="eyebrow flex items-center gap-[10px] text-[9px] tracking-[1.7px] font-[550] text-[var(--blue)] uppercase mb-[8px]">
            <span class="w-[6px] h-[6px] rounded-full bg-[var(--blue)] block"></span>МЫ РЯДОМ
        </div>
        <h2 class="text-[34px] max-[760px]:text-[26px] tracking-[-1.2px] font-[500] text-neutral-900 mt-[22px] mb-[10px]">Большие решения<br>начинаются с вопроса.</h2>
        <p class="text-[11px] text-[#6b7893] leading-[1.8] m-0">Уточни условия поступления у колледжа: +7 (3952) 48-75-13.</p>
    </div>
    <a href="tel:+73952487513" class="lime-btn shrink-0 inline-flex items-center gap-[28px] bg-[var(--lime)] text-[#152739] text-[12px] font-[550] py-[18px] px-[21px] rounded-[3px] hover:bg-white hover:-translate-y-0.5 transition-all shadow-xs">
        <span>Позвонить в колледж</span>
        <span class="text-[21px]">↗</span>
    </a>
</section>
@endsection
