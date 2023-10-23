<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rental Buku | @yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('frond-end/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ asset('frond-end/assets/css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('frond-end/assets/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('frond-end/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
  </head>

  <body style="background:#ff871c ">

   	
  	<!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/"><i class="fa fa-book" aria-hidden="true"></i> Book Rental</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							
							<ul class="nav navbar-nav mu-menu navbar-right">
								@if(Auth::user())
									@if (Auth::user()->role_id ==1)
										<li><a href="/logout">LOGIN</a></li>
									@else
										<li><a href="/">BOOK LIST</a></li>
										<li><a href="/profile">PROFILE</a></li>
										<li><a href="/logout">LOGOUT</a></li>
									@endif
								@else
									<li><a href="/logout">LOGIN</a></li>
								@endif
							</ul>
							
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Featured Slider -->
	@yield('content')

	
	<div class="mu-single-counter">
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	
	<!-- End footer -->

	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="{{ asset('frond-end/assets/js/bootstrap.min.js') }}"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ asset('frond-end/assets/js/slick.min.js') }}"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="{{ asset('frond-end/assets/js/counter.js') }}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ asset('frond-end/assets/js/app.js') }}"></script>
   
 
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{ asset('frond-end/assets/js/custom.js') }}"></script>
	
    
  </body>
</html>