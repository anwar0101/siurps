<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIU RPS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			  	<div class="col-md-12">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="/"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
				    </div>
				    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="/">Home</a></li>
				        <li class=""><a href="#contact">Contact</a></li>

                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/admin">Dashboard</a></li>
                                    <li><a href="/admin">Settings</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
				      </ul>
				    </div>
				</div>
			  </div>
			</nav>

			<div class="container">

				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
							<img src="img/logo.png" class="img-responsive">
						</div>
						<div class="banner-text text-center">
							<h1 class="white">Result Processing System!!</h1>
							<a href="#contact" class="btn btn-appoint">Contact to us</a>
                            @if (Auth::guest())
                                <a href="{{ route('login') }}" class="btn btn-appoint">Login</a>
                            @endif
						</div>
						<div class="overlay-detail text-center">
			               <a href="#testimonial"><i class="fa fa-angle-down"></i></a>
			             </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ banner-->

	<!--testimonial-->
	<section id="testimonial" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="ser-title">see what students are saying?</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="testi-details">
						<!-- Paragraph -->
						<p>Carry on !!</p>
					</div>
					<div class="testi-info">
						<!-- User Image -->
						<a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
						<!-- User Name -->
						<h3>Rabbi<span>Sylhet, 3100</span></h3>
					</div>
				</div>
			    <div class="col-md-4 col-sm-4">
					<div class="testi-details">
						<!-- Paragraph -->
						<p>Save my days!</p>
					</div>
					<div class="testi-info">
						<!-- User Image -->
						<a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
						<!-- User Name -->
						<h3>Tamim Islam<span> Sylhet, 3100</span></h3>
					</div>
				</div>
			    <div class="col-md-4 col-sm-4">
					<div class="testi-details">
						<!-- Paragraph -->
						<p>Should be completed</p>
					</div>
					<div class="testi-info">
						<!-- User Image -->
						<a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
						<!-- User Name -->
						<h3>MR. Shahan<span>Sylhet, 3100</span></h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ testimonial-->
	<!--cta 2-->
	<section id="cta-2" class="section-padding">
		<div class="container">
			<div class=" row">
				<div class="col-md-2"></div>
	            <div class="text-right-md col-md-4 col-sm-4">
	              <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
	            </div>
	            <div class="col-md-4 col-sm-5">
	              our project is based on siu result processing system. We hope we can successed.
	              <p class="text-right text-primary"><i>— SIU</i></p>
	            </div>
	            <div class="col-md-2"></div>
	        </div>
		</div>
	</section>
	<!--cta-->

	<!--contact-->
	<section id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="ser-title">Contact us</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-4 col-sm-4">
			      <h3>Contact Info</h3>
			      <div class="space"></div>
			      <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Shamimabad<br>
			        Bagbari, Sylhet, 3100</p>
			      <div class="space"></div>
			      <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>hello@siu.edu.bd</p>
			      <div class="space"></div>
			      <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+8801711458742</p>
			    </div>
				<div class="col-md-8 col-sm-8 marb20">
					<div class="contact-info">
							<h3 class="cnt-ttl">Having Any Query!</h3>
							<div class="space"></div>
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
							<form action="" method="post" role="form" class="contactForm">
							    <div class="form-group">
                                    <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>

								<div class="form-action">
									<button type="submit" class="btn btn-form">Send Message</button>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ contact-->
	<!--footer-->
	<footer id="footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 marb20">
							<div class="ftr-tle">
								<h4 class="white no-padding">About Us</h4>
							</div>
							<div class="info-sec">
								<p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
							</div>
					</div>
					<div class="col-md-4 col-sm-4 marb20">
						<div class="ftr-tle">
							<h4 class="white no-padding">Quick Links</h4>
						</div>
						<div class="info-sec">
							<ul class="quick-info">
								<li><a href="/"><i class="fa fa-circle"></i>Home</a></li>
								<li><a href="#contact"><i class="fa fa-circle"></i>contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 marb20">
						<div class="ftr-tle">
							<h4 class="white no-padding">Follow us</h4>
						</div>
						<div class="info-sec">
							<ul class="social-icon">
								<li class="bglight-blue"><i class="fa fa-facebook"></i></li>
								<li class="bgred"><i class="fa fa-google-plus"></i></li>
								<li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
								<li class="bglight-blue"><i class="fa fa-twitter"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-line">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						© Copyright Black Rose. All Rights Reserved
                        <div class="credits">
                            Designed by <a href="">Black Rose</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/ footer-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://use.fontawesome.com/cfecd30e52.js"></script>
</body>
</html>
