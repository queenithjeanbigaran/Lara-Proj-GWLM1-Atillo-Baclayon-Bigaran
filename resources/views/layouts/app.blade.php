<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1A120E">
    <title>@yield('title', 'Muni-Muni Café') · Muni-Muni Café</title>
    <script>
        try {
            document.documentElement.dataset.theme = localStorage.getItem('muni-muni-theme') || 'dark';
        } catch (error) {
            document.documentElement.dataset.theme = 'dark';
        }
    </script>
    @stack('styles')
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>

    <div class="coffee-doodles" aria-hidden="true">
        <svg class="doodle doodle--steam" viewBox="0 0 180 220" fill="none">
            <path d="M42 203C15 167 76 145 49 111C28 85 47 54 74 26" />
            <path d="M105 211C77 179 134 156 108 125C87 99 106 65 132 38" />
            <path d="M149 194C127 167 169 146 151 124" />
        </svg>
        <svg class="doodle doodle--beans" viewBox="0 0 180 180" fill="none">
            <g class="doodle-bean">
                <ellipse cx="90" cy="90" rx="35" ry="55" transform="rotate(38 90 90)" />
                <path d="M60 127C88 104 99 74 113 52" />
            </g>
            <g class="doodle-bean doodle-bean--small">
                <ellipse cx="34" cy="36" rx="17" ry="27" transform="rotate(-24 34 36)" />
                <path d="M24 59C37 48 41 34 45 16" />
            </g>
        </svg>
    </div>

    <div class="site-shell">
        <header class="site-header">
            <a class="wordmark" href="/" aria-label="Muni-Muni Café home">
                <span class="wordmark-mark" aria-hidden="true">m</span>
                <span>Muni-Muni <span class="wordmark-light">Café</span></span>
            </a>

            <nav class="floating-nav" aria-label="Main navigation">
                <a href="/" @if (request()->is('/')) aria-current="page" @endif>Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </nav>

            <button class="theme-toggle" type="button" aria-label="Switch to light theme" aria-pressed="false">
                <svg class="theme-icon theme-icon--sun" viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="4" />
                    <path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42" />
                </svg>
                <svg class="theme-icon theme-icon--moon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M20.7 15.2A8.8 8.8 0 0 1 8.8 3.3 8.9 8.9 0 1 0 20.7 15.2Z" />
                </svg>
                <span class="theme-toggle-label">Light</span>
            </button>
        </header>

        <main id="main-content" class="page-content">
            @yield('content')
        </main>

        <footer class="site-footer">
            <p class="footer-wordmark">Muni-Muni Café</p>
            <p>Made with care by <span>Atillo · Baclayon · Bigaran</span></p>
            <a href="#main-content">Back to top <span aria-hidden="true">↑</span></a>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>
