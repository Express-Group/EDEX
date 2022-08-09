<!DOCTYPE html>
<html lang="en">
	<head>
		<head>
			<title><?php echo $title ?></title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo ASSETURL; ?>css/main.css">
			<style>
				html,body{height: 100%;}
				.header-index{width: 100%;height: 100%;background: url('<?php echo ASSETURL;?>img/logo/debate.gif');min-height: 100%;max-height: 100%;background-repeat: no-repeat;background-size: cover;}
				svg{display:none;}
				.buttons{position: absolute;border-radius: 30px;bottom: 3%;left: 0;width: 100%;text-align: center;}
				.blob-btn{z-index: 1;position: relative;padding: 20px 46px;text-align: center;  text-transform: uppercase;color: #2d80b8;font-size: 16px;font-weight: bold; background-color: transparent;outline: none !important;border: none;transition: color 0.5s;cursor: pointer;border-radius: 30px;}
				.blob-btn:before{content: "";z-index: 1;position: absolute;left: 0;top: 0;width: 100%;height: 100%;  border: 2px solid #2d80b8;border-radius: 30px;}
				.blob-btn:after{content: "";z-index: -2;position: absolute;left: 3px;top: 3px;width: 100%;height: 100%;transition: all 0.3s 0.2s;border-radius: 30px;}
				.blob-btn:hover{color: #fff;border-radius: 30px;}
				.blob-btn:hover:after{transition: all 0.3s;left: 0;top: 0;border-radius: 30px;}
				.blob-btn__inner{z-index: -1;overflow: hidden;position: absolute; left: 0;top: 0;width: 100%;	  height: 100%;border-radius: 30px;background: #ffffff;}
				.blob-btn__blobs {
				  position: relative;
				  display: block;
				  height: 100%;
				  filter: url("#goo");
				}
				.blob-btn__blob {
				  position: absolute;
				  top: 2px;
				  width: 25%;
				  height: 100%;
				  background: #2d80b8;
				  border-radius: 100%;
				  transform: translate3d(0, 150%, 0) scale(1.7);
				  transition: transform 0.45s;
				}
				@supports (filter: url("#goo")) {
				  .blob-btn__blob {
					transform: translate3d(0, 150%, 0) scale(1.4);
				  }
				}
				.blob-btn__blob:nth-child(1) {
				  left: 0%;
				  transition-delay: 0s;
				}
				.blob-btn__blob:nth-child(2) {
				  left: 30%;
				  transition-delay: 0.08s;
				}
				.blob-btn__blob:nth-child(3) {
				  left: 60%;
				  transition-delay: 0.16s;
				}
				.blob-btn__blob:nth-child(4) {
				  left: 90%;
				  transition-delay: 0.24s;
				}
				.blob-btn:hover .blob-btn__blob {
				  transform: translateZ(0) scale(1.7);
				}
				@supports (filter: url("#goo")) {
				  .blob-btn:hover .blob-btn__blob {
					transform: translateZ(0) scale(1.4);
				  }
				}
				@media only screen and (max-width: 768px){
					.header-index{background: url('<?php echo ASSETURL;?>img/logo/debat_mob.gif');
					background-repeat: no-repeat;
					background-size: cover;
					}
					
				}
			</style>
		</head>
		<body style="position:relative;">
			<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92816116-1', 'auto'); 
  ga('send', 'pageview');
setTimeout("ga('send','event','adjusted bounce rate','page visit 30 seconds or more')",30000);

</script>

			<section class="header-index"></section>
			<div class="buttons">
				<button class="blob-btn" onclick="window.location.href='<?php echo base_url('index');?>'">
					LET'S DEBATE
					<span class="blob-btn__inner">
						<span class="blob-btn__blobs">
							<span class="blob-btn__blob"></span>
							<span class="blob-btn__blob"></span>
							<span class="blob-btn__blob"></span>
							<span class="blob-btn__blob"></span>
						</span>
					</span>
				</button>
				<br/>
				<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
					<defs>
						<filter id="goo">
							<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
							<feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
						</filter>
					</defs>
				</svg>
			</div>
		</body>
	</head>
</html>