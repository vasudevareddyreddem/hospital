<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Treatment List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Treatment List</li>
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
                  <li class="nav-item"><a href="#home" data-toggle="tab" class="<?php if(isset($tab) && $tab ==''){ echo "active"; } ?>">Add Treatment </a>
                  </li>
                  <li class="nav-item"><a href="#about" data-toggle="tab" class="<?php if(isset($tab) && $tab ==1){ echo "active"; } ?>">Treatment  List</a>
                  </li>
               </ul>
            </header>
            <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane <?php if(isset($tab) && $tab ==''){ echo "active"; } ?>" id="home">
				  <div class="container">
                     
					  <form action="<?php echo base_url('hospital/resourcepost'); ?>" method="post" id="addresource" name="addresource" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<label> Name</label>
								<input class="form-control" id="resource_name" name="resource_name" value="" type="text" placeholder="Name">
								</div>
								<div class="col-md-2">
								<label>&nbsp;</label>
								<button type="submit" class="btn btn-sm btn-success pull-right" type="button">Add Treatment</button>
								</div>	
							</div>
							</form>
						
					
                     </div>
                  </div>
                  <div class="tab-pane <?php if(isset($tab) && $tab ==1){ echo "active"; } ?>" id="about">
                     <div class="container">
                        <div class="row">
                            <div class="card-body col-md-12">
								<?php if(count($resource_list)>0){ ?>
                                    <table id="saveStage" class="display" style="width:100%;">
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
    $('#addresource').bootstrapValidator({
        
        fields: {
            
            resource_name: {
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
			 resource_mobile: {
                validators: {
					notEmpty: {
						message: 'landline Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'landline Number must be 10 to 14 digits'
					}
				
				}
            },resource_contatnumber: {
              validators: {
					notEmpty: {
						message: 'Contact Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Contact Number must be 10 to 14 digits'
					}
				
				}
            },designation: {
              validators: {
					notEmpty: {
						message: 'Select a Designation'
					}
				
				}
            },resource_email: {
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
			resource_password: {
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
           
            resource_cinformpaswword: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'resource_password',
						message: 'password and confirm Password do not match'
					}
					}
				},
			resource_add1: {
                 validators: {
					notEmpty: {
						message: 'Address1 is required'
					},
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address1 wont allow <> [] = % '
					}
                }
            },resource_add2: {
                 validators: {
					notEmpty: {
						message: 'Address1 is required'
					},
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address1 wont allow <> [] = % '
					}
                }
            },
			 resource_city: {
                 validators: {
					notEmpty: {
						message: 'City is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'City can only consist of alphanumaric, space and dot'
					}
				
				}
            }, resource_state: {
                  validators: {
					notEmpty: {
						message: 'State is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'State can only consist of alphanumaric, space and dot'
					}
				
				}
            },resource_zipcode: {
                  validators: {
					notEmpty: {
						message: 'Zipcode is required'
					},
					stringLength: {
                        max: 6,
                        message: 'Zipcode  must be less than 10 characters'
                    },
					regexp: {
					// regexp: /^[0-9A-Za-z ]{5,10}$/,
					 regexp: /^[0-9][1-9]([0-9][0-9][0-9])|[1-9][0-9]([0-9][0-9][0-9])$/ ,
					message: 'Zipcode is not valid, Should be like 32216.'
					}
				}
            },resource_photo: {
                   validators: {
					 regexp: {
					regexp: /\.(jpe?g|png|gif)$/i,
					message: 'Uploaded file is not a valid image. Only JPG, PNG and GIF files are allowed'
					}
				}
            },resource_document: {
                   validators: {
					regexp: {
					regexp: "(.*?)\.(docx|doc|pdf|xlsx|xls)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
            },resource_bank_holdername: {
                 validators: {
					notEmpty: {
						message: 'Bank Holder Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Bank Holder Name can only consist of alphanumaric, space and dot'
					}
				}
            },resource_bank_accno: {
                validators: 
						{
						notEmpty: { message: 'Bank Account is required'
					    },
						regexp:{
					     regexp:  /^[0-9]{9,16}$/,
					     message:'Bank Account  must be 9 to 16 digits'
					    }
					}
				},
				resource_ifsc_code: {
                validators: {
					notEmpty: {
						message: 'IFSC Code is required'
					},
					regexp: {
					 regexp: /^[A-Za-z0-9]{4}\d{7}$/,
					 message: 'IFSC Code must be alphanumaric'
					}
				}
				},
				resource_other_document: {
                validators: {
					validators: {
					regexp: {
					regexp: "(.*?)\.(docx|doc|pdf|xlsx|xls)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf files are allowed'
					}
				}
				}
				},
			 resource_other_details: {
                  validators: {
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address1 wont allow <> [] = % '
					}
                }
            }
            }
        })
     
});
</script>