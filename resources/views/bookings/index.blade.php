<x-app-layout>
    <div class="">
        @forelse ($bookings as $booking)
            <article class="">
                <div class="">
                    <h5 class="">Bicicleta: {{ $booking->bike->model }}</h5>
                    <p class="">Fecha de inicio: {{ $booking->start_time }}</p>
                    <p class="">Fecha de fin: {{ $booking->end_time }}</p>
                    <p class="">Precio total: {{ $booking->total_cost }}</p>
                </div>
            </article>
        @empty
            <p>No hay reservas disponibles.</p>
        @endforelse
    </div>
</x-app-layout>