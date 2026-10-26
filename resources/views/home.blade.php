@extends('layouts.app')

@section('title', 'ИБМК — Будущее медицины начинается с тебя')
@section('description', 'Новое видение главной страницы Иркутского базового медицинского колледжа. Специальности, поступление и студенческая жизнь.')

@section('content')
<section class="hero hero-carousel" role="region" aria-roledescription="карусель" aria-label="Знакомство с колледжем" tabindex="0" data-paused="false">
    <article class="hero-slide is-active" role="group" aria-roledescription="слайд" aria-label="1 из 3" aria-hidden="false">
        <div class="hero-image slide-image-0" role="img" aria-label="Студенты в медицинской лаборатории — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/medical-students.png') }}')"></div>
        <div class="hero-shade"></div>
        <div class="wrap hero-content">
            <div class="hero-kicker"><span class="tiny-cross">✳</span>УЧИСЬ ПОМОГАТЬ. МЕНЯЙ ЖИЗНИ.</div>
            <h1 class="hero-heading" id="hero-title">Будущее<br>медицины<br>начинается <em>с тебя.</em></h1>
            <div class="hero-bottom">
                <p>Иркутский базовый медицинский колледж.<br>Знания, которые становятся делом.<br>Профессия, которая имеет значение.</p>
                <a class="lime-btn" href="#programs">Найти свою специальность <span>↗</span></a>
            </div>
        </div>
        <div class="hero-note">Люди.<br>Знания.<br><b>Жизнь.</b></div>
    </article>
    <article class="hero-slide" role="group" aria-roledescription="слайд" aria-label="2 из 3" aria-hidden="true" inert>
        <div class="hero-image slide-image-1" role="img" aria-label="Практическое занятие — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/clinical-practice.png') }}')"></div>
        <div class="hero-shade"></div>
        <div class="wrap hero-content">
            <div class="hero-kicker"><span class="tiny-cross">✳</span>ОТ ПЕРВОГО ИНТЕРЕСА — К ПРОФЕССИИ.</div>
            <h2 class="hero-heading">Не просто знать.<br><em>Уметь помогать.</em></h2>
            <div class="hero-bottom">
                <p>Разобраться в профессии — значит увидеть<br>за учебными задачами настоящего человека.<br>Познакомься с ИБМК.</p>
                <a class="lime-btn" href="{{ route('about') }}">Узнать о колледже <span>↗</span></a>
            </div>
        </div>
        <div class="hero-note">Слушать.<br>Понимать.<br><b>Помогать.</b></div>
    </article>
    <article class="hero-slide" role="group" aria-roledescription="слайд" aria-label="3 из 3" aria-hidden="true" inert>
        <div class="hero-image slide-image-2" role="img" aria-label="Будущие медицинские специалисты — иллюстрация, созданная ИИ" style="background-image:url('{{ asset('assets/medical-students.png') }}')"></div>
        <div class="hero-shade"></div>
        <div class="wrap hero-content">
            <div class="hero-kicker"><span class="tiny-cross">✳</span>ТВОЙ ПУТЬ. ТВОЯ КОМАНДА.</div>
            <h2 class="hero-heading">Место, где<br>начинается<br><em>твой путь.</em></h2>
            <div class="hero-bottom">
                <p>Учёба складывается из маленьких шагов.<br>Расписание, материалы и полезные сервисы —<br>всё рядом на странице студента.</p>
                <a class="lime-btn" href="{{ route('student') }}">В пространство студента <span>↗</span></a>
            </div>
        </div>
        <div class="hero-note">Учиться.<br>Находить.<br><b>Расти.</b></div>
    </article>
    <div class="wrap slider-controls">
        <div class="slider-position">
            <span class="slide-current">01</span>
            <span class="slide-divider">/ 03</span>
        </div>
        <div class="slider-dots" role="group" aria-label="Выбрать слайд">
            <button class="slide-dot is-current" aria-label="Слайд 1: Будущее медицины" aria-current="true" data-slide="0"><span></span></button>
            <button class="slide-dot" aria-label="Слайд 2: Уметь помогать" data-slide="1"><span></span></button>
            <button class="slide-dot" aria-label="Слайд 3: Твой путь" data-slide="2"><span></span></button>
        </div>
        <div class="slider-buttons">
            <button data-slide-action="previous" aria-label="Предыдущий слайд">←</button>
            <button data-slide-action="next" aria-label="Следующий слайд">→</button>
            <button data-slide-action="pause" aria-label="Остановить автопрокрутку" aria-pressed="false">
                <svg aria-hidden="true" viewBox="0 0 20 20"><path d="M7 5v10M13 5v10"/></svg>
            </button>
        </div>
        <span class="slider-location">ИРКУТСК · ОБРАЗОВАНИЕ С ЗАБОТОЙ</span>
    </div>
    <p class="sr-only" aria-live="polite" aria-atomic="true" id="slide-announcement"></p>
