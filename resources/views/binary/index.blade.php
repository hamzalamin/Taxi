
@include('base')


	<!-- Photo Slider -->	
	<div class="container-fluid photos-slider no-padding">
		<div id="photos-slider" class="carousel slide" data-ride="carousel">			
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ asset('helps/images/photos-slider/photo-slide-1.jpg') }}" alt="side-1"/>
					<div class="carousel-caption">
						<h2>A reliable way to travel</h2>
						<p>Come and listen to a story about a man named Jed a poor mountaineer barely kept his family fed so lets make the most of this beautiful day since we are together it is a beautiful day in this neighborhood a beautiful day for a neighbor</p>
						<a href="#" class="purchase">Purchase</a>
						<a href="#" title="See More" class="see-more">See More</a>						
					</div>
				</div>
				<div class="item">
					<img src="{{ asset('helps/images/photos-slider/photo-slide-1.jpg')}}" alt="side-2"/>
					<div class="carousel-caption">
						<h2>A reliable way to travel</h2>
						<p>Come and listen to a story about a man named Jed a poor mountaineer barely kept his family fed so lets make the most of this beautiful day since we are together it is a beautiful day in this neighborhood a beautiful day for a neighbor</p>
						<a href="#" class="purchase">Purchase</a>
						<a href="#" class="see-more">See More</a>						
					</div>
				</div>
			</div>
		</div>
	</div ><!-- Photo Slider/- -->
	
	<!-- Choose Us -->
	<div class="container-fluid no-padding choose-us">
		<div class="section-padding"></div>
		<!-- Container -->
		<div class="container">
			<div class="section-header">
				<h3>Reasons To Choose Us</h3>				
			</div>
			<!-- Choose Carousel -->
			<div class="choose-carousel">			
				<div class="col-md-12">
					<div class="choose-us-box">
						<div class="choose-img-box"><img src="{{ asset('helps/images/choose-us/choose-us-1.jpg')}}" alt="choose-us-1"/></div>
						<div class="choose-us-content-box">
							<h3>Trust And Safety</h3>
							<p>The first mate and his Skipper too will do their very best to make the others in their tropic island nest the year.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="choose-us-box">
						<div class="choose-img-box"><img src="{{ asset('helps/images/choose-us/choose-us-2.jpg')}}" alt="choose-us-2"/></div>
						<div class="choose-us-content-box">
							<h3>Feel The Comfort</h3>
							<p>The first mate and his Skipper too will do their very best to make the others in their tropic island nest the year.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="choose-us-box">
						<div class="choose-img-box"><img src="{{ asset('helps/images/choose-us/choose-us-3.jpg')}}" alt="choose-us-3"/></div>
						<div class="choose-us-content-box">
							<h3>Experienced Drivers</h3>
							<p>The first mate and his Skipper too will do their very best to make the others in their tropic island nest the year.</p>
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
			</div><!-- Choose Carousel/- -->
		</div><!-- Container/- -->
		<div class="section-padding"></div>
	</div><!-- Choose Us/- -->
	
