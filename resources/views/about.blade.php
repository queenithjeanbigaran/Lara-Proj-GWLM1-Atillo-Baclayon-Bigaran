@section('title', 'About')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-photos.css') }}">
@endpush

@section('content')
<div class="about-page">
    <figure class="about-editorial-quote" aria-label="Featured reflection quote">
        <div class="about-quote-content">
            <p class="about-quote-tag">Muni-Muni Reflection</p>
            <blockquote>
                <span class="about-quote-accent">Take the long way,</span>
                <span class="about-quote-main">keep the warmth.</span>
            </blockquote>
            <span class="about-quote-divider" aria-hidden="true"></span>
            <figcaption class="about-quote-sub">
                Quiet tables, familiar voices, and unhurried cups made for lingering in Ampayon.
            </figcaption>
        </div>

        <div class="about-brew-badge" aria-hidden="true">
            <span class="about-brew-badge-text">
                <span>Good</span>
                <span>Things</span>
                <span>Brew</span>
            </span>
        </div>
    </figure>

    <section class="about-hero" aria-labelledby="about-hero-title">
        <p class="eyebrow"><span class="eyebrow-dot" aria-hidden="true"></span> Our story &amp; quiet rhythm</p>
        <h1 id="about-hero-title">A space for <span>muni-muni</span> moments.</h1>
        <p class="about-lead">
            At Muni-Muni Caf&eacute;, we believe good coffee works best when you don&rsquo;t have to rush through it.
            Inspired by slowing down to reflect, breathe, and gather your thoughts in Ampayon, our Caf&eacute; is a warm
            corner for unhurried mornings, study breaks, and genuine conversation.
        </p>
    </section>

    <section class="about-grid" aria-label="About Muni-Muni Caf&eacute;">
        <article class="about-card">
            <p class="eyebrow">Why we brew</p>
            <h2>Rooted in reflection</h2>
            <p>
                Days move fast between classes, deadlines, and everyday errands. Muni-Muni Caf&eacute; gives you room
                to pause whether you&rsquo;re reviewing notes, catching up with friends, or taking a quiet breather.
            </p>
        </article>

        <article class="about-card">
            <p class="eyebrow">Local comfort</p>
            <h2>Signature &amp; everyday picks</h2>
            <p>
                From rich local cacao and bold coffee blends to light companions made for slow sips:
            </p>
            <ul class="about-list">
                <li><span>Tagblea Mocha</span><span class="about-price">&#8369;145</span></li>
                <li><span>Barako Cream Latte</span><span class="about-price">&#8369;135</span></li>
                <li><span>Warm Pastry Pairing</span><span class="about-price">&#8369;95</span></li>
            </ul>
        </article>

        <article class="about-card">
            <p class="eyebrow">Ampayon &middot; Butuan</p>
            <h2>Drop in when you need a pause</h2>
            <p><strong>Neighborhood:</strong> Ampayon, Butuan City</p>
            <p><strong>Hours:</strong> Daily, 8:00 AM &ndash; 9:00 PM</p>
        </article>
    </section>

    @include('partials.about-photos')

    <section class="about-footer-cta" aria-label="Continue exploring">
        <p>Ready to head back or reach out to the Caf&eacute;?</p>
        <div class="about-links">
            <a class="button button--primary" href="/">Back to Home</a>
            <a class="text-link" href="/contact">Contact us <span aria-hidden="true">&rarr;</span></a>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.theme-toggle');
    if (!toggle) return;

    var label = toggle.querySelector('.theme-toggle-label');
    var root = document.documentElement;

    function syncButton() {
        var isLight = root.dataset.theme === 'light';
        toggle.setAttribute('aria-pressed', String(isLight));
        toggle.setAttribute('aria-label', isLight ? 'Switch to dark theme' : 'Switch to light theme');
        if (label) {
            label.textContent = isLight ? 'Dark' : 'Light';
        }
    }

    syncButton();

    toggle.addEventListener('click', function () {
        var nextTheme = root.dataset.theme === 'light' ? 'dark' : 'light';
        root.dataset.theme = nextTheme;
        try {
            localStorage.setItem('muni-muni-theme', nextTheme);
        } catch (err) {}
        syncButton();
    });
});
</script>
@endpush
