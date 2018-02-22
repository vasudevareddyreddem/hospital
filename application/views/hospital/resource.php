<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">View Hospital</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">View Profile</li>
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
                        <div class="col-md-12 ">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-6">
                                    <label>Type of Medicine?</label>									
                                    <select class="form-control  ">
                                       <option >Generic </option>
                                       <option >Brand</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label>Search for Medicine</label>									
                                    <select class="form-control  select2">
                                       <option value="AK">example-1  &nbsp; &nbsp;<span class="label label-rouded label-menu">(10 sheets)</span></option>
                                       <option value="HI">example-1 &nbsp; &nbsp;<span class="label label-rouded label-menu">(10 sheets)</span></option>
                                       <option value="HI">3example-1  &nbsp; &nbsp;<span class="label label-rouded label-menu">(10 sheets)</span></option>
                                       <option value="HI">4example-1  &nbsp; &nbsp;<span class="label label-rouded label-menu">(10 sheets)</span></option>
                                       <option value="HI">5example-1</option>
                                       <option value="HI">6example-1</option>
                                       <option value="HI">66example-1</option>
                                       <option value="HI">7example-1</option>
                                       <option value="HI">88example-1</option>
                                       <option value="HI">99example-1</option>
                                       <option value="HI">9254example-1</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label>Substitute allowed or not allowed?</label>									
                                    <select class="form-control  ">
                                       <option >Yes </option>
                                       <option >No</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label>Condition</label>									
                                    <select class="form-control  ">
                                       <option >Chronic  </option>
                                       <option >PRN</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <label>Dosage</label>									
                                    <select class="form-control  ">
                                       <option >Select Dosage </option>
                                       <option >600 g  </option>
                                       <option >350 g</option>
                                       <option >150 g</option>
                                       <option >250 g</option>
                                       <option >550 g</option>
                                       <option >650 g</option>
                                    </select>
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
