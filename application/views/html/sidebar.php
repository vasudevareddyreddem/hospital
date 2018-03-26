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
										<?php if($userdetails['a_profile_pic']!=''){?>
	                                    <img src="<?php echo base_url('assets/adminprofilepic/'.$userdetails['a_profile_pic']);?>" class="img-circle user-img-circle" alt="<?php echo htmlentities($userdetails['a_profile_pic']); ?>" />
										<?php }else{ ?>
										 <img src="<?php echo base_url();?>assets/vendor/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
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
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">person</i>
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
							<li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Chat</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url('admin/gropchat'); ?>" class="nav-link "> <span class="title">Resources </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/gropchat'); ?>" class="nav-link "> <span class="title">Group of Hospital</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/chat'); ?>" class="nav-link "> <span class="title">Software Team</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
	                       
							
							<li class="nav-item  ">
	                            <a  href="<?php echo base_url('admin/announcement'); ?>" class="nav-link "> <i class="material-icons">person</i>
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
						  <li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Hospital</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url('profile'); ?>" class="nav-link "> <span class="title">Hospital Details</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/addtreatment'); ?>" class="nav-link "> <span class="title">Add Treatment </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/resource'); ?>" class="nav-link "> <span class="title">Add Resource </span>
	                                    </a>
	                                </li>
									<li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/treatment'); ?>" class="nav-link "> <span class="title">Lab / Treatment </span>
	                                    </a>
	                                </li>
									<li class="nav-item ">
	                                    <a href="<?php echo base_url('hospital/labdetails'); ?>" class="nav-link "> <span class="title"> Lab Details </span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li> 
							<li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Chat</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url('admin/gropchat'); ?>" class="nav-link "> <span class="title">Resources </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/gropchat'); ?>" class="nav-link "> <span class="title">Group of Hospital</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/chat'); ?>" class="nav-link "> <span class="title">Software Team</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
							<li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Release </span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url('admin/announcement'); ?>" class="nav-link "> <span class="title">Announcements to own hospital </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/announcement'); ?>" class="nav-link "> <span class="title">Notifications to own hospital</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li> 
						<?php } else if($userdetails['role_id']==3){ ?>
						  <li class="nav-item start ">
	                            <a href="<?php echo base_url('dashboard');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li> 
						 <li class="nav-item start ">
	                            <a href="<?php echo base_url('resources/desk');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Front desk</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li>  
							<li class="nav-item start ">
	                            <a href="<?php echo base_url('resources/patient_databse');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Patient Registration Database </span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                           
	                        </li> 
							<li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">person</i>
	                                <span class="title">Chat</span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="<?php echo base_url('admin/gropchat'); ?>" class="nav-link "> <span class="title">Resources </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/gropchat'); ?>" class="nav-link "> <span class="title">Group of Hospital</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="<?php echo base_url('admin/chat'); ?>" class="nav-link "> <span class="title">Software Team</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
						<?php } else if($userdetails['role_id']==4){ ?>
						  <li class="nav-item start ">
	                            <a href="<?php echo base_url('dashboard');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li> 
							<li class="nav-item  open ">
	                            <a  class="nav-link nav-toggle"> <i class="material-icons">dashboard</i>
	                                <span class="title">Prescription </span>  <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item  ">
	                                    <a href="#" class="nav-link "> <span class="title">Receive  </span>
	                                    </a>
	                                </li>
	                                <li class="nav-item ">
	                                    <a href="#" class="nav-link "> <span class="title">Billing</span>
	                                    </a>
	                                </li>
	                            </ul>
	                        </li>
						 <li class="nav-item start ">
	                            <a href="<?php echo base_url('medicine');?>" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Upload medicine</span>
	                                <span class="selected"></span>
                                	<span class="arrow "></span>
	                            </a>
	                        </li>
														
						<?php } ?>
							<li class="nav-item  ">
	                            <a  href="<?php echo base_url('dashboard/logout'); ?>" class="nav-link "> <i class="material-icons">person</i>
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
			
			