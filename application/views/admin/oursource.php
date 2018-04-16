<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Our source List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Our source List</li>
            </ol>
         </div>
      </div>
	   <?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
   
         <div class="panel tab-border card-topline-green">
            <header class="panel-heading panel-heading-gray custom-tab ">
               <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="#home" data-toggle="tab" class="<?php if(isset($tab) && $tab ==''){ echo "active"; } ?>">Add Our source Lab</a>
                  </li>
                  <li class="nav-item"><a href="#about" data-toggle="tab" class="<?php if(isset($tab) && $tab ==1){ echo "active"; } ?>">Our source List Lab</a>
                  </li>
               </ul>
            </header>
            <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane <?php if(isset($tab) && $tab ==''){ echo "active"; } ?>" id="home">
				  <div class="container">
                     <div class="row">
					  <form action="<?php echo base_url('admin/addlab'); ?>" method="post" id="addlab" name="addlab" enctype="multipart/form-data">
                        <div class="col-md-12 ">
                           
						  
                              <div class="row">
                                 <div class="col-md-6">
									<label> Name</label>
										<input class="form-control" id="lab_name" name="lab_name" value="" type="text" placeholder="Name">
									</div>
									<div class="col-md-6">
									<label> Mobile Number</label>
										<input class="form-control" id="lab_mobile" name="lab_mobile" value="" type="text" placeholder=" Mobile Number">
									</div>
									<div class="col-md-6">
										<label> Address1</label>
											<textarea type="textarea" id="lab_add1" name="lab_add1" value="" class="form-control"  placeholder="Address1" ></textarea>
									</div>
										<div class="col-md-6">
										<label> Address2</label>
											<textarea type="textarea" id="lab_add2" name="lab_add2" value="" class="form-control"  placeholder="Address2" ></textarea>
									</div>
									
									<div class="col-md-6">
									<label> City</label>
										<input class="form-control" id="lab_city" name="lab_city" value="" type="text" placeholder="City">
									</div>
										<div class="col-md-6">
										<label> State</label>
										<input class="form-control" id="lab_state" name="lab_state" value="" type="text" placeholder="State">
									</div>
									<div class="col-md-6">
										<label> Zipcode</label>
										<input class="form-control" id="lab_zipcode" name="lab_zipcode" value="" type="text" placeholder="Zipcode">
									</div>
										<div class="col-md-6">
										<label> Other Details</label>
										<input class="form-control" id="lab_other_details" name="lab_other_details" value="" type="text" placeholder="Other Details">
									</div>
									 	<div class="col-md-6">
									<label> Lab Contact Number</label>
										<input class="form-control" id="lab_contatnumber" name="lab_contatnumber" type="text" placeholder="Lab Contact Number">
									</div>
										
									<div class="col-md-6">
									<label> Lab Email ID</label>
										<input class="form-control" id="lab_email" name="lab_email" type="text" placeholder="Lab Email ID">
									</div>
										<div class="col-md-6">
									<label> Lab Password</label>
										<input class="form-control" id="lab_password" name="lab_password" type="password" placeholder="Password">
									</div>
										<div class="col-md-6">
									<label> Lab Confirm Password</label>
										<input class="form-control" id="lab_cinformpaswword" name="lab_cinformpaswword" type="password" placeholder="Confirm Password">
									</div>
										<div class="col-md-6">
									<label> Lab Photo</label>
										<input class="form-control" id="lab_photo" name="lab_photo" type="file" placeholder="lab Photo">
									</div>
									
                              </div>
                           </div>
                           <div class="clearfix">&nbsp;</div>
						   <div class="col-sm-10">
                           <button type="submit" class="btn btn-sm btn-success pull-right" type="button">Add Lab</button>
                           </div><div class="clearfix">&nbsp;</div>
                        </div>
						</form>
                     </div>
                  </div>
                  <div class="tab-pane <?php if(isset($tab) && $tab ==1){ echo "active"; } ?>" id="about">
                     <div class="container">
                        <div class="row">
                            <div class="card-body col-md-12">
								<?php if(count($resource_list)>0){ ?>
                                    <table id="saveStage" class="table table-striped table-bordered table-hover  order-column" style="width:100%;">
                                        <thead>
                                            <tr>
												<th>Role</th>
												<th>Name</th>
												<th>Email Address</th>
                                                <th>Contact Number </th>
                                                <th>Create date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($resource_list as $list){ ?>
                                            <tr>
                                                <td><?php echo htmlentities($list['r_name']); ?></td>
                                                <td><?php echo htmlentities($list['resource_name']); ?></td>
                                                <td><?php echo htmlentities($list['resource_email']); ?></td>
                                                <td><?php echo htmlentities($list['resource_contatnumber']); ?></td>
                                                <td><?php echo htmlentities($list['r_created_at']); ?></td>
												<td><?php if($list['r_status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="<?php echo base_url('hospital/resourcestatus/'.base64_encode($list['r_id']).'/'.base64_encode($list['r_status'])); ?>">
                                                                    <i class="fa fa-edit"></i><?php if($list['r_status']==0){ echo "Active";}else{ echo "Deactive"; } ?> </a>
                                                            </li> 
															<li>
                                                                <a href="<?php echo base_url('hospital/resourceview/'.base64_encode($list['r_id'])); ?>">
                                                                    <i class="fa fa-edit"></i>View</a>
                                                            </li> 
															<li>
                                                                <a href="<?php echo base_url('hospital/resourceedit/'.base64_encode($list['r_id'])); ?>">
                                                                    <i class="fa fa-edit"></i>Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url('hospital/resourcedelete/'.base64_encode($list['r_id'])); ?>">
                                                                    <i class="fa fa-trash-o"></i>Delete</a>
                                                            </li>
                                                            
                                                            
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
										<?php } ?>
											
                                            
                                        </tbody>
                                    </table>
								<?php }else{ ?>
								<div>No data Available</div>
								<?php } ?>
								
                                </div>
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix">&nbsp;</div>
       
      </div>
   </div>
</div>
<script>
$(document).ready(function() {
    $('#addlab').bootstrapValidator({
        
        fields: {
            
            lab_name: {
                 validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumaric, space and dot'
					}
				}
            },
			 lab_mobile: {
                validators: {
					notEmpty: {
						message: 'landline Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'landline Number must be 10 to 14 digits'
					}
				
				}
            },lab_contatnumber: {
              validators: {
					notEmpty: {
						message: 'Contact Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Contact Number must be 10 to 14 digits'
					}
				
				}
            },lab_email: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },
			lab_password: {
                validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
            },
           
            lab_cinformpaswword: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'lab_password',
						message: 'password and confirm Password do not match'
					}
					}
				},
			lab_add1: {
                 validators: {
					notEmpty: {
						message: 'Address1 is required'
					},
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address wont allow <> [] = % '
					}
                }
            },lab_add2: {
                 validators: {
					notEmpty: {
						message: 'Address1 is required'
					},
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address wont allow <> [] = % '
					}
                }
            },
			 lab_city: {
                 validators: {
					notEmpty: {
						message: 'City is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'City can only consist of alphanumaric, space and dot'
					}
				
				}
            }, lab_state: {
                  validators: {
					notEmpty: {
						message: 'State is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'State can only consist of alphanumaric, space and dot'
					}
				
				}
            },lab_zipcode: {
                  validators: {
					notEmpty: {
						message: 'Zipcode is required'
					},
					stringLength: {
                        max: 7,
                        message: 'Zipcode  must be less than 7 characters'
                    },
					regexp: {
					regexp: /^[0-9]{5,7}$/,
					message: 'Zipcode  must be  5 to 7 characters'
					}
				}
            },lab_photo: {
                   validators: {
					 regexp: {
					regexp: /\.(jpe?g|png|gif)$/i,
					message: 'Uploaded file is not a valid image. Only JPG, PNG and GIF files are allowed'
					}
				}
            }
            }
        })
     
});
</script>