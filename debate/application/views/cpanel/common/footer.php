<!--footer block-->
<div class="az-footer ht-40">
	<div class="container ht-100p pd-t-0-f">
		<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Edexworks <?php echo date('Y'); ?></span>
	</div>
</div>
<!--footer block ends-->
<!-- edit Modal -->
<div class="modal fade" id="edit_pmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" style="text-transform:uppercase;"></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-purple" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-purple p_save">Save</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo ASSETURL; ?>lib/jquery/jquery.min.js"></script>
<script src="<?php echo ASSETURL; ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo ASSETURL; ?>lib/ionicons/ionicons.js"></script>
<script src="<?php echo ASSETURL; ?>lib/jquery.flot/jquery.flot.js"></script>
<script src="<?php echo ASSETURL; ?>lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="<?php echo ASSETURL; ?>lib/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo ASSETURL; ?>lib/peity/jquery.peity.min.js"></script>
<script src="<?php echo ASSETURL; ?>js/azia.js"></script>
<script src="<?php echo ASSETURL; ?>js/chart.flot.sampledata.js"></script>
<script src="<?php echo ASSETURL; ?>js/dashboard.sampledata.js"></script>
<?php if($this->uri->segment(2)=='debate' && ($this->uri->segment(3)=='create' || $this->uri->segment(3)=='edit')): ?>
<script src="<?php echo ASSETURL; ?>lib/pickerjs/picker.min.js"></script>
<script>
new Picker(document.querySelector('#schedule_date'), {
	  headers: true,
	  format: 'MMMM DD, YYYY HH:mm',
	  text: {
		title: 'Pick a Date and Time',
		year: 'Year',
		month: 'Month',
		day: 'Day',
		hour: 'Hour',
		minute: 'Minute'
	  },
	});
