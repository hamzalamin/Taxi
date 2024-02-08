<!DOCTYPE html>
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>National Cab - Taxi Company HTML5 Template</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}"/>
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114-precomposed.png') }}">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72-precomposed.png') }}">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('images/apple-touch-icon-57x57-precomposed.png') }}">	
	
	<!-- Library - Loader CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('libraries/loader/loaders.min.css') }}">

	<!-- Library - Google Font Familys -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100italic,100,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('helps/libraries/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('helps/libraries/bootstrap/bootstrap-datetimepicker.min.css') }}">
	
	<!-- Font Icons -->
	<link rel="stylesheet" type="text/css" href="{{ asset('helps/libraries/fonts/font-awesome.min.css') }}">

	<!-- Library - OWL Carousel V.2.0 beta -->
	<link rel="stylesheet" type="text/css" href="{{ asset('helps/libraries/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('helps/libraries/owl-carousel/owl.theme.css') }}">

	<!-- Library - FlexSlider v2.5.0 -->
	<link rel="stylesheet" type="text/css" href="{{ asset('helps/libraries/flexslider/flexslider.css') }}">

	<!-- Library - Animate CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('helps/libraries/animate/animate.min.css') }}">

	<!-- Custom - Common CSS -->
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('helps/css/plugins.css') }}"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('helps/css/navigation-menu.css') }}"> 

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('helps/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('helps/css/shortcodes.css') }}">

	
		<script src="{{ asset('helps/js/html5/respond.min.js') }}"></script>

</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

	
	<a id="top"></a>

	<header class="header-main">
		
		<nav class="navbar ow-navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand logo-block">
						<a href="#">
							<img src="{{ asset('helps/images/logo.png') }}" alt="Logo" />
							{{-- <b>National Cab</b><span>Always there for you</span> --}}
						</a>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="">
							<a href="{{ route('homePage') }}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
						</li>
						<li><a href="{{ route('searchPage') }}">About Us</a></li>
						<li><a href="service.html">Our Services</a></li>
						<li class="dropdown">
							<a href="#blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="single-blog.html">Single Blog</a></li>
							</ul>
						</li>
						<li class="dropdown">								
							<a href="#faq" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Faq</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="faq.html">Faq - Default</a></li>
								<li><a href="faq-1.html">Faq - Accordion</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="online-booking.html">Online Booking</a></li>
								<li><a href="error.html">404 - Error</a></li>
							</ul>
						</li>
						<li><a href="contact-us.html">Contact US</a></li>							
					</ul>						
				</div>
				<a href="#">Book For A Ride</a>
			</div>
		</nav>
	</header>
    
@section('footer')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class=" ">About Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, justo id ultricies vestibulum, est elit pharetra est, non efficitur velit metus nec velit.</p>
                </div>
                <div class="col-md-6">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>Email: example@example.com</li>
                        <li>Phone: +1 234 567 890</li>
                        <li>Address: 123 Street, City, Country</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2024 Your Company. All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-links">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
		
	</div><!-- Main Container -->
	<!-- JQuery v1.11.3 -->
	<script src="{{ asset('helps/js/jquery.min.js')}}"></script>

	<!-- Library - Modernizer -->
	<script src="{{ asset('helps/libraries/modernizr/modernizr.js')}}"></script>
	
	<!-- Library - Bootstrap v3.3.5 -->
	<script src="{{ asset('helps/libraries/bootstrap/bootstrap.min.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->
	<script src="{{ asset('helps/libraries/bootstrap/bootstrap-datetimepicker.min.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->
	
	<!-- jQuery Easing v1.3 -->
	<script src="{{ asset('helps/js/jquery.easing.min.js') }}"></script>

	<!-- Library - jQuery.appear -->
	<script src="{{ asset('helps/libraries/appear/jquery.appear.js') }}"></script>
	
	<!-- Library - OWL Carousel V.2.0 beta -->
	<script src="{{ asset('helps/libraries/owl-carousel/owl.carousel.min.js') }}"></script>
	
	<!-- jQuery For Number Counter -->	
	<script src="{{ asset('helps/libraries/number/jquery.animateNumber.min.js') }}"></script>

	<!-- Library - Google Map API -->
	<script src="{{ asset('helps/https://maps.googleapis.com/maps/api/js?v=3.exp') }}"></script>
	 
	<!-- Library - FlexSlider v2.5.0 -->
	<script defer src="{{ asset('helps/libraries/flexslider/jquery.flexslider.js') }}"></script>
	
	<!-- Library - Theme JS -->
	<script src="{{ asset('helps/js/functions.js') }}"></script>
</body>
</html>

    @endsection