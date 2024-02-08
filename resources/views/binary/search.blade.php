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
				<div class="col-md-12">
					<div class="choose-us-box">
						<div class="choose-img-box"><img src="{{ asset('helps/images/choose-us/choose-us-4.jpg') }}" alt="choose-us-4"/></div>
						<div class="choose-us-content-box">
						@foreach ($trajets as $trajet)
							<h3>Trust And Safety</h3>
							<p>Car type: {{ $trajet->car_type }}</p>
							<div class="search-results">
								{{-- @foreach ($trajets as $trajet) --}}
								<div class="trajet-info">
									
									<p>Departure City: {{ $trajet->departureCity->name }}</p>
									<p>Destination City: {{ $trajet->destinationCity->name }}</p>
									
									
									
									<!-- Add additional information as needed -->
								</div>
								@endforeach
							</div>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				
				
				
			</div><!-- Choose Carousel/- -->
		</div><!-- Container/- -->
		<div class="section-padding"></div>
	</div><!-- Choose Us/- -->
	@yield('footer')