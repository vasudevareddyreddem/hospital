

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Patient Report View</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Nurse</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Patient Report</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel tab-border card-topline-green">
                   
                    <div class="panel-body">
                        <div id="smartwizard" class="col-md-12">
                            <ul>
                                <li><a href="#step-1">Medicine</a></li>
                                <li><a href="#step-2">Lab</a></li>
                            </ul>
                            <div>
                                <div id="step-1" class="">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="example4" class="table table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Name of the Medicine</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php if(isset($medicine_list) && count($medicine_list)>0){ ?>
								<?php foreach($medicine_list as $list){ ?>
                                    <tr>
                                        <td><?php echo isset($list['medicine_name'])?$list['medicine_name']:''; ?></td>
                                        <td><?php echo isset($list['qty'])?$list['qty']:''; ?></td>
                                        <td><?php echo isset($list['date'])?$list['date']:''; ?></td>
                                       
                                    </tr>
								<?php } ?>
								<?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </div>
                                <div id="step-2" class="">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="" class="table table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
										<th>Patient ID</th>
										<th>Name</th>
										<th>Test Name</th>
										<th>Date</th>
										<th>Report File</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php if(isset($lab_test_list) && count($lab_test_list)>0){ ?>
									<?php foreach($lab_test_list as $list){ ?>
										<tr>
											<td><?php echo isset($list['p_id'])?$list['p_id']:''; ?></td>
											<td><?php echo isset($list['name'])?$list['name']:''; ?></td>
											<td><?php echo isset($list['t_name'])?$list['t_name']:''; ?> </td>
											<td><?php echo isset($list['create_at'])?$list['create_at']:''; ?> </td>
											<td class="valigntop">
											<?php if(isset($list['image']) && $list['image']!=''){ ?>
												<div class="btn-group">
												<a href="<?php echo base_url('assets/patient_reports/'.$list['image']); ?>" class="btn btn-xs">Download</a>
												</div>
											<?php } ?>
											</td>
										</tr>
									<?php } ?>
								<?php } ?>
                                </tbody>
                            </table>
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
        </div>
    </div>
</div>

<!-- //Lab Report Modal -->
<script>
$(document).ready(function() {
    $('#example4').DataTable( {
        "order": [[ 2, "desc" ]]
    } );
} );
} );
</script>