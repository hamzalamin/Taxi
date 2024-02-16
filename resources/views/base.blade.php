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
		<style>
			.ticket {
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 5px;
			padding: 20px;
			margin-bottom: 20px;
		}
		
		.ticket-info {
			display: flex;
			flex-direction: column;
		}
		
		.info-row {
			display: flex;
			justify-content: space-between;
			margin-bottom: 10px;
		}
		
		.info-label {
			font-weight: bold;
		}
		
		.info-value {
			flex: 1;
			margin-left: 10px;
		}
		
			.card {
		max-width: 20rem;
		background: #fff;
		margin: 0 1rem;
		padding: 1rem;
		box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
		width: 100%;
		border-radius: 0.5rem;
		}
		
		.star {
		font-size: 5vh;
		cursor: pointer;
		}
		
		.one {
		color: rgb(255, 0, 0);
		}
		
		.two {
		color: rgb(255, 106, 0);
		}
		
		.three {
		
		color: rgb(149, 228, 12);
		
		}
		
		.four {
		color: rgb(105, 187, 12);
		}
		
		.five {
		color: rgb(24, 159, 14);
		}
		
		
		.disabled{
		
		padding: 8px 20px ;
		/* margin: 4px; */
		
		}
		
		</style>

</head>
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

						<li><a href="{{ route('binary.ticket') }}">Hestorique</a></li>

				
						
						<li class="dropdown">
							@if (Route::has('login'))
								<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
									@auth
									<li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-toggle">Dashboard</a></li>
									@else
									<li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-toggle">Log in</a></li>
									
									@if (Route::has('register'))
									<li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 dropdown-toggle">Register</a></li>
									@endif
									@endauth
								</div>
							@endif

							</ul>
						</li>
					</ul>						
				</div>
			</div>
		</nav>
	</header>
    


