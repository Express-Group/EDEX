<div class="bgded overlay" style="background-image:url('images/assets/neet_bg.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
       <!-- <h1><a href="index.html">Pcomspace</a></h1>-->
        <a href="http://www.edexlive.com/expressneet/" title="edexlive"><img src="http://images.edexlive.com/images/FrontEnd/images/NEET-logo.jpg" style="width:100%;"></a>
      </div>
      <nav id="mainav" class="fl_right">
	  <?php
		$url =@$_SERVER['REQUEST_URI'];
	    $urlname = substr($url,13);
	  ?>
        <ul class="clear">
          <li class="<?php if($urlname=='' ||$urlname=='apply.php'){ echo 'active';} ?>"><a href="#">Apply Now</a></li>
          <li class="<?php if($urlname=='why_neet.php'){ echo 'active';} ?>"><a href="why_neet.php">Why Express NEET</a></li>
          <li class="<?php if($urlname=='location.php'){ echo 'active';} ?>"><a href="location.php">Location</a></li>
          <li class="<?php if($urlname=='about_gemjee.php'){ echo 'active';} ?>"><a href="about_gemjee.php">About GEMJEE</a></li>
          <li class="<?php if($urlname=='contact_us.php'){ echo 'active';} ?>"><a href="contact_us.php">Contact Us</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <?php if($urlname!='postdata.php' && $urlname!='payment.php' && $urlname!='paymentcancel.php' && $urlname!='checkout.php'): ?>
  <div id="pageintro" class="hoc clear">
    <article> 
      <p><span style="color: #f2a234;font-weight: bold;font-size: 1em;background-color: rgba(0,0,0,.6);padding: 7px;">Instant NEET! Instant Result!</span></p>
	  <h3 class="heading" style="font-weight: bold;">Do you want to be a NEET topper?</h3>
	  <p><span style="color: #f2a234;font-weight: bold;font-size: 1.8em;">Don't wait 30 Days for your NEET Result. Get it in 30 minutes</span></p>
	  <p class="heading"><img  src="./images/assets/Neet-Prep.png" style="width:auto"></p>
	
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Register here</a></li>
         <!-- <li><a class="btn inverse" href="#">Feugiat metus</a></li>-->
        </ul>
      </footer>
    </article>
  </div>
  <?php endif; ?>
</div>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92816116-1', 'auto');
  ga('send', 'pageview');
  setTimeout("ga('send','event','adjusted bounce rate','page visit 30 seconds or more')",30000);

</script> 

