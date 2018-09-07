<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Executive</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Executive</li>
            </ol>
         </div>
      </div>
   
         <div class="panel tab-border card-topline-green">
            <header class="panel-heading panel-heading-gray custom-tab ">
               <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="#home" data-toggle="tab" class="active">Add Executive</a>
                  </li>
                  <li class="nav-item"><a href="#about" data-toggle="tab" class="<?php if(isset($tab) && $tab ==1){ echo "active"; } ?>">Executive List</a>
                  </li>
               </ul>
            </header>
            <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="home">
				  <div class="container">
                     
					  <form action="<?php echo base_url('admin/cardnumbersellerpost'); ?>" method="post" id="add_seller" name="add_seller" enctype="multipart/form-data">
								<div class="row">
								<div class="col-md-6">
									<label> Name</label>
								<input class="form-control" id="name" name="name" value="" type="text" placeholder="Name">
								</div>
								
								<div class="col-md-6">
									<label>Mobile</label>
								<input class="form-control" id="mobile" name="mobile" value="" type="text" placeholder="Mobile">
								</div>
								<div class="col-md-6">
									<label>Email Address</label>
								<input class="form-control" id="email_id" name="email_id" value="" type="text" placeholder="Email Address">
								</div>
								<div class="col-md-6">
									<label>Password</label>
								<input class="form-control" id="password" name="password" value="" type="password" placeholder="Password">
								</div>
								<div class="col-md-6">
									<label> Confirm Password</label>
								<input class="form-control" id="confirmpassword" name="confirmpassword" value="" type="password" placeholder="Confirm Password">
								</div>
								<div class="col-md-6">
									<label> Address</label>
								<input class="form-control" id="address" name="address" value="" type="text" placeholder="Address">
								</div>
								<div class="col-md-6">
									<label> Bank Account Number</label>
									<input class="form-control" id="bank_account" name="bank_account" value="" type="text" placeholder="Bank Account Number">
								</div>
								<div class="col-md-6">
									<label> Bank Name</label>
									<input class="form-control" id="bank_name" name="bank_name" value="" type="text" placeholder="Bank Name">
								</div>
								<div class="col-md-6">
									<label> Bank Ifsc Code</label>
									<input class="form-control" id="ifsccode" name="ifsccode" value="" type="text" placeholder="Bank Ifsc Code">
								</div>
								<div class="col-md-6">
									<label> Bank Account Holder Name</label>
									<input class="form-control" id="bank_holder_name" name="bank_holder_name" value="" type="text" placeholder="Bank Account Holder Name">
								</div>
								<div class="col-md-6">
									<label> Kyc</label>
									<input class="form-control" id="kyc" name="kyc" value="" type="file" placeholder="Bank Account Holder Name">
								</div>
								<div class="col-md-6">
									<label>Location</label>
									<input class="form-control" id="" name="" value="" type="text" placeholder="enter Location">
								</div>
								
								</div><br>
								<div class="">
								<label>&nbsp;</label>
								<button type="submit" class="btn btn-sm btn-success pull-right" type="button">Add</button>
								</div>	
							
							</form>
						
					
                     </div>
                  </div>
                  <div class="tab-pane" id="about">
                     <div class="container">
                        <div class="row">
                            <div class="col-md-12">
								<div class="row">
                                    <div class="col-md-6">
                                            <label>Executive Name</label>
                                            <select class="form-control">
                                                <option>XXXXX</option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Location</label>
                                            <select class="form-control">
                                                <option>XXXXX</option>
                                                <option></option>
                                                <option></option>
                                            </select>
                                        </div>
                                </div>
                            <div class="card card-topline-aqua">
                                
                                <div class="card-body ">
                                    <table id="saveStage" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Date</th>
												<th>Total Patients</th>
                                                <th>Total Hospitals</th>
                                                <th>Received Patients</th>
                                                <th>Not Received Patients</th>
                                                <th>Login Time</th>
                                                <th>Logout Time</th>
                                                <th>Patient List</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                            </tr>
											<tr>
                                                <td>2</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                                <td>xxxxx</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
								<div class="clearfix">&nbsp;</div>
                                <div class="text-center">
                                    <div class="col-md-12">
                                        <a href="financial.php" class="btn btn-info">Save</a>
                                        <a href="#"type="button" class="btn btn-default">Cancel</a>
                                    </div>
                                </div>
                            </div>
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
    $('#assign_seller').bootstrapValidator({
        
        fields: {
            
            seller_id: {
                 validators: {
					notEmpty: {
						message: 'Seller Name is required'
					}
				}
            },
			 card_number_from: {
                validators: {
					notEmpty: {
						message: 'Card Numbers From is required'
					}
				
				}
            },card_number_to: {
                   validators: {
					 notEmpty: {
						message: 'Card Numbers To is required'
					}
				}
				}
            }
        })
     
});
$(document).ready(function() {
    $('#add_seller').bootstrapValidator({
        
        fields: {
            
            name: {
                 validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumeric, space and dot'
					}
				}
            },
			 mobile: {
                validators: {
					notEmpty: {
						message: 'Mobile Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Mobile number must be 10 to 14 digits'
					}
				
				}
            },email_id: {
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
			password: {
                validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters. '
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
            },
           
            confirmpassword: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'password',
						message: 'Password and confirm Password do not match'
					}
					}
				},
			address: {
                 validators: {
					notEmpty: {
						message: 'Address is required'
					},
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address wont allow <> [] = % '
					}
                }
            },bank_name: {
                 validators: {
					
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Bank Account Number wont allow <> [] = % '
					}
                }
            },bank_holder_name: {
                 validators: {
					
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Bank Account Holder Name wont allow <> [] = % '
					}
                }
            },bank_account:
          {
            validators: 
            {
				
              regexp: 
              {
					     regexp:  /^[0-9]{9,16}$/,
					     message:'Bank Account  must be 9 to 16 digits'
					    }
            }
          },
         account_name: {
          validators: {
					
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Account Name can only consist of alphanumaric, space and dot'
					}
				}
        }, 
		ifsccode: {
          validators: {
					
					regexp: {
					 regexp: /^[A-Za-z0-9]{4}\d{7}$/,
					 message: 'IFSC Code must be alphanumaric'
					}
				}
        },
			kyc: {
                   validators: {
					 
					 regexp: {
					regexp: /\.(jpe?g|png|gif|pdf|doc|docx)$/i,
					message: 'Uploaded file is not a valid image. Only pdf,doc,docx,JPG,PNG and GIF files are allowed'
					}
				}
            }
            }
        })
     
});
</script>
<script>
  $(function () {
    $("#example5").DataTable();
  
  });
</script>