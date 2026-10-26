@extends('layouts.app')

@section('title', 'Абитуриенту — ИБМК')
@section('description', 'Поступление в Иркутский базовый медицинский колледж. Специальности, условия приёма, перечень документов и чек-лист подготовки.')

@section('content')
<div class="wrap breadcrumbs">
    <a href="{{ route('home') }}">Главная</a>
    <span>/</span>
    <span aria-current="page">Абитуриенту</span>
</div>

<section class="applicant-hero">
    <div class="wrap applicant-hero-grid">
        <div>
            <div class="eyebrow"><span></span>ТВОЙ ПЕРВЫЙ ШАГ В МЕДИЦИНУ</div>
            <h1>Выбирай дело.<br>Которое <em>важно.</em></h1>
            <p>Сначала — интерес к человеку.<br>Потом — знания и профессиональный путь.<br>Найди своё направление в ИБМК.</p>
            <a class="lime-btn" href="#choose">Выбрать специальность <span>↓</span></a>
        </div>
        <div class="applicant-photo">
            <img src="{{ asset('assets/medical-students.png') }}" alt="Студенты медицинского колледжа — иллюстрация, созданная ИИ">
            <span class="photo-sticker">Твой выбор.<br>Чья-то надежда.</span>
        </div>
    </div>
</section>

<nav class="page-jumps wrap" aria-label="Разделы страницы">
    <a href="#choose">Специальности</a>
    <a href="#admission-route">Как поступить</a>
    <a href="#checklist">Чек-лист</a>
    <a href="#applicant-faq">Вопросы</a>
</nav>

<section class="wrap section" id="choose">
    <div class="section-top">
        <div class="eyebrow"><span></span>НАЙДИ СВОЁ НАПРАВЛЕНИЕ</div>
        <span class="aside-label">Разные профессии. Общая ценность — человек.</span>
    </div>
    <div class="section-heading">
        <h2>Кем ты хочешь<br><span class="blue">стать для людей?</span></h2>
        <p>Изучи направления подготовки.<br>Наличие набора проверь в текущем плане приёма.</p>
    </div>
    <div class="specialty-grid">
        <article class="specialty-card">
            <div class="resource-meta">
                <span>31.02.01</span>
                <span>01</span>
            </div>
            <h3>Лечебное дело</h3>
            <span class="role-tag">Фельдшер</span>
            <p>Оценивать состояние, оказывать медицинскую помощь и принимать ответственные решения.</p>
            <a class="text-link" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Условия и план приёма <span aria-hidden="true">↗</span></a>
        </article>
        <article class="specialty-card">
            <div class="resource-meta">
                <span>34.02.01</span>
                <span>02</span>
            </div>
            <h3>Сестринское дело</h3>
            <span class="role-tag">Медицинская сестра / медицинский брат</span>
            <p>Помогать пациентам, выполнять сестринский уход и работать в медицинской команде.</p>
            <a class="text-link" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Условия и план приёма <span aria-hidden="true">↗</span></a>
        </article>
        <article class="specialty-card">
            <div class="resource-meta">
                <span>31.02.02</span>
                <span>03</span>
            </div>
            <h3>Акушерское дело</h3>
            <span class="role-tag">Акушер / акушерка</span>
            <p>Заботиться о здоровье женщины и ребёнка и помогать в начале новой жизни.</p>
            <a class="text-link" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Условия и план приёма <span aria-hidden="true">↗</span></a>
        </article>
        <article class="specialty-card">
            <div class="resource-meta">
                <span>33.02.01</span>
                <span>04</span>
            </div>
            <h3>Фармация</h3>
            <span class="role-tag">Фармацевт</span>
            <p>Разбираться в лекарственных препаратах и оказывать фармацевтическую помощь.</p>
            <a class="text-link" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Условия и план приёма <span aria-hidden="true">↗</span></a>
        </article>
    </div>
    <div class="info-strip">
        <span aria-hidden="true">ⓘ</span>
        <p>База поступления, сроки обучения, бюджетные места и стоимость зависят от программы и года приёма. Проверяй их в актуальных документах колледжа.</p>
        <a class="" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Смотреть документы <span aria-hidden="true">↗</span></a>
    </div>
</section>

