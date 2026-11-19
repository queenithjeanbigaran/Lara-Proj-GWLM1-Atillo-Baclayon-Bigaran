$aboutView = @'
@extends('layouts.app')

@section('title', 'About')

@push('styles')
<style>
    .about-page {
        display: grid;
        gap: 1.75rem;
    }

    .about-hero {
        padding: clamp(1.75rem, 4vw, 2.75rem);
        border-radius: 24px;
        background: var(--panel);
        border: 1px solid var(--line);
        box-shadow: var(--shadow);
    }

    .about-hero h1 {
        font-family: var(--font-display);
        font-size: clamp(2rem, 4.2vw, 3rem);
        line-height: 1.12;
        margin: 0.4rem 0 0.85rem;
    }

    .about-hero h1 span {
        color: var(--accent);
        font-style: italic;
    }

    .about-lead {
        margin: 0;
        max-width: 64ch;
        color: var(--muted-text);
        font-size: 1.05rem;
    }

    .about-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.25rem;
    }

    .about-card {
        padding: 1.5rem;
        border-radius: 20px;
        background: var(--panel-soft);
        border: 1px solid var(--line);
        box-shadow: var(--shadow);
    }

    .about-card h2 {
        font-family: var(--font-display);
        font-size: 1.35rem;
        margin: 0.35rem 0 0.65rem;
    }

    .about-card p {
        margin: 0 0 0.75rem;
        color: var(--muted-text);
    }

    .about-card p:last-child {
        margin-bottom: 0;
    }

    .about-list {
        list-style: none;
        padding: 0;
        margin: 0.75rem 0 0;
        display: grid;
        gap: 0.5rem;
    }

    .about-list li {
        display: flex;
        justify-content: space-between;
        gap: 1rem;
        padding-bottom: 0.45rem;
        border-bottom: 1px solid var(--line);
    }

    .about-list li:last-child {
        border-bottom: 0;
        padding-bottom: 0;
    }

    .about-price {
        color: var(--accent);
        font-weight: 600;
    }

    .about-footer-cta {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        padding: 1.35rem 1.5rem;
        border-radius: 20px;
        background: var(--panel-raised);
        border: 1px solid var(--line);
    }

    .about-links {
        display: flex;
        flex-wrap: wrap;
        gap: 0.9rem;
        align-items: center;
    }
</style>
@endpush

@section('content')
<div class="about-page">
    <section class="about-hero" aria-labelledby="about-hero-title">
        <p class="eyebrow"><span class="eyebrow-dot" aria-hidden="true"></span> Our story &amp; quiet rhythm</p>
        <h1 id="about-hero-title">A space for <span>muni-muni</span> moments.</h1>
        <p class="about-lead">
            At Muni-Muni Caf&eacute;, we believe good coffee works best when you don&rsquo;t have to rush through it.
            Inspired by slowing down to reflect, breathe, and gather your thoughts in Ampayon, our café is a warm
            corner for unhurried mornings, study breaks, and genuine conversation.
        </p>
    </section>

    <section class="about-grid" aria-label="About Muni-Muni Caf&eacute;">
        <article class="about-card">
            <p class="eyebrow">Why we brew</p>
            <h2>Rooted in reflection</h2>
            <p>
                Days move fast between classes, deadlines, and everyday errands. Muni-Muni Caf&eacute; gives you room
                to pause—whether you&rsquo;re reviewing notes, catching up with friends, or taking a quiet breather.
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
            <p><strong>Team:</strong> Crafted by Atillo &middot; Baclayon &middot; Bigaran</p>
        </article>
    </section>

    <section class="about-footer-cta" aria-label="Continue exploring">
        <p>Ready to head back or reach out to the café?</p>
        <div class="about-links">
            <a class="button button--primary" href="/">Back to Home</a>
            <a class="text-link" href="/contact">Contact us <span aria-hidden="true">&rarr;</span></a>
        </div>
    </section>
</div>
@endsection
'@

[System.IO.File]::WriteAllText("$PWD\resources\views\about.blade.php", $aboutView, [System.Text.UTF8Encoding]::new($false))