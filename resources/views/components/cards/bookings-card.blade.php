@props(['booking'])
@props(['number'])

<a href="{{ route('bookings.show', $booking->id) }}" class="bookings__card">
    <div class="bookings__card__image">
        <img class="bookings__card__img" 
             src="{{ asset($booking->bike?->image_url ?? 'images/bikes/prueba/prueba.png') }}" 
             alt="{{ $booking->bike?->model ?? 'Bike' }}">
    </div>

    <div class="bookings__card__details">
        <div class="bookings__card__header">
            <h2 class="bookings__card__model">{{ $booking->bike?->model ?? 'Bicicleta no disponible' }}</h2>
            <span class="bookings__card__id">#{{ $number }}</span>
        </div>

        <div class="bookings__card__dates">
            <p class="bookings__card__date">
                <strong>{{ __('pid_booking_date') }}:</strong> 
                {{ $booking->start_time?->format('d/m/Y') }}
            </p>
            <p class="bookings__card__date">
                <strong>{{ __('pid_booking_start_time') }}:</strong> 
                {{ $booking->start_time?->format('H:i') }}
            </p>
            <p class="bookings__card__date">
                <strong>{{ __('pid_booking_end_time') }}:</strong> 
                {{ $booking->end_time?->format('H:i') }}
            </p>
        </div>

        <div class="bookings__card__status">
            <span class="bookings__card__status__label">{{ __('pid_booking_status') }}:</span>
            <span class="bookings__card__status__value {{ strtolower($booking->status) }}">
                @if ($booking->status === 'pending')
                    {{ __('pid_booking_status_pending') }}
                @elseif ($booking->status === 'active')
                    {{ __('pid_booking_status_active') }}
                @elseif ($booking->status === 'cancelled')
                    {{ __('pid_booking_status_cancelled') }}
                @elseif ($booking->status === 'completed')
                    {{ __('pid_booking_status_completed') }}
                @endif
            </span>

        </div>

        <div class="bookings__card__footer">
            <p class="bookings__card__price">{{ $booking->total_cost }}€</p>
            <span class="bookings__card__cta">{{ __('pid_view_details') }} →</span>
        </div>
    </div>
</a>