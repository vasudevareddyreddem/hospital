<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Add Lab Test</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Add Lab Test</li>
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
                  <li class="nav-item"><a href="#home" data-toggle="tab" class="<?php if(isset($tab) && $tab ==''){ echo "active"; } ?>">Add Lab Test </a>
                  </li>
                  <li class="nav-item"><a href="#about" data-toggle="tab" class="<?php if(isset($tab) && $tab ==1){ echo "active"; } ?>">Test  List</a>
                  </li>
               </ul>
            </header>
            <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane <?php if(isset($tab) && $tab ==''){ echo "active"; } ?>" id="home">
				  <div class="container">
                     
					  <form action="<?php echo base_url('lab/addtest'); ?>" method="post" id="addtreatment" name="addtreatment" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<label> Test Type</label>
									<select class="form-control" name="test_type" id="test_type">
									<option value="">Select</option>
									<?php if(isset($test_type_list) && count($test_type_list)>0){ ?>
										<?php foreach($test_type_list as $list){ ?>
										<option value="<?php echo $list['id']; ?> "><?php echo $list['type_name']; ?> </option>
										<?php } ?>
									<?php } ?>
									</select>
								</div>
								<div class="col-md-6">
									<label>Type</label>
									<select class="form-control" name="type" id="type">
									<option value="">Select</option>
									<option value="Lab">Lab</option>
									<option value="Radiology">Radiology</option>
									</select>
								</div>
								<div class="col-md-6">
									<label> Name</label>
								<input class="form-control" id="test_name" name="test_name" value="" type="text" placeholder="Name">
								</div>
								<div class="col-md-6">
									<label> Duration</label>
									<input class="form-control" id="duration" name="duration" value="" type="text" placeholder="Duration">
								</div>
								<div class="col-md-6">
									<label> Amount</label>
									<input class="form-control" id="amuont" name="amuont" value="" type="text" placeholder="Amount">
								</div>
								<div class="col-md-6">
									<label> Short Form</label>
									<input type="text" class="form-control" id="short_form"  name="short_form" placeholder="Enter Short Form" value="" required>
								</div>
								<div class="col-md-6">
									<label>Description</label>
									<input type="text" class="form-control" id="description"  name="description" placeholder="Enter Description" value="" required>
								</div>
								<div class="">
								<label>&nbsp;</label>
								</div>	
							</div>
															<button type="submit" class="btn btn-sm btn-success pull-right" type="button">Add Test</button>

							</form>
						
					
                     </div>
                  </div>
                  <div class="tab-pane <?php if(isset($tab) && $tab ==1){ echo "active"; } ?>" id="about">
                     <div class="container">
                        <div class="row">
                            <div class="card-body col-md-12 table-responsive">
								<?php if(count($labtest_list)>0){ ?>
                                    <table id="saveStage" class="table table-striped table-bordered table-hover  order-column" style="width:100%;">
                                        <thead>
                                            <tr>
												<th>Test Type Name</th>
												<th>Type</th>
												<th> Test Name</th>
												<th>Duration</th>
												<th>Amount</th>
												<th>Short Form</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($labtest_list as $list){ ?>
                                            <tr>
                                                <td><?php echo htmlentities($list['type_name']); ?></td>
                                                <td><?php echo htmlentities($list['type']); ?></td>
                                                <td><?php echo htmlentities($list['t_name']); ?></td>
                                                <td><?php echo htmlentities($list['duration']); ?></td>
                                                <td><?php echo htmlentities($list['amuont']); ?></td>
                                                <td><?php echo htmlentities($list['t_short_form']); ?></td>
                                                <td><?php echo htmlentities($list['t_description']); ?></td>
												<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
												<td><a href="<?php echo base_url('lab/teststatus/'.base64_encode($list['t_id']).'/'.base64_encode($list['status'])); ?>">
                                                         <?php if($list['status']==0){ echo "Active";}else{  echo "Deactive";}?>  </a> |
												<a href="<?php echo base_url('lab/deletelab/'.base64_encode($list['t_id'])); ?>">Delete</a>
                                                </td>                                               
                                            </tr>
										<?php } ?>
											
                                            
                                        </tbody>
                                    </table>
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
    $('#addtreatment').bootstrapValidator({
        
        fields: {
            
            test_type: {
                 validators: {
					notEmpty: {
						message: 'Test type is required'
					}
				}
            },
			type: {
                 validators: {
					notEmpty: {
						message: 'Type is required'
					}
				}
            },test_name: {
                 validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumaric, space and dot'
					}
				}
            },duration: {
                 validators: {
					notEmpty: {
						message: 'Duration is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Duration can only consist of alphanumaric, space and dot'
					}
				}
            },
			amuont: {
                 validators: {
					notEmpty: {
						message: 'Amuont is required'
					},
					regexp: {
					regexp: /^[0-9. ]*$/,
					message: 'Amuont can only consist of digits and dot'
					}
				}
            },short_form: {
                 validators: {
					notEmpty: {
						message: 'Short Form is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumaric, space and dot'
					}
				}
            },description: {
                 validators: {
					notEmpty: {
						message: 'Description is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Description can only consist of alphanumaric, space and dot'
					}
				}
            }
            }
        })
     
});
</script>