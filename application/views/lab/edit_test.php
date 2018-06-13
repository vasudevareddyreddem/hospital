<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Edit Lab Test</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Edit Lab Test</li>
            </ol>
         </div>
      </div>
	  <div class="panel tab-border card-topline-green">
            
            <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="home">
				  <div class="container">
                     
					  <form action="<?php echo base_url('lab/updatetest'); ?>" method="post" id="addtreatment" name="addtreatment" enctype="multipart/form-data">
							<div class="row">
							<input type="hidden" name="t_id" id="t_id" value="<?php echo isset($tet_details['t_id'])?$tet_details['t_id']:''; ?>">
								<div class="col-md-6">
									<label> Test Type</label>
									<select class="form-control" name="test_type" id="test_type">
									<option value="">Select</option>
									<?php if(isset($test_type_list) && count($test_type_list)>0){ ?>
										<?php foreach($test_type_list as $list){ ?>
											<?php if($list['id']==$tet_details['test_type']){ ?>
												<option value="<?php echo $list['id']; ?> " selected><?php echo $list['type_name']; ?> </option>
											<?php }else{?>
												<option value="<?php echo $list['id']; ?> "><?php echo $list['type_name']; ?> </option>
											<?php } ?>
											
										<?php } ?>
									<?php } ?>
									</select>
								</div>
								<div class="col-md-6">
									<label>Type</label>
									<select class="form-control" name="type" id="type">
									<option value="">Select</option>
									<option value="Lab" <?php if($tet_details['type']=='Lab'){ echo "selected"; } ?>>Lab</option>
									<option value="Radiology" <?php if($tet_details['type']=='Radiology'){ echo "selected"; } ?>>Radiology</option>
									</select>
								</div>
								<div class="col-md-6">
									<label> Name</label>
								<input class="form-control" id="test_name" name="test_name" value="<?php echo isset($tet_details['t_name'])?$tet_details['t_name']:''; ?>" type="text" placeholder="Name">
								</div>
								<div class="col-md-6">
									<label> Duration</label>
									<input class="form-control" id="duration" name="duration" value="<?php echo isset($tet_details['duration'])?$tet_details['duration']:''; ?>" type="text" placeholder="Duration">
								</div>
								<div class="col-md-6">
									<label> Amount</label>
									<input class="form-control" id="amuont" name="amuont" value="<?php echo isset($tet_details['amuont'])?$tet_details['amuont']:''; ?>" type="text" placeholder="Amount">
								</div>
								<div class="col-md-6">
									<label> Short Form</label>
									<input type="text" class="form-control" id="short_form"  name="short_form" placeholder="Enter Short Form" value="<?php echo isset($tet_details['t_short_form'])?$tet_details['t_short_form']:''; ?>" required>
								</div>
								<div class="col-md-6">
									<label>Description</label>
									<input type="text" class="form-control" id="description"  name="description" placeholder="Enter Description" value="<?php echo isset($tet_details['t_description'])?$tet_details['t_description']:''; ?>" required>
								</div>
								<div class="">
								<label>&nbsp;</label>
								</div>	
							</div>
							<button type="submit" class="btn btn-sm btn-success pull-right" type="button">Update Test</button>

							</form>
						
					
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
					message: 'Name can only consist of alphanumeric, space and dot'
					}
				}
            },duration: {
                 validators: {
					notEmpty: {
						message: 'Duration is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Duration can only consist of alphanumeric, space and dot'
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
					message: 'Name can only consist of alphanumeric, space and dot'
					}
				}
            },description: {
                 validators: {
					notEmpty: {
						message: 'Description is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Description can only consist of alphanumeric, space and dot'
					}
				}
            }
            }
        })
     
});
</script>