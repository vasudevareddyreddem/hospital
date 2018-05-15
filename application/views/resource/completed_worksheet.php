			<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
			  <div class="page-title-breadcrumb">
				 <div class=" pull-left">
					<div class="page-title">Worksheet</div>
				 </div>
				 <ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item active" >Worksheet List</a>&nbsp;</i>
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
                                     <header>My worksheet</header>
                               
                                </div>
                                <div class="card-body ">
								<?php if(count($worksheet)>0){ ?>
                                    <table id="saveStage" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
												<th>PURN</th>
												<th>Patient card number</th>
												<th>Slot</th>
												<th>Patient Name </th>
                                                <th>Age/Sex</th>
                                                <th>Visit Type</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($worksheet as $list){ ?>
                                            <tr>
                                                <td><?php echo htmlentities($list['pid']); ?></td>
                                                <td><?php echo htmlentities($list['card_number']); ?></td>
												<td><button class="btn btn-xs bg-success no-margin" type="button"><?php echo htmlentities($list['type']); ?></button></td>
												<td><?php echo htmlentities($list['name']); ?></td>
                                                <td> <?php echo htmlentities($list['age']); ?> / <?php echo htmlentities($list['gender']); ?></td>
												<td><?php echo htmlentities($list['visit_type']); ?></td>
												<td><?php if($list['doctor_status']==1){ echo "Completed"; }else{ echo "pending"; } ?></td>
                                              
                                            </tr>
										<?php } ?>
											
                                        </tbody>
                                    </table>
										<?php }else{ ?>
										<div>No data Available</div>
										<?php } ?>
                                </div>
								<div class="clearfix">&nbsp;</div>
								
                            </div>
                        </div>
                    </div>
				
                    
                </div>
            </div>
