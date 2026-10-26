@extends('layouts.app')

@section('title', 'Абитуриенту — ИБМК')
@section('description', 'Поступление в Иркутский базовый медицинский колледж. Специальности, условия приёма, перечень документов и чек-лист подготовки.')

@section('content')
<div class="wrap breadcrumbs max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 flex items-center gap-3 text-[10px] text-[#8a8f99] py-5">
    <a href="{{ route('home') }}" class="hover:text-[var(--blue)] transition-colors">Главная</a>
    <span>/</span>
    <span aria-current="page" class="text-[var(--ink)] font-medium">Абитуриенту</span>
</div>

<section class="applicant-hero bg-[var(--blue)] text-white py-12 md:py-16">
    <div class="wrap applicant-hero-grid max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 grid grid-cols-1 md:grid-cols-[1.05fr_1fr] gap-10 lg:gap-16 items-center">
        <div>
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-white/90 uppercase mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--lime)] block"></span>ТВОЙ ПЕРВЫЙ ШАГ В МЕДИЦИНУ
            </div>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-medium tracking-tight leading-[1.06] mb-6">
                Выбирай дело.<br>Которое <em class="not-italic text-[var(--lime)]">важно.</em>
            </h1>
            <p class="text-xs sm:text-[13px] leading-relaxed text-[#d3dcff] max-w-lg mb-8">
                Сначала — интерес к человеку.<br>Потом — знания и профессиональный путь.<br>Найди своё направление в ИБМК.
            </p>
            <a class="lime-btn inline-flex items-center gap-6 bg-[var(--lime)] text-[#152739] text-xs font-semibold px-6 py-4 rounded hover:bg-white transition-all shadow-md" href="#choose">
                <span>Выбрать специальность</span>
                <span class="text-lg leading-none">↓</span>
            </a>
        </div>
        <div class="applicant-photo relative h-[280px] sm:h-[360px] md:h-[400px] rounded overflow-hidden shadow-sm">
            <img src="{{ asset('assets/medical-students.png') }}" alt="Студенты медицинского колледжа — иллюстрация, созданная ИИ" class="w-full h-full object-cover">
            <span class="photo-sticker absolute bottom-4 left-4 bg-[var(--lime)] text-[#152739] px-4 py-2 text-sm sm:text-base font-semibold tracking-tight rounded-xs shadow-xs">
                Твой выбор.<br>Чья-то надежда.
            </span>
        </div>
    </div>
</section>

<nav class="page-jumps max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 flex gap-6 md:gap-9 border-y border-[#e1e5ec] py-5 overflow-x-auto whitespace-nowrap text-xs text-[#646c7c]" aria-label="Разделы страницы">
    <a href="#choose" class="hover:text-[var(--blue)] transition-colors">Специальности</a>
    <a href="#admission-route" class="hover:text-[var(--blue)] transition-colors">Как поступить</a>
    <a href="#checklist" class="hover:text-[var(--blue)] transition-colors">Чек-лист</a>
    <a href="#applicant-faq" class="hover:text-[var(--blue)] transition-colors">Вопросы</a>
</nav>

