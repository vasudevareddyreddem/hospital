<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Treatments List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Treatments List</li>
            </ol>
         </div>
      </div>
							<div class="panel tab-border card-topline-green">
										<header class="panel-heading panel-heading-gray custom-tab ">
											<ul class="nav nav-tabs">
												<li class="nav-item"><a href="#home" data-toggle="tab" class="active">Medication</a>
												</li>
												<li class="nav-item"><a href="#about" data-toggle="tab">Investigation</a>
												</li>
											</ul>
										</header>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home">
                                           <div class="row">	
											   <div class="col-md-12 ">	
													
													<div class="container">
									<div class="control-group" id="fields">
										<label class="control-label" for="field1"><strong>Comments</strong></label>
										<div class="controls"> 
											<form role="form" autocomplete="off">
												<div class="entry input-group ">
													<input class="form-control" type="text" placeholder="filedone"> &nbsp;
													<input class="form-control" type="text" placeholder="filedone">	&nbsp; <input class="form-control" type="text" placeholder="filedone">
													
													<span class="input-group-btn">
														<button class="btn btn-success btn-add" type="button">
															<span class="glyphicon glyphicon-plus">+</span>
														</button>
													</span>
												</div>
											</form>
										<br>
									   
										</div>
									</div>
									</div>
														<div class="clearfix">&nbsp;</div>
															<button class="btn btn-sm btn-warning" type="button">Clear</button>
															<button class="btn btn-sm btn-info" type="button">View Prescription</button>
															<button class="btn btn-sm btn-success" type="button">Add Prescription</button>
														<div class="clearfix">&nbsp;</div>
													</div>
													</div>
													</div>
													
											
                                        <div class="tab-pane" id="about">

													
													<div class="container">
													<div class="row">
													<div class="col-md-6">
														<label>Investigation type</label>									
														<select class="form-control  ">
															<option >Select</option>
															<option >lab  </option>
															<option >Radiology</option>
														</select>
													</div>
												<div class="form-group col-md-6">
											  <label for="email">Search</label><br>
												<button data-toggle="modal" data-target="#searchmodal" class="btn btn-sm btn-warning">Search</button>
											
											</div>
											<div class="form-group col-md-6">
											  <label for="email">Hospital Representative Contact Number</label>
											  
											 <div class="row">
											 
											 <div class="col-md-12 row">
											 <div class="col-md-4">
											 <select class="form-control">
												<option>Text code	</option>
												<option>+91</option>
												<option>+91</option>
												<option>+91</option>
												<option>+91</option>
											 </select>
											 </div>
											 <div class="col-md-8">
												<input type="text" class="form-control"  placeholder="Enter text name" >
											 </div>
											</div>
											</div>
											</div>
													<div class="col-md-6">
														<label>Frequency</label>									
														<input type="text" class="form-control"  placeholder="Enter text Frequency" >
													</div>
													<div class="col-md-6">
														<label>Priority</label>									
														<select class="form-control  ">
															<option >Select Priority </option>
															<option >Low</option>
															<option >Medium </option>
															<option >High</option>
															
														</select>
													</div>
													
														<div class="col-md-6">
														<label> From</label>
															<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
																<input class="form-control"  type="text" value="">
																
																<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
															</div>
															<input class ="form-control" type="hidden" id="dtp_input2" value="" />
														</div>	
														<div class="col-md-6">
														<label> To</label>
															<div class="input-group date form_date col-md-12" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
																<input class="form-control"  type="text" value="">
																
																<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
															</div>
															<input class ="form-control" type="hidden" id="dtp_input2" value="" />
														</div>	
														<div class="col-md-6">
															<label>  Associate diagnosis</label>
															<input class="form-control" type="text" placeholder="Enter  Associate diagnosis">
														
														</div>
														<div class="col-md-6">
															<label>  Associate problems</label>
															<input class="form-control" type="text" placeholder="Enter  Associate diagnosis">
														
														</div>
														
														
													
													
                                        </div>
										<br/>
										
										<button class="btn btn-sm btn-warning" type="button">Clear</button>
															<button class="btn btn-sm btn-info" type="button">View Investigation</button>
															<button class="btn btn-sm btn-success" type="button">Add Investigation</button>
                                    </div>
                             
				                    
				               
				               
				              
				            </div>
				        </div>
			
                                    
                                </div>
								<div class="clearfix">&nbsp;</div>
												
                            </div>
   </div>
</div>
<script>
			$(function() {
  $(".expand").on( "click", function() {
    // $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});
</script>
<!--script for add row comment-->
<script>
		$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus">-</span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});

</script>
<script>
$(document).ready(function() {
  $("#select2insidemodal").select2({
    dropdownParent: $("#myModal")
  });
});

</script>
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