</section>

<div class="wrap shortcut-bar">
    <a href="{{ route('applicant') }}"><span class="shortcut-no">01</span><span>Как поступить</span><b>↗</b></a>
    <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener"><span class="shortcut-no">02</span><span>Расписание занятий</span><b>↗</b></a>
    <a href="https://dpo.irkbmk.ru/" target="_blank" rel="noopener"><span class="shortcut-no">03</span><span>Дополнительное образование</span><b>↗</b></a>
</div>

<section class="wrap section programs" id="programs">
    <div class="section-top">
        <div class="eyebrow"><span></span> ОБРАЗОВАНИЕ</div>
        <span class="aside-label">Найди дело, которое будет важным</span>
    </div>
    <div class="section-heading">
        <h2>Разные пути.<br>Одно <span class="blue">призвание.</span></h2>
        <p>Выбери направление, в котором твои знания<br class="desktop"> и внимание к людям станут профессией.</p>
    </div>
    <div class="program-layout">
        <div class="program-list">
            <button class="program active" data-program="0" aria-expanded="true">
                <span class="program-code">31.02.01</span>
                <span><strong>Лечебное дело</strong><small>Быть рядом, когда помощь нужна больше всего</small></span>
                <i>↗</i>
            </button>
            <button class="program" data-program="1" aria-expanded="false">
                <span class="program-code">34.02.01</span>
                <span><strong>Сестринское дело</strong><small>Забота, знания и внимание к каждому</small></span>
                <i>↗</i>
            </button>
            <button class="program" data-program="2" aria-expanded="false">
                <span class="program-code">31.02.02</span>
                <span><strong>Акушерское дело</strong><small>Помогать новой жизни начинаться</small></span>
                <i>↗</i>
            </button>
            <button class="program" data-program="3" aria-expanded="false">
                <span class="program-code">33.02.01</span>
                <span><strong>Фармация</strong><small>Понимать точную науку о лекарствах</small></span>
                <i>↗</i>
            </button>
        </div>
        <article class="program-preview" aria-live="polite">
            <div class="preview-top">
                <span id="preview-tag">ТВОЯ БУДУЩАЯ ПРОФЕССИЯ</span>
                <span class="line-cross">✳</span>
            </div>
            <span class="preview-number" id="preview-number">01 / 04</span>
            <h3 id="preview-title">Фельдшер</h3>
            <p id="preview-description">Оценивать состояние пациента, оказывать медицинскую помощь и принимать ответственные решения.</p>
            <a id="preview-link" href="https://irkbmk.ru/node/613" target="_blank" rel="noopener">Подробнее о программе <span>↗</span></a>
            <div class="preview-art" aria-hidden="true"><span></span><span></span><span></span></div>
        </article>
    </div>
    <p class="source-note">Условия и наличие набора уточняйте в приёмной комиссии. <a href="https://irkbmk.ru" target="_blank" rel="noopener">Информация на действующем сайте ↗</a></p>
</section>

