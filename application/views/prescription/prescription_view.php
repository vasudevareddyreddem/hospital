<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
			  <div class="page-title-breadcrumb">
				 <div class=" pull-left">
					<div class="page-title">Prescription List</div>
				 </div>
				 <ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item active" >Prescription List</a>&nbsp;</i>
					</li>
				 </ol>
			  </div>
		   </div>
					<div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="card-head">
                                            <header>Prescription List </header>
                                          
                                        </div>
                                        <div class="card-body " style="padding: 0px 24px 24px 24px;">
                                        <div class="table-responsive">
										<form>
                                            <table class="table custom-table table-hover" style="border-top:none">
                                                <thead >
                                                    <tr >
                                                        <th>Medicine Name</th>
                                                        <th>QTY</th>
                                                        <th>Dosage</th>
                                                        <th>Usage </th>
                                                        <th>Usage Instructions</th>
                                                        <th>Substitute allowed?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php foreach($prescriptions as $list){ ?>
                                                    <tr>
                                                        <td>Medicine Name</td>
                                                        <td style="width:100px">
															<div class="form-group">
															<input type="text" class="form-control" placeholder="Enter Qty">
															</div>
														</td>
                                                        <td>
															600
														</td>
                                                        <td>
															<div class="form-group">
																
																<select class="form-control">
																	<option>option 1</option>
																	<option>option 2</option>
																	<option>option 3</option>
																
																</select>
															</div>
														</td>
                                                        <td>Lorem Ipsum dorolo imit</td>
                                                        <td>Lorem Ipsum dorolo imit</td>
                                                       
                                                    </tr>
													
													<?php } ?>
													
                                                    
                                                   
                                                    
                                                </tbody>
                                            </table>
											<div class="pull-right">
											<button class="btn btn-warning">Print Prescription</button>
											<button class="btn btn-success">Print Prescription</button>
											</div>

											</form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
				
                    
                </div>
            </div>