<section class="wrap section max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24" id="choose">
    <div class="section-top flex items-center justify-between gap-5 mb-8">
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>НАЙДИ СВОЁ НАПРАВЛЕНИЕ
        </div>
        <span class="aside-label text-xs text-[#747883]">Разные профессии. Общая ценность — человек.</span>
    </div>
    <div class="section-heading flex flex-col md:flex-row justify-between md:items-end gap-4 mb-10">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
            Кем ты хочешь<br><span class="blue text-[var(--blue)]">стать для людей?</span>
        </h2>
        <p class="text-xs leading-relaxed text-[#747883]">
            Изучи направления подготовки.<br class="hidden md:inline">Наличие набора проверь в текущем плане приёма.
        </p>
    </div>
    <div class="specialty-grid grid grid-cols-1 md:grid-cols-2 gap-6">
        <article class="specialty-card p-6 sm:p-8 bg-[var(--paper)] border border-[#e8ebf1] rounded-md flex flex-col items-start hover:border-[var(--blue)] hover:shadow-sm transition-all">
            <div class="resource-meta w-full flex justify-between items-center text-[10px] text-[#7a859c] font-medium mb-3">
                <span>31.02.01</span>
                <span>01</span>
            </div>
            <h3 class="text-2xl sm:text-3xl font-medium tracking-tight text-neutral-900 mb-2">Лечебное дело</h3>
            <span class="role-tag text-[9px] text-[var(--blue)] border border-[#cbd6fd] px-3 py-1 rounded-full font-medium mb-4">Фельдшер</span>
            <p class="text-xs leading-relaxed text-[#747883] mb-6 max-w-sm">Оценивать состояние, оказывать медицинскую помощь и принимать ответственные решения.</p>
            <a class="text-link mt-auto inline-flex items-center gap-3 text-xs font-semibold text-[var(--blue)] hover:underline" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">
                <span>Условия и план приёма</span>
                <span aria-hidden="true">↗</span>
            </a>
        </article>
        <article class="specialty-card p-6 sm:p-8 bg-[var(--paper)] border border-[#e8ebf1] rounded-md flex flex-col items-start hover:border-[var(--blue)] hover:shadow-sm transition-all">
            <div class="resource-meta w-full flex justify-between items-center text-[10px] text-[#7a859c] font-medium mb-3">
                <span>34.02.01</span>
                <span>02</span>
            </div>
            <h3 class="text-2xl sm:text-3xl font-medium tracking-tight text-neutral-900 mb-2">Сестринское дело</h3>
            <span class="role-tag text-[9px] text-[var(--blue)] border border-[#cbd6fd] px-3 py-1 rounded-full font-medium mb-4">Медицинская сестра / медицинский брат</span>
            <p class="text-xs leading-relaxed text-[#747883] mb-6 max-w-sm">Помогать пациентам, выполнять сестринский уход и работать в медицинской команде.</p>
            <a class="text-link mt-auto inline-flex items-center gap-3 text-xs font-semibold text-[var(--blue)] hover:underline" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">
                <span>Условия и план приёма</span>
                <span aria-hidden="true">↗</span>
            </a>
        </article>
        <article class="specialty-card p-6 sm:p-8 bg-[var(--paper)] border border-[#e8ebf1] rounded-md flex flex-col items-start hover:border-[var(--blue)] hover:shadow-sm transition-all">
            <div class="resource-meta w-full flex justify-between items-center text-[10px] text-[#7a859c] font-medium mb-3">
                <span>31.02.02</span>
                <span>03</span>
            </div>
            <h3 class="text-2xl sm:text-3xl font-medium tracking-tight text-neutral-900 mb-2">Акушерское дело</h3>
            <span class="role-tag text-[9px] text-[var(--blue)] border border-[#cbd6fd] px-3 py-1 rounded-full font-medium mb-4">Акушер / акушерка</span>
            <p class="text-xs leading-relaxed text-[#747883] mb-6 max-w-sm">Заботиться о здоровье женщины и ребёнка и помогать в начале новой жизни.</p>
            <a class="text-link mt-auto inline-flex items-center gap-3 text-xs font-semibold text-[var(--blue)] hover:underline" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">
                <span>Условия и план приёма</span>
                <span aria-hidden="true">↗</span>
            </a>
        </article>
        <article class="specialty-card p-6 sm:p-8 bg-[var(--paper)] border border-[#e8ebf1] rounded-md flex flex-col items-start hover:border-[var(--blue)] hover:shadow-sm transition-all">
            <div class="resource-meta w-full flex justify-between items-center text-[10px] text-[#7a859c] font-medium mb-3">
                <span>33.02.01</span>
                <span>04</span>
            </div>
            <h3 class="text-2xl sm:text-3xl font-medium tracking-tight text-neutral-900 mb-2">Фармация</h3>
            <span class="role-tag text-[9px] text-[var(--blue)] border border-[#cbd6fd] px-3 py-1 rounded-full font-medium mb-4">Фармацевт</span>
            <p class="text-xs leading-relaxed text-[#747883] mb-6 max-w-sm">Разбираться в лекарственных препаратах и оказывать фармацевтическую помощь.</p>
            <a class="text-link mt-auto inline-flex items-center gap-3 text-xs font-semibold text-[var(--blue)] hover:underline" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">
                <span>Условия и план приёма</span>
                <span aria-hidden="true">↗</span>
            </a>
        </article>
    </div>
    <div class="info-strip flex flex-col sm:flex-row items-start sm:items-center gap-4 p-5 bg-[#f0f4ff] rounded-md mt-6">
        <span class="text-2xl text-[var(--blue)] leading-none select-none" aria-hidden="true">ⓘ</span>
        <p class="text-xs leading-relaxed text-[#687693] flex-1">База поступления, сроки обучения, бюджетные места и стоимость зависят от программы и года приёма. Проверяй их в актуальных документах колледжа.</p>
        <a class="text-xs font-semibold text-[var(--blue)] hover:underline shrink-0" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Смотреть документы ↗</a>
    </div>
