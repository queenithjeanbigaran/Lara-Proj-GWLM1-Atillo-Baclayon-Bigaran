@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<div class="contact-page-container" style="display: grid; gap: 2rem; padding-bottom: 3rem;">
    <!-- Hero Section na may saktong padding at hindi masyadong malawak -->
    <section class="hero panel" style="min-height: auto; padding: 2.5rem 2.5rem; display: flex; align-items: center;">
        <div class="hero-copy" style="width: min(100%, 42rem);">
            <div class="eyebrow" style="margin-bottom: 0.5rem;">
                <span class="eyebrow-dot"></span>
                <span>GET IN TOUCH</span>
            </div>
            <h1 style="margin-bottom: 0.8rem; font-size: clamp(2.5rem, 5vw, 4.2rem); line-height: 1.05;">Let's start a <span>conversation.</span></h1>
            <p class="hero-description" style="margin-bottom: 0; font-size: 0.98rem; line-height: 1.5;">Have a question about our brews or just want to share a thought? Our doors and cups are always open for you.</p>
        </div>
        <div class="hero-stamp" aria-hidden="true" style="top: 15%; right: 7%; width: 6.5rem;">
            Muni-Muni<br>Coffee & Talks
        </div>
    </section>

    <!-- Main Section: Info & Form Grid -->
    <section class="visit-section panel" style="padding: 2.5rem; gap: 2.5rem;">
        <div class="visit-copy">
            <div class="eyebrow" style="margin-bottom: 0.5rem;">
                <span class="eyebrow-dot"></span>
                <span>VISIT & CONNECT</span>
            </div>
            <h2 style="margin-bottom: 0.8rem; font-size: clamp(1.8rem, 3.5vw, 2.5rem);">A seat is waiting.</h2>
            <p style="margin-bottom: 0; font-size: 0.95rem; line-height: 1.5;">Good coffee is always better with good company. Drop by our cozy space or reach out through our official channels anytime.</p>
            
            <div class="visit-details" style="margin-top: 1.2rem; padding: 1.2rem; gap: 1rem;">
                <div class="visit-detail">
                    <div class="detail-icon" style="width: 2.2rem; height: 2.2rem; font-size: 1rem;">📍</div>
                    <div>
                        <p class="detail-label">Address</p>
                        <p class="detail-value">Ampayon, Butuan City</p>
                    </div>
                </div>
                <div class="visit-detail">
                    <div class="detail-icon" style="width: 2.2rem; height: 2.2rem; font-size: 1rem;">🕒</div>
                    <div>
                        <p class="detail-label">Hours</p>
                        <p class="detail-value">Every Day · 7:00 AM – 9:00 PM</p>
                    </div>
                </div>
                <div class="visit-detail">
                    <div class="detail-icon" style="width: 2.2rem; height: 2.2rem; font-size: 1rem;">✉️</div>
                    <div>
                        <p class="detail-label">Email</p>
                        <p class="detail-value">hello@munimunicafe.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Box na compact at saktong-sakto ang espasyo -->
        <div class="visit-details" style="padding: 1.8rem;">
            <div class="eyebrow" style="margin-bottom: 0.4rem;">
                <span class="eyebrow-dot"></span>
                <span>SEND A MESSAGE</span>
            </div>
            <h3 style="margin-bottom: 0.6rem; font-family: var(--font-display); font-size: 1.3rem;">Drop us a line</h3>

            <form id="contactForm" class="cafe-form" novalidate style="display: grid; gap: 0.75rem;">
                <div class="form-group" style="gap: 0.2rem;">
                    <label for="name" style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--muted-text);">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="e.g. Juan Dela Cruz" style="width: 100%; padding: 0.55rem 0.8rem; border: 1px solid var(--line); border-radius: 0.6rem; background: var(--panel-soft); color: var(--page-text); font-size: 0.88rem;">
                    <span class="error-message" id="nameError" style="min-height: 0.8rem; font-size: 0.7rem;"></span>
                </div>

                <div class="form-group" style="gap: 0.2rem;">
                    <label for="email" style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--muted-text);">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="e.g. juan@example.com" style="width: 100%; padding: 0.55rem 0.8rem; border: 1px solid var(--line); border-radius: 0.6rem; background: var(--panel-soft); color: var(--page-text); font-size: 0.88rem;">
                    <span class="error-message" id="emailError" style="min-height: 0.8rem; font-size: 0.7rem;"></span>
                </div>

                <div class="form-group" style="gap: 0.2rem;">
                    <label for="subject" style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--muted-text);">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="What is this about?" style="width: 100%; padding: 0.55rem 0.8rem; border: 1px solid var(--line); border-radius: 0.6rem; background: var(--panel-soft); color: var(--page-text); font-size: 0.88rem;">
                    <span class="error-message" id="subjectError" style="min-height: 0.8rem; font-size: 0.7rem;"></span>
                </div>

                <div class="form-group" style="gap: 0.2rem;">
                    <label for="message" style="display: block; font-size: 0.75rem; font-weight: 700; color: var(--muted-text);">Message</label>
                    <textarea id="message" name="message" rows="2" placeholder="Write your message here..." style="width: 100%; padding: 0.55rem 0.8rem; border: 1px solid var(--line); border-radius: 0.6rem; background: var(--panel-soft); color: var(--page-text); font-size: 0.88rem; resize: vertical;"></textarea>
                    <span class="error-message" id="messageError" style="min-height: 0.8rem; font-size: 0.7rem;"></span>
                </div>

                <button type="submit" class="button button--primary" style="width: 100%; margin-top: 0.1rem; min-height: 2.8rem; font-size: 0.85rem;">Send Message <span>→</span></button>
                <div id="formSuccess" class="success-message" style="display: none;"></div>
            </form>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Theme Toggle Logic (Existing)
    var toggle = document.querySelector('.theme-toggle');
    if (toggle) {
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
    }

    // 2. Contact Form Validation Logic (Per-field check)
    var contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Kunin ang inputs
            var nameInput = document.getElementById('name');
            var emailInput = document.getElementById('email');
            var subjectInput = document.getElementById('subject');
            var messageInput = document.getElementById('message');

            // Kunin ang error & success containers
            var nameError = document.getElementById('nameError');
            var emailError = document.getElementById('emailError');
            var subjectError = document.getElementById('subjectError');
            var messageError = document.getElementById('messageError');
            var formSuccess = document.getElementById('formSuccess');

            // I-reset muna ang lahat ng errors at success message
            nameError.textContent = '';
            emailError.textContent = '';
            subjectError.textContent = '';
            messageError.textContent = '';
            formSuccess.style.display = 'none';

            var isValid = true;

            // 1. Validate Name (Kung dito lang may mali, dito lang din lalabas ang error)
            if (!nameInput.value.trim()) {
                nameError.textContent = 'Please enter your name.';
                nameError.style.color = '#e63946';
                isValid = false;
            }

            // 2. Validate Email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailInput.value.trim()) {
                emailError.textContent = 'Please enter your email address.';
                emailError.style.color = '#e63946';
                isValid = false;
            } else if (!emailRegex.test(emailInput.value.trim())) {
                emailError.textContent = 'Please enter a valid email address.';
                emailError.style.color = '#e63946';
                isValid = false;
            }

            // 3. Validate Subject
            if (!subjectInput.value.trim()) {
                subjectError.textContent = 'Please enter a subject.';
                subjectError.style.color = '#e63946';
                isValid = false;
            }

            // 4. Validate Message
            if (!messageInput.value.trim()) {
                messageError.textContent = 'Please write your message.';
                messageError.style.color = '#e63946';
                isValid = false;
            }

            // Kung lahat ay pasado at walang error
            if (isValid) {
                formSuccess.textContent = 'Thank you! Your message has been sent to Muni-Muni Café.';
                formSuccess.style.display = 'block';
                formSuccess.style.color = '#2a9d8f';
                formSuccess.style.marginTop = '0.5rem';
                formSuccess.style.fontSize = '0.85rem';
                formSuccess.style.fontWeight = '600';
                contactForm.reset();
            }
        });
    }
});
</script>
@endpush