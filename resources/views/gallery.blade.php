@extends('welcome')
@section('gallery')
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
							<li><a href="{{ url('/proses') }}">Proses</a></li>
							<li class="active"><a href="{{ url('/gallery') }}">Gallery</a></li>
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
								<h1>Gallery Foto</h1>
								<!-- <h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<div id="fh5co-portfolio">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Finished Project</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/gallery/foto1.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/gallery/foto2.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/project-4.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/project-5.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/project-6.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/project-7.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/project-8.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/project-9.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center animate-box">
						<div class="work-grid" style="background-image: url(images/project-2.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span class="cat">Web Design</span>
								<p>
									<span class="download"><a href="#"><i class="icon-download"></i></a></span>
									<span class="love"><a href="#"><i class="icon-heart"></i></a></span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
@endsection