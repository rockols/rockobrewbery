@extends('index.master')

@section('content')
        	
	        		<div class="section group">
				<div class="col_1_of_3 span_1_of_3">
					<h2><span>welcome</span></h2>
					 <h2>To Our Brewery</h2>
					 <h3>Lorem ipsum dolor sit amet</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					 <div class="menu_timmings">
					 	 <ul>
					 	 	<li>
								<div class="txt1">Main Menu</div>
								<div class="txt2 color1">12am - 12pm</div>
							 </li>
							 <li>
								<div class="txt1">Beer Festival</div>
								<div class="txt2 color2">9am - 8pm</div>
							 </li>
							 <li>
								<div class="txt1">Live Music</div>
								<div class="txt2 color3">7pm - 12pm</div>
							 </li>
							 <li>
								<div class="txt1">Disco Dance</div>
								<div class="txt2 color4">8pm - 2am</div>
							 </li>
					 	 </ul>
					 </div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<h2><span>Latest Events</span></h2>
					  <div class="event-grid">
					  	<div class="event_img">
						  <img src="{!! asset('assets/images/event1.jpg') !!}" title="post1" alt="">
					    </div>
						<div class="event_desc">
						 <h4><span>NEQUE LIGULA</span></h4>
						  <h4>Aug 28Th, 2013</h4>
						<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
					    </div>
							<div class="clear"> </div>
					  </div>
					  <div class="event-grid">
					  	<div class="event_img">
						  <img src="{!! asset('assets/images/event2.jpg') !!}" title="post1" alt="">
					    </div>
						<div class="event_desc">
						<h4><span>DOLORE IPSUM</span></h4>
						  <h4>Aug 2ND, 2013</h4>
						<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
					    </div>
							<div class="clear"> </div>
					  </div>
					  <div class="event-grid">
					  	<div class="event_img">
						  <img src="{!! asset('assets/images/event3.jpg') !!}" title="post1" alt="">
					    </div>
						<div class="event_desc">
							 <h4><span>NEQUE LIGULA</span></h4>
						  <h4>july 28Th, 2013</h4>
						<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
					    </div>
							<div class="clear"> </div>
					  </div>
					  <div class="view-all"><a href="#">ViewAll</a></div>
				  </div>
			   </div>

@stop