</script>
<?php endif; ?>
 <script>
 $('#add_field').on('click',function(){
	$('#bestof').append('<input name="bestof[]" type="text" class="form-control mg-b-20">'); 
 });
 $('#remove_field').on('click',function(){
	 if($('#bestof').find('input').length!=1){
		$('#bestof').find('input').last().remove(); 
	 }
	
 });
  $(function(){
	

		var plot = $.plot('#flotChart', [{
	  data: flotSampleData3,
	  color: '#007bff',
	  lines: {
		fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
	  }
	},{
	  data: flotSampleData4,
	  color: '#560bd0',
	  lines: {
		fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
	  }
	}], {
			series: {
				shadowSize: 0,
		lines: {
		  show: true,
		  lineWidth: 2,
		  fill: true
		}
			},
	  grid: {
		borderWidth: 0,
		labelMargin: 8
	  },
			yaxis: {
		show: true,
				min: 0,
				max: 100,
		ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
		tickColor: '#eee'
			},
			xaxis: {
		show: true,
		color: '#fff',
		ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
	  }
	});

	$.plot('#flotChart1', [{
	  data: dashData2,
	  color: '#00cccc'
	}], {
			series: {
				shadowSize: 0,
		lines: {
		  show: true,
		  lineWidth: 2,
		  fill: true,
		  fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.2 } ] }
		}
			},
	  grid: {
		borderWidth: 0,
		labelMargin: 0
	  },
			yaxis: {
		show: false,
		min: 0,
		max: 35
	  },
			xaxis: {
		show: false,
		max: 50
	  }
		});

	$.plot('#flotChart2', [{
	  data: dashData2,
	  color: '#007bff'
	}], {
			series: {
				shadowSize: 0,
		bars: {
		  show: true,
		  lineWidth: 0,
		  fill: 1,
		  barWidth: .5
		}
			},
	  grid: {
		borderWidth: 0,
		labelMargin: 0
	  },
			yaxis: {
		show: false,
		min: 0,
		max: 35
	  },
			xaxis: {
		show: false,
		max: 20
	  }
		});


	//-------------------------------------------------------------//


	// Line chart
	$('.peity-line').peity('line');

	// Bar charts
	$('.peity-bar').peity('bar');

	// Bar charts
	$('.peity-donut').peity('donut');

	var ctx5 = document.getElementById('chartBar5').getContext('2d');
	new Chart(ctx5, {
	  type: 'bar',
	  data: {
		labels: [0,1,2,3,4,5,6,7],
		datasets: [{
		  data: [2, 4, 10, 20, 45, 40, 35, 18],
		  backgroundColor: '#560bd0'
		}, {
		  data: [3, 6, 15, 35, 50, 45, 35, 25],
		  backgroundColor: '#cad0e8'
		}]
	  },
	  options: {
		maintainAspectRatio: false,
		tooltips: {
		  enabled: false
		},
		legend: {
		  display: false,
			labels: {
			  display: false
			}
		},
		scales: {
		  yAxes: [{
			display: false,
			ticks: {
			  beginAtZero:true,
			  fontSize: 11,
			  max: 80
			}
		  }],
		  xAxes: [{
			barPercentage: 0.6,
			gridLines: {
			  color: 'rgba(0,0,0,0.08)'
			},
			ticks: {
			  beginAtZero:true,
			  fontSize: 11,
			  display: false
			}
		  }]
		}
	  }
	});

	// Donut Chart
	var datapie = {
	  labels: ['Search', 'Email', 'Referral', 'Social', 'Other'],
	  datasets: [{
		data: [25,20,30,15,10],
		backgroundColor: ['#6f42c1', '#007bff','#17a2b8','#00cccc','#adb2bd']
	  }]
	};

	var optionpie = {
	  maintainAspectRatio: false,
	  responsive: true,
	  legend: {
		display: false,
	  },
	  animation: {
		animateScale: true,
		animateRotate: true
	  }
	};

	// For a doughnut chart
	var ctxpie= document.getElementById('chartDonut');
	var myPieChart6 = new Chart(ctxpie, {
	  type: 'doughnut',
	  data: datapie,
	  options: optionpie
	});

  });
  $(document).ready(function(e){
	$('#profile_file , #id_file').on('change' , function(e){
		if($(this).val()!=''){
			var fd = new FormData();
			fd.append('file',$(this)[0].files[0]);
			fd.append('type',$(this).attr('type1'));
			fd.append('id',$('#id').val());
			$.ajax({
				url:'<?php echo base_url("admin/participant/update_image") ?>',
				type:'post',
				data: fd,
				contentType: false,
				processData: false,
				success:function(result){
					if(result==1){
						location.reload();
					}else{
						alert('Something went wrong');
					}
				},
				error:function(er, err){
					console.log(er);
					console.log(err);
				}
			});
		}
	});
	$('.edit_p').on('click' , function(e){
		var id = $('#id').val();
		$('#edit_pmodal').find('.modal-title').html('EDIT FIELDS');
		$.ajax({
			url:'<?php echo base_url("admin/participant/edit_field") ?>',
			type:'post',
			data: { 'id' : id},
			success:function(result){
				$('#edit_pmodal').find('.modal-body').html(result);
				$('#edit_pmodal').modal({backdrop: "static"});
			},
			error:function(er, err){
				console.log(er);
				console.log(err);
			}
		});
		
	});
	$('.p_save').on('click' , function(e){
		var error = false;
		var id = $('#id').val();
		var name=$('#pname').val().trim();
		var dob=$('#pdob').val().trim();
		var gender=$('#pgender').val().trim();
		var school=$('#pschool').val().trim();
		var class1 = $('#pclass').val().trim();
		var about = $('#pabout').val().trim();
		var mobile = $('#pmobile').val().trim();
		var email = $('#pemail').val().trim();
		if(name==''){
			alert('Enter valid name');
			error = true;
			return false;
		}
		if(dob==''){
			alert('Enter valid DOB');
			error = true;
			return false;
		}
		if(gender==''){
			alert('Select valid gender');
			error = true;
			return false;
		}
		if(school==''){
			alert('Select valid school');
			error = true;
			return false;
		}
		if(class1==''){
			alert('Enter valid class');
			error = true;
			return false;
		}
		if(about==''){
			alert('Enter valid About me');
			error = true;
			return false;
		}
		if(mobile==''){
			alert('Enter valid Mobile Number');
			error = true;
			return false;
		}
		if(email==''){
			alert('Enter valid Email Address');
			error = true;
			return false;
		}
		if(!error){
			$.ajax({
			url:'<?php echo base_url("admin/participant/update_field") ?>',
			type:'post',
			data: { 'id' : id , 'name' :name , 'dob' :dob , 'gender' : gender , 'school' : school , 'class' : class1 , 'about' : about , 'mobile' : mobile , 'email' : email},
			success:function(result){
				if(result==1){
					location.reload();
				}else{
					alert('something went wrong');
				}
			},
			error:function(er, err){
				console.log(er);
				console.log(err);
			}
		});
		}
	});
  });
</script>
  </body>
</html>
