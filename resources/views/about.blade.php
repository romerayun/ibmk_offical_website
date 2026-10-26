@extends('layouts.app')

@section('title', 'О колледже — ИБМК')
@section('description', 'О колледже — ИБМК. Полезная информация Иркутского базового медицинского колледжа.')

@section('content')
<div class="wrap breadcrumbs">
    <a href="{{ route('home') }}">Главная</a>
    <span>/</span>
    <span aria-current="page">О колледже</span>
</div>

<section class="wrap route-hero about-hero">
    <div>
        <div class="eyebrow"><span></span>ИРКУТСКИЙ БАЗОВЫЙ МЕДИЦИНСКИЙ КОЛЛЕДЖ</div>
        <h1>Знания —<br>в профессию.<br><em>Заботу — в дело.</em></h1>
        <p>Колледж с историей. Образование с человеческим лицом.<br>Место, с которого начинается путь в медицину.</p>
        <a class="dark-btn" href="{{ route('applicant') }}">Стать частью ИБМК <span>↗</span></a>
    </div>
    <div class="about-hero-photo">
        <img src="{{ asset('assets/clinical-practice.png') }}" alt="Учебное занятие с преподавателем — иллюстрация, созданная ИИ">
        <span class="image-caption">ЗНАТЬ. ПОНИМАТЬ. ПОМОГАТЬ.</span>
    </div>
</section>

<nav class="page-jumps wrap" aria-label="Разделы страницы">
    <a href="#identity">О нас</a>
    <a href="#history">История</a>
    <a href="#official">Официальные сведения</a>
    <a href="#contacts">Контакты</a>
</nav>

<section class="wrap section identity-layout" id="identity">
    <div>
        <div class="section-top">
            <div class="eyebrow"><span></span>НАШЕ ОБЩЕЕ ДЕЛО</div>
            <span class="aside-label"></span>
        </div>
        <h2>За каждой профессией —<br><span class="blue">человек.</span></h2>
    </div>
    <div>
        <p class="large-copy">В медицине важны знания.<br>И то, как ты применяешь их<br>ради другого человека.</p>
        <p class="body-copy">Иркутский базовый медицинский колледж — областное государственное бюджетное профессиональное образовательное учреждение. Здесь начинается путь в медицинские и фармацевтические профессии.</p>
        <p class="body-copy">Выбери направление, познакомься с образовательными программами и узнай больше об условиях обучения. Первый шаг начинается с интереса к профессии.</p>
        <a class="text-link" href="{{ route('applicant') }}#choose">Направления подготовки <span>↗</span></a>
    </div>
</section>

<section class="history-section" id="history">
    <div class="wrap history-grid">
        <div>
            <div class="eyebrow"><span></span>С ИСТОРИЕЙ. С ПЕРСПЕКТИВОЙ.</div>
            <span class="history-year">1893<span>ГОД ОСНОВАНИЯ</span></span>
        </div>
        <div>
            <h2>Традиция помогать.<br><em>Продолжение — в тебе.</em></h2>
            <p>Дата создания колледжа — 3 октября 1893 года. За этой датой — история медицинского образования и поколения людей, выбравших профессию помощи.</p>
            <p>Сегодня знакомство с колледжем может стать началом твоего собственного профессионального пути.</p>
            <a class="history-link" href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener">Основные сведения о колледже <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</section>

<section class="wrap section">
    <div class="section-top">
        <div class="eyebrow"><span></span>ЧТО ОБЪЕДИНЯЕТ НАШ ПУТЬ</div>
        <span class="aside-label"></span>
    </div>
    <div class="principles">
        <article>
            <span>01 / ЗНАНИЯ</span>
            <h3>Понимать глубже</h3>
            <p>Разбираться в основах профессии, задавать вопросы и связывать теорию с профессиональными задачами.</p>
        </article>
        <article>
            <span>02 / ОТВЕТСТВЕННОСТЬ</span>
            <h3>Действовать осознанно</h3>
            <p>Быть внимательным к деталям, соблюдать профессиональную этику и понимать значение своих решений.</p>
        </article>
        <article>
            <span>03 / ЧЕЛОВЕК</span>
            <h3>Видеть личность</h3>
            <p>Сохранять уважение, учиться слышать другого и помнить, ради кого существует медицина.</p>
        </article>
    </div>
