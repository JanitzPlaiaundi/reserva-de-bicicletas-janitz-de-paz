<x-app-layout>
    <div class="bookings__container">
        @forelse ($bookings as $booking)
            <article class="card">
                <div class="card-body">
                    <h5 class="card-title">Bicicleta: {{ $booking->bike->model }}</h5>
                    <p class="card-text">Fecha de inicio: {{ $booking->start_time }}</p>
                    <p class="card-text">Fecha de fin: {{ $booking->end_time }}</p>
                    <p class="card-text">Precio total: {{ $booking->total_cost }}</p>
                </div>
            </article>
        @empty
            <p>No hay reservas disponibles.</p>
        @endforelse
    </div>
</x-app-layout>