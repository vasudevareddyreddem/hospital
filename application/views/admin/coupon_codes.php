<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Previlege card List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Previlege card List</li>
            </ol>
         </div>
      </div>
   
         <div class="panel tab-border card-topline-green">
            <header class="panel-heading panel-heading-gray custom-tab ">
               <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="#home" data-toggle="tab" class="<?php if(isset($tab) && $tab ==''){ echo "active"; } ?>">Add Previlege card </a>
                  </li>
                  <li class="nav-item"><a href="#about" data-toggle="tab" class="<?php if(isset($tab) && $tab ==1){ echo "active"; } ?>">Previlege card List</a>
                  </li>
               </ul>
            </header>
            <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane <?php if(isset($tab) && $tab ==''){ echo "active"; } ?>" id="home">
				  <div class="container">
                     
					  <form action="<?php echo base_url('admin/coupon_post'); ?>" method="post" id="coupon_post" name="coupon_post" enctype="multipart/form-data">
								<div class="row">
								<div class="col-md-6">
								<label> Name</label>
								<input class="form-control" id="coupon_code" name="coupon_code" value="" type="text" placeholder="Previlege card">
								</div>
								<div class="col-md-6">
									<label>Type</label>
									<select class="form-control" name="type" id="type">
									<option value="">Select</option>
									<option value="Percentage">Percentage</option>
									<option value="Amount">Amount</option>
									</select>
								</div>
								<div class="col-md-6">
								<label> Percentage / Amount </label>
								<input class="form-control" id="percentage_amount" name="percentage_amount" value="" type="text" placeholder="Percentage / Amount">
								</div>
								</div>
								<br>
								<div class="">
								<label>&nbsp;</label>
								<button type="submit" class="btn btn-sm btn-success pull-right" type="button">Add</button>
								</div>	
							
							</form>
						
					
                     </div>
                  </div>
                  <div class="tab-pane <?php if(isset($tab) && $tab ==1){ echo "active"; } ?>" id="about">
                     <div class="container">
                        <div class="row">
                            <div class="card-body col-md-12">
								<?php if(count($couponcode_list)>0){ ?>
                                    <table id="saveStage" class="table table-striped table-bordered table-hover  order-column" style="width:100%;">
                                        <thead>
                                            <tr>
												<th>Name</th>
												<th>Type</th>
												<th>Percentage / Amount</th>
                                                <th>Create date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($couponcode_list as $list){ ?>
                                            <tr>
                                                <td><?php echo htmlentities($list['coupon_code']); ?></td>
                                                <td><?php echo htmlentities($list['type']); ?></td>
                                                <td><?php echo htmlentities($list['percentage_amount']); ?></td>
                                                <td><?php echo htmlentities($list['create_at']); ?></td>
												<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript;void(0);" onclick="admindeactive('<?php echo base64_encode(htmlentities($list['id'])).'/'.base64_encode(htmlentities($list['status']));?>');adminstatus('<?php echo $list['status'];?>')" href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
                                                                    <i class="fa fa-edit"></i><?php if($list['status']==0){ echo "Active";}else{ echo "Deactive"; } ?> </a>
                                                            </li>
															<li data-toggle="modal" data-target="#foldersmallModalmove<?php echo $list['id']; ?>"><a href="javascript:void(0);"> <i class="fa fa-edit"></i>Edit</a></a></li>

                                                            <li>
                                                                <a href="<?php echo base_url('admin/delete_couponcode/'.base64_encode($list['id'])); ?>">
                                                                    <i class="fa fa-trash-o"></i>Delete</a>
                                                            </li>
                                                            
                                                            
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
											<div class="modal fade" id="foldersmallModalmove<?php echo $list['id']; ?>" tabindex="-1" role="dialog">
										   <div class="modal-dialog modal-sm" role="document">
											  <div class="modal-content">
												 <form id="foldermoving" name="foldermoving" action="<?php echo base_url('admin/update_coupon_code'); ?>" method="post">
													<?php $csrf = array(
													   'name' => $this->security->get_csrf_token_name(),
													   'hash' => $this->security->get_csrf_hash()
													   ); ?>
													<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
													<input type="hidden" name="coupon_code_id" id="coupon_code_id" value="<?php echo $list['id']; ?>" >
													<div class="modal-header">
														<h4 class="modal-title" id="smallModalLabel">Previlege card Rename</h4>
													</div>
													<div class="modal-body">
														<div class="form-group">
														<div class="form-line">
														<input type="text" id="coupon_code" name="coupon_code" class="form-control" value="<?php echo htmlentities($list['coupon_code']);?>" required>
														</div>
														</div>
													</div>
													<div class="col-md-12">
														<label>Percentage / Amount</label>
														<input class="form-control" id="percentage_amount" name="percentage_amount" value="<?php echo htmlentities($list['percentage_amount']);?>" type="text" placeholder="Percentage / Amount" required>
													</div>
													<div class="col-md-12">
														<label>Type</label>
														<select class="form-control" name="type" id="type" required>
														<option value="">Select</option>
														<option value="Percentage" <?php if($list['type']=='Percentage'){ echo "selected";} ?>>Percentage</option>
														<option value="Amount" <?php if($list['type']=='Amount'){ echo "selected";} ?>>Amount</option>
														</select>
													</div>
													<div class="modal-footer">
														<button type="submit" class="btn btn-link waves-effect">Update </button>
														<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
													</div>
												 </form>
											  </div>
										   </div>
										</div>
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
			<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
			
			<div style="padding:10px">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 style="pull-left" class="modal-title">Confirmation</h4>
			</div>
			<div class="modal-body">
			<div class="alert alert-danger alert-dismissible" id="errormsg" style="display:none;"></div>
			  <div class="row">
				<div id="content1" class="col-xs-12 col-xl-12 form-group">
				Are you sure ? 
				</div>
				<div class="col-xs-6 col-md-6">
				  <button type="button" aria-label="Close" data-dismiss="modal" class="btn  blueBtn">Cancel</button>
				</div>
				<div class="col-xs-6 col-md-6">
                <a href="?id=value" class="btn  blueBtn popid" style="text-decoration:none;float:right;"> <span aria-hidden="true">Ok</span></a>
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
function admindeactive(id){
	$(".popid").attr("href","<?php echo base_url('admin/coupon_code_status'); ?>"+"/"+id);
}
function adminstatus(id){
	if(id==1){
			$('#content1').html('Are you sure you want to Deactivate?');
		
	}if(id==0){
			$('#content1').html('Are you sure you want to activate?');
	}
}
$(document).ready(function() {
    $('#coupon_post').bootstrapValidator({
        
        fields: {
            
            coupon_code: {
                 validators: {
					notEmpty: {
						message: 'Previlege card is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Previlege card can only consist of alphanumeric, space and dot'
					}
				}
            },
			percentage_amount: {
                 validators: {
					notEmpty: {
						message: 'Percentage / Amount  is required'
					},
					regexp: {
					regexp: /^[0-9]*$/,
					message: ' Percentage / Amount  only consist of digits'
					}
				}
            },type: {
                 validators: {
					notEmpty: {
						message: 'Type is required'
					}
				}
            }
            }
        })
     
});
</script>