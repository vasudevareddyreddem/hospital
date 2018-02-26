
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Support</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Support</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
	                  
					
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-topline-yellow">
                                <div class="card-head">
                                    <header>Chat</header>
                                </div>
                                <div class="card-body ">
									<div class="row">
										<div class=" col-md-2 ">
												&nbsp;
										</div>
										<div class="col-md-8 chat-help">
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
															<li><a href="#"><span class="glyphicon glyphicon-ok-sign">
															</span>Available</a></li>
															<li><a href="#"><span class="glyphicon glyphicon-remove">
															</span>Busy</a></li>
															<li><a href="#"><span class="glyphicon glyphicon-time"></span>
																Away</a></li>
															<li class="divider"></li>
															<li><a href="#"><span class="glyphicon glyphicon-off"></span>
																Sign Out</a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body">
													<ul class="chat">
														<li class="left clearfix"><span class="chat-img pull-left">
															<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
														</span>
															<div class="chat-body clearfix">
																<div class="header">
																	<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
																		<span class="glyphicon glyphicon-time"></span>12 mins ago</small>
																</div>
																<p>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
																	dolor, quis ullamcorper ligula sodales.
																</p>
															</div>
														</li>
														<li class="right clearfix"><span class="chat-img pull-right">
															<img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
														</span>
															<div class="chat-body clearfix">
																<div class="header">
																	<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
																	<strong class="pull-right primary-font">Bhaumik Patel</strong>
																</div>
																<p>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
																	dolor, quis ullamcorper ligula sodales.
																</p>
															</div>
														</li>
														<li class="left clearfix"><span class="chat-img pull-left">
															<img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
														</span>
															<div class="chat-body clearfix">
																<div class="header">
																	<strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
																		<span class="glyphicon glyphicon-time"></span>14 mins ago</small>
																</div>
																<p>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
																	dolor, quis ullamcorper ligula sodales.
																</p>
															</div>
														</li>
														<li class="right clearfix"><span class="chat-img pull-right">
															<img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
														</span>
															<div class="chat-body clearfix">
																<div class="header">
																	<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
																	<strong class="pull-right primary-font">Bhaumik Patel</strong>
																</div>
																<p>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
																	dolor, quis ullamcorper ligula sodales.
																</p>
															</div>
														</li>
													</ul>
												</div>
												<div class="panel-footer"><br>
													<div class="input-group input-chat-des">
														<input  type="text" class="form-control input-sm" placeholder="Type your message here..." />
														<span class="input-group-btn">
															<button class="btn btn-warning btn-sm" id="btn-chat">
																Send</button>
														</span>
													</div>
												</div>
											</div>
								</div>
									</div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end admited patient list -->
                </div>
            </div>
			<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
