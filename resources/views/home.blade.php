@extends('layouts.app')

@section('title', 'A little pause, a lovely cup')

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush

@section('content')
    <section class="hero panel" aria-labelledby="hero-title">
        <div class="hero-copy">
            <p class="eyebrow"><span class="eyebrow-dot" aria-hidden="true"></span> Your neighborhood coffee pause</p>
            <h1 id="hero-title">Slow down.<br><span>Sip something good.</span></h1>
            <p class="hero-description">A little corner for good coffee, unhurried conversations, and the small joys in between.</p>
            <div class="hero-actions">
                <button class="button button--primary" type="button" data-open-menu>
                    Explore menu highlights <span aria-hidden="true">↗</span>
                </button>
                <a class="text-link" href="#visit">Find us in Ampayon <span aria-hidden="true">↓</span></a>
            </div>
        </div>
        <div class="hero-note" aria-label="A note from Muni-Muni Café">
            <span class="hero-note-icon" aria-hidden="true">✳</span>
            <p>Take your time.<br><strong>You’re right where you need to be.</strong></p>
        </div>
        <span class="hero-stamp" aria-hidden="true">GOOD<br>THINGS<br>BREW</span>
    </section>

    <section class="drinks-section" aria-labelledby="drinks-title">
        <div class="section-heading">
            <div>
                <p class="eyebrow">A few café favorites</p>
                <h2 id="drinks-title">Made for your moment</h2>
            </div>
            <p class="section-aside">One sip at a time, always made with care.</p>
        </div>

        <div class="drink-carousel panel" aria-roledescription="carousel" aria-label="Muni-Muni Café drink highlights">
            <div class="drink-slides" aria-live="polite">
                <article class="drink-slide" data-slide="0" aria-roledescription="slide" aria-label="1 of 3">
                    <div class="drink-image-wrap">
                        <img src="{{ asset('images/cafe/tagblea-mocha.jpg') }}" alt="A creamy Tagblea mocha topped with a soft swirl" class="drink-image">
                        <span class="drink-image-label">House favorite</span>
                    </div>
                    <div class="drink-copy">
                        <p class="eyebrow">Comfort in a cup</p>
                        <h3>Tagblea Mocha</h3>
                        <p>Local cacao meets espresso for a velvety, gently bittersweet treat.</p>
                        <span class="drink-tag">Chocolate · Espresso · Cozy</span>
                    </div>
                </article>

                <article class="drink-slide" data-slide="1" aria-roledescription="slide" aria-label="2 of 3" hidden>
                    <div class="drink-image-wrap">
                        <img src="{{ asset('images/cafe/barako-creame-latte.jpg') }}" alt="A Barako cream latte with rich coffee and silky cream" class="drink-image">
                        <span class="drink-image-label">Locally loved</span>
                    </div>
                    <div class="drink-copy">
                        <p class="eyebrow">Bold, with a soft side</p>
                        <h3>Barako Cream Latte</h3>
                        <p>Full-bodied Barako coffee mellowed with a cloud of sweet cream.</p>
                        <span class="drink-tag">Barako · Cream · A little bold</span>
                    </div>
                </article>

                <article class="drink-slide" data-slide="2" aria-roledescription="slide" aria-label="3 of 3" hidden>
                    <div class="drink-image-wrap">
                        <img src="{{ asset('images/cafe/pandan-cloud-cold.jpg') }}" alt="An iced pandan drink with a light, creamy cloud" class="drink-image">
                        <span class="drink-image-label">Cool &amp; easy</span>
                    </div>
                    <div class="drink-copy">
                        <p class="eyebrow">A little tropical daydream</p>
                        <h3>Pandan Cloud Cold</h3>
                        <p>Fragrant pandan, chilled milk, and a soft cloud for sunny afternoons.</p>
                        <span class="drink-tag">Pandan · Chilled · Refreshing</span>
                    </div>
                </article>
            </div>

            <div class="carousel-controls">
                <button class="carousel-arrow" type="button" data-previous aria-label="Previous drink">←</button>
                <span class="carousel-count" aria-live="polite"><span data-current-slide>01</span> <span aria-hidden="true">/</span> 03</span>
                <div class="carousel-dots" role="group" aria-label="Choose a drink">
                    <button type="button" class="carousel-dot is-active" data-go-to="0" aria-label="Show Tagblea Mocha" aria-pressed="true"></button>
                    <button type="button" class="carousel-dot" data-go-to="1" aria-label="Show Barako Cream Latte" aria-pressed="false"></button>
                    <button type="button" class="carousel-dot" data-go-to="2" aria-label="Show Pandan Cloud Cold" aria-pressed="false"></button>
                </div>
                <button class="carousel-arrow" type="button" data-next aria-label="Next drink">→</button>
            </div>
        </div>
    </section>

    <section id="visit" class="visit-section panel" aria-labelledby="visit-title">
        <div class="visit-copy">
            <p class="eyebrow">Come by when you’re ready</p>
            <h2 id="visit-title">A seat is waiting.</h2>
            <p>Find a sunny spot, bring a friend, or keep a quiet table all to yourself. We’ll have something warm ready.</p>
        </div>
        <div class="visit-details">
            <div class="visit-detail">
                <span class="detail-icon" aria-hidden="true">⌖</span>
                <div><p class="detail-label">Find us</p><p class="detail-value">Ampayon, Butuan City</p></div>
            </div>
            <div class="visit-detail">
                <span class="detail-icon" aria-hidden="true">◷</span>
                <div><p class="detail-label">Every day</p><p class="detail-value">7:00 AM–9:00 PM</p></div>
            </div>
            <a class="button button--outline" href="/contact">Plan your visit <span aria-hidden="true">↗</span></a>
        </div>
        <span class="visit-spark" aria-hidden="true">✳</span>
    </section>

    <dialog class="menu-dialog" aria-labelledby="menu-dialog-title">
        <div class="menu-dialog-panel">
            <form method="dialog" class="dialog-close-form">
                <button class="dialog-close" aria-label="Close menu highlights">×</button>
            </form>
            <p class="eyebrow">A little something for everyone</p>
            <h2 id="menu-dialog-title">Menu highlights</h2>
            <p class="dialog-intro">A few favorites to get you started. Find your own café ritual on your next visit.</p>
            <ul class="menu-list">
                <li><span><strong>Tagblea Mocha</strong><small>Local cacao · espresso · steamed milk</small></span><span class="menu-list-mark">01</span></li>
                <li><span><strong>Barako Cream Latte</strong><small>Butuan-grown boldness · sweet cream</small></span><span class="menu-list-mark">02</span></li>
                <li><span><strong>Pandan Cloud Cold</strong><small>Pandan · chilled milk · soft cream</small></span><span class="menu-list-mark">03</span></li>
            </ul>
            <a class="button button--primary dialog-visit-link" href="/contact">Ask us what’s brewing <span aria-hidden="true">↗</span></a>
        </div>
    </dialog>
@endsection
