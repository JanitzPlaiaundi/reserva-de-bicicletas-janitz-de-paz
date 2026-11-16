<form method="POST" action="{{ route('bookings.store')}}">
    @csrf
    <input type="hidden" name="bike_id" value="{{ $bike->id }}">
    <label for="start_time">Start Time:</label>
    <input type="datetime-local" id="start_time" name="start_time" required>
    <label for="end_time">End Time:</label>
    <input type="datetime-local" id="end_time" name="end_time" required>
    <button type="submit">Book Now</button>
</form>
