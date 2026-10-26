@extends('layouts.app')

@section('title', 'Студенту — ИБМК')
@section('description', 'Пространство студента Иркутского базового медицинского колледжа. Расписание занятий, образовательная среда, документы и поддержка.')

@section('content')
<div class="wrap breadcrumbs">
    <a href="{{ route('home') }}">Главная</a>
    <span>/</span>
    <span aria-current="page">Студенту</span>
</div>

<section class="wrap route-hero student-hero">
    <div>
        <div class="eyebrow"><span></span>ТВОЙ СТУДЕНЧЕСКИЙ НАВИГАТОР</div>
        <h1>В своём ритме.<br><em>На своём месте.</em></h1>
        <p>Расписание, учебные материалы и важные документы.<br>Всё, что помогает сосредоточиться на учёбе.</p>
        <a class="dark-btn" href="#services">Найти нужный сервис <span>↓</span></a>
    </div>
    <a class="schedule-feature" href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">
        <div class="resource-meta">
            <span>НАЧНИ С ГЛАВНОГО</span>
            <span>↗</span>
        </div>
        <div class="calendar-glyph" aria-hidden="true">
            <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
        </div>
        <h2>Что сегодня<br>в расписании?</h2>
        <p>Посмотри занятия и актуальные изменения<br>на странице расписания колледжа.</p>
        <strong>Открыть расписание ↗</strong>
    </a>
</section>

<nav class="page-jumps wrap" aria-label="Разделы страницы">
    <a href="#services">Сервисы</a>
    <a href="#study-guide">Учебный маршрут</a>
    <a href="#support">Поддержка</a>
    <a href="#student-faq">Вопросы и ответы</a>
</nav>

<section class="wrap section" id="services">
    <div class="section-top">
        <div class="eyebrow"><span></span>ПОД РУКОЙ</div>
        <span class="aside-label">Один раздел — меньше поисков</span>
    </div>
    <div class="section-heading">
        <h2>Учиться.<br><span class="blue">Успевать. Развиваться.</span></h2>
        <p>Выбери категорию или найди сервис по названию.</p>
    </div>
    <div class="resource-controls">
        <div class="filter-tabs" role="group" aria-label="Категории сервисов">
            <button class="selected" data-filter="all" aria-pressed="true">Все сервисы</button>
            <button data-filter="study" aria-pressed="false">Учёба</button>
            <button data-filter="documents" aria-pressed="false">Документы</button>
            <button data-filter="support" aria-pressed="false">Поддержка</button>
        </div>
        <label class="resource-search">
            <span class="sr-only">Поиск сервиса</span>
            <input type="search" id="resource-search" placeholder="Найти сервис…">
            <span aria-hidden="true">⌕</span>
        </label>
    </div>
    <div class="resource-grid" id="resource-grid">
        <a class="resource-card" data-category="study" href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">
            <div class="resource-meta"><span>01</span><span>↗</span></div>
            <h3>Расписание занятий</h3>
            <p>Пары, аудитории и изменения. Проверяй перед началом учебного дня.</p>
            <small>РАСПИСАНИЕ</small>
        </a>
        <a class="resource-card" data-category="study" href="https://dpo.irkbmk.ru/moodle/" target="_blank" rel="noopener">
            <div class="resource-meta"><span>02</span><span>↗</span></div>
            <h3>Образовательная среда</h3>
            <p>Переход к онлайн-курсам и учебным материалам. Доступ — по учётной записи.</p>
            <small>ОНЛАЙН-ОБУЧЕНИЕ</small>
        </a>
        <a class="resource-card" data-category="study" href="https://irkbmk.ru/biblioteka" target="_blank" rel="noopener">
            <div class="resource-meta"><span>03</span><span>↗</span></div>
            <h3>Библиотека</h3>
            <p>Электронные ресурсы, библиотечные сервисы и информация для читателей.</p>
            <small>ЗНАНИЯ И РЕСУРСЫ</small>
        </a>
        <a class="resource-card" data-category="documents" href="https://irkbmk.ru/sveden/document" target="_blank" rel="noopener">
            <div class="resource-meta"><span>04</span><span>↗</span></div>
            <h3>Документы и правила</h3>
            <p>Локальные акты, правила внутреннего распорядка и этический кодекс.</p>
            <small>ОФИЦИАЛЬНЫЕ ДОКУМЕНТЫ</small>
        </a>
        <a class="resource-card" data-category="support" href="https://irkbmk.ru/sveden/grants" target="_blank" rel="noopener">
            <div class="resource-meta"><span>05</span><span>↗</span></div>
            <h3>Стипендии и поддержка</h3>
            <p>Актуальная информация о стипендиях и материальной помощи.</p>
            <small>СОЦИАЛЬНАЯ ПОДДЕРЖКА</small>
        </a>
        <a class="resource-card" data-category="support" href="https://irkbmk.ru/node/791" target="_blank" rel="noopener">
            <div class="resource-meta"><span>06</span><span>↗</span></div>
            <h3>Общежитие</h3>
            <p>Информация о наличии общежития и количестве мест. Уточняй условия заселения.</p>
            <small>СТУДЕНЧЕСКИЙ БЫТ</small>
        </a>
    </div>
    <p id="resource-empty" class="empty-state" role="status" hidden>Такого сервиса не нашли. Измени запрос или выбери другую категорию.</p>
    <p class="source-note">Сервисы открываются на действующих ресурсах колледжа. Доступ к отдельным материалам может требовать авторизации.</p>
