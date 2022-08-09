<!DOCTYPE html>
<html lang="en">
<head>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if lt IE 9]> 
	<script src="js/html5.js"></script>
<![endif]-->
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->
<!--[if lte IE 8]>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<![endif]-->

<title>Think EDU Conclave</title>

<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').superfish();
});
</script>

<script type="text/javascript" language="javascript" src="js/jquery.easing.min.1.3.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.jcontent.0.8.js"></script>
<script type="text/javascript" language="javascript">
	$("document").ready(function(){                 
		$("div#demo7").jContent({orientation: 'horizontal', 
		easing: "easeOutCirc", 
		duration: 500,
		circle: true});							 
	});
</script>	    

</head>

<body>
    <?php require_once("header.php"); ?>
    
    <section id="three-column">
    	<div class="container">
        	<div class="top-heading-container">
            	<h2>a TNIE initiative</h2>
                <h1>thinkedu conclave</h1>
            </div> <!--End of top-heading-container -->
            <div class="clear"></div>
            <div id="col-one">
                <a href="http://www.newindianexpress.com/thinkedu/
" target="_blank"><img src="images/home-right-col-img.png" width="193" height="201" alt="" /></a>
            </div> <!--End of Col one -->
            
            <div id="col-two">
            	<h4>ThinkEdu 2014</h4>
            	<p>Event Xpress organized its first-ever two day national education conclave, ThinkEdu in February 2013 in Chennai. The Conclave saw 64 distinguished speakers, including a former President, four Chief Ministers and four Union ministers along with a host of politicians, bureaucrats, educationists, corporates, historians and thinkers coming together to brainstorm for over 15 hours on Schooling India for Tomorrow.</p><br/>
                <h4>ThinkEdu 2013</h4>
            	<p>Event Xpress organized its first-ever two day national education conclave, ThinkEdu in February 2013 in Chennai. The Conclave saw 64 distinguished speakers, including a former President, four Chief Ministers and four Union ministers along with a host of politicians, bureaucrats, educationists, corporates, historians and thinkers coming together to brainstorm for over 15 hours on Schooling India for Tomorrow.</p><br/>
            </div> <!--End of Col one -->
            
            <div id="col-three">
            	<div><img src="images/about-image-2014.jpg" alt="" /></div>
                <p>Sixty two speakers, fourteen panel discussions and fifteen hours of education diction later</p><br/>
            	<div><img src="images/threecol-img3.jpg" alt="" /></div>
                <p>Sixty two speakers, fourteen panel discussions and fifteen hours of education diction later</p>
                <!--<div><img src="images/threecol-img1.jpg" alt="" /></div>
                <div><img src="images/threecol-img2.jpg" alt="" /></div>
                <div class="top-margin"><img src="images/threecol-img4.jpg" alt="" /></div>
                <div><img src="images/threecol-img5.jpg" alt="" /></div>-->
            </div> <!--End of Col one -->
            
        </div> <!--End of container -->
    </section>
    <?php require_once("footer.php"); ?>
</body>
</html>