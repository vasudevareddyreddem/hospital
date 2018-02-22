<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
			  <div class="page-title-breadcrumb">
				 <div class=" pull-left">
					<div class="page-title">Hospital List</div>
				 </div>
				 <ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item active" >Hospital List</a>&nbsp;</i>
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
                                     <header>Hospitals</header>
                                   
                                </div>
                                <div class="card-body ">
								<?php if(count($hospital_list)>0){ ?>
                                    <table id="saveStage" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
												<th>HIN</th>
												<th>Name</th>
                                                <th>Contact </th>
                                                <th>Patient Intake</th>
                                                <th>Onine Status</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($hospital_list as $list){ ?>
                                            <tr>
                                                <td><?php echo htmlentities($list['hos_id']); ?></td>
                                                <td><?php echo htmlentities($list['hos_bas_name']); ?></td>
                                                <td><?php echo htmlentities($list['hos_con_number']); ?></td>
                                                <td>10</td>
												<td><?php if($list['hos_curent_login']==1){ echo "Online";}else{ echo "Offline"; } ?></td>
												<td><?php if($list['hos_status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="<?php echo base_url('hospital/edit/'.base64_encode($list['hos_id'])); ?>">
                                                                    <i class="fa fa-edit"></i>EDit </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url('hospital/deletes/'.base64_encode($list['hos_id'])); ?>">
                                                                    <i class="fa fa-trash-o"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url('hospital/view/'.base64_encode($list['hos_id'])); ?>">
                                                                    <i class="fa fa-save"></i> View</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url('hospital/status/'.base64_encode($list['hos_id']).'/'.base64_encode($list['hos_status'])); ?>">
                                                                    <i class="fa fa-save"></i> <?php if($list['hos_status']==1){ echo "Active";}else{  echo "Deactive";}?>  </a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </td>
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
