<!DOCTYPE HTML>
<html>
<head>
	<title>Rocko brewing company</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	{!! Html::style('assets/css/style.css') !!}
	{!! Html::style('assets/css/slider.css') !!}
	{!! Html::script('assets/js/jquery.min.js') !!}
	{!! Html::script('assets/js/slidermodernizr.custom.js') !!}
	@yield('head')
</head>
<body>
		<!-- Background slider -->
		<div class="slider">
			<ul id="cbp-bislideshow" class="cbp-bislideshow">
				<li><img src="{!! asset('assets/images/1.jpg') !!}" alt="image01"/></li>
				<li><img src="{!! asset('assets/images/2.jpg') !!}" alt="image02"/></li>
				<li><img src="{!! asset('assets/images/3.jpg') !!}" alt="image03"/></li>
				<li><img src="{!! asset('assets/images/4.jpg') !!}" alt="image04"/></li>
				<li><img src="{!! asset('assets/images/5.jpg') !!}" alt="image05"/></li>
				<li><img src="{!! asset('assets/images/6.jpg') !!}" alt="image06"/></li>
			</ul>    
			{!! Html::script('assets/js/jquery.imagesloaded.min.js') !!}
			{!! Html::script('assets/js/cbpBGSlideshow.min.js') !!}
			<script>
				$(function() {
				cbpBGSlideshow.init();
				});
			</script>
		</div>
		<!-- End Background slider -->
		<div class="header_top">
			<div class="wrap">	 			
			<div class="logo">
				<a href="/"><img src="{!! asset('assets/images/logo2.png') !!}" alt=""></a>
			</div>	
			<div class="nav">			
				<ul>
					<li><a href="home">Home</a></li>
			    	<li><a href="pub">Pub</a></li>
			    	<li><a href="ourbeers">Our Beers</a></li>
			    	<li><a href="gallery">Gallery</a></li>			    	
			    	<li><a href="shop">Shop</a></li>
			    	<li><a href="contact">Contact</a></li>
			    	<div class="clear"></div>
				</ul>

			</div>	 

			<div class="clear"></div>		   
			</div>

		</div>
		
		<div class="wrap">
    	<div class="main">
				

				@yield('content')
			

			</div>
		</div>

		<div class="copy_right">
			<div class="wrap">
				<p>Rocko brewing company © All rights Reseverd | Design by  <a href="http://w3layouts.com"> W3Layouts </a></p>
			</div>
		</div>
	</body>
</html>