</section>

<section class="soft-section bg-[var(--paper)] py-14 md:py-20" id="admission-route">
    <div class="wrap max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0">
        <div class="section-top flex items-center justify-between gap-5 mb-8">
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ПОНЯТНЫЙ МАРШРУТ
            </div>
            <span class="aside-label"></span>
        </div>
        <div class="section-heading flex flex-col md:flex-row justify-between md:items-end gap-4 mb-10">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight">
                От «хочу»<br><span class="blue text-[var(--blue)]">к первому шагу.</span>
            </h2>
            <p class="text-xs leading-relaxed text-[#747883]">
                Ориентир для подготовки к поступлению.<br class="hidden md:inline">Точные сроки и порядок определяют правила приёма.
            </p>
        </div>
        <div class="admission-road divide-y divide-[#dce1eb] border-y border-[#dce1eb]">
            <article class="grid grid-cols-1 md:grid-cols-[60px_1fr_220px] gap-4 md:gap-6 py-6 items-center">
                <span class="road-number text-2xl font-bold text-[var(--blue)]">01</span>
                <div>
                    <h3 class="text-lg font-medium text-neutral-900 mb-1">Изучи правила</h3>
                    <p class="text-xs leading-relaxed text-[#747883]">Выбери специальность и проверь базу образования, количество мест, сроки и стоимость.</p>
                </div>
                <a class="text-xs font-semibold text-[var(--blue)] hover:underline md:justify-self-end" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Правила и план набора ↗</a>
            </article>
            <article class="grid grid-cols-1 md:grid-cols-[60px_1fr_220px] gap-4 md:gap-6 py-6 items-center">
                <span class="road-number text-2xl font-bold text-[var(--blue)]">02</span>
                <div>
                    <h3 class="text-lg font-medium text-neutral-900 mb-1">Подготовь документы</h3>
                    <p class="text-xs leading-relaxed text-[#747883]">Сверь комплект с официальным перечнем. Отдельно уточни требования к медицинскому осмотру.</p>
                </div>
                <a class="text-xs font-semibold text-[var(--blue)] hover:underline md:justify-self-end" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Перечень документов ↗</a>
            </article>
            <article class="grid grid-cols-1 md:grid-cols-[60px_1fr_220px] gap-4 md:gap-6 py-6 items-center">
                <span class="road-number text-2xl font-bold text-[var(--blue)]">03</span>
                <div>
                    <h3 class="text-lg font-medium text-neutral-900 mb-1">Уточни порядок подачи</h3>
                    <p class="text-xs leading-relaxed text-[#747883]">Проверь доступные способы направления заявления и необходимость вступительных испытаний.</p>
                </div>
                <a class="text-xs font-semibold text-[var(--blue)] hover:underline md:justify-self-end" href="https://irkbmk.ru/abitur/perechen_vi" target="_blank" rel="noopener">Вступительные испытания ↗</a>
            </article>
            <article class="grid grid-cols-1 md:grid-cols-[60px_1fr_220px] gap-4 md:gap-6 py-6 items-center">
                <span class="road-number text-2xl font-bold text-[var(--blue)]">04</span>
                <div>
                    <h3 class="text-lg font-medium text-neutral-900 mb-1">Следи за результатом</h3>
                    <p class="text-xs leading-relaxed text-[#747883]">Проверяй официальные объявления, списки и дальнейшие действия для зачисления.</p>
                </div>
                <a class="text-xs font-semibold text-[var(--blue)] hover:underline md:justify-self-end" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Информация приёмной комиссии ↗</a>
            </article>
        </div>
    </div>