</section>

<section class="soft-section" id="official">
    <div class="wrap">
        <div class="section-top">
            <div class="eyebrow"><span></span>ОТКРЫТО И ПО СУЩЕСТВУ</div>
            <span class="aside-label"></span>
        </div>
        <div class="section-heading">
            <h2>Важное —<br><span class="blue">в открытом доступе.</span></h2>
            <p>Официальные документы и сведения<br>на действующем сайте колледжа.</p>
        </div>
        <div class="official-grid">
            <a href="https://irkbmk.ru/sveden/common" target="_blank" rel="noopener">
                <span>01</span>
                <div>
                    <h3>Основные сведения</h3>
                    <p>Наименование, учредитель, адрес и контакты.</p>
                </div>
                <b>↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/struct" target="_blank" rel="noopener">
                <span>02</span>
                <div>
                    <h3>Структура и управление</h3>
                    <p>Подразделения и органы управления.</p>
                </div>
                <b>↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/document" target="_blank" rel="noopener">
                <span>03</span>
                <div>
                    <h3>Документы</h3>
                    <p>Устав, локальные акты и правила.</p>
                </div>
                <b>↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/education" target="_blank" rel="noopener">
                <span>04</span>
                <div>
                    <h3>Образование</h3>
                    <p>Образовательные программы и учебные материалы.</p>
                </div>
                <b>↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/employees" target="_blank" rel="noopener">
                <span>05</span>
                <div>
                    <h3>Руководство и педагоги</h3>
                    <p>Официальная информация о сотрудниках.</p>
                </div>
                <b>↗</b>
            </a>
            <a href="https://irkbmk.ru/sveden/objects" target="_blank" rel="noopener">
                <span>06</span>
                <div>
                    <h3>Материальная база</h3>
                    <p>Учебные кабинеты, библиотека и условия обучения.</p>
                </div>
                <b>↗</b>
            </a>
        </div>
    </div>
</section>

<section class="wrap section contact-layout" id="contacts">
    <div>
        <div class="section-top">
            <div class="eyebrow"><span></span>БУДЕМ НА СВЯЗИ</div>
            <span class="aside-label"></span>
        </div>
        <h2>Встретимся<br><span class="blue">в Иркутске.</span></h2>
        <p class="body-copy">Официальный адрес колледжа.<br>Перед визитом уточни нужный корпус и часы приёма.</p>
        <div class="contact-address">
            <small>АДРЕС</small>
            <strong>664043, г. Иркутск,<br>ул. Сергеева, 3</strong>
            <small>ТЕЛЕФОН</small>
            <a href="tel:+73952487513">+7 (3952) 48-75-13 ↗</a>
            <small>ЭЛЕКТРОННАЯ ПОЧТА</small>
            <a href="mailto:irkbmk@mail.ru">irkbmk@mail.ru ↗</a>
        </div>
    </div>
    <div class="location-card">
        <div class="location-art" aria-hidden="true">
            <div class="location-road road-one"></div>
            <div class="location-road road-two"></div>
            <div class="location-road road-three"></div>
            <span class="location-point">✳</span>
            <span class="location-city">ИРКУТСК</span>
        </div>
        <div>
            <span class="eyebrow">ТВОЯ ТОЧКА НАЧАЛА</span>
            <h3>Сергеева, 3</h3>
            <p>Схема иллюстративная. Точный маршрут открой на карте.</p>
            <a class="dark-btn" href="https://yandex.ru/maps/?text=Иркутск%20Сергеева%203%20медицинский%20колледж" target="_blank" rel="noopener">Построить маршрут <span aria-hidden="true">↗</span></a>
        </div>
    </div>
</section>

<section class="wrap route-banner">
    <div>
        <div class="eyebrow"><span></span>МЫ РЯДОМ</div>
        <h2>История продолжается.<br>Присоединяйся.</h2>
        <p>Познакомься со специальностями и сделай первый шаг в профессию.</p>
    </div>
    <a href="{{ route('applicant') }}" class="lime-btn">Я хочу поступить <span>↗</span></a>
</section>
@endsection
