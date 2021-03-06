 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Laravel – ElasticSearch Demo Project</title>

    <!-- Bootstrap core CSS -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="home/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="home/css/general.css" rel="stylesheet">
    
	
	 <!-- Owl-Carousel -->
    <link href="home/css/custom.css" rel="stylesheet">
	<link href="home/css/owl.carousel.css" rel="stylesheet">
    <link href="home/css/owl.theme.css" rel="stylesheet">
	<link href="home/css/style.css" rel="stylesheet">
	<link href="home/css/animate.css" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="home/css/magnific-popup.css"> 
        
	<!--<link href="css/normalize.min.css" rel="stylesheet"> -->
        <link href="css/main.css" rel="stylesheet">
        
        
       
	<script src="home/js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="home/js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="home/js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="home/js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
        
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Search Inc</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">On-Site & Enterprise Search Demo</h3>
                        <div class="Demo">
          <form action="https://twitter.com/search" method="get">
            <input type="hidden" name="mode" value="users">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="Typeahead-hint" type="text" tabindex="-1" readonly>
                <input class="Typeahead-input" id="demo-input" type="text" style="color:black" name="q" placeholder="Search cars...">
                <img class="Typeahead-spinner" src="img/spinner.gif">
              </div>
              <div class="Typeahead-menu"></div>
            </div>
            <button class="u-hidden" type="submit">blah</button>
          </form>
        </div>
			<!--<ul class="list-inline intro-social-buttons">
				<li><a href="https://twitter.com/galantiandrea" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">Twitter</span></a>
				</li>
				<li id="download" ><a href="#downloadlink" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">Free Download</span></a>
				</li>
			</ul> -->
		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="home/img/icon/circle.png" alt=""> </a>
			</div>
		</div>
    </div>
	
	<!-- NavBar-->
	<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Search Inc</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#whatis">Demo</a></li>
					<li class="menuItem"><a href="#useit">Team</a></li>
					<li class="menuItem"><a href="#screen">About Us</a></li>
					<li class="menuItem"><a href="#credits">Clients</a></li>
					<li class="menuItem"><a href="#contact">Contact Us</a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
	<!-- What is -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Features</h2>
				<p class="lead" style="margin-top:0">A special thanks to ElasticSearch and Laravel.</p>
				
			</div>
			
			<div class="row">
			
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img class="rotate" src="home/img/icon/tweet.svg" alt="Generic placeholder image">
				  <h3>Follow Me</h3>
				  <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>

				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="home/img/icon/picture.svg" alt="Generic placeholder image">
				   <h3>Gallery</h3>
				   <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="home/img/icon/retina.svg" alt="Generic placeholder image">
				   <h3>Retina</h3>
					<p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
				
			<div class="row tworow">
			
				<div class="col-sm-4  wow fadeInDown text-center">
				  <img class="rotate" src="home/img/icon/laptop.svg" alt="Generic placeholder image">
				  <h3>Responsive</h3>
				  <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="home/img/icon/map.svg" alt="Generic placeholder image">
				   <h3>Google</h3>
				   <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="home/img/icon/browser.svg" alt="Generic placeholder image">
				   <h3>Bootstrap</h3>
				 <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
			</div><!-- /.row -->
		</div>
	</div>
	
	<!-- Use it -->
    <div id ="useit" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="home/img/ipad.png" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Full Responsive</h3>
					<div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
						In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
						Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
						uam non erat mirum sapientiae lorem cupido
						patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
					</p>

					 <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
					 <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div class="content-section-b"> 
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
						<a href="home/img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="home/img/iphone.png" alt="">
							</div>
						</a>
						<a href="home/img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="home/img/iphone.png" alt="">
							</div>
						</a>
						<a href="home/img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="home/img/iphone.png" alt="">
							</div>
						</a>
					</div>       
                </div>
				
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Drag Gallery</h3>
					<div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
						In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
						Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
						uam non erat mirum sapientiae lorem cupido
						patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
					</p>

					 <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
					 <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
				</div>  			
			</div>
        </div>
    </div>

    <div class="content-section-a">

        <div class="container">

             <div class="row">
			 
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="home/img/doge.png" alt="">
                </div>
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Font Awesome & Glyphicon</h3>
                    <p class="lead">A special thanks to ElasticSearch and Laravel
					</p>
					
					<ul class="descp lead2">
						<li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
						<li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
						<li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
					</ul>
				</div>           
            </div>
        </div>

    </div>

	<!-- Screenshot -->
	<div id="screen" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Screen App</h2>
				<p class="lead" style="margin-top:0">A special thanks to ElasticSearch and Laravel.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">
				
				<a href="home/img/slide/1.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="home/img/slide/1.png" alt="Owl Image">
					</div>
				</a>
				
               <a href="home/img/slide/2.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="home/img/slide/2.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="home/img/slide/3.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="home/img/slide/3.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="home/img/slide/1.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="home/img/slide/1.png" alt="Owl Image">
					</div>
				</a>
				
               <a href="home/img/slide/2.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="home/img/slide/2.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="home/img/slide/3.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="home/img/slide/3.png" alt="Owl Image">
					</div>
				</a>
              </div>       
          </div>
        </div>


	</div>
	
	<div  class="content-section-c ">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Get Live Updates</h2>
				<p class="lead" style="margin-top:0">A special thanks to ElasticSearch and Laravel.</p>
			 </div>
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Subscribe to our Newsletter</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone">Subscribe to our Newsletter</h2>
										<form>
											<p><label>Your Email Address</label><input type="text"/></p>
											<p><button>Subscribe me</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			</div>>
		</div>
	</div>	
	
	<!-- Credits -->
	<div id="credits" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Credits</h2>
				<p class="lead" style="margin-top:0">A special thanks to ElasticSearch and Laravel.</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-desktop fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Bootstrap </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-picture-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Owl-Carousel </h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		  
		  <div class="row tworow">
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-magic fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Codrops </h3>
							<p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-heart fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Lorem Ipsum</h3>
						<p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		</div>
	</div>
	
	<!-- Banner Download 
	<div id="downloadlink" class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Download Free</h2>
				<p class="lead" style="margin-top:0">Demo</p>
				<p><a class="btn btn-embossed btn-primary view" role="button"></a></p> 
			 </div>
			</div>
		</div>
	</div>-->
	
	<!-- Contact -->
	<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contact Us</h2>
				<p class="lead" style="margin-top:0">A special thanks to ElasticSearch and Laravel.</p>
			</div>
			
			<form role="form" action="" method="post" >
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputName">Your Name</label>
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputEmail">Your Email</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Message</label>
						<div class="input-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
			</form>
			
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Office Location</h3>
					<p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">The Pentagon<br>
					Washington, DC 20301</a><br>
					Phone: XXX-XXX-XXXX<br>
					Fax: XXX-XXX-YYYY</p>
					</address>

					<h3>Social</h3>
					<li class="social"> 
					<a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
					<a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> 
					<a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
					<a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
					</li>
				</div>
			</div>
		</div>
	</div>
	
	
	
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h3 class="footer-title">Follow Us!</h3>
            <p><br/>
              Visita Andrea Galanti.it e vedrai tutte le news riguardanti nuovi Theme!<br/>
              Go to: <a  href="http://andreagalanti.it" target="_blank">andreagalanti.it</a>
            </p>
			
			<!-- LICENSE -->
			<a rel="cc:attributionURL" href="http://www.andreagalanti.it/flatfy"
		   property="dc:title">Search Inc </a> by
		   <a rel="dc:creator" href=""
		   property="cc:attributionName">Vivek K</a>
		   is licensed to the public under 
		   <BR>the <a rel="license"
		   href="http://creativecommons.org/licenses/by-nc/3.0/it/deed.it">Creative
		   Commons Attribution 3.0 License - NOT COMMERCIAL</a>.
		   
	   
          </div> <!-- /col-xs-7 -->

          <div class="col-md-5">
            <div class="footer-banner">
              <h3 class="footer-title">Search Inc</h3>
              <ul>
                <li>12 Column Grid Bootstrap</li>
                <li>Form Contact</li>
                <li>Drag Gallery</li>
                <li>Full Responsive</li>
                <li>Lorem Ipsum</li>
              </ul>
              Go to: <a href="http://andreagalanti.it/flatfy" target="_blank">andreagalanti.it/flatfy</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script id="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">
        <img class="ProfileCard-avatar" src="@{{profile_image_url_https}}">

        <div class="ProfileCard-details">
          <div class="ProfileCard-realName" style="color:black">@{{name}}</div>
          <div class="ProfileCard-screenName">@@{{screen_name}}</div>
          <div class="ProfileCard-description" style="color:black">@{{description}}</div>
        </div>

        <div class="ProfileCard-stats">
          <div class="ProfileCard-stat" style="color:black"><span class="ProfileCard-stat-label">Tweets:</span> @{{statuses_count}}</div>
          <div class="ProfileCard-stat" style="color:black"><span class="ProfileCard-stat-label">Following:</span> @{{friends_count}}</div>
          <div class="ProfileCard-stat" style="color:black"><span class="ProfileCard-stat-label">Followers:</span> @{{followers_count}}</div>
        </div>
      </div>
    </script>

    <script id="empty-template" type="text/x-handlebars-template">
      <div class="EmptyMessage" style="color:black">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
    </script>
 <script src="js/typeahead/handlebars.js"></script>
    <script src="js/typeahead/jquery-1.10.2.min.js"></script>
    <script src="js/typeahead/jquery.xdomainrequest.min.js"></script>
	<script src="js/typeahead/typeahead.bundle.js"></script>
    <script src="js/typeahead/main.js"></script>
    
  <!--<script src="home/js/jquery-1.10.2.js"></script> -->
    <script src="home/js/bootstrap.js"></script>
	<script src="home/js/owl.carousel.js"></script>
	<script src="home/js/script.js"></script>
	<!-- StikyMenu -->
	<script src="home/js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="home/js/jquery.corner.js"></script> 
	<script src="home/js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="home/js/classie.js"></script>
	<script src="home/js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="home/js/jquery.magnific-popup.js"></script> 
</body>

</html>