<section class="about-section" id="about">
    <div class="wrap about-layout">
        <div class="about-photo">
            <img src="{{ asset('assets/clinical-practice.png') }}" alt="Практическое занятие с преподавателем — иллюстрация, созданная ИИ" loading="lazy">
            <span class="photo-sticker">Дело жизни.<br>Каждый день.</span>
        </div>
        <div class="about-text">
            <div class="eyebrow"><span></span> ЗНАКОМЬСЯ, ИБМК</div>
            <h2>Больше, чем<br>образование.<br><span class="blue">Ближе к людям.</span></h2>
            <p>Медицина начинается с желания помочь. А профессиональный путь — с места, где учат понимать человека и действовать осознанно.</p>
            <p>Иркутский базовый медицинский колледж — пространство, где ты можешь сделать первый шаг в профессию и найти своё направление.</p>
            <a class="text-link" href="{{ route('about') }}">Познакомиться с колледжем <span>↗</span></a>
            <div class="about-values">
                <span>Знания для жизни</span>
                <span>Внимание к человеку</span>
                <span>Профессиональное развитие</span>
            </div>
        </div>
    </div>
</section>

<section class="wrap section admission" id="admission">
    <div class="section-top">
        <div class="eyebrow"><span></span> ПОСТУПАЮЩИМ</div>
        <span class="aside-label">Твой первый шаг в медицину</span>
    </div>
    <div class="section-heading">
        <h2>Большой путь.<br><span class="blue">Понятное начало.</span></h2>
        <p>От первого интереса к профессии<br>до решения, которое меняет будущее.</p>
    </div>
    <div class="steps">
        <article>
            <span class="step-number">01 <i>↗</i></span>
            <h3>Выбери направление</h3>
            <p>Познакомься со специальностями и подумай, какая работа ближе именно тебе.</p>
            <a href="#programs">Смотреть специальности ↗</a>
        </article>
        <article>
            <span class="step-number">02 <i>↗</i></span>
            <h3>Узнай условия приёма</h3>
            <p>Уточни доступные программы, необходимые документы и сроки подачи заявления.</p>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener">На официальный сайт ↗</a>
        </article>
        <article>
            <span class="step-number">03 <i>↗</i></span>
            <h3>Сделай первый шаг</h3>
            <p>Проверь актуальные правила приёма и способ подачи документов в колледж.</p>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener">Информация о поступлении ↗</a>
        </article>
    </div>
    <details>
        <summary>Можно ли поступить после 9 или 11 класса?<span>+</span></summary>
        <p>Требования к уровню образования зависят от специальности и действующего плана приёма. Уточните актуальные условия на официальном сайте или в приёмной комиссии колледжа.</p>
    </details>
    <details>
        <summary>Какие документы понадобятся?<span>+</span></summary>
        <p>Точный перечень документов, требования к медицинскому осмотру и сроки подачи публикуются в действующих правилах приёма колледжа. Перед подачей заявления проверьте актуальную редакцию на irkbmk.ru.</p>
    </details>
</section>

<section class="student-section" id="students">
    <div class="wrap student-layout">
        <div>
            <div class="eyebrow"><span></span> УЖЕ С НАМИ</div>
            <h2>Всё нужное<br>для <em>твоего ритма.</em></h2>
            <p>Меньше поисков. Больше времени на главное.</p>
        </div>
        <div class="student-links">
            <a href="https://rasp.irkbmk.ru/cg.htm" target="_blank" rel="noopener">
                <span><small>ПЛАНИРУЙ СВОЙ ДЕНЬ</small>Расписание занятий</span>
                <b>↗</b>
            </a>
            <a href="https://dpo.irkbmk.ru/moodle/" target="_blank" rel="noopener">
                <span><small>УЧИСЬ ОНЛАЙН</small>Образовательная среда</span>
                <b>↗</b>
            </a>
            <a href="https://irkbmk.ru" target="_blank" rel="noopener">
                <span><small>ОСТАВАЙСЯ В КУРСЕ</small>Новости колледжа</span>
                <b>↗</b>
            </a>
        </div>
    </div>
</section>

<section class="wrap final-cta">
    <span class="cta-spark" aria-hidden="true">✳</span>
    <h2>Твоя профессия —<br>чья-то <span>новая жизнь.</span></h2>
    <a href="{{ route('applicant') }}">Начни свой путь <span>↗</span></a>
</section>
@endsection
