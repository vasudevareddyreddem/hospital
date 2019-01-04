<?php
 
$dec1=$jan1=$feb1=$mar1=$apr1=$may1=$jun1=$jul1=$aug1=$sep1=$oct1=$nov1=0;
if(isset($graph_total_plants) && count($graph_total_plants)>0){
foreach ($graph_total_plants as $cri){
$dat = explode("-", $cri['create_at']);
	if($dat[1] == 12)
	{
	$dec1++;
	}
	if($dat[1] == 11)
	{
		$nov1++;
	}
	if($dat[1] == 10)
	{
		$oct1++;
	}
	if($dat[1] == '09')
	{
		$sep1++;
	}if($dat[1] == '08')
	{
		$aug1++;
	}if($dat[1] == '07')
	{
		$jul1++;
	}if($dat[1] == '06')
	{
		$jun1++;
	}if($dat[1] == '05')
	{
		$may1++;
	}if($dat[1] == 04)
	{
		$apr1++;
	}if($dat[1] == 03)
	{
		$mar1++;
	}if($dat[1] == 02)
	{
		$feb1++;
	}if($dat[1] == 01)
	{
		$jan1++;
	}
}	
} 
$dec2=$jan2=$feb2=$mar2=$apr2=$may2=$jun2=$jul2=$aug2=$sep2=$oct2=$nov2=0;
if(isset($graph_total_truck) && count($graph_total_truck)>0){
foreach ($graph_total_truck as $cri){
$dat = explode("-", $cri['create_at']);
	if($dat[1] == 12)
	{
	$dec2++;
	}
	if($dat[1] == 11)
	{
		$nov2++;
	}
	if($dat[1] == 10)
	{
		$oct2++;
	}
	if($dat[1] == '09')
	{
		$sep2++;
	}if($dat[1] == '08')
	{
		$aug2++;
	}if($dat[1] == '07')
	{
		$jul2++;
	}if($dat[1] == '06')
	{
		$jun2++;
	}if($dat[1] == '05')
	{
		$may2++;
	}if($dat[1] == 04)
	{
		$apr2++;
	}if($dat[1] == 03)
	{
		$mar2++;
	}if($dat[1] == 02)
	{
		$feb2++;
	}if($dat[1] == 01)
	{
		$jan2++;
	}
}	
} 
 
    
	  $total_plants_list = array(
    	array("y" => isset($jan1)?$jan1:'', "label" => "January"),
    	array("y" => isset($feb1)?$feb1:'', "label" => "February"),
    	array("y" => isset($mar1)?$mar1:'', "label" => "March"),
    	array("y" => isset($apr1)?$apr1:'', "label" => "April "),
    	array("y" => isset($may1)?$may1:'', "label" => "May"),
    	array("y" => isset($jun1)?$jun1:'', "label" => "June"),
    	array("y" => isset($jul1)?$jul1:'', "label" => "July"),
    	array("y" => isset($aug1)?$aug1:'', "label" => "August"),
    	array("y" => isset($sep1)?$sep1:'', "label" => "September"),
    	array("y" => isset($oct1)?$oct1:'', "label" => "October"),
    	array("y" => isset($nov1)?$nov1:'', "label" => "November"),
    	array("y" => isset($dec1)?$dec1:'', "label" => "December"),
    );
	$total_truck_list= array(
    	array("y" => isset($jan2)?$jan2:'', "label" => "January"),
    	array("y" => isset($feb2)?$feb2:'', "label" => "February"),
    	array("y" => isset($mar2)?$mar2:'', "label" => "March"),
    	array("y" => isset($apr2)?$apr2:'', "label" => "April "),
    	array("y" => isset($may2)?$may2:'', "label" => "May"),
    	array("y" => isset($jun2)?$jun2:'', "label" => "June"),
    	array("y" => isset($jul2)?$jul2:'', "label" => "July"),
    	array("y" => isset($aug2)?$aug2:'', "label" => "August"),
    	array("y" => isset($sep2)?$sep2:'', "label" => "September"),
    	array("y" => isset($oct2)?$oct2:'', "label" => "October"),
    	array("y" => isset($nov2)?$nov2:'', "label" => "November"),
    	array("y" => isset($dec2)?$dec2:'', "label" => "December"),
    );
	 
     
    ?>
<script>
    window.onload = function () {
     
    var chart = new CanvasJS.Chart("chartContainer", {
    	title: {
    		text: "Month wise List"
    	},
    	axisY: {
    		title: " count range"
    	},
		legend:{
		cursor:"pointer",
		dockInsidePlotArea: true,
		itemclick: toogleDataSeries
		},
    	data: [{
    		type: "spline",
			showInLegend: true,
			name: "BMW vehicle List",
			lineDashType: "solid",
			color: "#8BC34A",			
    		dataPoints: <?php echo json_encode($total_truck_list, JSON_NUMERIC_CHECK); ?>
    	},
		{
    		type: "spline",
			showInLegend: true,
			name: "Total CBWTF",
			lineDashType: "solid",
			color: "#FF9800",			
    		dataPoints: <?php echo json_encode($total_plants_list, JSON_NUMERIC_CHECK); ?>
    	}
		]
    });
    chart.render();
     function toogleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
    }
    </script>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Dashboard</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="panel tab-border card-topline-green">
						<div class=" ">
                                <div class="card-head">
                                     <header>Dashboard</header>
                                  
                                </div>
                                  <div class="card-body no-padding height-9">
									<div class="row">
									       <div id="chartContainer" style="height: 300px; width: 100%;"></div>
									</div>
								</div>
								<div class="clearfix">&nbsp;</div>
											
                     </div>
         </div>
      </div>
   </div>
</div>
<div id="sucessmsg" style="display:none;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

