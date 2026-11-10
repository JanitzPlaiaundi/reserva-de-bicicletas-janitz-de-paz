<x-app-layout>
    <div class="bikes__container">
        @forelse ($bikes as $bike)
            <article class="card">
                <div class="card-body">
                    <h5 class="card-title">Model: {{ $bike->model }}</h5>
                    <p class="card-text">Price: {{ $bike->price_per_hour }}</p>
                </div>
            </article>
        @empty
            <p>No hay bicis disponibles.</p>
        @endforelse
    </div>
</x-app-layout>