
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Appointments</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Discharge</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="panel tab-border card-topline-green">
						<div class=" ">
                                <div class="card-head">
                                     <header>Discharge</header>
                                  
                                </div>
                                <div class="card-body table-responsive">
                                    <table id="example4" class=" table table-bordered" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Patient ID</th>
												<th>Patient Name</th>
                                                <th>Ward Type </th>
                                                <th>Ward No </th>
                                                <th>Room Type</th>
                                                <th>Room No</th>
                                                <th>Bed No</th>
                                                <th>Bill Status</th>
                                                <th> Discharge Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>101</td>
												<td>patient 1</td>
												<td>type 1</td>
												<td>260</td>
                                                <td>multi</td>
                                                <td>105</td>
                                                <td>5</td>
                                                <td>
													<span class="label label-sm label-success"> Paid </span>
                                                <td>
													<a class="btn btn-xs btn-success dropdown-toggle no-margin" type="button" > Accept</a>
													<a class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" > Reject</a>
												</td>
                                            </tr>
											<tr>
                                                <td>101</td>
												<td>patient 1</td>
												<td>type 1</td>
												<td>260</td>
                                                <td>multi</td>
                                                <td>105</td>
                                                <td>5</td>
                                                <td>
													<span class="label label-sm label-warning"> Pending </span>
                                                <td>
													<a class="btn btn-xs btn-success dropdown-toggle no-margin" type="button" > Accept</a>
													<a class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" > Reject</a>
												</td>
                                            </tr>
											
                                        </tbody>
                                    </table>
                                </div>
								<div class="clearfix">&nbsp;</div>
											
                     </div>
         </div>
      </div>
   </div>
</div>
<div id="sucessmsg" style="display:none;"></div>

