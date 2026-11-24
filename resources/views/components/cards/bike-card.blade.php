@props(['bike'])

<a href="{{ route('bikes.show', $bike->id) }}" class="bikes__card">
    <div class="bikes__card__image">
        <img class="card-img" src="/images/bikes/prueba/prueba.png" alt="{{ $bike->model }}">
    </div>
    <div class="bikes__card__details">
        <h2 class="bikes__card__model">{{ $bike->model }}</h2>
        <div class="bikes__card__colour__container">
            <div class="bikes__card__colour__preview" style="background-color: {{ $bike->colour }};"></div>
            <p class="bikes__card__colour__text">{{ $bike->colour }}</p>
        </div>
        <p class="bikes__card__size">{{ __('pid_size') }}: {{ $bike->size }}</p>
        <p class="bikes__card__price">{{ $bike->price_per_hour }}€ / {{ __('pid_per_hour') }}</p>
    </div>
</a>