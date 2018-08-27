<style>
.panel-title > a:before {
  content: "\f068";
  float: right !important;
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
}
.panel-title > a.collapsed:before {
  content: "\f067";
}
	 .panel-title > a {
        display: block;
       
        text-decoration: none;
    }
	ol {
  list-style: none;
  padding: 0;
  margin: 0;
}


</style>

<?php //echo '<pre>';print_r($tab);exit; ?>

<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Appointments</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Appointments</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="panel tab-border card-topline-green">
               <header class="panel-heading panel-heading-gray custom-tab ">
                  <ul class="nav nav-tabs x-scrool">
				   
					 <li style="border-right:2px solid #fff" class="nav-item"><a href="#aboutop" data-toggle="tab" class="<?php if(isset($tab)&& $tab==''){ echo "active";}?>"> Patients List</a>
                     </li>
					 
                      <li style="border-right:2px solid #fff;position:relative" class="nav-item"><a href="#home" data-toggle="tab" class=" <?php if(isset($tab)&& $tab==2){ echo "active";}?>">Ward Details</a>
					
                     </li>
                     <li class="nav-item "><a href="#about" data-toggle="tab" class="<?php if(isset($tab)&& $tab==3){ echo "active";}?>">Admitted Patient List</a>
                     </li>
                   
                  </ul>
               </header>
               <div class="panel-body">
                  <div class="tab-content">
				   <div class="tab-pane <?php if(isset($tab)&& $tab==''){ echo "active";}?>" id="aboutop">
						<div class="card ">
                                <div class="card-head">
                                     <header>Patients List</header>
                                  
                                </div>
                                <div class="card-body table-responsive">
                                    <table id="saveStage" class="table table-bordered" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Patient ID</th>
												<th>Patient Name</th>
                                                <th>Gender </th>
                                                <th>Age</th>
                                                <th>Doctor Name</th>
                                                <th>Diagnosis</th>
                                                <th>Date of Admit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										
                                        <tbody>										
										<?php if(isset($ip_patient_list)  && count($ip_patient_list)>0){ ?>
											<?php foreach($ip_patient_list as $list){ ?>
												<tr>
													<td><?php echo $list['pid']; ?></td>
													<td><?php echo $list['name']; ?></td>
													<td><?php echo $list['gender']; ?></td>
													<td><?php echo $list['age']; ?></td>
													<td><?php echo $list['resource_name']; ?></td>
													<td><?php echo $list['problem']; ?></td>
													<td><?php echo $list['create_at']; ?></td>
													<td class="valigntop">
														<div class="btn-group">
															<button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="<?php echo base_url('ward_management/admit/'.base64_encode(2).'/'.base64_encode($list['pid']).'/'.base64_encode($list['b_id'])); ?>">
																		<i class="fa fa-edit"></i>Room/Bed </a>
																</li>
															   												
															</ul>
														</div>
													</td>
												</tr>
											<?php } ?>
										<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
								<div class="clearfix">&nbsp;</div>
							
                            </div>			
						
                     </div>
                     <div class="tab-pane <?php if(isset($tab)&& $tab==2){ echo "active";}?>" id="home">
                        <div class="card ">
                                <div class="card-head">
                                     <header>Ward Details</header>                                 
                                </div>
                                <div class="card-body ">
                                    <form class=" pad30 form-horizontal" action="<?php echo base_url('Ward_management/admitdetails'); ?> " method="post"  id="contact_form">
                                        <div class="row d-flex justify-content-center">
											 <div class="form-group col-md-6">
											  <label ><strong>Ward Name</strong></label>
												<select  class="form-control" name="ward_name">
												<option value="">Select Ward Number</option>
												<?php foreach($ward_list as $List){ ?>
												<option value="<?php echo $List['w_id'];?>"><?php echo $List['ward_name'];?></option>
												<?php } ?>	
												</select>											
											</div>
										</div>
										<div class="row d-flex justify-content-center">
											 <div class="form-group col-md-6">
											  <label ><strong>Ward Type</strong></label>
												<select  class="form-control">
												<option value="">Select Ward Type</option>
												<?php foreach($wardtype_list as $List){ ?>
												<option value="<?php echo $List['ward_id'];?>"><?php echo $List['ward_type'];?></option>
												<?php } ?>										
										</select>
											</div>
										</div>										 
										<div class="row d-flex justify-content-center">
											 <div class="form-group col-md-6">
											  <label ><strong>Room Type</strong></label>
											 <select  class="form-control">
												<option value="">Select Room Type </option>
												<?php foreach($roomtype_list as $list){ ?>
												<option value="<?php echo $list['w_r_t_id'];?>"><?php echo $list['room_type'];?></option>
												<?php } ?>
										
										</select>
											</div>
										</div>
										
										<div class="row d-flex justify-content-center">
											 <div class="form-group col-md-6">
											  <label ><strong>Floor Number</strong></label>
												<select  class="form-control" onchange="get_floorno_list(this.value);">
												<option value="">Select Floor Number</option>
												<?php foreach($floor_list as $list){ ?>
												<option value="<?php echo $list['w_f_id'];?>"><?php echo $list['ward_floor'];?></option>
												<?php } ?>			
										</select></div>
										</div>
										<div class="row d-flex justify-content-center">
											<div class="form-group col-md-6">
											  <label ><strong>Room Number</strong></label>
												 <select  class="form-control" id="roomno_id" onchange="get_bed_count(this.value);" >
												 <option value="">Select Room Number </option>
								
												 </select>												
											</div>
										</div>
										
										   <div class="row d-flex justify-content-center">
											 <div class="form-group col-md-6">	
												<label ><strong>Bed Number</strong></label>											 
												<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												  <div class="panel panel-warning">
													<div class="panel-heading" role="tab" id="headingOne" style="border-bottom:1px solid #ddd">
													  <h4 class="panel-title">
													  
														<a class="collapsed"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
														Select Bed
														</a>
													  </h4>
													</div>
													<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
													  <div class="panel-body">
													  <div class="d-flex justify-content-center">			
																<li class="row row--1" id="bedcount_id"></li>																														
														</div>
													  </div>
													</div>													
												  </div>
												</div>
											 </div>
												</div>																		
										<a class="btn btn-primary pull-right" type="submit">Next</a>
										<button class="btn btn-success pull-right" type="submit">Assign</button>
                                    </form>
                                </div>
								<div class="clearfix">&nbsp;</div>												
                            </div>
                     </div>
                     <div class="tab-pane <?php if(isset($tab)&& $tab==3){ echo "active";}?>" id="about">
							<div class="card ">
                                <div class="card-head">
                                     <header>Admitted Patient List</header>
                                  
                                </div>
                                <div class="card-body table-responsive">
                                    <table id="example4" class=" table table-bordered" style="width:100%;">
                                        <thead>
                                            <tr>
											
                                                <th>Patient ID</th>
												<th>Patient Name</th>
                                                <th>Ward Type </th>
                                                <th>Ward No </th>
                                                <th>Room Type</th>
                                                <th>Room No</th>
                                                <th>Bed No</th>
                                                <th>Date of Admit</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                         <tbody>										
										<?php if(isset($ip_patient_list)  && count($ip_patient_list)>0){ ?>
											<?php foreach($ip_patient_list as $list){ ?>
												<tr>
													<td><?php echo $list['pid']; ?></td>
													<td><?php echo $list['name']; ?></td>
													<td><?php echo $list['gender']; ?></td>
													<td><?php echo $list['age']; ?></td>
													<td><?php echo $list['resource_name']; ?></td>
													<td><?php echo $list['problem']; ?></td>
													<td><?php echo $list['create_at']; ?></td>
													<td class="valigntop">
														<div class="btn-group">
															<button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
																<i class="fa fa-angle-down"></i>
															</button>
															<ul class="dropdown-menu" role="menu">
																<li>
																	<a href="<?php echo base_url('ward_management/admit/'.base64_encode(2).'/'.base64_encode($list['pid']).'/'.base64_encode($list['b_id'])); ?>">
																		<i class="fa fa-edit"></i>Room/Bed </a>
																</li>
															   												
															</ul>
														</div>
													</td>
												</tr>
											<?php } ?>
										<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
								<div class="clearfix">&nbsp;</div>											
                     </div>                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="sucessmsg" style="display:none;"></div>

<script>
function get_bed_count(id){	
		if(id!=''){
			jQuery.ajax({
   					url: "<?php echo base_url('Ward_management/get_bedcount_list');?>",
   					data: {
   						b_id: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {						 
						//console.log(data);return false;
   						$('#bedcount_id').empty();  												
						//$('#bedcount_id').append("<option>Select</option>");
   						for(i=0; i<data.list.length; i++) { 																																			
							$('#bedcount_id').append('<div class="panel-body"> <ol class="seats" type="A"><li class="seat" > <input type="checkbox" id="1A'+i+'" /> <label for="1A'+i+'">Bed '+data.list[i].bed+'</label></ol></li></div>'); 							 						
						}							
   						//console.log(data);return false;
   					}   				
   			}); 				
		}
}

function get_floorno_list(id){	

		if(id!=''){
			jQuery.ajax({
   					url: "<?php echo base_url('Ward_management/get_roomno_list');?>",
   					data: {
   						dep_id: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						//console.log(data);return false;
   						$('#roomno_id').empty();
   						$('#roomno_id').append("<option>select</option>");
   						for(i=0; i<data.list.length; i++) {
   						$('#roomno_id').append("<option value="+data.list[i].w_r_n_id+">"+data.list[i].room_num+"</option>");                                               
   						}
   						//console.log(data);return false;
   					}  				
   				});				
			}
}

$(document).ready(function() {
    $('#example3').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
$(document).ready(function() {
    $('#example4').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
function get_department_list(id){
	
		if(id!=''){
			jQuery.ajax({
   					url: "<?php echo base_url('hospital/get_specialists_list');?>",
   					data: {
   						dep_id: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						//console.log(data);return false;
   						$('#specialist').empty();
   						$('#specialist').append("<option>select</option>");
   						for(i=0; i<data.list.length; i++) {
   							$('#specialist').append("<option value="+data.list[i].s_id+">"+data.list[i].specialist_name+"</option>");                      
                         
   						}
   						//console.log(data);return false;
   					}
   				
   				});
				
			}
			
}
			function get_doctor_list(id){
   				jQuery.ajax({
   					url: "<?php echo base_url('resources/get_spec_doctors_list');?>",
   					data: {
   						spec_id: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						//console.log(data);return false;
   						$('#doctor_id').empty();
   						$('#doctor_id').append("<option>select</option>");
   						for(i=0; i<data.list.length; i++) {
   							$('#doctor_id').append("<option value="+data.list[i].t_d_doc_id+">"+data.list[i].resource_name+"</option>");                      
                         
   						}
   						//console.log(data);return false;
   					}
   				
   				});
   	
   }

$(document).ready(function() {
    
       $('#add_appointment').bootstrapValidator({
   		fields: {
             
                patinet_name: {
                    validators: {
   					notEmpty: {
   						message: 'Patient Name is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Patient Name can only consist of alphanumeric, space and dot'
   					}
   				}
               },age: {
                    validators: {
   					notEmpty: {
   						message: 'age is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Age must be digits'
   					}
   				}
               },mobile: {
                    validators: {
   					notEmpty: {
   						message: 'Mobile Number is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'Mobile Number must be 10 to 14 digits'
   					}
   				}
               },
               department: {
                  validators: {
   					notEmpty: {
   						message: 'Department is required'
   					}
   				}
               },
               specialist: {
                   validators: {
   					notEmpty: {
   						message: 'Specialist is required'
   					}
   				}
               },
   			doctor_id: {
                   validators: {
   					notEmpty: {
   						message: 'Doctor is required'
   					}
   				}
               },
   			date: {
                   validators: {
   					notEmpty: {
   						message: 'Birth place is required'
   					}
   				}
               },time: {
                   validators: {
   					notEmpty: {
   						message: 'Time is required'
   					}
   				}
               }
   			}
   		      })
        
   });
   
   </script>
