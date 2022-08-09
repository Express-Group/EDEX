<?php
define('VERSION', '4.0');
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<title>Start-Up Stars Awards</title>

    	<!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- stylesheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css?version=<?php echo VERSION; ?>">
        <link rel="stylesheet" href="css/font-awesome.min.css?version=<?php echo VERSION; ?>">
        <link rel="stylesheet" href="css/owl.carousel.css?version=<?php echo VERSION; ?>">
		<link rel="stylesheet" href="css/owl.theme.min.css?version=<?php echo VERSION; ?>">
        <link rel="stylesheet" href="css/animate.css?version=<?php echo VERSION; ?>">
		<link rel="stylesheet" href="css/main.css?version=<?php echo VERSION; ?>">
		<link rel="shortcut icon" href="https://images.edexlive.com/images/FrontEnd/images/favicon.ico" type="image/x-icon">
		
		<!-- google font -->
        <link href='https://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Gravitas+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-92816116-1', 'auto'); 
			ga('send', 'pageview');
			setTimeout("ga('send','event','adjusted bounce rate','page visit 30 seconds or more')",30000);
		</script><!-- Begin comScore Tag -->
	<script>
	  var _comscore = _comscore || [];
	  _comscore.push({ c1: "2", c2: "16833363" });
	  (function() {
		var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
		s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
		el.parentNode.insertBefore(s, el);
	  })();
	</script>
	<noscript>
	  <img src="https://sb.scorecardresearch.com/p?c1=2&c2=16833363&cv=2.0&cj=1" />
	</noscript>
	<!-- End comScore Tag -->
		<style>	
			#curtain1
			{
			 top:0px;
			 position:absolute;
			 left:0px;
			 height:100%;
			 z-index:99999;
			 width:50%;
			}
			#curtain2
			{
			 top:0px;
			 position:absolute;
			 height:100%;
			 right:0px;
			 z-index:99999;
			 width:50%;
			}
			.mob-div{display: none;}
			@media only screen and (max-width: 768px){
				.mob-div{display: block;}
				.mob-div1{display: none;}
				#categories p{font-size: 13px;}
			}
			@media only screen and (min-width: 1024px) and (max-width: 1366px){
				.speakers-inner img { width: 260px;}
			}
		</style>
    </head>
    <body id="root">
	<img src="img/curtain1.jpg" id="curtain1">
						<img src="img/curtain2.jpg" id="curtain2">
        <div class="content-block" id="header">
            <div id="overlay">
                <header id="site-header" class="clearfix">
                    <div class="pull-left">
                        <div class="row">
							<ul class="social-buttons" id="demo2">
							  <li>
								<a href="https://twitter.com/xpress_edex" class="brandico-twitter-bird" target="_blank"><i class="fa fa-twitter"></i></a>
							  </li>
							  <li>
								<a href="https://www.facebook.com/edexnie/" class="brandico-facebook" target="_blank"><i class="fa fa-facebook"></i></a>
							  </li>
							  <li>
								<a href="https://www.instagram.com/edexgoeslive/" class="brandico-instagram" target="_blank"><i class="fa fa-instagram"></i></a>
							  <li>
								<a href="https://www.linkedin.com/in/edex-live-9a0036138?trk=nav_responsive_tab_profile_pic" class="brandico-linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
							  </li>
							</ul>
                        </div>
                    </div>
                    <div class="pull-right">
                        <nav class="navbar site-nav" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#header"><i class="fa fa-home"></i> <span>Home</span></a></li>
                                    <li><a href="#portfolio"> Speakers</a></li>
                                    <li><a href="#categories"> Categories</a></li>
                                    <li><a href="#jury">Jury </a></li>
                                    <li><a href="#services">Nominations </a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </header>
                <div class="middle  clearfix">
                    <div class="container-fluid" style="margin-top:1%;">
						<div style="width: 100%;float: left;margin: 0 auto;padding: 3% 0 0%;">
							<img style="margin: 0 auto;" src="img/logo4.png" class="img-responsive">
						</div> 
						
					</div>
					<div class="container">					
						<p class="main-text">FICCI TNSC Technology Panel and The New Indian Express jointly are organising the first edition of its premier event — FICCI-TNIE Start-up Stars. This is intended to be a leading platform for all entrepreneurs to showcase their innovative problem-solving through their powerful ideas and enable a creative and meaningful change in the various domain areas. FICCI-TNIE’s Start-up Stars Awards Summit promises to be a congregation of leadership from Government, Industry and Innovation ecosystems. The awards are given to start-ups for excellence in cutting-edge technology and innovation, wealth creation, and employment generation.</p>			
                    </div>
                </div>
            </div>
        </div>
        <div class="content-block text-center" id="portfolio" style="background: #eee;border-top: 4px solid #f06422;padding: 5% 0;">
			<div class="container">
				<header class="block-heading cleafix">
					<h1><span style="">POWER-PACKED SPEAKERS</span></h1>
				</header>
				<div class="row">
					<div class="col-md-4">
						<div class="speakers-inner">
							<img src="img/speakers/1.png">
							<h4>Thiru. Mano Thangaraj</h4>
							<p>Hon. Minister of IT. Govt of Tamil Nadu</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="speakers-inner">
							<img src="img/speakers/2.png">
							<h4>Dr. Neeraj Mittal</h4>
							<p>Principal Secretary, IT Govt of Tamil Nadu</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="speakers-inner">
							<img src="img/speakers/3.png">
							<h4>Dr. G.S.K Velu</h4>
							<p>Chairman, FICCI, Tamil Nadu </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="speakers-inner">
							<img src="img/speakers/4.png">
							<h4>Dr. Rajaram Venkataraman</h4>
							<p>Convener and Head, FICCI TNSC Technology Panel</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="speakers-inner">
							<img src="img/speakers/5.png">
							<h4>Mr. Shankar</h4>
							<p>Co-founder, CAMS, Former President, TIE Chennai</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="speakers-inner">
							<img src="img/speakers/6.png">
							<h4>Dr. C. Velan</h4>
							<p>Center Head, Chennai City Operations, CapitaLand</p>
						</div>
					</div>
				</div>
			</div>
        </div>  <!-- content-block -->
		
		<div class="content-block text-center" id="categories" style="background: #fff;border-top: 4px solid #f06422;padding: 5% 0;">
			<div class="container">
				<header class="block-heading cleafix">
					<h1 class="sponsor-title"><span style="background: #3b82b4;">AWARD CATEGORIES</span></h1>
				</header>
				<div class="row">
					<div class="col-md-2 col-md-offset-1 col-xs-6 col-sm-6">
						<img src="img/categories/1.gif" style="width:100%;">
						<p>Start-up of the Year 2021</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6">
						<img src="img/categories/2.gif" style="width:100%;">
						<p>SaaS Start-up of the Year</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6">
						<img src="img/categories/3.gif" style="width:100%;">
						<p>Best E-Commerce Platform</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6">
						<img src="img/categories/4.gif" style="width:100%;">
						<p>Most Innovative Start-up</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6">
						<img src="img/categories/5.gif" style="width:100%;">
						<p>Start-up with Deep Social Impact</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6 mob-div">
						<img src="img/categories/6.gif" style="width:100%;">
						<p>FinTech Start-up of the Year</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-xs-6 col-sm-6 col-md-offset-1 mob-div1">
						<img src="img/categories/6.gif" style="width:100%;">
						<p>FinTech Start-up of the Year</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6">
						<img src="img/categories/7.gif" style="width:100%;">
						<p>Agri Start-up of the Year</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6">
						<img src="img/categories/8.gif" style="width:100%;">
						<p>Energy Start-up of the Year</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6">
						<img src="img/categories/9.gif" style="width:100%;">
						<p>Promising Start-ups of the Year</p>
					</div>
					<div class="col-md-2 col-xs-6 col-sm-6">
						<img src="img/categories/10.gif" style="width:100%;">
						<p>Aspiring Start-ups 2021</p>
					</div>
				</div>
			</div>
        </div>  <!-- content-block -->
		
		<div class="content-block text-center" id="jury" style="background: #ed1c24;padding: 5% 0;">
			<div class="container">
				<header class="block-heading cleafix">
					<h1 class="sponsor-title"><span style="background: #fff;color:#ed1c24">MEET OUR STAR-STUDDED JURY</span></h1>
					<p class="main-text1">The awards followed a systematic and rigorous selection process. The entries received were thoroughly scrutinised based on a defined evaluation matrix to arrive at a shortlist of outstanding contributors/achievers. These shortlisted applications will be evaluated by an esteemed jury and the winners were decided based on their assessment. The winners will be felicitated on December 29.</p>
				</header>
				<div class="row">
					<div class="col-md-4">
						<img src="img/jury/4.png" style="width:100%;background:#fff;border-radius:5px;">
					</div>
					<div class="col-md-4">
						<img src="img/jury/5.png" style="width:100%;background:#fff;border-radius:5px;">
					</div>
					<div class="col-md-4">
						<img src="img/jury/6.png" style="width:100%;background:#fff;border-radius:5px;">
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-4">
						<img src="img/jury/1.png" style="width:100%;background:#fff;border-radius:5px;">
					</div>
					<div class="col-md-4">
						<img src="img/jury/3.png" style="width:100%;background:#fff;border-radius:5px;">
					</div>
					<div class="col-md-4">
						<img src="img/jury/2.png" style="width:100%;background:#fff;border-radius:5px;">
					</div>
					
				</div>
			</div>
        </div>  <!-- content-block -->
        <div class="content-block " id="services">
            <div class="overlay-2 " style="color:#fff">
						<div class="container">
							<header class="block-heading cleafix">
								<h1 class="sponsor-title"><span style="background: rgb(50 81 121);color: #fff;">NOMINATIONS FOR AWARDS</span></h1>
								<h3 style="color: rgb(50 81 121);padding-left: 2rem;font-weight: 700;">Why are we doing this for start-ups? </h3>
								<ul class="main-text2">
									<li style="padding-bottom: 6px;">Recognise and Celebrate Innovation and Job Creation by Start-ups </li>
									<li style="padding-bottom: 6px;">Connect Start-ups with Corporates, Govt and Industry Forums</li>
									<li style="padding-bottom: 6px;">Exhibition platform to showcase their individual start-up potential and grow their business</li>
									<li style="padding-bottom: 6px;">Inspire budding start-ups to interact, get mentorship, access to incubation access to funding, get inspired by successful start-ups, and so on</li>
									<li style="padding-bottom: 6px;">Spot the ones with huge potential and impact creation across industries</li>
									<li style="padding-bottom: 6px;">Bring awareness on IP filing, GTM Strategies, Product/Service Innovation.</li>
								</ul>
							</header>
						  <div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							  <li data-target="#myCarousel" data-slide-to="2"></li>
							  <li data-target="#myCarousel" data-slide-to="3"></li>
							  <li data-target="#myCarousel" data-slide-to="4"></li>
							  <li data-target="#myCarousel" data-slide-to="5"></li>
							  <li data-target="#myCarousel" data-slide-to="6"></li>
							  <li data-target="#myCarousel" data-slide-to="7"></li>
							  <li data-target="#myCarousel" data-slide-to="8"></li>
							  <li data-target="#myCarousel" data-slide-to="9"></li>
							  <li data-target="#myCarousel" data-slide-to="10"></li>
							  <li data-target="#myCarousel" data-slide-to="11"></li>
							  <li data-target="#myCarousel" data-slide-to="12"></li>
							  <li data-target="#myCarousel" data-slide-to="13"></li>
							  <li data-target="#myCarousel" data-slide-to="14"></li>
							  <li data-target="#myCarousel" data-slide-to="15"></li>
							  <li data-target="#myCarousel" data-slide-to="16"></li>
							  <li data-target="#myCarousel" data-slide-to="17"></li>
							  <li data-target="#myCarousel" data-slide-to="18"></li>
							  <li data-target="#myCarousel" data-slide-to="19"></li>
							  <li data-target="#myCarousel" data-slide-to="20"></li>
							  <li data-target="#myCarousel" data-slide-to="21"></li>
							  <li data-target="#myCarousel" data-slide-to="22"></li>
							  <li data-target="#myCarousel" data-slide-to="23"></li>
							  <li data-target="#myCarousel" data-slide-to="24"></li>
							  <li data-target="#myCarousel" data-slide-to="25"></li>
							  <li data-target="#myCarousel" data-slide-to="26"></li>
							  <li data-target="#myCarousel" data-slide-to="27"></li>
							  <li data-target="#myCarousel" data-slide-to="28"></li>
							  <li data-target="#myCarousel" data-slide-to="29"></li>
							  <li data-target="#myCarousel" data-slide-to="30"></li>

							  
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
							  <div class="item active"><img src="img/nominations/1.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/2.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/3.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/4.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/5.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/6.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/7.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/8.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/9.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/10.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/11.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/12.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/13.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/14.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/15.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/16.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/17.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/18.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/19.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/20.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/21.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/22.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/23.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/24.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/25.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/26.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/27.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/28.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/29.jpg" alt="" style="width:100%;"></div>
							  <div class="item"><img src="img/nominations/30.jpg" alt="" style="width:100%;"></div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>
						</div>
                    </div>   
        </div>   <!-- content-block -->
		
		<div class="content-block" id="sponsors" style="background: #eee;">
            <div class="block-content">
                <div class="container pro" style="color:#fff; padding-top: 5%; padding-bottom: 5%;">
                    <div class="row">
                       <div class="col-md-12">
							<h1 class="sponsor-title"><span style="background: #1f61c1;">SPONSORS</span></h1> 
                        </div>
						<div class="col-md-12">
							<div class="row sponsor-slider">
								<div class="col-md-3"><img src="img/sponsors/1.png" style="width:100%;background:#fff;"></div>
								<div class="col-md-3"><img src="img/sponsors/2.png" style="width:100%;background:#fff;"></div>
								<div class="col-md-3"><img src="img/sponsors/3.png" style="width:100%;background:#fff;"></div>
								<div class="col-md-3"><img src="img/sponsors/4.png" style="width:100%;background:#fff;"></div>
								<div class="col-md-3"><img src="img/sponsors/5.png" style="width:100%;background:#fff;"></div>
								<div class="col-md-3"><img src="img/sponsors/6.png" style="width:100%;background:#fff;"></div>
								<div class="col-md-3"><img src="img/sponsors/7.png" style="width:100%;background:#fff;"></div>
							</div>
                        </div>
                    </div>	<!-- row -->
                </div>	<!-- container -->
            </div>	<!-- block-content -->
        </div>	<!-- content-block -->
        

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">Copyright - edexlive.com <?php echo date('Y');?></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="designed-by">Designed By ENPL</div>
                    </div>
                </div>
            </div>
        </footer>	<!-- site-footer -->

    
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.actual.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.isonscreen.js"></script>
        <script src="js/main.js"></script>
		<script type="text/javascript" src="slick/slick.js"></script>
		<script type="text/javascript" src="stars/js/jquery-stars.js"></script>
		<script type="text/javascript" src="https://github.com/crashmax-dev/fireworks-js.git"></script>
        <script>
        	$(document).ready(function(){
  				$(document).ready(function(){
					$('.sponsor-slider').slick({
						slidesToShow: 4,
						slidesToScroll: 3,
						dots: true,
						responsive: [
							{
							  breakpoint: 768,
							  settings: {
								arrows: false,
								slidesToShow: 1,
								slidesToScroll: 1
							  }
							}
						 ]
					});
  			$('a[data-slide="prev"]').click(function() {
			  $('#myCarousel').carousel('prev');
			});

			$('a[data-slide="next"]').click(function() {
			  $('#myCarousel').carousel('next');
			});
			});
			

			$('.navbar-collapse a').click(function (e) {
		  
			$('.navbar-collapse').collapse('toggle');
			});
			
			$('body').jstars({
				image_path: 'stars/images', // folder with magic image
				style: 'red',       // optional, color, default: white
				frequency: 18         // optional, from 1 to 19
			});
			$('#jury').jstars({
				image_path: 'stars/images', // folder with magic image
				style: 'yellow',       // optional, color, default: white
				frequency: 18         // optional, from 1 to 19
			});
				$("#curtain1").animate({width:0},4000);
				$("#curtain2").animate({width:0},4000);
			});
        </script>

	</body>
</html>
