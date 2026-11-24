@extends('layouts.app')

@section('title', __('tid_bikes'))

@section('content')
    <div class="bikes__container__wrapper">
        <section class="bikes__filters">a</section>
        <section class="bikes__container">
            @forelse ($bikes as $bike)
                <x-cards.bike-card :bike="$bike" />
            @empty
                <p>No hay bicis disponibles.</p>
            @endforelse
        </section>
    </div>
@endsection