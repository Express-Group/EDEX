<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-xs-12">
				<div class="about-uc">
					<h6>ABOUT US</h6>
					<p style="font-size: 12px;">The New Indian Express group is one of the most influential and reputed media houses founded during the pre-independence era when freedom of expression was severely curtailed. True to the traits of journalism the group has in the past 85 years stood up to voice dissent by speaking truth to the people.</p>
				</div>
			</div>
			<div class="col-xl-4 col-md-4 col-lg-4 col-sm-4 col-xs-6 col-6">
				<h6 class="text-center">FOLLOW US</h6>
				<div class="social-icons">
					<a><img src="<?php echo ASSETURL;?>img/fb.png"></a>
					<a><img src="<?php echo ASSETURL;?>img/twitter.png"></a>
					<a><img src="<?php echo ASSETURL;?>img/youtube.png"></a>
				</div>
				<p style="font-size: 12px;" class="text-center">Copyright - Edexlive <?php echo date('Y'); ?></p>
			</div>
			<div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-xs-6 col-6">
				<img src="<?php echo ASSETURL;?>img/group.jpg">
			</div>
		</div>
	</div>
</section>
			<?php if($isHome==1): ?>
			<script type="text/javascript">
				var tpj=jQuery;
				var revslider;
				tpj(document).ready(function(){
					if(tpj("#edex_slider").revolution == undefined){
						revslider_showDoubleJqueryError("#edex_slider");
					}else{
						revslider = tpj("#edex_slider").show().revolution({
							sliderType:"standard",
							jsFileLocation:"revolution/js/",
							sliderLayout:"fullscreen",
							dottedOverlay:"none",
							delay:9000,
							navigation: {
								keyboardNavigation:"on",
								keyboard_direction: "horizontal",
								mouseScrollNavigation:"off",
								mouseScrollReverse:"default",
								onHoverStop:"off",
								touch:{
									touchenabled:"on",
									swipe_threshold: 75,
									swipe_min_touches: 1,
									swipe_direction: "vertical",
									drag_block_vertical: false
								},
								bullets: {
									enable:true,
									hide_onmobile:false,
									style:"hermes",
									hide_onleave:false,
									direction:"horizontal",
									h_align:"center",
									v_align:"bottom",
									h_offset:30,
									v_offset:30,
									space:5,
									tmp:''
								},
								arrows :{
									enable: true,
									style: 'hermes',
									tmp: ''
								}
							},
							responsiveLevels:[1240,1024,778,480],
							visibilityLevels:[1240,1024,778,480],
							gridwidth:[1240,1024,778,480],
							gridheight:[868,768,960,720],
							lazyType:"none",
							shadow:0,
							spinner:"off",
							/* stopLoop:"on",
							stopAfterLoops:0,
							stopAtSlide:1, */
							shuffle:"off",
							autoHeight:"off",
							fullScreenAutoWidth:"off",
							fullScreenAlignForce:"off",
							fullScreenOffsetContainer: ".header",
							fullScreenOffset: "",
							disableProgressBar:"on",
							hideThumbsOnMobile:"off",
							hideSliderAtLimit:0,
							hideCaptionAtLimit:0,
							hideAllCaptionAtLilmit:0,
							debugMode:false,
							fallbacks: {
								simplifyAll:"off",
								nextSlideOnWindowFocus:"off",
								disableFocusListener:false,
							}
						});
					}
				});
		</script>
		<?php endif; ?>
		<?php if($this->uri->segment(1)=='rules-and-regulation'): ?>
		<script>
			var slideIndex = 1;
			showDivs(slideIndex);
			function plusDivs(n){showDivs(slideIndex += n);}
			function showDivs(n){ var i; var x = document.getElementsByClassName("Slides"); if (n > x.length) {slideIndex = 1} if (n < 1) {slideIndex = x.length} for (i = 0; i < x.length; i++){x[i].style.display = "none"; } x[slideIndex-1].style.display = "block";}
		</script>
		<?php endif; ?>
		<?php if($this->uri->segment(1)=='verify-otp'): ?>
		<script>
		$(function(){
			'use strict';
			var body = $('body');
			function goToNextInput(e){
				var key = e.which,
				t = $(e.target),
				sib = t.next('input');
				if (key != 9 && (key < 48 || key > 57)){
					e.preventDefault();
					return false;
				}
				if (key === 9){
					return true;
				}
				if (!sib || !sib.length){
					sib = body.find('input').eq(0);
				}
				sib.select().focus();
			}
			function onKeyDown(e){
				var key = e.which;
				if (key === 9 || (key >= 48 && key <= 57)){
					return true;
				}
				e.preventDefault();
				return false;
			}
			function onFocus(e){
				$(e.target).select();
			}
			body.on('keyup', 'input', goToNextInput);
			body.on('keydown', 'input', onKeyDown);
			body.on('click', 'input', onFocus);

		});
		</script>
		<?php endif; ?>
		<script>
		$(function() {
			$(document).on("change",".uploadFile", function() {
				var uploadFile = $(this);
				var files = !!this.files ? this.files : [];
				if (!files.length || !window.FileReader) return;
				if (/^image/.test( files[0].type)){
					var reader = new FileReader();
					reader.readAsDataURL(files[0]);
					reader.onloadend = function(){
						uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
					}
				}
      
			});
		});
		$(document).ready(function(e){
			$('.vote').on('click' , function(e){
				var sid = $(this).data('sid');
				var debate_id = $(this).data('debate_id');
				var bestof = $(this).data('bestof');
				var count = $(this).data('count');
				var pid = $(this).data('pid');
				var span = $(this);
				$.ajax({
					type:'post',
					cache:false,
					url :'<?php echo base_url("vote"); ?>',
					data:{'sid' : sid , 'debate_id' : debate_id , 'bestof' : bestof , 'count' : count , 'pid' : pid},
					success:function(data){
						if(data!=0){
							span.html(bestof+' ('+data+')');
							span.addClass('vote-success').removeClass('vote').off("click");
							span.parent().find('.vote').each(function(index){
								$(this).addClass('vote-inline').removeClass('vote').off("click");
							});
						}
					},
					error:function(err ,errmsg){
						console.log(err);
						console.log(errmsg);
					}
				})
			});
		});
		</script>
		</body>
	</head>
</html>