@include('base')

<div class="container">
    <h1>Your Taxi Tickets</h1>
    
    <div class="ticket">
        <div class="ticket-info">
            <div class="info-row">
                <span class="info-label">Number od ticket:</span>
                <span class="info-value">{{  $reservation->id }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Departure City:</span>
                <span class="info-value">{{ $request->departure }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Destination City:</span>
                <span class="info-value">{{ $request->destination }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Driver Name:</span>
                <span class="info-value">{{ $request->driver  }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Driver Name:</span>
                <span class="info-value">{{ $request->driver_id  }}</span>
            </div>
            <div class="info-row">
                    <span class="info-label">Time Passed:</span>
                    <span class="info-value">{{ $reservation->created_at->diffForHumans() }}</span>
            </div>
            <div class="info-row">
                <form action="{{ route('Addrating') }}" method="post">
                    @csrf
                    <div class="" id="f_star">
                         <input class="form-control" type="text" value="{{ $request->driver_id }}" name="driver_id" placeholder="" style="display: none">
                         {{-- {{ dd($reservation->driver_id); }} --}}
                       <input class="form-control" type="text" value="{{ $reservation->id }}" name="reservations_id" placeholder="" style="display: none">
                        <span onclick="gfg(1)" class="star">★</span>
                        <span onclick="gfg(2)" class="star">★</span>
                        <span onclick="gfg(3)" class="star">★</span>
                        <span onclick="gfg(4)" class="star">★</span>
                        <span onclick="gfg(5)" class="star">★</span>
                    <div  id="output"></div>
                    <button type="submit"  class="btn btn-primary">done</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>

</div>

{{-- <form action="{{ route('add_rating',$item->horaire_id) }}" method="post">
    @csrf
<div class="" id="f_star">
    <input class="form-control" type="text" value="{{ $item->driver_id }}" name="driver_id" placeholder="" style="display: none">
    <input class="form-control" type="text" value="{{ $item->reservations_id }}" name="reservations_id" placeholder="" style="display: none">
    <textarea name="comment" placeholder="add comment"  cols="25" rows="2"></textarea>
    <span onclick="gfg(1)" class="star">★</span>
    <span onclick="gfg(2)" class="star">★</span>
    <span onclick="gfg(3)" class="star">★</span>
    <span onclick="gfg(4)" class="star">★</span>
    <span onclick="gfg(5)" class="star">★</span>
 <div  id="output"></div>
 <button type="submit"  class="btn btn-primary" >done</button>
</div> 
</form> --}}


{{-- @foreach ($reservations as $reservation)
    <p>Reservation ID: {{ $reservation->id }}</p>
    <p>Departure City: {{ $reservation->departure_city_name }}</p>
    <p>Destination City: {{ $reservation->destination_city_name }}</p>
    <p>Driver Name: {{ $reservation->driver_name }}</p>
    <!-- Add more attributes as needed -->
@endforeach --}}
<script>
/*
This is a multi-line comment.
It spans multiple lines and will be ignored by the JavaScript interpreter.
*/

let stars = document.getElementsByClassName("star");
let output = document.getElementById("output");

function gfg(n) {
    remove();
    for (let i = 0; i < n; i++) {
        if (n == 1) cls = "one";
        else if (n == 2) cls = "two";
        else if (n == 3) cls = "three";
        else if (n == 4) cls = "four";
        else if (n == 5) cls = "five";
        stars[i].className = "star " + cls;
    }
    output.innerHTML = `<input type="text" id="num" name="rating" value="${n}" style="display: none">`;
    console.log(n);
}

// To remove the pre-applied styling
function remove() {
    let i = 0;
    while (i < 5) {
        stars[i].className = "star";
        i++;
    }
}

</script>

</html>