<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tribe - restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="shortcut icon" href="/images/logo.png">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <div id="logo">
				        <a href="/"><img src="/images/tribe white.png" alt="" title="tribe-restaurant" /></a>
				      </div>	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ url('/shop/menu')}}" class="nav-link">Menu</a></li>
	          <li class="nav-item active"><a href="{{ url('/pages/reservation')}}" class="nav-link">Reservation</a></li>
	          <li class="nav-item"><a href="{{ url('/pages/about')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{ url('/pages/contact')}}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ url('/shop/cart')}}" class="nav-link"><span class="icon-shopping_cart" style="color:sandybrown;"></span> Cart 	<span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span></a></li>
						<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="icon-user" style="color:sandybrown;"></span> User Account
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											@if(Auth::check())
											<a class="dropdown-item" href="/home"><span class="icon-user" style="color:sandybrown;"></span> {{ Auth::user()->name }}</a>
											<div class="dropdown-divider"></div>											
											
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="icon-key" style="color:sandybrown;"></span>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                      	@else
											<a class="dropdown-item" href="/login"><span class="icon-person" style="color:sandybrown;"></span> Login</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="/register"><span class="icon-key" style="color:sandybrown;"></span> Signup</a>
											
											@endif
										</div>
      		 </li>
	        </ul> 
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <div class="overlay" style="margin-top:50px;"></div>
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Make Reservation</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      </div>
 

    <section class="ftco-section contact-section" style="margin-top:-150px;">
      <div class="container mt-5">
        <div class="row block-9">
				
              <div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(/images/about.jpg);">
              </div>              
        
		
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="#" class="contact-form">
            	<div class="row">
            		<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Your Name">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Your Email">
	                </div>
	                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <input type="date" class="form-control" placeholder="Date">
                </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="time" class="form-control" placeholder="Time">
                  </div>
                </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="Number of persons">
                </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                  </div>
               </div>
            </div>
              <div class="form-group" style="margin-top:-50px;">
                <input type="submit" value="Make Reservation" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Healthy Foods</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Original Recipes</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2">We are Social</h2>
              <div class="block-21 mb-4 d-flex">
								<ul class="ftco-footer-social list-unstyled ">
									<li class=""><a href="#"><span class="icon-twitter"></span></a></li>
									<li class=""><a href="#"><span class="icon-facebook"></span></a></li>
									<li class=""><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
               <!-- <a class="blog-img mr-4" style="background-image: url(/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div>
					</div>
					<div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">No. 1b, Prince Adelowo Adedeji Street, Lekki Phase I Off Farm City by Admiralty Way.</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">(+234) 816-024-9096</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">info@triberestaurant.com</span></li>
	              </ul>
	            </div>
            </div>
					</div>
					
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Menu</a></li>
                <li><a href="#" class="py-2 d-block">Order</a></li>
                <li><a href="#" class="py-2 d-block">Events/services</a></li>
                <li><a href="#" class="py-2 d-block">Reservation</a></li>
              </ul>
            </div>
          </div>
         
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tribe Restaurant. All rights reserved |  made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://imagine.com.ng" target="_blank">Imagine</a>  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/js/google-map.js"></script>
  <script src="/js/main.js"></script>
    
  </body>
</html>