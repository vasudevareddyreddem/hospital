<?php
$dec=$jan=$feb=$mar=$apr=$may=$jun=$jul=$aug=$sep=$oct=$nov=0;
if(isset($patients_list) && count($patients_list)>0){
foreach ($patients_list as $cri){
$dat = explode("-", $cri['create_at']);
	if($dat[1] == 12)
	{
	$dec++;
	}
	if($dat[1] == 11)
	{
		$nov++;
	}
	if($dat[1] == 10)
	{
		$oct++;
	}
	if($dat[1] == '09')
	{
		$sep++;
	}if($dat[1] == '08')
	{
		$aug++;
	}if($dat[1] == '07')
	{
		$jul++;
	}if($dat[1] == '06')
	{
		$jun++;
	}if($dat[1] == '05')
	{
		$may++;
	}if($dat[1] == 04)
	{
		$apr++;
	}if($dat[1] == 03)
	{
		$mar++;
	}if($dat[1] == 02)
	{
		$feb++;
	}if($dat[1] == 01)
	{
		$jan++;
	}
}	
} 
    $dataPoints = array(
    	array("y" => isset($jan)?$jan:'', "label" => "January"),
    	array("y" => isset($feb)?$feb:'', "label" => "February"),
    	array("y" => isset($mar)?$mar:'', "label" => "March"),
    	array("y" => isset($apr)?$apr:'', "label" => "April "),
    	array("y" => isset($may)?$may:'', "label" => "May"),
    	array("y" => isset($jun)?$jun:'', "label" => "June"),
    	array("y" => isset($jul)?$jul:'', "label" => "July"),
    	array("y" => isset($aug)?$aug:'', "label" => "August"),
    	array("y" => isset($sep)?$sep:'', "label" => "September"),
    	array("y" => isset($oct)?$oct:'', "label" => "October"),
    	array("y" => isset($nov)?$nov:'', "label" => "November"),
    	array("y" => isset($dec)?$dec:'', "label" => "December"),
    );
     
    ?>

    <script>
    window.onload = function () {
     
    var chart = new CanvasJS.Chart("chartContainer", {
    	title: {
    		text: "Month wise Patients List"
    	},
    	axisY: {
    		title: "Patients count range"
    	},
    	data: [{
    		type: "line",
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();
     
    }
    </script>
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
	                  <div class="row">
						<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
							<div class="row ">            
			                    <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-blue">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">New Patient Registration</span>
						              <span class="info-box-number"><?php echo $newpatient_last_seven; ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: <?php echo $newpatient_last_seven; ?>%"></div>
						              </div>
						              <span class="progress-description">Last 7 days</span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
			                    <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-orange">
						            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total New Patient Registration</span>
						              <span class="info-box-number"><?php echo $total_newpatient_list; ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: <?php echo $total_newpatient_list; ?>%"></div>
						              </div>
						              <span class="progress-description"><?php echo date('d-m-Y'); ?></span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
								<div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-purple">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">New Reschedule patients</span>
						              <span class="info-box-number"><?php echo $reschedule_last_seven; ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: <?php echo $reschedule_last_seven; ?>%"></div>
						              </div>
						              <span class="progress-description">Last 7 days</span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
			                </div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row  ">            
			                    
			                    <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-success">
						            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Reschedule patients</span>
						              <span class="info-box-number"><?php echo $total_reschudle_patient_list; ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: <?php echo $total_reschudle_patient_list; ?>%"></div>
						              </div>
						              <span class="progress-description">&nbsp;</span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
								  <div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-indigo">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Patients</span>
						              <span class="info-box-number"><?php echo count($patients_list); ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: <?php echo count($patients_list); ?>%"></div>
						              </div>
						              <span class="progress-description">&nbsp;</span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
								<div class="col-xl-4 col-md-6 col-12">
						          <div class="info-box bg-warning">
						            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						            <div class="info-box-content">
						              <span class="info-box-text">Total Modified prescriptions</span>
						              <span class="info-box-number"><?php echo $prescriptions_list; ?></span>
						              <div class="progress">
						                <div class="progress-bar" style="width: <?php echo $prescriptions_list; ?>%"></div>
						              </div>
						              <span class="progress-description">&nbsp;</span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
			                </div>
						</div>
					
						 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card card-box">
                              <div class="card-head">
                                  <header>Patients SURVEY</header>
                                 
                              </div>
                              <div class="">
								    <div id="chartContainer" ></div>

							</div>
                          </div>
				            </div>
			        	</div>
					
                    
                </div>
				
			
            </div>
			
		

    	  <script src="<?php echo base_url(); ?>assets/vendor/plugins/canvasjs.min.js" ></script>

    
                              


