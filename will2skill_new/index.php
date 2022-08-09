<?php
define('VERSION', '1.2');
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<title>will2skill</title>

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
		<link rel="shortcut icon" href="http://images.edexlive.com/images/FrontEnd/images/favicon.ico" type="image/x-icon">
		
		<!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Gravitas+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-migrate-1.2.1.js"></script>
		<script type="text/javascript" src="js/jquery.carousel.js"></script>
		<script>
		$(function(){
			$('#my-carousel-3').carousel({
				itemsPerPage: 2,
				itemsPerTransition: 3,
				easing: 'linear',
				noOfRows: 6
			});
		});
		</script>
		<style>
		.carousel ul{
			position: absolute;
			overflow: hidden;
			margin: 0;
			list-style: none;
			padding:0;
		}
		.carousel ul li{
			float: left;
			position: relative;
			margin-right: 7px;
			margin-bottom: 5px;
		}
		.carousel ul li img{
			border: 6px solid #fff;
			border-radius: 4px;
		}
		#right-col{width: 960px; margin: 0 auto;}
		.carousel .mask {
			position: relative;
			overflow: hidden;
		}
		#my-carousel-3 .mask {
			width: 967px;
			padding-top: 20px;
		}
		#right-col .top-arrows {
			position: relative;
			top: -10px;
		}
		#right-col .next {
			width: 9px;
			height: 16px;
			margin-left: 10px;
			display: block;
			text-indent: -999999px;
			background: url(http://www.eventxpress.com/thinkedu2019/images/carausol-arrow.png) no-repeat -21px 0;
		}
		#right-col .prev {
			width: 9px;
			height: 16px;
			border-right: 1px solid #6599FF;
			padding-right: 10px;
			display: block;
			text-indent: -999999px;
			background: url(http://www.eventxpress.com/thinkedu2019/images/carausol-arrow.png) no-repeat 0 0;
		}
		</style>
    </head>
    <body>
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
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#header"><i class="fa fa-home"></i> <span>Home</span></a></li>
                                    <li><a href="#portfolio"> Who can apply?</a></li>
                                    <li><a href="#services"> Apply now</a></li>
                                    <li><a href="#testimonials">About 40 under 40 </a></li>
                                </ul>
                            </div>  <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </header>	<!-- site-header -->
                
                <div class="middle  clearfix">
                    <!--<div class="container">-->
                    <div class="container-fluid" style="margin-top:1%;">
						<div style="width: 100%;float: left;margin: 0 auto;">
						<img style="margin: 0 auto;" src="img/Asset4.png" class="img-responsive">
						</div>                  
                    </div>  <!-- container -->
                </div>  <!-- middle -->
                
                <!--div class="bottom text-center">
                    <a href="#portfolio"><i class="fa fa-angle-down fa-3x pulse"></i></a>
                </div-->
            </div>  <!-- overlay-1 -->
        </div>  <!-- content-block -->

        <div class="content-block text-center" id="portfolio">
		<div id="numbers" class="parallax">
			<div class="overlay">
            <header class="block-heading cleafix">
                <h1><span style="border: 2px solid #fff;border-radius:5px;padding:1%;">Who can apply?</span></h1>
                <!-- <p>Take a look at some of my recent products</p> -->
            </header>
			<p class="tagline">Stop. Are you the start-up icon we have been looking for?</p>
			<div class="skills">
							<h5 class="pro-summary"><p>These are the criteria to apply for the Edex 40 under 40 Awards</p></h5>
							
							<ul>
							<li>Founder(s) must be below the age of 40 as on January 1, 2018</li>

							<li>The company should not be older than 7 years since the date of establishment</li>

							<li>The start-up's annual turnover not to be in excess of 25 Cr INR in any of the preceding accounted years</li>
			</div>  <!-- skills -->
			</div>
			</div>
        </div>  <!-- content-block -->

        <div class="content-block " id="services">
            <div class="overlay-2 " style="color:#fff">
                        <header class="block-heading cleafix text-center">
                            <h1><span class="pro_headline">So what exactly do we need from you?</span></h1>
                            <p>- Your company's profile. Your ups. Your downs. Your highs and your lows. We want to know everything that you have to tell</p>
							<p>- Your founder(s) profile. This will be vital in deciding how they can inspire an entire generation </p>
                        </header>
                        <div class="block-content">
                            <div class="container pro">
                                <div class="row">
                                    <div class="col-md-12">
										<div class="row ">
											<div class="col-md-12">
											<h4 class="pro-stat ">Hello, I have an awesome start-up. How can I apply and tell the world that?</h4>
											<p>Send across all the information to edexlive@gmail.com</p>
											<p>Don't forget to leave your contact details. If you've been shortlisted, we will write back to you.</p>
											</div>
											<div class="col-md-12">
											<h4 class="pro-stat">We gonna judge you. Start-Up Scoring pattern:</h4>
											<p>Based on the information provided by the start-ups and their founders, you will be graded on the following factors:</p>
											<p><span style="color: #f1ec28; font-weight:bold;">Social impact / Innovation and research / Youth appeal / Use of tech/AI / Growth story </span></p>
										</div>

									</div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="container">
							<h2 class="text-center"><span style="font-size: 29px;margin-top: 10px;color: #fff;font-family: 'Oswald', cursive;border-bottom: 3px solid #f1ec28;"> 40 Under 40 </span></h2>
							<div id="right-col"><div id="my-carousel-3" class="carousel module">
								<ul>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Banwarilal-Purohit.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Pranab-Mukherjee.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Kiran-Bedi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Vinay-Sahasrabuddhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/varun-gandhi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Bibek-Debroy.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Amitabh-Kant.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Mohandas-Pai.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Sahasrabudhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Srinivasan.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Banwarilal-Purohit.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Pranab-Mukherjee.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Kiran-Bedi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Vinay-Sahasrabuddhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/varun-gandhi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Bibek-Debroy.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Amitabh-Kant.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Mohandas-Pai.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Sahasrabudhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Srinivasan.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Banwarilal-Purohit.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Pranab-Mukherjee.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Kiran-Bedi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Vinay-Sahasrabuddhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/varun-gandhi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Bibek-Debroy.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Amitabh-Kant.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Mohandas-Pai.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Sahasrabudhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Srinivasan.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Banwarilal-Purohit.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Pranab-Mukherjee.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Kiran-Bedi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Vinay-Sahasrabuddhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/varun-gandhi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Bibek-Debroy.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Amitabh-Kant.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Mohandas-Pai.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Sahasrabudhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Srinivasan.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Banwarilal-Purohit.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Pranab-Mukherjee.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Kiran-Bedi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Vinay-Sahasrabuddhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/varun-gandhi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Bibek-Debroy.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Amitabh-Kant.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Mohandas-Pai.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Sahasrabudhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Srinivasan.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Banwarilal-Purohit.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Pranab-Mukherjee.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Kiran-Bedi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Vinay-Sahasrabuddhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/varun-gandhi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Bibek-Debroy.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Amitabh-Kant.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Mohandas-Pai.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Sahasrabudhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Srinivasan.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Banwarilal-Purohit.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Pranab-Mukherjee.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Kiran-Bedi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Vinay-Sahasrabuddhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/varun-gandhi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Bibek-Debroy.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Amitabh-Kant.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Mohandas-Pai.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Sahasrabudhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Srinivasan.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Banwarilal-Purohit.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Pranab-Mukherjee.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Kiran-Bedi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Vinay-Sahasrabuddhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/varun-gandhi.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Bibek-Debroy.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Amitabh-Kant.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Mohandas-Pai.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Sahasrabudhe.jpg" width="120" height="130" alt="" /></li>
									<li><img src="http://www.eventxpress.com/thinkedu2019/data/images/Anil-Srinivasan.jpg" width="120" height="130" alt="" /></li>
								</ul>
							</div></div>
						</div>
                    </div>   
        </div>   <!-- content-block -->
       
            

        <div class="content-block" id="testimonials">
            <header class="block-heading cleafix text-center">
                <h1><span class="pro_headline">That's cool. What comes after that?</span></h1>
            </header>
            <div class="block-content">
                <div class="container pro" style="color:#fff">
                    <div class="row">
                       <div class="col-md-12">
                            <h4 class="pro-stat">Utopia! Well, almost. </h4>
								<p>If chosen, you will be featured in the anniversary edition of Edex, the careers and youth supplement of The New Indian Express, and this will be widely circulated across our entire circulation network. It's a rock-solid 72 page edition that you'll love being a part of. Trust us.</p>
							    <p>We will also have a Start-Up summit where the 40 Under 40 will be celebrated and awarded. Plenty of big names, some great networking and, did we mention, an amazing experience. You can't ask for more. </p>
										
                        </div>
						<div class="col-md-12">
                            <h4 class="pro-stat">What's the event going to be like?</h4>
								<p><span style="color: #f1ec28; font-weight:bold;">Tick Talk: </span>Inspired in 600 seconds: 5 Entrepreneurs will be invited to showcase their inspiring ideas and innovations within 10 minutes. This will be in a TEDx style format and will open the floor for robust interaction.</p>
							    <p><span style="color: #f1ec28; font-weight:bold;">Keynote address and Town Hall: </span>Top officials from the Ministry for Skill Development will be invited to detail their vision/achievements for 20 minutes and then field questions/discussion for another 20-30 minutes, in the same format as Barack Obama's Town Hall in New Delhi. Entrepreneurs, academics and students will be allowed to ask questions during this time. </p>
								<p><span style="color: #f1ec28; font-weight:bold;">Award ceremony: </span>40 entrepreneurs under the age of 40 will be feted during the event with brief descriptions of their achievements and why they deserve to be there. Last year's event had Supreme Court Judge Justice J Chelameswar as the chief guest and was well attended in Chennai. </p>
										
                        </div>
                    </div>	<!-- row -->
                </div>	<!-- container -->
            </div>	<!-- block-content -->
        </div>	<!-- content-block -->

        

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">Copyright - edexlive.com 2018</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="designed-by">Designed By ENPL</div>
                    </div>
                </div>
            </div>
        </footer>	<!-- site-footer -->

    
       
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.actual.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.isonscreen.js"></script>
        <script src="js/main.js"></script>

        <script>
        	$(document).ready(function(){
  				$(document).ready(function(){
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

			});
        </script>

	</body>
</html>
