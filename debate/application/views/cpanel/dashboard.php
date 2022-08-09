<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
			<div class="az-dashboard-one-title">
				<div>
					<h2 class="az-dashboard-title">Hi, welcome back!</h2>
					<p class="az-dashboard-text"><?php echo ucfirst($this->session->userdata('firstname')); ?> <?php echo ucfirst($this->session->userdata('lastname')); ?></p>
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
					 <a href="<?php echo base_url('admin/users/profile?id='.$this->session->userdata('uid')); ?>" class="btn btn-purple">Edit profile</a>
				</div>
			</div>
			<div class="az-dashboard-nav"> 
				<nav class="nav">
					<a  style="display:block;" class="nav-link active" data-toggle="tab" href="#">Overview</a>
				</nav>
			</div>
			<div class="row row-sm mg-b-20">
				<div class="col-lg-7 ht-lg-100p">
					<div class="card card-dashboard-one">
						<div class="card-header">
							<div>
								<h6 class="card-title">Website Audience Metrics</h6>
								<p class="card-text">Audience to which the users belonged while on the current date range.</p>
                  </div>
                  <div class="btn-group">
                    <button class="btn active">Day</button>
                    <button class="btn">Week</button>
                    <button class="btn">Month</button>
                  </div>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="card-body-top">
                    <div>
                      <label class="mg-b-0">Users</label>
                      <h2>13,956</h2>
                    </div>
                    <div>
                      <label class="mg-b-0">Bounce Rate</label>
                      <h2>33.50%</h2>
                    </div>
                    <div>
                      <label class="mg-b-0">Page Views</label>
                      <h2>83,123</h2>
                    </div>
                    <div>
                      <label class="mg-b-0">Sessions</label>
                      <h2>16,869</h2>
                    </div>
                  </div><!-- card-body-top -->
                  <div class="flot-chart-wrapper">
                    <div id="flotChart" class="flot-chart"></div>
                  </div><!-- flot-chart-wrapper -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-lg-5 mg-t-20 mg-lg-t-0">
              <div class="row row-sm">
                <div class="col-sm-6">
                  <div class="card card-dashboard-two">
                    <div class="card-header">
                      <h6><?php echo debatecount(); ?> <i class="icon ion-md-trending-up tx-success"></i></h6>
                      <p>Total Debates</p>
                    </div><!-- card-header -->
                    <div class="card-body">
                      <div class="chart-wrapper">
                        <div id="flotChart1" class="flot-chart"></div>
                      </div><!-- chart-wrapper -->
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                  <div class="card card-dashboard-two">
                    <div class="card-header">
                      <h6><?php echo participantcount(); ?> <i class="icon ion-md-trending-up tx-success"></i></h6>
                      <p>Total Participants</p>
                    </div><!-- card-header -->
                    <div class="card-body">
                      <div class="chart-wrapper">
                        <div id="flotChart2" class="flot-chart"></div>
                      </div><!-- chart-wrapper -->
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-12 mg-t-20">
                  <div class="card card-dashboard-three">
                    <div class="card-header">
                      <p>SCHOOLS COUNT</p>
                      <h6><?php echo schoolcount(); ?> <small class="tx-success"><i class="icon ion-md-arrow-up"></i></small></h6>
                    </div><!-- card-header -->
                    <div class="card-body">
                      <div class="chart"><canvas id="chartBar5"></canvas></div>
                    </div>
                  </div>
                </div>
              </div><!-- row -->
            </div><!--col -->
          </div><!-- row -->

          

          <div class="row row-sm mg-b-20 mg-lg-b-0">
            <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
              <div class="card card-table-one">
                <h6 class="card-title">Recently added Schools</h6>
                <p style="visibility:hidden;" class="az-content-text mg-b-20">Part of this date range occurs before the new users metric had been calculated, so the old users metric is displayed.</p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="wd-5p">&nbsp;</th>
                        <th class="wd-45p">Name</th>
                        <th>Address</th>
                        <th>Contact Details</th>
                      </tr>
                    </thead>
                    <tbody>
					  <?php
					  foreach($schoolList as $list){
						echo '<tr>';  
						echo '<td><i class="typcn typcn-star-outline"></i></td>';  
						echo '<td>'.$list->name.'</td>';
						echo '<td>'.substr($list->address , 0 ,50).'...</td>';
						echo '<td>'.substr($list->contact_details , 0 ,50).'...</td>';
						echo '</tr>';  
					  }
					  ?>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card -->
            </div><!-- col-lg -->

          </div><!-- row -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->