</section>

<section class="wrap section checklist-layout max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-16 md:py-24 grid grid-cols-1 lg:grid-cols-[1fr_1.15fr] gap-10 lg:gap-20" id="checklist">
    <div>
        <div class="section-top flex items-center justify-between gap-5 mb-8">
            <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
                <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>СОБЕРИСЬ БЕЗ СУЕТЫ
            </div>
            <span class="aside-label"></span>
        </div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-medium tracking-tight leading-tight mb-4">
            Твой список<br><span class="blue text-[var(--blue)]">готовности.</span>
        </h2>
        <p class="body-copy text-xs sm:text-[13px] leading-relaxed text-[#747883] mb-6">
            Отмечай шаги по мере подготовки.<br>Это личная памятка, а не подача заявления.
        </p>
        <div class="check-progress bg-white p-5 rounded-lg border border-[#e9edf5] shadow-xs max-w-sm">
            <strong id="check-count" aria-live="polite" class="block text-xs font-semibold text-[var(--blue)] mb-2">0 из 5 шагов</strong>
            <div role="progressbar" aria-label="Готовность к поступлению" aria-valuemin="0" aria-valuemax="5" aria-valuenow="0" id="check-progressbar" class="bg-[#e9edf5] h-1.5 rounded-full overflow-hidden mb-2">
                <span id="check-fill" class="block h-full bg-[var(--blue)] w-0 transition-all duration-300"></span>
            </div>
            <small class="text-[9px] text-[#747883] leading-relaxed block">Отметки сохраняются в этом браузере, если доступно локальное хранение.</small>
        </div>
    </div>
    <div class="checklist divide-y divide-[#e0e5ec] border-y border-[#e0e5ec]">
        <label class="flex items-start gap-4 py-4 cursor-pointer text-xs sm:text-[13px] text-neutral-800 hover:text-neutral-900">
            <input type="checkbox" data-check="0" class="mt-0.5 rounded text-[var(--blue)] focus:ring-[var(--blue)] w-4 h-4 cursor-pointer">
            <span>Выбрал(а) специальность и проверил(а) план набора</span>
        </label>
        <label class="flex items-start gap-4 py-4 cursor-pointer text-xs sm:text-[13px] text-neutral-800 hover:text-neutral-900">
            <input type="checkbox" data-check="1" class="mt-0.5 rounded text-[var(--blue)] focus:ring-[var(--blue)] w-4 h-4 cursor-pointer">
            <span>Изучил(а) действующие правила и сроки приёма</span>
        </label>
        <label class="flex items-start gap-4 py-4 cursor-pointer text-xs sm:text-[13px] text-neutral-800 hover:text-neutral-900">
            <input type="checkbox" data-check="2" class="mt-0.5 rounded text-[var(--blue)] focus:ring-[var(--blue)] w-4 h-4 cursor-pointer">
            <span>Уточнил(а) перечень документов и медицинские требования</span>
        </label>
        <label class="flex items-start gap-4 py-4 cursor-pointer text-xs sm:text-[13px] text-neutral-800 hover:text-neutral-900">
            <input type="checkbox" data-check="3" class="mt-0.5 rounded text-[var(--blue)] focus:ring-[var(--blue)] w-4 h-4 cursor-pointer">
            <span>Проверил(а) вступительные испытания и способ подачи</span>
        </label>
        <label class="flex items-start gap-4 py-4 cursor-pointer text-xs sm:text-[13px] text-neutral-800 hover:text-neutral-900">
            <input type="checkbox" data-check="4" class="mt-0.5 rounded text-[var(--blue)] focus:ring-[var(--blue)] w-4 h-4 cursor-pointer">
            <span>Сохранил(а) контакты и официальные объявления</span>
        </label>
    </div>
