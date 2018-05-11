<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
			  <div class="page-title-breadcrumb">
				 <div class=" pull-left">
					<div class="page-title">Completed Prescription List</div>
				 </div>
				 <ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item active" >Completed Prescription List</a>&nbsp;</i>
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
                                     <header>Completed Prescription List</header>
                                   
                                </div>
                                <div class="card-body ">
								<?php if(count($prescriptions)>0){ ?>
                                    <table id="saveStage" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
												<th>Patient Id</th>
												<th>Patient Card Number</th>
												<th>Name</th>
                                                <th>Referred By</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($prescriptions as $list){ ?>
                                            <tr>
                                                <td><?php echo htmlentities($list['pid']); ?></td>
                                                <td><?php echo htmlentities($list['card_number']); ?></td>
                                                <td><?php echo htmlentities($list['name']); ?></td>
                                                <td><?php echo htmlentities($list['created_by']); ?></td>
                                                <td><?php echo date('M j Y h:i A',strtotime(htmlentities($list['create_at'])));?></td>
                                                <td><a target="_blank" href="<?php echo base_url('Users/viewprescription/'.base64_encode($list['pid']).'/'.base64_encode($list['b_id'])); ?>">view</a></td>
                                               
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
