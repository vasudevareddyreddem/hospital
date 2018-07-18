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
            <div class="panel tab-border card-topline-yellow">
               <header class="panel-heading panel-heading-gray custom-tab ">
                  <ul class="nav nav-tabs x-scrool">
				   
					 <li style="border-right:2px solid #fff" class="nav-item"><a href="#aboutop" data-toggle="tab" class="<?php if(isset($tab)&& $tab==''){ echo "active";}?>"> Book Appointments</a>
                     </li>
					 
                      <li style="border-right:2px solid #fff;position:relative" class="nav-item"><a href="#home" data-toggle="tab" class=" <?php if(isset($tab)&& $tab==2){ echo "active";}?>">App Appointments</a>
					 <div style="position:absolute;top:-8px;right:5px; background:#003f7f;color:#fff; border-radius:5px;padding:2px 6px;font-size:10px;">5
					 </div>
                     </li>
                     <li class="nav-item "><a href="#about" data-toggle="tab" class="<?php if(isset($tab)&& $tab==3){ echo "active";}?>">Appointments List</a>
                     </li>
                   
                  </ul>
               </header>
               <div class="panel-body">
                  <div class="tab-content">
				   <div class="tab-pane  <?php if(isset($tab) && $tab==''){ echo "active";}?>" id="aboutop">
                        <div class="card ">
                           <div class="card-head">
                              <header>Patients Details</header>
                             
                           </div>
                           <div class="card-body ">
                           <div class="card-body " id="bar-parent" style="margin-top:30px">
                             
									
									 <form name="add_appointment" id="add_appointment" action="<?php echo base_url('appointments/add'); ?>" method="post" class="pad30 form-horizontal" >
                                           
                                            <div class="row">
												<div class="form-group col-md-6">
												   <label for="email">Patient Name</label>
													<input type="text" name="patinet_name" id="patinet_name" class="form-control" placeholder="Enter name" >
												</div>
												<div class="form-group col-md-6">
												   <label for="email">Age</label>
													<input type="text" name="age" id="age" class="form-control" placeholder="Enter Age" >
												</div>
												<div class="form-group col-md-6">
												   <label for="email">Mobile</label>
													<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number" >
												</div>
												<div class="form-group col-md-6">
												   <label for="email">Department</label>
													<select class="form-control" id="department" onchange="get_department_list(this.value);" name="department">
														<option value="">Select</option>
														<?php foreach($departments_list as $list){ ?>
															<option value="<?php echo $list['t_id']; ?>"><?php echo $list['t_name']; ?></option>
														<?php } ?>
													
													</select>
												</div>
												<div class="form-group col-md-6">
												   <label for="email">Specialist</label>
													<select class="form-control" id="specialist" name="specialist" onchange="get_doctor_list(this.value);">
													
													</select>
												</div>
												<div class="form-group col-md-6">
												   <label for="email"> Doctor </label>
													<select class="form-control" id="doctor_id" name="doctor_id">
													
													</select>
												</div>
												  <div class="form-group col-md-6">
                                                   <label class="">Booking Date </label>
                                                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                      <input class="form-control" size="16" type="text" id="date" name="date" value="">
                                                      <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                   </div>
                                                </div> 
												<div class="form-group col-md-6">
                                                   <label class="">Booking Time </label>
												   <?php $time_list=array("12:00 am","12:30 am","01:00 am","01:30 am","02:00 am","02:30 am","03:00 am","03:30 am","04:00 am","04:30 am","05:00 am","05:30 am","06:00 am","06:30 am","07:00 am","07:30 am","08:00 am","08:30 am","09:00 am","09:30 am","10:00 am","10:30 am","11:00 am","11:30 am","12:00 pm","12:30 pm","01:00 pm","01:30 pm","02:00 pm","02:30 pm","03:00 pm","03:30 pm","04:00 pm","04:30 pm","05:00 pm","05:30 pm","06:00 pm","06:30 pm","07:00 pm","07:30 pm","08:00 pm","08:30 pm","09:00 pm","09:30 pm","10:00 pm","10:30 pm","11:00 pm","11:30 pm"); ?>
													<select class="form-control" id="time" name="time">
														<option value="">Select</option>
														<?php foreach($time_list as $list){ ?>
															<option value="<?php echo $list; ?>"><?php echo $list; ?></option>
														<?php } ?>
													
													</select>
                                                </div>
											</div>
											<button type="submit" class="btn btn-primary">Book Appointment</button>
											</form>
                           </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane <?php if(isset($tab)&& $tab==2){ echo "active";}?>" id="home">
                        <div class="card ">
                           <div class="card-head">
                              <header>App Patients Details</header>
                             
                           </div>
                           <div class="card-body ">
                           <div class="card-body table-responsive" id="bar-parent" style="margin-top:30px">
                             <table class="table table-striped table-bordered " id="example4">
							 <thead>
								<tr>
								   <th> Patient Name </th>
								   <th> Age</th>
								   <th> Mobile </th>
								   <th> Department </th>
								   <th> Specialist </th>
								   <th> Doctor </th>
								   <th > Booking Date </th>
								   <th> Booking Time </th>
								   <th> Action </th>
								</tr>
							 </thead>
							 <tbody>
								<tr class="">
								   <td>Bayapureddy</td>
								   <td>24</td>
								   <td>8500226782</td>
								   <td>Department</td>
								   <td>Specialist</td>
								   <td>Doctor</td>
								   <td > <div class="form-group">
                                                   <label class="">Booking Date </label>
                                                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                      <input style="width:100px;" class="form-control" size="16" type="text"  name="dob" value="2018-07-06  ">
                                                      <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                   </div>
                                                </div>
									</td>
								   <td>
									<div class="form-group ">
                                                   <label class="">Booking Time </label>
                                                   <div class="input-group date form_time " data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                                <input class="form-control" style="width:100px;" size="16" type="text" value="09:45">
                                               
                                                <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                            </div>
                                                </div>
								   </td>
								   <td><div class="btn-group">
                                             <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                             <i class="fa fa-angle-down"></i>
                                             </button>
                                             <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                   <a href="#">
                                                   <i class="icon-docs"></i> Accept </a>
                                                </li>
												
													<li>
                                                    <a href="#">
                                                    <i class="icon-docs"></i> Reject  </a>
													</li>
												
                                             </ul>
                                          </div></td>
								   
								</tr>
							 </tbody>
							</table>
									
									
                           </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane <?php if(isset($tab)&& $tab==3){ echo "active";}?>" id="about">
                        <div class="card">
                           <div class="card-head">
                              <header>Patients List</header>
                             
                           </div>
                           <div class="card-body table-responsive ">
								<table class="table table-striped table-bordered " id="example3">
							 <thead>
								<tr>
								   <th style="display:none;"> id</th>
								   <th> Patient Name </th>
								   <th> Age</th>
								   <th> Mobile </th>
								   <th> Department </th>
								   <th> Specialist </th>
								   <th> Doctor </th>
								   <th > Booking Date </th>
								   <th> Booking Time </th>
								   <th> Action </th>
								</tr>
							 </thead>
							 <tbody>
							 <?php foreach($appointment_list as $list){ ?>
								<tr class="">
								   <td style="display:none;"><?php echo $list['id']; ?></td>
								   <td><?php echo $list['patinet_name']; ?></td>
								   <td><?php echo $list['age']; ?></td>
								   <td><?php echo $list['mobile']; ?></td>
								   <td><?php echo $list['t_name']; ?></td>
								   <td><?php echo $list['specialist_name']; ?></td>
								   <td><?php echo $list['resource_name']; ?></td>
								   <td> <?php echo $list['date']; ?></td>
								   <td><?php echo $list['time']; ?> </td>
								   <td>
									   <a href="<?php echo base_url('resources/desk/'.base64_encode(0).'/'.base64_encode('appointment').'/'.base64_encode($list['id'])); ?>" class="btn btn-primary btn-xs">
											<i class="fa fa-eye"></i>
										</a>
								   </td>
								   
								</tr>
							 <?php } ?>
							 </tbody>
							</table>
                           </div>
                        </div>
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