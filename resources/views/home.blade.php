@extends('welcome')
@section('konten')
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
								<li class="active"><a href="{{ url('/') }}">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="{{ url('/proses') }}">Proses</a></li>
								<li><a href="{{ url('/gallery') }}">Gallery</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>

			<header id="fh5co-header" class="fh5co-cover" role="banner">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<div class="display-t">
								<div class="display-tc animate-box" data-animate-effect="fadeIn">
									<h1>بِسْمِ اللّهِ الرَّحْمَنِ الرَّحِيْمِ</h1>
									<h2>Demi Allah Yang Maha Mengetahui, saya menyatakan bahwa saya sudah siap untuk menikah dan berikhtiar ta'aruf secara syar'i.</h2>
									<p><a href="#" class="btn btn-default">Ta'aruf Sekarang</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			
			<div id="fh5co-portfolio">
				<div class="container">
					<div class="row">
						<div class="col-third">
							<div class="col-md-12">
								<span class="icon">
									<img src="{{ url('images/security.png') }}" style="width: 100%; height: 100%"/>
								</span>
								<div class="desc fh5co-heading">
									<h3>Keamanan</h3>
									<p>Seluruh informasi data pribadi kamu dijamin keamanannya oleh qtaaruf, hanya kamu, calon pasangan, dan mediator yang tau</p>
								</div>
							</div>
						</div>
						<div class="col-third">
							<div class="col-md-12">
								<span class="icon">
									<img src="{{ url('images/simple.png') }}" style="width: 100%; height: 100%"/>
								</span>
								<div class="desc fh5co-heading">
									<h3>Simple</h3>
									<p>Setelah melakukan pendaftaran kamu tinggal menunggu proses selanjutnya, ustadz qtaaruf akan membantu menemukan calon pasangan kamu</p>
								</div>
							</div>
						</div>
						<div class="col-third">
							<div class="col-md-12">
								<span class="icon">
									<img src="{{ url('images/syari.png') }}" style="width: 100%; height: 100%"/>
								</span>
								<div class="desc fh5co-heading">
									<h3>Syar'i</h3>
									<p>Qtaaruf membantu kamu dan calon pasanganmu menjalani proses taaruf sesuai dengan ajaran agama islam</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<p><a href="about.html" class="btn btn-default" id="btn_proses">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="fh5co-bg-section">
				<div id="depan">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Meet Our Staff</h2>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
							<div class="fh5co-staff">
								<img src="images/person1.jpg" alt="Free HTML5 Templates by FreeHTML5.co">
								<h3>Fitrah Subarkah</h3>
								<strong class="role">Ustad qtaaruf</strong>
								<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
								<!-- <ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul> -->
							</div>
						</div>
						<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
							<div class="fh5co-staff">
								<img src="images/person2.jpg" alt="Free HTML5 Templates by FreeHTML5.co">
								<h3>Yosi</h3>
								<strong class="role">Ustad qtaaruf</strong>
								<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
							<div class="fh5co-staff">
								<img src="images/person3.jpg" alt="Free HTML5 Templates by FreeHTML5.co">
								<h3>Dina</h3>
								<strong class="role">Psikolog</strong>
								<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="fh5co-portfolio">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Proses ta'aruf</h2>
							<p>bla bla bla</p>
						</div>
					</div>
					<div class="row">
						<div class="project">
							<div class="col-md-8 col-md-push-5 animate-box" data-animate-effect="fadeInLeft">
								<img class="img-responsive" src="images/work_1.png" alt="work">
							</div>
							<div class="col-md-4 col-md-pull-8 animate-box" data-animate-effect="fadeInRight">
								<div class="mt">
									<h3>Real Project For Real Solutions</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. </p>
									<ul class="list-nav">
										<li><i class="icon-check"></i>Far far away, behind the word</li>
										<li><i class="icon-check"></i>There live the blind texts</li>
										<li><i class="icon-check"></i>Separated they live in bookmarksgrove</li>
										<li><i class="icon-check"></i>Semantics a large language ocean</li>
										<li><i class="icon-check"></i>A small river named Duden</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="project">
							<div class="col-md-8 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
								<img class="img-responsive" src="images/work_1.png" alt="work">
							</div>
							<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
								<div class="mt">
									<div>
										<h4><i class="icon-user"></i>Real Project For Real Solutions</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
									</div>
									<div>
										<h4><i class="icon-video2"></i>Real Project For Real Solutions</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
									</div>
									<div>
										<h4><i class="icon-shield"></i>Real Project For Real Solutions</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="project">
							<div class="col-md-8 col-md-push-5 animate-box" data-animate-effect="fadeInLeft">
								<img class="img-responsive" src="images/work_1.png" alt="work">
							</div>
							<div class="col-md-4 col-md-pull-8 animate-box" data-animate-effect="fadeInRight">
								<div class="mt">
									<h3>Real Project For Real Solutions</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. </p>
									<ul class="list-nav">
										<li><i class="icon-check"></i>Far far away, behind the word</li>
										<li><i class="icon-check"></i>There live the blind texts</li>
										<li><i class="icon-check"></i>Separated they live in bookmarksgrove</li>
										<li><i class="icon-check"></i>Semantics a large language ocean</li>
										<li><i class="icon-check"></i>A small river named Duden</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="project">
							<div class="col-md-8 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
								<img class="img-responsive" src="images/work_1.png" alt="work">
							</div>
							<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
								<div class="mt">
									<div>
										<h4><i class="icon-user"></i>Real Project For Real Solutions</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
									</div>
									<div>
										<h4><i class="icon-video2"></i>Real Project For Real Solutions</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
									</div>
									<div>
										<h4><i class="icon-shield"></i>Real Project For Real Solutions</h4>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-testimonial">
				<div class="container">			
					<div class="animate-box">
						<div class="testimony">
							<blockquote>
								<h5>Jika Jodoh adalah bagian dari bagian dari rizqi</h5>
								&ldquo;Janganlah kalian merasa bahwa rizqi kalian datangnya terlambat, karena sesungguhnya tidaklah seseorang hamba meninggal
								, hingga telah datang kepadanya rizqi terakhir yang di tetapkan untuknya. Maka tempuhlah jalan yang baik dalam mencari rizqi, yaitu dengan yang halal dan meninggalkan yang haram.&rdquo;
							</blockquote>
							<p class="author"><cite>Sabda Rasulullah, diriwayatkan Imam Ibnu Majah</cite></p>
						</div>
					</div>

				</div>
			</div>

			<div id="fh5co-started">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Newsletter</h2>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
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

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>
@endsection