@extends('layouts.app')

@section('title', __('tid_my_bookings'))

@section('content')
    <h1 class="bookings__title">{{ __('tid_my_bookings') }}</h1>
    <section class="bookings__container">
        @forelse ($bookings as $booking)
            <x-cards.bookings-card :booking="$booking" :number="$loop->iteration" />
        @empty
            <p>No hay reservas disponibles.</p>
        @endforelse
    </section>
@endsection