@extends('layouts.app')

@section('title', __('tid_bikes'))

@section('content')
    <div class="">
        @forelse ($bikes as $bike)
            <a href="{{ route('bikes.show', $bike->id) }}">
                <article class="">
                    <div class="">
                        <h5 class="">Model: {{ $bike->model }}</h5>
                        <p class="">Price: {{ $bike->price_per_hour }}</p>
                    </div>
                </article>
            </a>
        @empty
            <p>No hay bicis disponibles.</p>
        @endforelse
    </div>
@endsection