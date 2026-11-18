const root = document.documentElement;
const themeToggle = document.querySelector('.theme-toggle');

function setTheme(theme) {
    root.dataset.theme = theme;

    const isLightTheme = theme === 'light';
    themeToggle?.setAttribute('aria-pressed', String(isLightTheme));
    themeToggle?.setAttribute('aria-label', `Switch to ${isLightTheme ? 'dark' : 'light'} theme`);

    const label = themeToggle?.querySelector('.theme-toggle-label');
    if (label) {
        label.textContent = isLightTheme ? 'Dark' : 'Light';
    }

    try {
        localStorage.setItem('muni-muni-theme', theme);
    } catch (error) {
        // The selected theme still applies for this page when storage is unavailable.
    }
}

setTheme(root.dataset.theme === 'light' ? 'light' : 'dark');

themeToggle?.addEventListener('click', () => {
    setTheme(root.dataset.theme === 'light' ? 'dark' : 'light');
});

const carousel = document.querySelector('.drink-carousel');
const slides = [...(carousel?.querySelectorAll('[data-slide]') ?? [])];
const dots = [...(carousel?.querySelectorAll('[data-go-to]') ?? [])];
const currentSlideNumber = carousel?.querySelector('[data-current-slide]');
let activeSlide = slides.findIndex((slide) => !slide.hidden);

function showSlide(index) {
    if (slides.length === 0) {
        return;
    }

    activeSlide = (index + slides.length) % slides.length;

    slides.forEach((slide, slideIndex) => {
        const isActive = slideIndex === activeSlide;
        slide.hidden = !isActive;
        slide.setAttribute('aria-hidden', String(!isActive));
    });

    dots.forEach((dot, dotIndex) => {
        const isActive = dotIndex === activeSlide;
        dot.classList.toggle('is-active', isActive);
        dot.setAttribute('aria-pressed', String(isActive));
    });

    if (currentSlideNumber) {
        currentSlideNumber.textContent = String(activeSlide + 1).padStart(2, '0');
    }
}

carousel?.querySelector('[data-previous]')?.addEventListener('click', () => {
    showSlide(activeSlide - 1);
});

carousel?.querySelector('[data-next]')?.addEventListener('click', () => {
    showSlide(activeSlide + 1);
});

dots.forEach((dot) => {
    dot.addEventListener('click', () => {
        showSlide(Number(dot.dataset.goTo));
    });
});

showSlide(activeSlide < 0 ? 0 : activeSlide);

const menuDialog = document.querySelector('.menu-dialog');
const menuTrigger = document.querySelector('[data-open-menu]');

menuTrigger?.addEventListener('click', () => {
    menuDialog?.showModal();
});

menuDialog?.addEventListener('click', (event) => {
    if (event.target === menuDialog) {
        menuDialog.close();
    }
});
