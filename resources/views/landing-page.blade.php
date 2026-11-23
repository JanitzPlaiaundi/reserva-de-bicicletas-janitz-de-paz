@extends('layouts.app')

@section('title', 'Bikers Road')

@section('content')
    <div class="landing__container">
        <div class="landing__overlay">
            <img src="/images/landing-page-background.jpg" alt="Bikers Road Logo" class="landing__logo">
            <article class="landing__text">
                <h1>{{ __('tid_landing_title') }}</h1>
                <p>{{ __('tid_landing_description') }}</p>
                <nav class="landing__buttons">
                    <a href="{{ route('bikes.index') }}" class="landing__primary__btn">{{ __('tid_landing_primary_btn') }}</a>
                    <a href="{{ route('bookings.index') }}" class="landing__secondary__btn">{{ __('tid_landing_secondary_btn') }}</a>
                </nav>
            </article>
        </div>
    </div>
@endsection