<section class="soft-section" id="admission-route">
    <div class="wrap">
        <div class="section-top">
            <div class="eyebrow"><span></span>ПОНЯТНЫЙ МАРШРУТ</div>
            <span class="aside-label"></span>
        </div>
        <div class="section-heading">
            <h2>От «хочу»<br><span class="blue">к первому шагу.</span></h2>
            <p>Ориентир для подготовки к поступлению.<br>Точные сроки и порядок определяют правила приёма.</p>
        </div>
        <div class="admission-road">
            <article>
                <span class="road-number">01</span>
                <div>
                    <h3>Изучи правила</h3>
                    <p>Выбери специальность и проверь базу образования, количество мест, сроки и стоимость.</p>
                </div>
                <a class="" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Правила и план набора <span aria-hidden="true">↗</span></a>
            </article>
            <article>
                <span class="road-number">02</span>
                <div>
                    <h3>Подготовь документы</h3>
                    <p>Сверь комплект с официальным перечнем. Отдельно уточни требования к медицинскому осмотру.</p>
                </div>
                <a class="" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Перечень документов <span aria-hidden="true">↗</span></a>
            </article>
            <article>
                <span class="road-number">03</span>
                <div>
                    <h3>Уточни порядок подачи</h3>
                    <p>Проверь доступные способы направления заявления и необходимость вступительных испытаний.</p>
                </div>
                <a class="" href="https://irkbmk.ru/abitur/perechen_vi" target="_blank" rel="noopener">Вступительные испытания <span aria-hidden="true">↗</span></a>
            </article>
            <article>
                <span class="road-number">04</span>
                <div>
                    <h3>Следи за результатом</h3>
                    <p>Проверяй официальные объявления, списки и дальнейшие действия для зачисления.</p>
                </div>
                <a class="" href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">Информация приёмной комиссии <span aria-hidden="true">↗</span></a>
            </article>
        </div>
    </div>
</section>

<section class="wrap section checklist-layout" id="checklist">
    <div>
        <div class="section-top">
            <div class="eyebrow"><span></span>СОБЕРИСЬ БЕЗ СУЕТЫ</div>
            <span class="aside-label"></span>
        </div>
        <h2>Твой список<br><span class="blue">готовности.</span></h2>
        <p class="body-copy">Отмечай шаги по мере подготовки.<br>Это личная памятка, а не подача заявления.</p>
        <div class="check-progress">
            <strong id="check-count" aria-live="polite">0 из 5 шагов</strong>
            <div role="progressbar" aria-label="Готовность к поступлению" aria-valuemin="0" aria-valuemax="5" aria-valuenow="0" id="check-progressbar">
                <span id="check-fill"></span>
            </div>
            <small>Отметки сохраняются в этом браузере, если доступно локальное хранение.</small>
        </div>
    </div>
    <div class="checklist">
        <label><input type="checkbox" data-check="0"><span>Выбрал(а) специальность и проверил(а) план набора</span></label>
        <label><input type="checkbox" data-check="1"><span>Изучил(а) действующие правила и сроки приёма</span></label>
        <label><input type="checkbox" data-check="2"><span>Уточнил(а) перечень документов и медицинские требования</span></label>
        <label><input type="checkbox" data-check="3"><span>Проверил(а) вступительные испытания и способ подачи</span></label>
        <label><input type="checkbox" data-check="4"><span>Сохранил(а) контакты и официальные объявления</span></label>
    </div>
</section>

<section class="wrap section compact-top" id="applicant-faq">
    <div class="section-top">
        <div class="eyebrow"><span></span>ДО ТОГО, КАК ПОДАТЬ ЗАЯВЛЕНИЕ</div>
        <span class="aside-label"></span>
    </div>
    <h2 class="faq-title">Хорошие вопросы.<br>Понятные ориентиры.</h2>
    <div class="faq-list">
        <details>
            <summary>Можно ли поступить после 9 класса?<span>+</span></summary>
            <div class="faq-answer">База образования определяется для каждой программы в текущем плане приёма. Проверь, открыт ли набор по выбранной специальности после 9 или 11 класса, в разделе <a href="https://irkbmk.ru/abitur" target="_blank" rel="noopener">«Абитуриенту»</a>.</div>
        </details>
        <details>
            <summary>Есть ли бюджетные места?<span>+</span></summary>
            <div class="faq-answer">Количество бюджетных и платных мест публикуется в плане приёма на соответствующий год. Актуальный план доступен в разделе «Абитуриенту» на официальном сайте.</div>
        </details>
        <details>
            <summary>Нужно ли проходить вступительные испытания?<span>+</span></summary>
            <div class="faq-answer">Это зависит от специальности. Изучи официальный <a href="https://irkbmk.ru/abitur/perechen_vi" target="_blank" rel="noopener">перечень вступительных испытаний</a> и уточни их формат и расписание в приёмной комиссии.</div>
        </details>
        <details>
            <summary>Можно подать заявление на этом сайте?<span>+</span></summary>
            <div class="faq-answer">Сейчас эта страница помогает выбрать направление и подготовиться. Подача заявления осуществляется способами, предусмотренными действующими правилами приёма колледжа.</div>
        </details>
        <details>
            <summary>Предоставляется ли общежитие?<span>+</span></summary>
            <div class="faq-answer">В колледже опубликована <a href="https://irkbmk.ru/node/791" target="_blank" rel="noopener">информация о наличии общежития и количестве мест</a>. Наличие свободных мест и условия заселения нужно уточнять отдельно.</div>
        </details>
    </div>
</section>

<section class="wrap route-banner">
    <div>
        <div class="eyebrow"><span></span>МЫ РЯДОМ</div>
        <h2>Большие решения<br>начинаются с вопроса.</h2>
        <p>Уточни условия поступления у колледжа: +7 (3952) 48-75-13.</p>
    </div>
    <a href="tel:+73952487513" class="lime-btn">Позвонить в колледж <span>↗</span></a>
</section>
@endsection
