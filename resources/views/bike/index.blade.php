<x-app-layout>
    <div class="bikes__container">
        @forelse ($bikes as $bike)
            <a href="{{ route('bikes.show', $bike->id) }}">
                <article class="card">
                    <div class="card-body">
                        <h5 class="card-title">Model: {{ $bike->model }}</h5>
                        <p class="card-text">Price: {{ $bike->price_per_hour }}</p>
                    </div>
                </article>
            </a>
        @empty
            <p>No hay bicis disponibles.</p>
        @endforelse
    </div>
</x-app-layout>