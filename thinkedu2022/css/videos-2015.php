<?php ob_start(); ?>
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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').superfish();
});
</script>

<script type="text/javascript" src="js/source/jquery.fancybox-buttons.js"></script> 
<script type="text/javascript" src="js/source/fancybox.js"></script>    
<script type="text/javascript">
	$(document).ready(function() {
	
	$('.fancybox').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		prevEffect : 'fade',
		nextEffect : 'fade',
		closeBtn  : true,
		helpers : {
			title : {
				type : 'inside'
			},
			buttons	: {}
		}
	});
});
</script>

</head>

<body>
    <?php require_once("header.php"); ?>
    
    <section id="two-column">
    	<div class="container">
        	<div class="top-heading-container">
            	<h3>Thinkedu CONCLAVE 2015</h3>
                <h1>VIDEOS</h1>
            </div> <!--End of top-heading-container -->
            <div class="clear"></div>
            <div id="right-col">
                    <h1 class="coming-soon">Coming Soon</h1>
            </div> <!--End of right col -->
            
        </div> <!--End of container -->
    </section>
    <?php require_once("footer.php"); ?>
</body>
</html>