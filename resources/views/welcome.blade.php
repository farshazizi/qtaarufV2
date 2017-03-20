<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>qtaaruf</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="taaruf online" />
		<meta name="keywords" content="taaruf online, qtaaruf, taaruf" />
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="{{ url('css/animate.css') }}">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="{{ url('css/icomoon.css') }}">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
		<!-- Theme style  -->
		<link rel="stylesheet" href="{{ url('css/style.css') }}">
		<!-- Modernizr JS -->
		<script src="{{ url('js/modernizr-2.6.2.min.js') }}"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>	
		
		@yield('konten')
		@yield('proses')
		@yield('gallery')
		
		<div id="fh5co-started">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Subscribe</h2>
							<h3>Dapatkan Ebook dan tips - tips menarik Tentang membangun keluarga sakinah.</h3>
							<h3>Klik Dibawah!</h3>
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2">
							<form class="form-inline">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="email" class="sr-only">Email</label>
										<input type="email" class="form-control" id="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<button type="submit" class="btn btn-default btn-block">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 fh5co-widget">
						<h3>The Company</h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p><a href="#">Learn More</a></p>
					</div>
					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="fh5co-footer-links">
							<li><a href="#">About</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Meetups</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="fh5co-footer-links">
							<li><a href="#">Shop</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Handbook</a></li>
							<li><a href="#">Held Desk</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
						<ul class="fh5co-footer-links">
							<li><a href="#">Find Designers</a></li>
							<li><a href="#">Find Developers</a></li>
							<li><a href="#">Teams</a></li>
							<li><a href="#">Advertise</a></li>
							<li><a href="#">API</a></li>
						</ul>
					</div>
				</div>

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
							<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- jQuery -->
		<script src="{{ url('js/jquery.min.js') }}"></script>
		<!-- jQuery Easing -->
		<script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ url('js/bootstrap.min.js') }}"></script>
		<!-- Waypoints -->
		<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
		<!-- countTo -->
		<script src="{{ url('js/jquery.countTo.js') }}"></script>
		<!-- Magnific Popup -->
		<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ url('js/magnific-popup-options.js') }}"></script>
		<!-- Main -->
		<script src="{{ url('js/main.js') }}"></script>

	</body>
</html>
