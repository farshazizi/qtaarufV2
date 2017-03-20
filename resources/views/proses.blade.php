@extends('welcome')
@section('proses')
	<div class="fh5co-loader"></div>	
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo">
							<a href="index.html"><img src="images/logo.png"></a>
						</div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ url('/about') }}">About</a></li>
							<li class="active"><a href="{{ url('/proses') }}">Proses</a></li>
							<li><a href="{{ url('/gallery') }}">Gallery</a></li>
							<li><a href="{{ url('/contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Proses Ta'aruf</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<div id="fh5co-services-section">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>Retina Ready</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>Fully Responsive</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
						<h3>Web Starter</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="feature-center">
						<span class="icon">
							<i class="icon-brush"></i>
						</span>
						<h3>Web Design</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center">
						<span class="icon">
							<i class="icon-video2"></i>
						</span>
						<h3>Video Editing</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center">
						<span class="icon">
							<i class="icon-help2"></i>
						</span>
						<h3>24/7 Help &amp; Support</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
@endsection