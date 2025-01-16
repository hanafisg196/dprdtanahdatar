<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Modern Light Header | BOOKRA</title>
		<meta name="description" content="BOOKRA | Multi-purpose HTML5 Template">
		<meta name="author" content="IT-RAYS">
		
		<!-- Devices Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="/assets/images/favicon.ico">
		    	
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,100,300,500,700%7CLato:400,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		
		<!-- Plugins CSS files -->
		<link rel="stylesheet" href="/assets/css/assets.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/shortcodes.css">
		
		<link id="theme_css" rel="stylesheet" href="/assets/css/light.css">
		<link id="skin_css" rel="stylesheet" href="/assets/css/skins/default.css">
		
	</head>
	<body>

		<!-- site preloader start -->
		<div class="page-loader"></div>
		<!-- site preloader end -->
		
		<div class="pageWrapper">

			<!-- Header start -->
			@include('dprdtd.template.header')
		    <!-- Header start -->
		    
		    <!-- Content start -->
	    	<div class="pageContent">
	    		
	    		<div class="xl-padding parallax" style="background: url('assets/images/dprdtd.png');background-size: cover;" data-stellar-background-ratio="0.4" data-overlay="rgba(0,0,0,.5)">
	    			<div class="t-center md-padding hi-index">
	    				<h2 class="font-70 white uppercase fx" data-animate="fadeInUp" data-animation-delay="500">Welcome to the New <span class="main-color">BOOKRA</span> </h2>

						<h4 class="light-font uppercase white fx" style="margin-top: -20px;letter-spacing: 2px" data-animate="fadeInUp" data-animation-delay="800">Really it is a multi-purpose template can be used for any project at anytime and everywhere.</h4>
						
						<div class="button-group">
							<a class="btn btn-lg btn-default fx" href="#" data-animate="fadeInLeft" data-animation-delay="1300"><i class="fa fa-dashboard"></i>View Demos</a>
							<a class="btn btn-lg main-bg fx" href="#" data-animate="fadeInRight" data-animation-delay="1300"><i class="fa fa-crop"></i>Purchase Now</a>
						</div>
	    			</div>
	    		</div>

				@yield('content')
				<div class="md-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p>
								Lorem ipsum dolor sit amet, co sectetur adipiscing elit. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis.Lorem ipsum dolor sit amet, co sectetur adipiscing elit. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis.
								</p>
								
								<p>
									Lorem ipsum dolor sit amet, co sectetur adipiscing elit. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Nlis euismod mollis. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis.Lorem ipsum dolor sit amet, co sectetur adipiscing elit. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis.Lorem ipsum dolor sit amet, co sectetur adipiscing elit. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis.Lorem ipsum dolor sit amet, co sectetur adipiscing elit. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis.
								</p>
								<blockquote class="bquote-1">
									<p>Phasellus tristique libero vel justo aliquam pellentesque. Maecenas vestibulum velit est, in tincidunt arcu fermentum id. Morbi ipsum arcu, iaculis nec sapien vel, egestas viverra eros. Phasellus ac dolor elit.</p>
									<span class="main-color">- Mark Henry "Google.com"</span>
								</blockquote>
								<p>
									<br>
									Lorem ipsum dolor sit amet, co sectetur adipiscing elit. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollisNullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollisNullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollisNullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis.Lorem ipsum dolor sit amet, co sectetur adipiscing elit. Nullam convallis euismod mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nlis euismod mollis. Nullam convallis euismod mollis.
								</p>
							</div>
						</div>
					</div>
				</div>

		    </div>
	    	<!-- Content start -->

	    	<!-- Footer start -->
			@include('dprdtd.template.footer')
			<!-- Footer end -->

		</div>

		<!-- Back to top Link -->
	    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

		<!-- Load JS plugins -->
 		<script type="text/javascript" src="/assets/js/jquery-1.12.0.min.js"></script>
 		<script type="text/javascript" src="/assets/js/assets.js"></script>

 		<!-- general script file -->
		<script type="text/javascript" src="/assets/js/script.js"></script>

	</body>
</html>