@include('base')

<div class="container">
    <h1>Your Taxi Tickets</h1>
    @if($reservations->count() > 0)
    @foreach ($reservations as $reservation)

    <div class="ticket">
        <div class="ticket-info">
            <div class="info-row">
                <span class="info-label">Number od ticket:</span>
                <span class="info-value">{{  $reservation->id }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Departure City:</span>
                <span class="info-value">{{ $reservation->departure }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Destination City:</span>
                <span class="info-value">{{ $reservation->destination }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Driver Name:</span>
                <span class="info-value">{{ $reservation->driver  }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Driver Name:</span>
                <span class="info-value">{{ $reservation->driver_id  }}</span>
            </div>
            <div class="info-row">
                    <span class="info-label">Time Passed:</span>
                    <span class="info-value">{{ $reservation->created_at->diffForHumans() }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Rate this trajet:</span>
                <form action="{{ route('RateHere', $reservation->id) }}" method="post">
                    <input hidden type="text" name="driver_id" value="{{ $reservation->driver_id }}">
                    <input hidden type="text" name="driver" value="{{ $reservation->driver }}">
                    <input hidden type="text" name="destination" value="{{ $reservation->destination }}">
                    <input hidden type="text" name="departure" value="{{ $reservation->departure }}">
                    @csrf
                    <input type="hidden" name="trajet_id" value="{{ $reservation->trajet_id }}">
                    <button type="submit" class="btn btn-primary">Rate</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <p>No tickets in your history.</p>
@endif
</div>

