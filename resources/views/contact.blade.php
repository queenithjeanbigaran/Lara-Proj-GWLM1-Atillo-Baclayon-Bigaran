@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<section class="contact-hero">
    <h1>Get in Touch with Muni-Muni Café</h1>
    <p>We'd love to hear from you. Send us a message or visit our cozy space!</p>
</section>

<section class="contact-container">
    <div class="contact-info">
        <h2>Visit & Connect</h2>
        <p>Drop by for a warm cup of coffee or reach out through our official channels.</p>
        
        <ul class="info-list">
            <li>
                <strong>Address:</strong> 123 Brew Lane, Coffee District, City
            </li>
            <li>
                <strong>Phone:</strong> +63 912 345 6789
            </li>
            <li>
                <strong>Email:</strong> hello@munimunicafe.com
            </li>
            <li>
                <strong>Hours:</strong> Monday – Sunday: 8:00 AM – 10:00 PM
            </li>
        </ul>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush