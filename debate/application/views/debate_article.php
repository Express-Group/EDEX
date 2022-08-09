<section class="body-section">
	<div class="container">
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2">
			<div class="rules-regulation">
				<h3 class="text-center rules-title" style="font-size: 2rem;"><?php echo $details['topic']; ?></h3>
				<?php
				foreach($sessions as $session){
					echo '<div class="text-center">';
						echo $session->video_embed;
						echo '<p class="text-left" style="margin-top:2%;">'.$details['description'].'</p>';
						echo '<h5 style="color: #0f75bc;">PARTICIPANT</h5>';
						echo '<hr>';
						foreach($participants as $participant){
								echo '<h5 class="text-left">';
								echo '<img style="width: 50px;" src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" alt="'.$participant->name.'">';
								echo '<span style="padding-left: 2%;">'.$participant->name.'</span>';
								echo '</h5>';
								echo '<h6 class="text-left" style="font-size: 13px;font-weight: 400;color: #a7a1a1;">
									<span>School : '.$participant->school.'</span> / 
									<span>Class : '.$participant->class.'</span> / 
									<span>Age : '.$participant->age.'</span> / 
									<span>Gender : '.(($participant->gender==1)? 'Male' : 'Female').'</span> / 
									<span>Email : '.$participant->email.'</span> 
									
								</h6>';
								echo '<h5 class="text-left mt-4 mb-4 row">';
								$bestOf = ($session->best_of!='') ? json_decode($session->best_of , true) : [];
								$countlist = bestof($session->sid , $details['debate_id'] , $participant->pid);
								for($i=0;$i<count($bestOf);$i++){
									$num = 0;
									foreach($countlist as $count){
										if($count->title==$bestOf[$i]){
											 $num = (int) $count->vote;
										}
									}
									$cookieName = $session->sid.$details['debate_id'].$participant->pid;
									$cookieName1 = $cookieName.'value';
									if(isset($_COOKIE[$cookieName]) && $_COOKIE[$cookieName]=='true'){
										$current = (isset($_COOKIE[$cookieName1])) ? $_COOKIE[$cookieName1] : '';
										echo '<span class="'.(($current==$bestOf[$i])?'vote-success' : 'vote-inline').' col-xs-6" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-bestof="'.$bestOf[$i].'" data-count="'.$num.'" data-pid="'.$participant->pid.'">'.$bestOf[$i].' ('.$num.')</span>';
									}else{
										echo '<span class="vote col-xs-6" data-sid="'.$session->sid.'" data-debate_id="'.$details['debate_id'].'" data-bestof="'.$bestOf[$i].'" data-count="'.$num.'" data-pid="'.$participant->pid.'">'.$bestOf[$i].' ('.$num.')</span>';
									}
								}
								echo '</h5>';
								echo '<hr>';
						}
						//print_r($participants);
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
</section> 