<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Rources List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Rources</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="panel tab-border card-topline-green">
            <header class="panel-heading panel-heading-gray custom-tab ">
               <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="#home" data-toggle="tab" class="active">Add Resources</a>
                  </li>
                  <li class="nav-item"><a href="#about" data-toggle="tab">Resources List</a>
                  </li>
               </ul>
            </header>
            <div class="panel-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="home">
                     <div class="row">
					  <form action="" method="post">
                        <div class="col-md-12 ">
                           <div class="container">
						  
                              <div class="row">
                                 <div class="col-sm-5">
									<label> Name</label>
										<input class="form-control" id="resource_name" name="resource_name" type="text" placeholder="Name">
									</div>
									<div class="col-sm-5">
									<label> Mobile Number</label>
										<input class="form-control" id="resource_mobile" name="resource_mobile" type="text" placeholder=" Mobile Number">
									</div>
									<div class="col-md-5">
										<label> Address1</label>
											<textarea type="textarea" id="resource_add1" name="resource_add1" class="form-control"  placeholder="Address1" ></textarea>
									</div>
									<div class="col-md-5">
										<label> Address2</label>
											<textarea type="textarea" id="resource_add2" name="resource_add2" class="form-control"  placeholder="Address2" ></textarea>
									</div>
									
									<div class="col-sm-5">
									<label> City</label>
										<input class="form-control" id="resource_city" name="resource_city" type="text" placeholder="City">
									</div>
									<div class="col-sm-5">
										<label> State</label>
										<input class="form-control" id="resource_state" name="resource_state" type="text" placeholder="State">
									</div>
									<div class="col-sm-10">
										<label> Other Details</label>
										<input class="form-control" id="resource_other_details" name="resource_other_details" type="text" placeholder="Other Details">
									</div>
                              </div>
                           </div>
                           <div class="clearfix">&nbsp;</div>
						   <div class="col-sm-10">
                           <button type="submit" class="btn btn-sm btn-success pull-right" type="button">Add Resource</button>
                           </div><div class="clearfix">&nbsp;</div>
                        </div>
						</form>
                     </div>
                  </div>
                  <div class="tab-pane" id="about">
                     <div class="container">
                        <div class="row">
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
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix">&nbsp;</div>
         </div>
      </div>
   </div>
</div>
