<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Online Chat With Individual Hospitals OR Group of Hospitals OR Software Team
				</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Chating</li>
            </ol>
         </div>
      </div>
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
      <div class="panel tab-border card-topline-green">
         <header class="panel-heading panel-heading-gray custom-tab ">
            <ul class="nav nav-tabs">
               <li class="nav-item"><a href="#resources" data-toggle="tab" class="<?php if(isset($tab) && $tab ==''){ echo "active"; } ?>">Hospital Resources </a>
               </li>
               <li class="nav-item"><a href="#admin" class="<?php if(isset($tab) && $tab ==1){ echo "active"; } ?>" data-toggle="tab">Hospital Admin</a>
               </li>
			   <li class="nav-item"><a href="#team" class="<?php if(isset($tab) && $tab ==2){ echo "active"; } ?>" data-toggle="tab">Software Team</a>
               </li>
            </ul>
         </header>
         <div class="panel-body">
            <div class="tab-content">
               <div class="tab-pane <?php if(isset($tab) && $tab ==''){ echo "active"; } ?>" id="resources">
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="container">
                              
									  resource admin
                                    
                          
                        </div>
                        <div class="clearfix">&nbsp;</div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane <?php if(isset($tab) && $tab ==1){ echo "active"; } ?>" id="admin">
                  <div class="container">
						<div class="panel ">
												<div class="panel-heading bg-indigo">
													<span class="glyphicon glyphicon-comment"></span> Hospital Admin Support
													<div class="btn-group pull-right">
														<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
															<span class="fa fa-angle-down"> </span>
														</button>
														<ul class="dropdown-menu slidedown">
															<li><a href="#"><span class="glyphicon glyphicon-refresh">
															</span>Refresh</a></li>
														
															
															<li class="divider"></li>
															<li><a href="#"><span class="glyphicon glyphicon-off"></span>
																Sign Out</a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body" style="height:300px;overflow-y: scroll;">
													<ul class="chat">
													<?php if(isset($chat_list) && count($chat_list)>0){ ?>
													<?php foreach($chat_list as $list){ ?>
													
														<?php if($list['type']=='Replayed'){ ?>
														<li class="left clearfix"><span class="chat-img pull-left">
															<?php if($list['replayedpic']!=''){ ?>
															<img src="<?php echo  base_url('assets/adminprofilepic/'.$list['replayedpic']); ?>" alt="<?php echo isset($list['replayedname'])?$list['replayedname']:''; ?>" class="img-circle" />
														<?php }else{ ?>
															<img src="<?php echo  base_url('assets/me.png'); ?>" alt="User Avatar" class="img-circle" />

														<?php } ?>
														</span>
															<div class="chat-body clearfix">
																<div class="header">
																	<strong class="primary-font"><?php echo isset($list['replayedname'])?$list['replayedname']:''; ?></strong> <small class="pull-right text-muted">
																		<span class="glyphicon glyphicon-time"></span>
																		<?php 
																		$date = $list['create_at']; 
																		echo date('Y-m-d h:i:s a ', strtotime($date));
																		?>
																	</small>
																</div>
																<p><?php echo isset($list['comment'])?$list['comment']:''; ?></p>
																<?php if(isset($list['image']) && $list['image']!=''){ ?>
																<p><a target="_blank" href="<?php echo base_url('assets/chating_file/'.$list['image']);?>">download</a>
																<?php } ?>
															</div>
														</li>
														<?php }else{ ?>
														<li class="right clearfix"><span class="chat-img pull-right">
														<?php if($list['replaypic']!=''){ ?>
															<img src="<?php echo  base_url('assets/adminprofilepic/'.$list['replaypic']); ?>" alt="<?php echo isset($list['replayname'])?$list['replayname']:''; ?>" class="img-circle" />
														<?php }else{ ?>
															<img src="<?php echo  base_url('assets/me.png'); ?>" alt="User Avatar" class="img-circle" />

														<?php } ?>
														</span>
															<div class="chat-body clearfix">
																<div class="header">
																<?php 
																
																$checkTime = strtotime($list['create_at']);
	
																?>
																	<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>
																	<?php 
																		$date = $list['create_at']; 
																		echo date('Y-m-d h:i:s a ', strtotime($date));
																	?>
																	</small>
																	<strong class="pull-right primary-font"><?php echo isset($list['replayname'])?$list['replayname']:''; ?></strong>
																</div>
																<p><?php echo isset($list['comment'])?$list['comment']:''; ?></p>
																<?php if(isset($list['image']) && $list['image']!=''){ ?>
																<p><a target="_blank" href="<?php echo base_url('assets/chating_file/'.$list['image']);?>">download</a>
																<?php } ?>
															</div>
														</li>
														<?php } ?>
														
														
													<?php } ?>
													<?php } ?>
													</ul>
												</div>
												<form action="<?php echo base_url('chat/hospitaladmin'); ?>" method="post" enctype="multipart/form-data">
													<div class="panel-footer"><br>
														<div class="input-group input-chat-des">
															
															<input  type="text" name="comment" id="comment" class="form-control input-sm" placeholder="Type your message here..." required>
															<input  type="file" name="image" id="image" class="form-control input-sm" />
															<span class="input-group-btn">
																<button class="btn btn-warning btn-sm" id="btn-chat">
																	Send</button>
															</span>
														
														</div>
													</div>
												</form>
											</div>
                  </div>
               </div>
			   <div class="tab-pane <?php if(isset($tab) && $tab ==2){ echo "active"; } ?>" id="team">
                  <div class="container">
						<div class="panel ">
												<div class="panel-heading bg-indigo">
													<span class="glyphicon glyphicon-comment"></span> Software Support
													<div class="btn-group pull-right">
														<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
															<span class="fa fa-angle-down"> </span>
														</button>
														<ul class="dropdown-menu slidedown">
															<li><a href="#"><span class="glyphicon glyphicon-refresh">
															</span>Refresh</a></li>
														
															
															<li class="divider"></li>
															<li><a href="#"><span class="glyphicon glyphicon-off"></span>
																Sign Out</a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body" style="height:300px;overflow-y: scroll;">
													<ul class="chat">
													<?php if(isset($chat_list) && count($chat_list)>0){ ?>
													<?php foreach($chat_list as $list){ ?>
													
														<?php if($list['type']=='Replayed'){ ?>
														<li class="left clearfix"><span class="chat-img pull-left">
															<?php if($list['replayedpic']!=''){ ?>
															<img src="<?php echo  base_url('assets/adminprofilepic/'.$list['replayedpic']); ?>" alt="<?php echo isset($list['replayedname'])?$list['replayedname']:''; ?>" class="img-circle" />
														<?php }else{ ?>
															<img src="<?php echo  base_url('assets/me.png'); ?>" alt="User Avatar" class="img-circle" />

														<?php } ?>
														</span>
															<div class="chat-body clearfix">
																<div class="header">
																	<strong class="primary-font"><?php echo isset($list['replayedname'])?$list['replayedname']:''; ?></strong> <small class="pull-right text-muted">
																		<span class="glyphicon glyphicon-time"></span>
																		<?php 
																		$date = $list['create_at']; 
																		echo date('Y-m-d h:i:s a ', strtotime($date));
																		?>
																	</small>
																</div>
																<p><?php echo isset($list['comment'])?$list['comment']:''; ?></p>
																<?php if(isset($list['image']) && $list['image']!=''){ ?>
																<p><a target="_blank" href="<?php echo base_url('assets/chating_file/'.$list['image']);?>">download</a>
																<?php } ?>
															</div>
														</li>
														<?php }else{ ?>
														<li class="right clearfix"><span class="chat-img pull-right">
														<?php if($list['replaypic']!=''){ ?>
															<img src="<?php echo  base_url('assets/adminprofilepic/'.$list['replaypic']); ?>" alt="<?php echo isset($list['replayname'])?$list['replayname']:''; ?>" class="img-circle" />
														<?php }else{ ?>
															<img src="<?php echo  base_url('assets/me.png'); ?>" alt="User Avatar" class="img-circle" />

														<?php } ?>
														</span>
															<div class="chat-body clearfix">
																<div class="header">
																<?php 
																
																$checkTime = strtotime($list['create_at']);
	
																?>
																	<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>
																	<?php 
																		$date = $list['create_at']; 
																		echo date('Y-m-d h:i:s a ', strtotime($date));
																	?>
																	</small>
																	<strong class="pull-right primary-font"><?php echo isset($list['replayname'])?$list['replayname']:''; ?></strong>
																</div>
																<p><?php echo isset($list['comment'])?$list['comment']:''; ?></p>
																<?php if(isset($list['image']) && $list['image']!=''){ ?>
																<p><a target="_blank" href="<?php echo base_url('assets/chating_file/'.$list['image']);?>">download</a>
																<?php } ?>
															</div>
														</li>
														<?php } ?>
														
														
													<?php } ?>
													<?php } ?>
													</ul>
												</div>
												<form action="<?php echo base_url('chat/softwareteam'); ?>" method="post" enctype="multipart/form-data">
													<div class="panel-footer"><br>
														<div class="input-group input-chat-des">
															
															<input  type="text" name="comment" id="comment" class="form-control input-sm" placeholder="Type your message here..." required>
															<input  type="file" name="image" id="image" class="form-control input-sm" />
															<span class="input-group-btn">
																<button class="btn btn-warning btn-sm" id="btn-chat">
																	Send</button>
															</span>
														
														</div>
													</div>
												</form>
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

   $(function() {
   $(".expand").on( "click", function() {
    // $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
   });
   });
</script>
<!--script for add row comment-->
<script>
   $(function()
   {
     $(document).on('click', '.btn-add', function(e)
     {
         e.preventDefault();
   
         var controlForm = $('.controls form:first'),
             currentEntry = $(this).parents('.entry:first'),
             newEntry = $(currentEntry.clone()).appendTo(controlForm);
   
         newEntry.find('input').val('');
         controlForm.find('.entry:not(:last) .btn-add')
             .removeClass('btn-add').addClass('btn-remove')
             .removeClass('btn-success').addClass('btn-danger')
             .html('<span class="glyphicon glyphicon-minus">-</span>');
     }).on('click', '.btn-remove', function(e)
     {
   $(this).parents('.entry:first').remove();
   
   e.preventDefault();
   return false;
   });
   });
   
</script>
<script>
   $(document).ready(function() {
     $("#select2insidemodal").select2({
       dropdownParent: $("#myModal")
     });
   });
   
</script>

