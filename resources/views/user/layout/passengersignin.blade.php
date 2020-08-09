<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{ Setting::get('site_title') }}</title>

    <link rel="shortcut icon" type="image/png" href="{{ Setting::get('site_icon') }}">



    <!-- Bootstrap -->

    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">

    <link href="css/bootstrap.css" rel="stylesheet">

	<link href="css/custom.css" rel="stylesheet">  

    <link href="css/hamburgers.css" rel="stylesheet">

    <link href="css/owl.carousel.css" rel="stylesheet">

<link href="css/owl.theme.css" rel="stylesheet">

  </head>

  <body>

    <div class="driversignup">

    

    	<header>

        

        	<div class="container">

        	<div class="row">

                <div class="col-md-2 right-padding">

                    <div class="logo" style="margin-top: 5px;margin-bottom: 5px;">

                        <a href="/"><img src="{{ Setting::get('site_logo', asset('logo-black.png')) }}" height="100%" /></a>

                    </div>

            </div>

                <div class="col-md-5 left-padding hidden-xs">

                    <div class="left-header">

                        <div class="left-header">

                         <!--div class="dropdown">

                          <button class="dropbtn">Ride</button>

                            <div class="dropdown-content">

                                <div class="ride">

                                    <div class="container">

                                        <a href="#">Overview</a>

                                        <a href="#">How it Works</a>

                                        <a href="#">Fare Estimator</a>

                                        <a href="#">Safety</a>

                                    </div>

                                </div>

                                <div class="ride ride1">

                                   <div class="container">

                                        <a href="#">Cities</a>

                                        <a href="#">Airports</a>

                                    </div>

                                </div>

                            </div>

                        </div-->  

                        </div>

                        <div class="left-header drive">

                            <!--div class="dropdown">

                            <button class="dropbtn">Drive</button>

                                <div class="dropdown-content">

                                    <div class="ride">

                                        <div class="container">

                                            <a href="#">  Overview</a>

                                            <a href="#">Requirements</a>

                                            <a href="#">Driver App</a>

                                            <a href="#">Vehicle Solutions</a>

                                        </div>

                                    </div>

                                    <div class="ride">

                                        <div class="container">

                                            <a href="#">Safety</a>

                                            <a href="#">Local Driver Guide</a>



                                        </div>

                                    </div>

                                </div>

                            </div-->  

                        </div>

                    </div>                              

                </div>

            	<div class="col-md-5 help">

                	<div class="right">

                    	<ul class="hidden-xs">

                        <!-- 	<li><a href="#">Help</a></li> -->

                            <li><a href="/PassengerSignin">sign in</a></li>                            

                        </ul>

                        <div class="location">

                        	<figure>

                            	<a href="#"><img src="img/location-hover.png" alt="location" />

                                	<img src="img/location.png" alt="location" class="location-hover" />

                                </a>

                            </figure>

                            

                        </div>

                        <div class="driver-btn">

                        	<a href="{{ url('/provider/register') }}" class="btn btn-default">Become a driver</a>

                        </div>
                    </div>

                </div>

        	</div>

        </header>

		<div class="full-page-bg">
            <div class="log-overlay"></div>
            <div class="full-page-bg-inner">
                <div class="row no-margin">
                    <div class="col-md-6 log-left">
                      
                    </div>
                    <div class="col-md-6 log-right">
                        <div class="login-box-outer">
                        <div class="login-box row no-margin">
                            <div class="col-md-12">
                                <a class="log-blk-btn" href="{{url('register')}}">CREATE NEW ACCOUNT</a>
                                <h3>Sign In</h3>
                            </div>
                            <form  role="form" method="POST" action="{{ url('/login') }}"> 
                            {{ csrf_field() }}                      
                                <div class="col-md-12">
                                     <input id="email" type="email" class="form-control" placeholder="Email Address" style="width: 70%" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" placeholder="Password" style="width: 70%" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                               <!--  <div class="col-md-12">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}><span> Remember Me</span>
                                </div> -->
                               
                                <div class="col-md-12">
                                    <button type="submit" style="width: 70%" class="log-teal-btn">LOGIN</button>
                                </div>
                            </form>

                            <div class="col-md-12">
                                <p class="helper"> <a href="{{ url('/password/reset') }}">Forgot Password</a></p>   
                            </div>
                        </div>


                        <div class="log-copy"><p class="no-margin">{{ Setting::get('site_copyright', '&copy; '.date('Y').' Appoets') }}</p></div></div>
                    </div>
                </div>
            </div>
        </div>

		<footer>

        	<div class="container">

            	<div class="footer-topborder">

            	<div class="row">

                	<div class="col-md-4 col-sm-4">

                    	<div class="footer-topheading">

            	<img src="img/ED_Logo_1.png" width="60%" height="60%" />

            </div>

                    </div>

                    <div class="col-md-4 col-sm-4">

                    	<div class="footer-topbtn">

            			<a href="/PassengerSignin" class="btn btn-default">SIGN UP TO RIDE</a>

            </div>

                    </div>

                    <div class="col-md-4 col-sm-4">

                    	<div class="footer-topbtn border">

            			<a href="{{ url('/provider/register') }}" class="btn btn-default">Become a driver</a>

            </div>

                    </div>

                </div>

                </div>

                <div class="bottom-footer">

                	<div class="row">

                    	<div class="col-md-4">

                        	<div class="location-footer">

                    	<ul>

                        	<li><figure><img src="img/location.png" alt="location"/></figure> <small>Enter your location</small></li>

                            <li>

                            	<div class="language">

                                	<figure><img src="img/if_60_111133.png" alt="location"/></figure> <small>English</small>

                                </div>

                            </li>

                             <li>

                            	<div class="help">

                                	<figure><img src="img/if_help_383127.png" alt="location"/></figure> <small>Help</small>

                                </div>

                            </li>

                        </ul>

                    </div>

                    		<div class="social-media">

                            	<ul> 

                                	<li><a href="#"><img src="img/facebook.png" alt="facebook"/></a></li>

                                    <li><a href="#"><img src="img/google-plus.png" alt="facebook"/></a></li>

                                    <li><a href="#"><img src="img/twitter.png" alt="facebook"/></a></li>

                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4">

                        	<div class="footer-manu">

                    	<ul>

                        <li><a  href="#" >Ride</a></li>

                        <li><a  href="#" >Drive</a></li>

                        <li><a href="#">Cities</a></li>

                        <li><a  href="#"><!-- react-text: 564 -->Fare Estimate<!-- /react-text --></a></li>

                        <li><a href="#"><!-- react-text: 567 -->Food<!-- /react-text --></a></li>

                        <li><a href="#"><!-- react-text: 570 -->Business Travel<!-- /react-text --></a></li>

                        <li ><a href="#"><!-- react-text: 573 -->How it Works<!-- /react-text --></a></li>

                        <li><a href="#"><!-- react-text: 576 -->Airports<!-- /react-text --></a></li>

                        <li><a href="#"><!-- react-text: 579 -->Countries<!-- /react-text --></a></li>

                        <li ><a  href="#" ><!-- react-text: 582 -->Safety<!-- /react-text --></a></li>

                        </ul>

                    </div>

                        </div>

                        <div class="col-md-4">

                        	<div class="menu-right">

                    	<ul>

                        <li><a href="#"><!-- react-text: 587 -->Careers<!-- /react-text --></a></li>

                        <li><a  href="#" >Helping Cities</a></li>

                        <li ><a href="#" ><!-- react-text: 593 -->Our Story<!-- /react-text --></a></li>

                        <li><a href="#" ><!-- react-text: 596 -->Blog<!-- /react-text --></a></li>

                        <li ><a href="#"><!-- react-text: 599 -->Newsroom<!-- /react-text --></a></li>

                        <li ><a href="#"><!-- react-text: 602 -->Media<!-- /react-text --></a></li>

                        <li><a href="#"><!-- react-text: 605 -->Instacab API<!-- /react-text --></a></li>

                        <li ><a href="#"><!-- react-text: 608 -->Gift Cards<!-- /react-text --></a></li>

                        <li ><a href="#"><!-- react-text: 611 -->Instacab vs Driving Jobs<!-- /react-text --></a></li>

                        </ul>

                    </div>

                        </div>

                    </div>

                </div>

                <div class="citesandcountries">

                	<div class="footer-left">

                    	<ul>

                        	<li><small>Top Cities</small></li>

                            <li><small>Top Countries</small></li>

                        </ul>

                    </div>

                    <div class="footer-right">

                    	<div class="top-cities">

                        	<ul>

                            	<li><a href="#">San Francisco</a></li>

                                <li><a href="#">London</a></li>

                                <li><a href="#">Los Angeles</a></li>

                                <li><a href="#">Washington D.C.</a></li>

                                <li><a href="#">Mexico City</a></li>

                                <li><a href="#">Sao Paulo</a></li>

                            </ul>

                        </div>

                        <div class="top-cities countries">

                        	<ul> 

                            	<li><a href="#">USA</a></li>

                                <li><a href="#">France</a></li>

                                <li><a href="#">India</a></li>

                                <li><a href="#">Spain</a></li>

                                <li><a href="#">Mexico</a></li>

                                <li><a href="#">Russia</a></li>

                            </ul>

                        </div>

                    </div>                    

                </div>

            </div>

        </footer>

    </div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/owl.carousel.js"></script>

    <script>

		$("#left_menu_open").click(function(){

    		$("#left_menu").addClass("open");

		});

		$(".close").click(function(){

    		$("#left_menu").removeClass("open");

		});

		

		$(".hamburger").click(function(){

			$(".side_menu").toggleClass("open");

		}); 

	</script> 

    <script>

    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};



    var hamburgers = document.querySelectorAll(".hamburger");

    if (hamburgers.length > 0) {

      forEach(hamburgers, function(hamburger) {

        hamburger.addEventListener("click", function() {

          this.classList.toggle("is-active");

        }, false);

      });

    }

  </script> 

   

  <script>

    $(document).ready(function() {

      $("#owl-demo2").owlCarousel({

        autoPlay: 3000,

        items :3,

		autoPlay:true,

		navigation:true,

		navigationText:true,

		pagination:true,

		itemsDesktop : [1350,3],

        itemsDesktop : [1199,1],

        itemsDesktopSmall : [991,1],

		itemsTablet: [767,1], 

        itemsMobile : [560,1] 

      });



    });    

