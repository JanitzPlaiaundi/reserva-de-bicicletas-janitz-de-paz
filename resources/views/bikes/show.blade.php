@extends('layouts.app')

@section('title', __('tid_bikes'))

@section('content')
    <div class="">
        <h1>Detalles de la bicicleta</h1>
        <p>Modelo: {{ $bike->model }}</p>
        <p>Precio por hora: {{ $bike->price_per_hour }}</p>
        <p>Serial: {{ $bike->serial_number }}</p>
        <p>Status: {{ $bike->status }}</p>
        <a href="{{ route('bookings.create', $bike->id) }}">Reservar</a>
    </div>
@endsection