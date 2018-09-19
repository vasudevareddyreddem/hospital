<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Discharge</div>
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
                    <header class="panel-heading panel-heading-gray custom-tab ">
                        <ul class="nav nav-tabs x-scrool">
                            <li style="border-right:2px solid #fff" class="nav-item"><a href="#dis-patients" data-toggle="tab" class="active">Discharge Patients</a>
                            </li>
                            <li style="border-right:2px solid #fff;position:relative" class="nav-item"><a href="#dis-requests" data-toggle="tab">Discharge Requests</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="dis-patients">
                                <div class="card-body table-responsive">
                                    <table id="example4" class=" table table-bordered" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Patient ID</th>
												<th>Patient Name</th>
                                                <th>Mobile No </th>
                                                <th>Doctor Name</th>
                                                <th>Admision Date</th>
                                                <th>Payment Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
												<td>Idxxxx1</td>
												<td>dummy paitent</td>
												<td>8xxxxx8500</td>
                                                <td>Doctor 1</td>
                                                <td>10/07/2018 11.pm</td>
                                                <td>
													<span class="label label-sm label-success"> Paid </span>
												</td>
                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> Discharge</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
											<tr>
                                                <td>2</td>
												<td>Idxxxx1</td>
												<td>dummy paitent</td>
												<td>8xxxxx8500</td>
                                                <td>Doctor 1</td>
                                                <td>10/07/2018 11.pm</td>
                                                <td>
													<span class="label label-sm label-danger"> Pending </span>
												</td>
                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> Discharge</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix">&nbsp;</div>
                            </div>
                            <div class="tab-pane" id="dis-requests">
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
                                                <th>Discharge Status</th>
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
                                                    <a class="btn btn-xs btn-success dropdown-toggle no-margin" type="button"> Accept</a>
                                                    <a class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button"> Reject</a>
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
                                                    <span class="label label-sm label-danger"> Pending </span>
                                                <td>
                                                    <a class="btn btn-xs btn-success dropdown-toggle no-margin" type="button"> Accept</a>
                                                    <a class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button"> Reject</a>
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
        </div>
    </div>