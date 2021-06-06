<!DOCTYPE html>
<html lang="en">
	<head>
		<title>AWA FOOD SERVICE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
		<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
		<div class="py-1 bg-black top">
			<div class="container">
				<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
					<div class="col-lg-12 d-block">
						<div class="row d-flex">
							<div class="col-md pr-4 d-flex topper align-items-center">
								<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
								<span class="text">+ 95 9792655994</span>
							</div>
							<div class="col-md pr-4 d-flex topper align-items-center">
								<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
								<span class="text">awa.yoko.hayami@gmail.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.html">AWA FOOD SERVICE</a>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav nav ml-auto">
						<li class="nav-item"><a href="{{ route('user.home') }}" class="nav-link"><span>Home</span></a></li>
						<li class="nav-item"><a href="{{ route('user.service') }}" class="nav-link"><span>Lunch Box & Catering Service</span></a></li>
						<li class="nav-item"><a href="{{ route('user.course') }}" class="nav-link"><span>Cooking Class</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<main>
			@yield('content')
		</main>
		<footer class=" mt-3 py-2 bg-dark"> 
			<div>
				<p class="col-md-12 text-center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p>
			</div>
		</footer>

		<!-- Script -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/aos.js') }}"></script>
		<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
		<script src="{{ asset('js/scrollax.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{ asset('js/google-map.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>  
	</body>
</html>

