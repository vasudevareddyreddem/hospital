<div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                       <li class="sidebar-user-panel">
	                            <div class="user-panel">
								<?php //echo '<pre>';print_r($userdetails);exit; ?>
	                                <div class="pull-left image">
										   <?php if($userdetails['role_id']==1 || $userdetails['role_id']==8){ ?>
												<?php if($userdetails['a_profile_pic']!=''){?>
														<img src="<?php echo base_url('assets/adminprofilepic/'.$userdetails['a_profile_pic']);?>" class="img-circle" alt="<?php echo htmlentities($userdetails['a_profile_pic']); ?>" />
														<?php }else{ ?>
														 <img src="<?php echo base_url();?>assets/vendor/img/dp.jpg" class="img-circle" alt="User Image" />
														<?php } ?>
										
											<?php }else if($userdetails['role_id']==2){ ?>
														<?php if($img['img']!=''){?>
															<img src="<?php echo base_url('assets/hospital_logos/'.$img['img']);?>" class="img-circle" alt="<?php echo htmlentities($img['img']); ?>" />
															<?php }else{ ?>
															 <img src="<?php echo base_url();?>assets/vendor/img/dp.jpg" class="img-circle" alt="User Image" />
															<?php } ?>
											<?php } else{ ?>
														<?php if($img['img']!=''){?>
															<img src="<?php echo base_url('assets/adminprofilepic/'.$img['img']);?>" class="img-circle" alt="<?php echo htmlentities($img['img']); ?>" />
														<?php }else{ ?>
															<img src="<?php echo base_url();?>assets/vendor/img/dp.jpg" class="img-circle" alt="User Image" />
														<?php } ?>
											<?php } ?>
	                                </div>
	                                <div class="pull-left info">
	                                    <p> <?php echo isset($userdetails['a_name'])?htmlentities($userdetails['a_name']):''; ?> </p>
	                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
	                                </div>
	                            </div>
	                        </li>
						<?php if($userdetails['role_id']==1){ ?>	
	                        <li class="nav-item start ">
	                            <a href="<?php echo base_url('dashboard');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li> 
	                        <li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons"> local_hospital</i>
	                                <span class="title">Hospital</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url('hospital'); ?>" class="nav-link "> <span class="title">View / Modify</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/add/'.base64_encode(1)); ?>" class="nav-link "> <span class="title">Add New</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li> 
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('admin/couponcodes');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">list</i>
	                                <span class="title">Privilege card List</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('lab/testtype');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment_turned_in</i>
	                                <span class="title">Lab Test Types</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('lab/oursource');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">track_changes</i>
	                                <span class="title">Out source </span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 
							<li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">email</i>
	                                <span class="title">Chat</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                               <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/gropchat'); ?>" class="nav-link "> <span class="title">Group of Hospital</span>
	                                    </a>
	                                </li>
									<li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/outsourcelabgropchat'); ?>" class="nav-link "> <span class="title">Group of Outsource Lab</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('chat/admin_softwareteam'); ?>" class="nav-link "> <span class="title">Software Team</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                       
							
							<li class="nav-item  ">
	                            <a  href="<?php echo base_url('admin/announcement'); ?>" class="nav-link "> <i class="material-icons">announcement</i>
	                                <span class="title">Release Announcement</span> <span class="arrow"></span>
	                            </a>
	                        </li>
						<?php }else if($userdetails['role_id']==2){ ?>
						 <li class="nav-item start ">
	                            <a href="<?php echo base_url('dashboard');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li> 
							<li class="nav-item start ">
									<a href="<?php echo base_url('hospital/patient_list');?>" class="nav-link nav-toggle">
										<i class="material-icons">person_add</i>
										<span class="title">Patient List</span>
										<span class="selected"></span>
										<span class="arrow "></span>
									</a>
								</li>
						  <li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">local_hospital</i>
	                                <span class="title">Hospital</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url('profile'); ?>" class="nav-link "> <span class="title">Hospital Details</span>
	                                    </a>
	                                </li>
									 <li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/resource'); ?>" class="nav-link "> <span class="title">Add Resource </span>
	                                    </a>
	                                </li>
									<li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/adddoctor'); ?>" class="nav-link "> <span class="title">Add Doctor </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/addtreatment'); ?>" class="nav-link "> <span class="title">Add Department</span>
	                                    </a>
	                                </li>
									<li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/addspecialist'); ?>" class="nav-link "> <span class="title">Add Specialist</span>
	                                    </a>
	                                </li>
	                                
									<li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/treatment'); ?>" class="nav-link "> <span class="title">Assign Department to Consultant </span>
	                                    </a>
	                                </li>
									<!--<li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/labdetails'); ?>" class="nav-link "> <span class="title"> Lab Details </span>
	                                    </a>
	                                </li>-->
	                                
	                            </ul>
	                        </li> 
							<li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">email</i>
	                                <span class="title">Chat</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url('admin/resourceschat'); ?>" class="nav-link "> <span class="title">Resources </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/adminchat'); ?>" class="nav-link "> <span class="title">Admin Chat</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('chat/admin_softwareteam'); ?>" class="nav-link "> <span class="title">Software Team</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
							<li class="nav-item  ">
	                            <a  href="<?php echo base_url('hospital/announcement'); ?>" class="nav-link "> <i class="material-icons">announcement</i>
	                                <span class="title">Release Announcement</span> <span class="arrow"></span>
	                            </a>
	                        </li>
							<li class="nav-item  ">
	                            <a  href="<?php echo base_url('hospital/modified_prescription'); ?>" class="nav-link "> <i class="material-icons">assignment</i>
	                                <span class="title">Modified prescription List</span> <span class="arrow"></span>
	                            </a>
	                        </li>
							
						<?php } else if($userdetails['role_id']==3){ ?>
						 
						 <li class="nav-item start ">
	                            <a href="<?php echo base_url('resources/desk');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Front desk</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li>   
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('appointments');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Appointments</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li>  
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('resources/patient_databse');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">sd_storage</i>
	                                <span class="title">Patient Registration Database </span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li> 
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('chat');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Chat </span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li> 
							
						<?php } else if($userdetails['role_id']==4){ ?>
						 
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('users');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Prescription</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('users/addprescription');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Add prescription</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('users/completedprescription');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Completed Prescription</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 
							
						 <li class="nav-item start ">
	                            <a href="<?php echo base_url('medicine');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Upload medicine</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('medicine/lists');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Medicine List</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							  <li class="nav-item start ">
	                            <a href="<?php echo base_url('chat');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Chat</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 
						<?php } else if($userdetails['role_id']==5){ ?>
					
								<?php if($userdetails['out_source']==1){ ?>	
										<li class="nav-item start ">
											<a href="<?php echo base_url('lab/outsources_labtests');?>" class="nav-link nav-toggle">
												<i class="material-icons">person_add</i>
												<span class="title">Patient List</span>
												<span class="selected"></span>
												<span class="arrow "></span>
											</a>
										</li> 
										<li class="nav-item start ">
											<a href="<?php echo base_url('lab/bidding_list');?>" class="nav-link nav-toggle">
												<i class="material-icons">dashboard</i>
												<span class="title">Procurement Lab Test List</span>
												<span class="selected"></span>
												<span class="arrow "></span>
											</a>
										</li> 
										<li class="nav-item start ">
											<a href="<?php echo base_url('lab/patient_database');?>" class="nav-link nav-toggle">
												<i class="material-icons">dashboard</i>
												<span class="title">Patient Database</span>
												<span class="selected"></span>
												<span class="arrow "></span>
											</a>
										</li>
										<li class="nav-item start ">
									<a href="<?php echo base_url('lab');?>" class="nav-link nav-toggle">
										<i class="material-icons">format_color_fill</i>
										<span class="title">Lab Test details</span>
										<span class="selected"></span>
										<span class="arrow "></span>
									</a>
								</li>
										<li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">email</i>
	                                <span class="title">Chat</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                               <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/adminchat'); ?>" class="nav-link "> <span class="title">Admin Chat</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('chat/admin_softwareteam'); ?>" class="nav-link "> <span class="title">Software Team</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
								<?php  }else{ ?>
								<li class="nav-item start ">
									<a href="<?php echo base_url('lab/patient_list');?>" class="nav-link nav-toggle">
										<i class="material-icons">person_add</i>
										<span class="title">Patient List</span>
										<span class="selected"></span>
										<span class="arrow "></span>
									</a>
								</li>
								<li class="nav-item start ">
									<a href="<?php echo base_url('lab');?>" class="nav-link nav-toggle">
										<i class="material-icons">format_color_fill</i>
										<span class="title">Lab Test details</span>
										<span class="selected"></span>
										<span class="arrow "></span>
									</a>
								</li>
								<li class="nav-item start ">
									<a href="<?php echo base_url('lab/outsources_labtests');?>" class="nav-link nav-toggle">
										<i class="material-icons">details</i>
										<span class="title">Out Sources Lab Test details</span>
										<span class="selected"></span>
										<span class="arrow "></span>
									</a>
								</li> 
								<li class="nav-item start ">
									<a href="<?php echo base_url('lab/bidding_list');?>" class="nav-link nav-toggle">
										<i class="material-icons">format_list_numbered</i>
										<span class="title">Procurement Lab Test List</span>
										<span class="selected"></span>
										<span class="arrow "></span>
									</a>
								</li> 
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('lab/patient_database');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">sd_storage</i>
	                                <span class="title">Patient Database</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
									<li class="nav-item start ">
										<a href="<?php echo base_url('chat');?>" class="nav-link nav-toggle">
											<i class="material-icons">email</i>
											<span class="title">Chat</span>
											<span class="selected"></span>
											<span class="arrow "></span>
										</a>
									</li>
							
							<?php }?>
						
						<?php } else if($userdetails['role_id']==6){ ?>	
							
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('resources/worksheet');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">description</i>
	                                <span class="title">My WorkSheet</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('resources/completed_worksheet');?>" class="nav-link nav-toggle">
	                                <i class="material-icons"> done_all</i>
	                                <span class="title">Completed WorkSheet</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('resources/worksheet');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Appointments</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('resources/referrals');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">border_all</i>
	                                <span class="title">Referrals </span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('chat');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Chat</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 							
						<?php } else if($userdetails['role_id']==8){ ?>
						<li class="nav-item start ">
	                            <a href="<?php echo base_url('admin/chat');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Chat</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('admin/notification');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">notifications</i>
	                                <span class="title">Notification</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('admin/notificationlist');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">notifications</i>
	                                <span class="title">Sent Notification List</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 
							<?php } else if($userdetails['role_id']==9){ ?>
							<!--ward management-->
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management/admit');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Admit</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management/discharge');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Discharge</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management/transfer');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Transfer Patient</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management/bed_chart');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Bed Chart</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>	
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management/observation');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Observation/ Nursing </span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management/admit_discharge_statistics');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Admit / Discharge Stati..</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management/patient_history');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Patient History</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>	
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('ward_management/discharge_report');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">assignment</i>
	                                <span class="title">Discharge Report</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<!--ward management-->
							<!--nurse-->
							<?php } else if($userdetails['role_id']==10){ ?>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('nurse');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">notifications</i>
	                                <span class="title">Nurse</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('nurse/patient_follow_ups');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">notifications</i>
	                                <span class="title">Patient Follow Ups</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('nurse/patient_follow_ups');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">notifications</i>
	                                <span class="title">Bed Transfer</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
							<?php } ?>
							<li class="nav-item  ">
	                            <a  href="<?php echo base_url('dashboard/logout'); ?>" class="nav-link "> <i class="material-icons"> power_settings_new</i>
	                                <span class="title">Logout</span> <span class="arrow"></span>
	                            </a>
	                        </li>
	                        
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			
			