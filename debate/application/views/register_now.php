<section class="body-section">
	<div class="container">
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-12 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1">
			<div class="rules-regulation">
				<h1 class="text-center rules-title">Register Now</h1>
				<form method="post" action="<?php echo base_url('register-now'); ?>" enctype="multipart/form-data">
					<div class="form-group text-center">
						<div class="col-sm-4 imgUp" style="display:inline-block;">
							<div class="imagePreview"></div>
							<label class="btn btn-primary">
								Upload Image <sup>*</sup><input name="user_image" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
							</label>
						</div>
						<div class="col-sm-4 imgUp" style="display:inline-block;">
							<div class="imagePreview"></div>
							<label class="btn btn-primary">
								Upload Register ID <sup>*</sup><input name="id_image" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
							</label>
						</div>
						<?php echo form_error('user_image' ,'<p class="error" style="text-align:left;margin:0;">*','</p>'); ?>
						<?php echo form_error('id_image' ,'<p class="error" style="text-align:left;margin:0;">*','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Name <sup>*</sup></label>
						<input class="form-control" name="name" type="text" value="<?php echo set_value('name'); ?>">
						<?php echo form_error('name' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<div class="form-check-inline">
							<label class="form-check-label" for="radio1">
								<input type="radio" class="form-check-input" id="radio1" name="gender" value="1" <?php echo  set_radio('gender', '1'); ?> >Male
							</label>
						</div>
						<div class="form-check-inline">
							<label class="form-check-label" for="radio2">
								<input type="radio" class="form-check-input" id="radio2" name="gender" value="0" <?php echo  set_radio('gender', '0'); ?>>Female
							</label>
						</div>
						<?php echo form_error('gender' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Date Of Birth <sup>*</sup></label>
						<input type="date" class="form-control" name="dob" value="<?php echo set_value('dob'); ?>"> 
						<?php echo form_error('dob' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>School <sup>*</sup></label>
						<input type="text" class="form-control" name="school" value="<?php echo set_value('school'); ?>"> 
						<?php echo form_error('school' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Class <sup>*</sup></label>
						<input type="text" class="form-control" name="class" value="<?php echo set_value('class'); ?>"> 
						<?php echo form_error('class' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>About Me <sup>*</sup></label>
						<textarea class="form-control" name="about_me"><?php echo set_value('about_me'); ?></textarea>
						<?php echo form_error('about_me' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Debate Topic<sup>*</sup></label>
						<select class="form-control" name="debate">
							<option value="">Please Select Any One</option>
							<?php
							foreach($debateList as $list){
								echo '<option '.set_select('debate', $list->debate_id).' value="'.$list->debate_id.'">'.$list->topic.'</option>';
							}
							?>
						</select>
						<?php echo form_error('debate' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Phone Number <sup>*</sup></label>
						<input class="form-control" name="phone" type="number" value="<?php echo set_value('phone'); ?>">
						<?php echo form_error('phone' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<label>Email Address <sup>*</sup></label>
						<input class="form-control" name="email" type="email" value="<?php echo set_value('email'); ?>">
						<?php echo form_error('email' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</section>