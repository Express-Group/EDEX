<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|PT+Sans+Narrow" rel="stylesheet">
<link rel="shortcut icon" href="http://images.edexlive.com/images/FrontEnd/images/favicon.ico" type="image/x-icon" />
</head>
<body id="top">
<?php include('header.php'); ?>
<div id="dynamictab" class="wrapper bgded edex-bg hoc ">
  <div class="split clear">
    <section style="width:100%;background-color:transparent;"> 
      <div style="margin-top:10px;width:50%;">
	   <h6 class="heading"><span style="font-size:25px;">Contact Us</span></h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-phone"></i> +91-44-23457638</li>
        <li><i class="fa fa-envelope-o"></i> edexlive@gmail.com</li>
      </ul>
	  <h3>Chennai Region:</h3>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-phone"></i> Rajesh: +919382782827</li>
      </ul>
	  <h3>Coimbatore region:</h3>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-phone"></i> Somasundaram: +919442504160</li>
      </ul>
	  <h3>Tiruchi region:</h3>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-phone"></i> Girish: +919500969407</li>
      </ul>
	  
	  </div>
</section>
  </div>
</div>


<?php include('footer.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.backtotop.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script type="text/javascript">
    //document.getElementById('dynamictabstrp').scrollIntoView(true);
	$('html,body').animate({
		scrollTop: $('#dynamictab').offset().top
	}, 1000);
</script>
</body>
</html>
</html>