</script>   

 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

        

        <script type="text/javascript">

            // When the window has finished loading create our google map below

            google.maps.event.addDomListener(window, 'load', init);

        

            function init() {

                // Basic options for a simple Google Map

                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

                var mapOptions = {

                    // How zoomed in you want the map to start at (always required)

                    zoom: 11,



                    // The latitude and longitude to center the map (always required)

                    center: new google.maps.LatLng(40.6700, -73.9400), // New York



                    // How you would like to style the map. 

                    // This is where you would paste any style found on Snazzy Maps.

                    styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#e7ecf0"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#8ed863"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-70}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":-60}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#8abdec"}]},{"featureType":"water","elementType":"geometry.stroke","stylers":[{"color":"#9cbbf0"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"visibility":"off"}]}]

                };



                // Get the HTML DOM element that will contain your map 

                // We are using a div with id="map" seen below in the <body>

                var mapElement = document.getElementById('map');



                // Create the Google Map using our element and options defined above

                var map = new google.maps.Map(mapElement, mapOptions);



                // Let's also add a marker while we're at it

                var marker = new google.maps.Marker({

                    position: new google.maps.LatLng(40.6700, -73.9400),

                    map: map,

                    title: 'Snazzy!'

                });

            }

        </script>







  </body>

</html>