<!-- Book Details -->
<div class="container-fluid no-padding book-details">
    <div class="section-padding"></div>
    <!-- Container -->
    <div class="container">
        <div class="section-header">
            <h3>Book For a Ride</h3>
        </div>
        <!-- Booking Details Form -->
		<form class="booking-details-form" action="{{ route('searchPage') }}" method="GET">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="from">From</label>
						<select class="form-control" id="from" name="from">
							<option value="">FROM</option>
							@foreach ($cities as $city)
							<option value="{{ $city->id }}">{{ $city->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<label for="destination">To</label>
						<select class="form-control" id="destination" name="to">
							<option value="">TO</option>
							@foreach ($cities as $city)
							<option value="{{ $city->id }}">{{ $city->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Book Your Trip</button>
					</div>
				</div>
			</div>
		</form>
		<!-- Booking Details Form/- -->
    </div><!-- Container/- -->
    <div class="section-padding"></div>
</div><!-- Book Details/- -->

	<!-- What We Do -->
	{{-- <div class="container-fluid no-padding what-we-do">
		<div class="section-padding"></div>
		<div class="image-box">
			<img src="{{ asset('helps/images/services/service-1.png')}}" alt="service" />
		</div>
		<!-- Container -->
		<div class="container">			
			<div class="col-md-8 pull-right">
				<div class="we-do-more">
					<h3>We Do More</h3>
					<h2>Than You Wish</h2>
					<p>The mate was a mighty sailin man the Skipper brave and sure. Five passengers set sail that day for a three hour tour a three hour tour.</p>
				</div>
				<div class="col-md-6">
					<div class="what-we-do-box">						
						<span>Home Pickup</span>
						<img src="{{ asset('helps/images/icon/home-pickup.png')}}" alt="home-pickup"/>
						<p>Come and dance on our floor. Take a step that is new. We've a loveable space that needs your face threes company too.</p>
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="what-we-do-box">						
						<span>Airport Transportation</span>
						<img src="{{ asset('helps/images/icon/airport.png')}}" alt="airport"/>
						<p>Come and dance on our floor. Take a step that is new. We've a loveable space that needs your face threes company too.</p>
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="what-we-do-box">						
						<span>Company Contract</span>
						<img src="{{ asset('helps/images/icon/company-contract.png')}}" alt="company-contract"/>
						<p>Got a dream and we just know now we are gonna make us dream come and we know flipper lives in a world </p>
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="what-we-do-box">
						<p>No one you see is smarter than he. The mate was a mighty sailin man Skip brave and sure Five</p>
						<div class="more-service">
							<a href="#">More Service</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Container/-  -->
		<div class="section-padding"></div>
	</div><!-- What We Do/- --> --}}
	
	<!-- Members -->
	<div class="container-fluid no-padding members">
        <div class="section-padding"></div>         
        <div class="section-header">
            <div class="container-fluid no-padding members">
            </div>
            <h3>Drivers On Your Service</h3>                
        </div>
        <!-- Members Carousel -->
        <div class="member-carousel">
            <div id="member">
                <div class="member-item">
                    <img src="{{ asset('helps/images/members/member-1.jpg')}}" alt="member-1"/>
                    <div class="driver-info">
                        <div class="driver">
                            <h3>William Turner<span>Limousine Driver</span></h3>
                        </div>
                        <p>Skill Level: Senior
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-half-o"></i>
                            </span>    
                        </p>
                    </div>
                </div>
                <div class="member-item">
                    <img src="{{ asset('helps/images/members/member-2.jpg')}}" alt="member-2"/>
                    <div class="driver-info">
                        <div class="driver">
                            <h3>Johny Roges<span>Sedan Driver</span></h3>
                        </div>
                        <p>Skill Level: Senior
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </span>    
                        </p>                        
                    </div>
                </div>
                <div class="member-item">
                    <img src="{{ asset('helps/images/members/member-3.jpg')}}" alt="member-3"/>
                    <div class="driver-info">
                        <div class="driver">
                            <h3>Altrin Mosea<span>SUV Driver</span></h3>
                        </div>
                        <p>Skill Level: Expert
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>    
                        </p>
                    </div>
                </div>
                <div class="member-item">
                    <img src="{{ asset('helps/images/members/member-4.jpg')}}" alt="member-4"/>
                    <div class="driver-info">
                        <div class="driver">
                            <h3>Luther King<span>Sedan Driver</span></h3>
                        </div>
                        <p>Skill Level: Starter
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-half-o"></i>
                            </span>    
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- Members Carousel/- -->
        <div class="section-padding"></div>
    </div>
  		


		</div>
		<div class="section-padding"></div>	
	</div><!-- Counter App/- --> 
	
	<!-- - Blog -->
	<div class="container-fluid no-padding blog">
		<div class="section-padding"></div>
		<div class="container">			
			<div class="section-header">
				<h3>Recent Updates From Our Blog</h3>				
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<article class="blog-post-list">
						<div class="entry-cover">
							<a href="#"><img src="{{ asset('helps/images/blog/blog-1.jpg')}}" alt="blog-1"/></a>
							<div class="post-meta">
								<img src="{{ asset('helps/images/icon/photo.png')}}" alt="photo"/>
							</div>
							<div class="entry-meta">
								<div class="meta-inner">
									<div class="by-line pull-left">Posted By <a href="#">Admin</a></div>
									<div class="post-comment pull-right">
										<a href="#"><i class="fa fa-comment"></i>Comments<span>14</span></a>
									</div>
								</div>								
								<div class="meta-inner">
									<div class="post-date pull-left"><span>On 22 Aug 2015</span></div>
									<div class="tags pull-right">
										<i class="fa fa-tag"></i>
										<a href="#">Cab</a>
										<a href="#">Taxi</a>
										<a href="#">Rent</a>
										<a href="#">Hire</a>
										<a href="#">Trip</a>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-content">
							<h3 class="entry-title">Well Trained Drivers On Duty</h3>
							<div class="entry-content">
								<p>Fleeing from the Cylon tyranny the last Battlestar leads a rag tag fugitive fleet on a lonely quest a</p>
								<a href="#" title="Read More" class="pull-right">Read More</a>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<article class="blog-post-list">
						<div class="entry-cover">
							<a href="#"><img src="{{ asset('helps/images/blog/blog-2.jpg')}}" alt="blog-1"/></a>
							<div class="post-meta">
								<img src="{{ asset('helps/images/icon/video.png')}}" alt="video"/>
							</div>
							<div class="entry-meta">
								<div class="meta-inner">
									<div class="by-line pull-left">Posted By <a href="#">Admin</a></div>
									<div class="post-comment pull-right">
										<a href="#"><i class="fa fa-comment"></i>Comments<span>22</span></a>
									</div>
								</div>
								<div class="meta-inner">
									<div class="post-date pull-left"><span>On 14 Sep 2015</span></div>
									<div class="tags pull-right">
										<i class="fa fa-tag"></i>
										<a href="#">Pickup</a>
										<a href="#">Airport</a>
										<a href="#">paid</a>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-content">
							<h3 class="entry-title">Got The Airport Shuttle Contract</h3>
							<div class="entry-content">
								<p>Fleeing from the Cylon tyranny the last Battlestar leads a rag tag fugitive fleet on a lonely quest a</p>
								<a href="#" class="pull-right">Read More</a>
							</div>
						</div>
					</article>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<article class="blog-post-list">
						<div class="entry-cover">
							<a href="#"><img src="{{ asset('helps/images/blog/blog-3.jpg')}}" alt="blog-1"/></a>
							<div class="post-meta">
								<img src="{{ asset('helps/images/icon/photo.png')}}" alt="photo"/>
							</div>
							<div class="entry-meta">
								<div class="meta-inner">
									<div class="by-line pull-left">Posted By <a href="#">Admin</a></div>
									<div class="post-comment pull-right">
										<a href="#"><i class="fa fa-comment"></i>Comments<span>16</span></a>
									</div>
								</div>								
								<div class="meta-inner">
									<div class="post-date pull-left"><span>On 30 Oct 2015</span></div>
									<div class="tags pull-right">
										<i class="fa fa-tag"></i>
										<a href="#">City</a>
										<a href="#">Service</a>
										<a href="#">Taxi</a>
										<a href="#">Cab</a>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-content">
							<h3 class="entry-title">Why Should Companies Offer Taxi</h3>
							<div class="entry-content">
								<p>Fleeing from the Cylon tyranny the last Battlestar leads a rag tag fugitive fleet on a lonely quest a</p>
								<a href="#" class="pull-right">Read More</a>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div><!-- - Blog/-  -->	
@yield('footer')
