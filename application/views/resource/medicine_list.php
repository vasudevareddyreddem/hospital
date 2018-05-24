<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
			  <div class="page-title-breadcrumb">
				 <div class=" pull-left">
					<div class="page-title">Medicine List</div>
				 </div>
				 <ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item active" >Medicine List</a>&nbsp;</i>
					</li>
				 </ol>
			  </div>
		   </div>
					<div class="row">
                       <div class="col-md-12">
                            <div class="card card-topline-aqua">
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
                                <div class="card-head">
                                     <header>Medicine List</header>
                                   
                                </div>
                                <div class="card-body table-responsive">
								<?php if(count($medicine_list)>0){ ?>
                                    <table id="addmedicinelist" class="table table-striped table-bordered table-hover  order-column" style="width:100%;">
                                        <thead>
                                            <tr>
												<th>HSN</th>
												<th>Other Code</th>
												<th>Medicine Name</th>
												<th>QTY</th>
												<th>Amount</th>
												<th>SGST</th>
												<th>CGST</th>
												<th>Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($medicine_list as $list){ ?>
                                            <tr>
                                                <td><input type="text" onkeyup="autosavefields(this.value,'<?php echo $list['id']; ?>','hsn');" value="<?php echo htmlentities($list['hsn']); ?>"></td>
                                                <td><input type="text" onkeyup="autosavefields(this.value,'<?php echo $list['id']; ?>','othercode');" value="<?php echo htmlentities($list['othercode']); ?>"></td>
                                                <td><input type="text" onkeyup="autosavefields(this.value,'<?php echo $list['id']; ?>','medicine_name');" value="<?php echo htmlentities($list['medicine_name']); ?>"></td>
                                                <td><input type="text" onkeyup="autosavefields(this.value,'<?php echo $list['id']; ?>','qty');" value="<?php echo htmlentities($list['qty']); ?>"></td>
                                                <td><input type="text" onkeyup="autosavefields(this.value,'<?php echo $list['id']; ?>','amount');" value="<?php echo htmlentities($list['amount']); ?>"></td>
                                                <td><input type="text" onkeyup="autosavefields(this.value,'<?php echo $list['id']; ?>','sgst');" value="<?php echo htmlentities($list['sgst']); ?>"></td>
                                                <td><input type="text" onkeyup="autosavefields(this.value,'<?php echo $list['id']; ?>','cgst');" value="<?php echo htmlentities($list['cgst']); ?>"></td>
                                                <td><input readonly="true" type="text" id="total_amt<?php echo $list['id']; ?>" value="<?php echo htmlentities($list['total_amount']); ?>"></td>
                                                
                                            </tr>
										<?php } ?>
											
                                            
                                        </tbody>
                                    </table>
								<?php } ?>
                                </div>
								<div class="clearfix">&nbsp;</div>
							
                            </div>
                        </div>
                    </div>
				
                    
                </div>
            </div>
			<div id="sucessmsg" style="display:none;"></div>

			<script>
			function autosavefields(val,id,name){
				if(val!='' && id!='' && name!=''){
					jQuery.ajax({
						url: "<?php echo base_url('medicine/editmedicine_details');?>",
							data: {
								med_id: id,
								med_name: val,
								field_name: name,
							},
							dataType: 'json',
							type: 'POST',
							success: function (data) {
								$('#sucessmsg').show();
								$('#total_amt'+id).val(data.t_amt);
								if(data.msg==1){
									$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-succ"> Details Successfully Updated<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
								}else if(data.msg==2){
									$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Technical problem will occurred. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
								}else if(data.msg==3){
									$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> You have no permissions to access this page. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
								}
							}
					});
				}else{
					$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn">Field is required. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  

				}
			}
			$(document).ready(function() {
				$('#addmedicinelist').DataTable( {
				 "columns": [
							{ "targets": 0, "orderDataType": "dom-text", "type": "string" },
							{ "targets": 1, "orderDataType": "dom-text", "type": "string" },
							{ "targets": 2, "orderDataType": "dom-text", "type": "string" },
							{ "targets": 3, "orderDataType": "dom-text", "type": "string" },
							{ "targets": 4, "orderDataType": "dom-text", "type": "string" },
							{ "targets": 5, "orderDataType": "dom-text", "type": "string" },
							{ "targets": 6, "orderDataType": "dom-text", "type": "string" }
						],
						
				});
				});
			</script>