</section>

<section class="soft-section" id="study-guide">
    <div class="wrap">
        <div class="split-heading">
            <div>
                <div class="section-top">
                    <div class="eyebrow"><span></span>ОТ ПЕРВОЙ ПАРЫ ДО ПРАКТИКИ</div>
                    <span class="aside-label"></span>
                </div>
                <h2>Не всё сразу.<br><span class="blue">Шаг за шагом.</span></h2>
            </div>
            <p>Небольшой ориентир, который поможет<br>организовать учебный процесс.</p>
        </div>
        <div class="route-timeline">
            <article>
                <span>01 / НАЧАЛО СЕМЕСТРА</span>
                <h3>Собери свою базу</h3>
                <p>Проверь расписание, доступ к учебной среде и список дисциплин. Сохрани контакты куратора.</p>
            </article>
            <article>
                <span>02 / В ТЕЧЕНИЕ УЧЁБЫ</span>
                <h3>Держи свой темп</h3>
                <p>Следи за заданиями и сроками. Если нужна помощь — обратись к преподавателю до того, как накопятся вопросы.</p>
            </article>
            <article>
                <span>03 / ПРАКТИКА И АТТЕСТАЦИЯ</span>
                <h3>Подготовься заранее</h3>
                <p>Уточни требования к практике, отчётным материалам и аттестации у своего руководителя.</p>
            </article>
        </div>
    </div>
</section>

<section class="wrap section support-layout" id="support">
    <div>
        <div class="section-top">
            <div class="eyebrow"><span></span>НЕ ОСТАВАЙСЯ С ВОПРОСОМ</div>
            <span class="aside-label"></span>
        </div>
        <h2>Поддержка —<br><span class="blue">часть пути.</span></h2>
        <p class="body-copy">Справка, вопрос об учёбе или сложность с доступом? Начни с правильного адресата.</p>
        <a class="text-link" href="https://irkbmk.ru/studentu" target="_blank" rel="noopener">Все материалы для обучающихся <span aria-hidden="true">↗</span></a>
    </div>
    <div class="support-list">
        <article>
            <span>01</span>
            <div>
                <h3>Учебные вопросы</h3>
                <p>Преподаватель дисциплины или куратор группы помогут разобраться с заданиями, пропусками и организацией учёбы.</p>
            </div>
        </article>
        <article>
            <span>02</span>
            <div>
                <h3>Справки и документы</h3>
                <p>Уточни порядок получения справки в учебной части. Контакты подразделений доступны на официальном сайте.</p>
                <a class="" href="https://irkbmk.ru/sveden/struct" target="_blank" rel="noopener">Структура и подразделения <span aria-hidden="true">↗</span></a>
            </div>
        </article>
        <article>
            <span>03</span>
            <div>
                <h3>Не получается войти в систему?</h3>
                <p>Проверь раскладку и данные учётной записи. Для восстановления доступа обратись к ответственному за образовательную среду через колледж.</p>
            </div>
        </article>
    </div>
</section>

<section class="wrap section compact-top" id="student-faq">
    <div class="section-top">
        <div class="eyebrow"><span></span>ЧАСТЫЕ ВОПРОСЫ</div>
        <span class="aside-label"></span>
    </div>
    <h2 class="faq-title">Разберёмся вместе.</h2>
    <div class="faq-list">
        <details>
            <summary>Где посмотреть изменения в расписании?<span>+</span></summary>
            <div class="faq-answer">Открой <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">страницу расписания</a> и проверь актуальные данные своей группы. Если есть расхождение с сообщением преподавателя, уточни информацию у куратора.</div>
        </details>
        <details>
            <summary>Как получить справку об обучении?<span>+</span></summary>
            <div class="faq-answer">Обратись в учебную часть и уточни порядок подачи запроса, необходимые сведения и срок готовности. На этой странице заявления не принимаются.</div>
        </details>
        <details>
            <summary>Где узнать условия назначения стипендии?<span>+</span></summary>
            <div class="faq-answer">Действующие положения и сведения опубликованы в разделе <a href="https://irkbmk.ru/sveden/grants" target="_blank" rel="noopener">«Стипендии и иные виды материальной поддержки»</a> официального сайта.</div>
        </details>
        <details>
            <summary>Что делать, если пропустил занятие?<span>+</span></summary>
            <div class="faq-answer">Сообщи куратору или преподавателю, уточни порядок подтверждения причины пропуска и согласуй выполнение пропущенных заданий.</div>
        </details>
    </div>
</section>

<section class="wrap route-banner">
    <div>
        <div class="eyebrow"><span></span>МЫ РЯДОМ</div>
        <h2>Есть вопрос?<br>Начни с разговора.</h2>
        <p>Официальные контакты колледжа — на странице «О колледже».</p>
    </div>
    <a href="{{ route('about') }}#contacts" class="lime-btn">Найти контакты <span>↗</span></a>
</section>
@endsection
