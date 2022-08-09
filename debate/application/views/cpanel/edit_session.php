 <div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-content-breadcrumb">
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard'); ?>">Home</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/sessions'); ?>">Sessions</a></span>
				<span><a style="color: #97a3b9;" href="<?php echo base_url('admin/dashboard/sessions/edit?id='.$this->input->get('id')); ?>">Edit</a></span>
			</div>
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title">EDIT SESSION</h2>
				</div>
				<div class="az-content-header-right">
					<div class="media">
						<div class="media-body">
							<label>Last Login</label>
							<h6><?php echo date('M d, Y h:i:s A' , strtotime($this->session->userdata('last_login'))); ?></h6>
						</div>
					</div>
					<div class="media">
						<div class="media-body">
							<label>Date</label>
							<h6><?php echo date('M d, Y'); ?></h6>
						</div>
					</div>
					 <a href="<?php echo base_url('admin/sessions'); ?>" class="btn btn-purple">Go Back</a>
					 <a href="<?php echo base_url('admin/sessions/create'); ?>" class="btn btn-purple">Clear</a>
					 <button onclick="document.getElementById('create_debate').submit();" class="btn btn-purple">Save</button>
				</div>
			</div>
			<div class="row row-sm mg-b-20">
				<div class="col-lg-12 ht-lg-100p">
					<div class="card">
						<div class="card-body">
							<div class="card-body-top">
								<form method="post" action="" id="create_debate" enctype="multipart/form-data">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-xl-6">
											<div class="form-group">
												<label>TOPIC <sup>*</sup></label>
												<select name="topic"  class="form-control">
													<option value="">Please select any one</option>
													<?php
													foreach($debatelist as $list){
														echo '<option '.(($list->debate_id==$session['debate_id']) ? ' selected ':'').' value="'.$list->debate_id.'">'.$list->topic.'</option>';
													}
													?>
												</select>
												<?php echo form_error('topic' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>VIDEO EMBED <sup>*</sup></label>
												<textarea name="video_embed" rows="5" class="form-control"><?php if(set_value('video_embed')!=''){ echo set_value('video_embed');}else{ echo $session['video_embed'];}?></textarea>
												<?php echo form_error('video_embed' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>KEYWORDS <sup>*</sup></label>
												<input value="<?php if(set_value('keywords')!=''){ echo set_value('keywords');}else{ echo $session['keywords'];}?>" name="keywords" type="text" class="form-control">
												<?php echo form_error('keywords' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>DESCRIPTION <sup>*</sup></label>
												<textarea name="description" rows="5" class="form-control"><?php if(set_value('description')!=''){ echo set_value('description');}else{ echo $session['description'];}?></textarea>
												<?php echo form_error('description' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group">
												<label>STATUS <sup>*</sup></label>
												<select name="status"  class="form-control">
													<option value="">Please select any one</option>
													<option <?php if($session['status']==1){ echo ' selected ';} ?> value="1">Active</option>
													<option <?php if($session['status']==0){ echo ' selected ';} ?> value="0">Inactive</option>
												</select>
												<?php echo form_error('status' ,'<p class="error" style="text-align:left;margin:0;">','</p>'); ?>
											</div>
											<div class="form-group" id="bestof">
												<label>BEST OF </label>
												<?php
												$bestof = json_decode($session['best_of'] ,true);
												if(count($bestof)>0){
													for($i=0;$i< count($bestof);$i++){
														echo '<input name="bestof[]" type="text" class="form-control mg-b-20" value="'.$bestof[$i].'">';
													}
												}else{
													echo '<input name="bestof[]" type="text" class="form-control mg-b-20">';
												}
												?>
											</div>
											<div class="form-group">
												<button type="button" id="add_field" class="btn btn-purple">ADD BEST OF FIELD</button>
												<button type="button" id="remove_field" class="btn btn-purple">REMOVE BEST OF FIELD</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>