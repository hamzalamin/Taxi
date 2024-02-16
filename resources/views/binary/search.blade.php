@include('base')

<!-- Banner Section -->
<div id="page-banner" class="page-banner faq-banner container-fluid no-padding">
    <div class="page-heading">
        <h3>About Us</h3>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Search Results</a></li>
        </ol>
    </div>
</div><!-- Banner Section /- -->

<!-- Choose Us -->
<div class="container-fluid no-padding choose-us">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <div class="section-header">
            <h3>Here is Who We Are</h3>
        </div>
        <!-- Choose Carousel -->
        <div class="choose-carousel">
            @foreach ($trajets as $trajet)
            <div class="col-md-12">
                <div class="choose-us-box">
                    <div class="choose-img-box"><img src="{{ asset('helps/images/choose-us/choose-us-4.jpg') }}" alt="choose-us-4"/></div>
                    <div class="choose-us-content-box">
                        {{-- <h3>Trust And Safety</h3> --}}
                        <h3>Driver Name: {{ $trajet->name }}</h3>
                        <div class="search-results">
                            <div class="trajet-info">
                                <p>Departure City: {{ $trajet->departureCity->name }}</p>
                                <p>Destination City: {{ $trajet->destinationCity->name }}</p>
                                <p>Car type: {{ $trajet->car_model }}</p>
                                <p>License: {{ $trajet->license_number }}</p>
                                <p>Payment: {{ $trajet->TypeOfpayment }}</p>
                                <p>Driver: {{ $trajet->driver_id }}</p>
                                <!-- Add additional information as needed -->
                            </div>
                        </div>
                        
                        <form action="{{ route('reserve.trajet') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}"> <!-- Assuming you're using authentication and want to capture the current user's ID -->
                            <input type="hidden" name="trajet_id" value="{{ $trajet->id }}"> <!-- Assuming you're passing the trajet ID to the view -->
                            
                            @php
                                $reservationCount = $reservationsCount->firstWhere('trajet_id', $trajet->id);
                                $count = $reservationCount ? $reservationCount->reservations_count : 0;
                            @endphp

                            @if ($count >= 6 )
                                <button type="submit">Reserve complet</button>
                            @else
                                <button type="submit">Reserve</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            @if ($trajets->isEmpty())
                <div class="col-md-12">
                    <p>No Trajet available.</p>
                </div>
            @endif
        </div><!-- Choose Carousel/- -->
    </div><!-- Container/- -->
    <div class="section-padding"></div>
</div><!-- Choose Us/- -->

<x-footer/>
