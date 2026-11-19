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
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush