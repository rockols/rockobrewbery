<!DOCTYPE HTML>
<html>
<head>
<title>Rocko brewing company</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet" type="text/css" media="all">
<link href="{!! asset('assets/css/slider.css') !!}" rel="stylesheet" type="text/css" media="all">
<script src="{!! asset('assets/js/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('assets/js/slidermodernizr.custom.js') !!}"></script>
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
	   <script src="{!! asset('assets/js/jquery.imagesloaded.min.js') !!}"></script>
		<script src="{!! asset('assets/js/cbpBGSlideshow.min.js') !!}"></script>
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
				<div class="social-icons">						
		                <ul>
		                    <li><a class="facebook" href="#" target="_blank"> </a></li>
		                    <li><a class="twitter" href="#" target="_blank"></a></li>
		                    <li><a class="googleplus" href="#" target="_blank"></a></li>
		                    <li><a class="pinterest" href="#" target="_blank"></a></li>
		                    <li><a class="dribbble" href="#" target="_blank"></a></li>
		                    <li><a class="vimeo" href="#" target="_blank"></a></li>
		                </ul>
		 		    </div>
 				<div class="clear"></div>		   
 	   		</div>
 	     </div>
 	  <div class="header_bottom">
 	     <div class="wrap">
			<div class="menu">			
				<ul>
					<li><a href="/">Home</a></li>
			    	<li><a href="pub">Pub</a></li>
			    	<li><a href="ourbeers">Our Beers</a></li>
			    	<li><a href="gallery">Gallery</a></li>			    	
			    	<li><a href="shop">Shop</a></li>
			    	<li><a href="contact">Contact</a></li>
			    	<div class="clear"></div>
			       </ul>	
			    </div>	    
			 </div>
	     </div>
	     
      </body>
 </html>