<!--faq section -->
<section class="faq mt-5">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-5">
				<h1 class="text-center title">Check Your Status</h1>
			</div>
			<div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-xs-12 col-12 offset-xl-3 offset-md-3 offset-sm-3">
				<div class="faq-section">
					<div class="faq-inner-section">
						<form method="get" action="<?php echo base_url('status'); ?>">
							<div class="input-group <?php if(isset($participants) && is_array($participants) && count($participants) > 0){ echo 'mb-4';} ?>">
								<input name="id" required type="number" class="form-control" placeholder="Please Enter your registered Id" value="<?php echo trim($this->input->get('id'));?>">
								<div class="input-group-append">
									<button class="btn btn-primary" type="submit">Go</button>
								</div>
							</div>
							<?php if($error==1){ echo '<p class="error">Please enter valid register id</p>';} ?>
						</form>
						<?php
						if(isset($participants) && is_array($participants) && count($participants) > 0){
							$dob = new DateTime($participants['dob']);
							$currentDate   = new DateTime('today');
							$age =  $dob->diff($currentDate)->y;
							?>
							<table class="table">
								<tbody>
									<tr><td><strong>School:</strong></td><td><?php echo $participants['school']; ?></td></tr>
									<tr><td><strong>Class:</strong></td><td><?php echo $participants['class']; ?></td></tr>
									<tr><td><strong>Name:</strong></td><td><?php echo $participants['name']; ?></td></tr>
									<tr><td><strong>Gender:</strong></td><td><?php if($participants['gender']==1){ echo 'Male'; }else{ echo 'Female'; } ?></td></tr>
									<tr><td><strong>DOB:</strong></td><td><?php echo date('jS F Y' ,strtotime($participants['dob'])); ?></td></tr>
									<tr><td><strong>Age:</strong></td><td><?php echo $age; ?></td></tr>
									<tr><td><strong>About Me:</strong></td><td><?php echo $participants['about_me']; ?></td></tr>
									<tr><td><strong>Profile Picture:</strong></td><td><?php if($participants['user_image']!=''): ?><img style="width:100px;" src="<?php echo ASSETURL.'img/participants/'.$participants['user_image'];?>"><?php else: ?>--<?php endif; ?></td></tr>
									<tr><td><strong>School Id:</strong></td><td><?php if($participants['id_image']!=''): ?><img style="width:100px;" src="<?php echo ASSETURL.'img/id/'.$participants['id_image'];?>"><?php else: ?>--<?php endif; ?></td></tr>
									<tr><td><strong>Debate Topic:</strong></td><td><?php echo $debate['topic']; ?></td></tr>
									<tr><td><strong>Date & Time:</strong></td><td><?php echo date('jS F Y h:i A' ,strtotime($debate['schedule_date'])); ?></td></tr>
									<tr><td><strong>Ph Number:</strong></td><td><?php echo $participants['phone_number']; ?></td></tr>
									<tr><td><strong>Email:</strong></td><td><?php echo $participants['email']; ?></td></tr>
									<tr><td><strong>Status:</strong></td>
									<td>
									<?php if($participants['status']==0){ echo '<span class="badge badge-warning">PENDING</span>'; }; ?>
									<?php if($participants['status']==1){ echo '<span class="badge badge-success">APPROVED</span>'; }; ?>
									<?php if($participants['status']==2){ echo '<span class="badge badge-danger">REJECTED</span>'; }; ?>
									</td></tr>
								</tbody>
							</table>
							<?php
						}
						?>
						<div class="form-group text-center mt-3">
							<button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index'); ?>'">Go to home</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--faq sectiion ends-->
<!--footer section ends-->
<section class="footer mt-5">
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
					<a><img src="assets/img/fb.png"></a>
					<a><img src="assets/img/twitter.png"></a>
					<a><img src="assets/img/youtube.png"></a>
				</div>
				<p style="font-size: 12px;" class="text-center">Copyright - Edexlive 2021</p>
			</div>
			<div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-xs-6 col-6">
				<img src="assets/img/group.jpg">
			</div>
		</div>
	</div>
</section>
<!--footer section ends-->
<!--scripts-->
<script>
$(document).ready(function(e){
	$('html,body').animate({scrollTop: $("h1.title").offset().top},'slow');
});
var scroll = document.getElementById("scroll-up");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
	scroll.style.display = "block";
  } else {
	scroll.style.display = "none";
  }
}
function topFunction(type=1) {
	$('html,body').animate({scrollTop: $("body").offset().top},'slow');	
}
</script>
<!--scripts end-->
</body>
</html>