</section>

<section class="wrap section compact-top max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 py-12 md:py-16" id="applicant-faq">
    <div class="section-top flex items-center justify-between gap-5 mb-6">
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>ДО ТОГО, КАК ПОДАТЬ ЗАЯВЛЕНИЕ
        </div>
        <span class="aside-label"></span>
    </div>
    <h2 class="faq-title text-2xl sm:text-3xl md:text-4xl font-medium tracking-tight mb-8">Хорошие вопросы.<br>Понятные ориентиры.</h2>
    <div class="faq-list divide-y divide-[#dfe3eb] border-y border-[#dfe3eb]">
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Можно ли поступить после 9 класса?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">База образования определяется для каждой программы в текущем плане приёма. Проверь, открыт ли набор по выбранной специальности после 9 или 11 класса, в разделе <a href="https://irkbmk.ru/abitur" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">«Абитуриенту»</a>.</div>
        </details>
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Есть ли бюджетные места?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Количество бюджетных и платных мест публикуется в плане приёма на соответствующий год. Актуальный план доступен в разделе «Абитуриенту» на официальном сайте.</div>
        </details>
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Нужно ли проходить вступительные испытания?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Это зависит от специальности. Изучи официальный <a href="https://irkbmk.ru/abitur/perechen_vi" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">перечень вступительных испытаний</a> и уточни их формат и расписание в приёмной комиссии.</div>
        </details>
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Можно подать заявление на этом сайте?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">Сейчас эта страница помогает выбрать направление и подготовиться. Подача заявления осуществляется способами, предусмотренными действующими правилами приёма колледжа.</div>
        </details>
        <details class="group py-4">
            <summary class="flex justify-between items-center text-xs sm:text-sm font-medium cursor-pointer list-none select-none text-neutral-900">
                <span>Предоставляется ли общежитие?</span>
                <span class="text-xl text-[var(--blue)] transition-transform group-open:rotate-45 font-light">+</span>
            </summary>
            <div class="faq-answer text-xs leading-relaxed text-[#747883] pt-3 pb-2 max-w-3xl">В колледже опубликована <a href="https://irkbmk.ru/node/791" target="_blank" rel="noopener" class="underline hover:text-[var(--blue)]">информация о наличии общежития и количестве мест</a>. Наличие свободных мест и условия заселения нужно уточнять отдельно.</div>
        </details>
    </div>
</section>

<section class="wrap route-banner max-w-[1360px] mx-auto px-5 sm:px-8 xl:px-0 bg-[#eaf0ff] p-7 md:p-10 rounded-lg mb-16 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
    <div>
        <div class="eyebrow flex items-center gap-2.5 text-[9px] tracking-[1.7px] font-semibold text-[var(--blue)] uppercase mb-2">
            <span class="w-1.5 h-1.5 rounded-full bg-[var(--blue)] block"></span>МЫ РЯДОМ
        </div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium tracking-tight text-neutral-900 mb-2">Большие решения<br>начинаются с вопроса.</h2>
        <p class="text-xs text-[#6b7893] leading-relaxed">Уточни условия поступления у колледжа: +7 (3952) 48-75-13.</p>
    </div>
    <a href="tel:+73952487513" class="lime-btn shrink-0 inline-flex items-center gap-5 bg-[var(--lime)] text-[#152739] text-xs font-semibold px-6 py-4 rounded hover:bg-white transition-all shadow-xs">
        <span>Позвонить в колледж</span>
        <span class="text-xl">↗</span>
    </a>
</section>
@endsection
