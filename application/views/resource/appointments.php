<?php //echo '<pre>';print_r($tab);exit; ?>

<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Front Desk</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Appointments</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="panel tab-border card-topline-yellow">
               <header class="panel-heading panel-heading-gray custom-tab ">
                  <ul class="nav nav-tabs x-scrool">
				    
					 <li style="border-right:2px solid #fff" class="nav-item "><a href="#aboutop" data-toggle="tab" class="<?php if(isset($tab) && $tab==11 || $tab==12 || $tab==13 || $tab==0){ echo "active";}?>"> Book Appointments</a>
                     </li>
					 
                     <li style="border-right:2px solid #fff;position:relative" class="nav-item"><a href="#home" data-toggle="tab" class="<?php if(isset($tab) && $tab!=11 && $tab!=12 && $tab!=13  && $tab!=0){ echo "active";}?>">App Appointments</a>
					 <div style="position:absolute;top:-8px;right:5px; background:#003f7f;color:#fff; border-radius:5px;padding:2px 6px;font-size:10px;">5
					 </div>
                     </li>
                     <li class="nav-item"><a href="#about" data-toggle="tab">Appointments List</a>
                     </li>
                   
                  </ul>
               </header>
               <div class="panel-body">
                  <div class="tab-content">
                     <div class="tab-pane <?php if(isset($tab) && $tab!=11 && $tab!=12 && $tab!=13 && $tab!=0){ echo "active";}?>" id="home">
                        <div class="card ">
                           <div class="card-head">
                              <header>App Patients Details</header>
                             
                           </div>
                           <div class="card-body ">
                           <div class="card-body table-responsive" id="bar-parent" style="margin-top:30px">
                             <table class="table table-striped table-bordered " id="example4">
							 <thead>
								<tr>
								   <th> Patient Name </th>
								   <th> Age</th>
								   <th> Mobile </th>
								   <th> Department </th>
								   <th> Specialist </th>
								   <th> Doctor </th>
								   <th > Booking Date </th>
								   <th> Booking Time </th>
								   <th> Action </th>
								</tr>
							 </thead>
							 <tbody>
								<tr class="">
								   <td>Bayapureddy</td>
								   <td>24</td>
								   <td>8500226782</td>
								   <td>Department</td>
								   <td>Specialist</td>
								   <td>Doctor</td>
								   <td > <div class="form-group">
                                                   <label class="">Booking Date </label>
                                                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                      <input style="width:100px;" class="form-control" size="16" type="text"  name="dob" value="2018-07-06  ">
                                                      <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                   </div>
                                                </div>
									</td>
								   <td>
									<div class="form-group ">
                                                   <label class="">Booking Time </label>
                                                   <div class="input-group date form_time " data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                                <input class="form-control" style="width:100px;" size="16" type="text" value="09:45">
                                               
                                                <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                            </div>
                                                </div>
								   </td>
								   <td><div class="btn-group">
                                             <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                             <i class="fa fa-angle-down"></i>
                                             </button>
                                             <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                   <a href="#">
                                                   <i class="icon-docs"></i> Accept </a>
                                                </li>
												
													<li>
                                                    <a href="#">
                                                    <i class="icon-docs"></i> Reject  </a>
													</li>
												
                                             </ul>
                                          </div></td>
								   
								</tr>
							 </tbody>
							</table>
									
									
                           </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="about">
                        <div class="card">
                           <div class="card-head">
                              <header>Patients List</header>
                             
                           </div>
                           <div class="card-body table-responsive ">
								<table class="table table-striped table-bordered " id="example4">
							 <thead>
								<tr>
								   <th> Patient Name </th>
								   <th> Age</th>
								   <th> Mobile </th>
								   <th> Department </th>
								   <th> Specialist </th>
								   <th> Doctor </th>
								   <th > Booking Date </th>
								   <th> Booking Time </th>
								   <th> Action </th>
								</tr>
							 </thead>
							 <tbody>
								<tr class="">
								   <td>Bayapureddy</td>
								   <td>24</td>
								   <td>8500226782</td>
								   <td>Department</td>
								   <td>Specialist</td>
								   <td>Doctor</td>
								   <td> 2018-07-06
									</td>
								   <td>
									9.50
								   </td>
								   <td>
									   <a href="#" class="btn btn-primary btn-xs">
											<i class="fa fa-eye"></i>
										</a>
								   </td>
								   
								</tr>
							 </tbody>
							</table>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane  <?php if(isset($tab) && $tab==11 || $tab==12 || $tab==13 || $tab==0){ echo "active";}?>" id="aboutop">
                        <div class="card ">
                           <div class="card-head">
                              <header>Patients Details</header>
                             
                           </div>
                           <div class="card-body ">
                           <div class="card-body " id="bar-parent" style="margin-top:30px">
                             
									
									 <form class=" pad30 form-horizontal" >
                                           
                                            <div class="row">
												<div class="form-group col-md-6">
												   <label for="email">Patient Name</label>
													<input type="text" class="form-control" placeholder="Enter name" >
												</div>
												<div class="form-group col-md-6">
												   <label for="email">Age</label>
													<input type="text" class="form-control" placeholder="Enter Age" >
												</div>
												<div class="form-group col-md-6">
												   <label for="email">Mobile</label>
													<input type="text" class="form-control" placeholder="Enter Mobile Number" >
												</div>
												<div class="form-group col-md-6">
												   <label for="email">Department</label>
													<select class="form-control">
													<option>Select</option>
													<option>Department 1</option>
													<option>Department 2</option>
													<option>Department 3</option>
													<option>Department 4</option>
													<option>Department 5</option>
													<option>Department 6</option>
													</select>
												</div>
												<div class="form-group col-md-6">
												   <label for="email">Specialist</label>
													<select class="form-control">
													<option>Select</option>
													<option>specialist 2</option>
													<option>specialist 3</option>
													<option>specialist 4</option>
													<option>specialist 5</option>
													<option>specialist 6</option>
													</select>
												</div>
												<div class="form-group col-md-6">
												   <label for="email"> Doctor </label>
													<select class="form-control">
													<option>Select</option>
													<option>Doctor 1</option>
													<option>Doctor 2</option>
													<option>Doctor 3</option>
													<option>Doctor 4</option>
													<option>Doctor 5</option>
													<option>Doctor 6</option>
													</select>
												</div>
												  <div class="form-group col-md-6">
                                                   <label class="">Booking Date </label>
                                                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                      <input class="form-control" size="16" type="text" id="dob" name="dob" value="<?php echo isset($patient_detailes['dob'])?$patient_detailes['dob']:''; ?>">
                                                      <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                   </div>
                                                </div> 
												<div class="form-group col-md-6">
                                                   <label class="">Booking Time </label>
                                                   <div class="input-group date form_time " data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                                <input class="form-control" size="16" type="text" value="">
                                               
                                                <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                            </div>
                                                </div>
											</div>
											<button class="btn btn-primary">Book Appointment</button>
											</form>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="sucessmsg" style="display:none;"></div>

