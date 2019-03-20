
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> Vitals List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Vitals List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
				<div class="panel tab-border card-topline-yellow">
						 <div class="card-body table-responsive ">
                              <?php if(isset($vital_list) && count($vital_list)>0){ ?>
                              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
                                 <thead>
                                    <tr>
                                       <th>Vitals Date </th>
                                       <th> BP</th>
                                       <th> Pulse </th>
                                       <th> FBS/RBS </th>
                                       <th> Temp </th>
                                       <th> Weight </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach($vital_list as $list){ ?>
                                    <tr>
									<td class="text-center"><?php echo isset($list['date'])?$list['date']:''; ?></td>
									<td class="text-center"><?php echo isset($list['bp'])?$list['bp']:''; ?> (120/80)</td>
									<td class="text-center"><?php echo isset($list['pulse'])?$list['pulse']:''; ?> (70-80)</td>
									<td class="text-center"><?php echo isset($list['fbs_rbs'])?$list['fbs_rbs']:''; ?>(70-110)</td>
									<td class="text-center"><?php echo isset($list['temp'])?$list['temp']:''; ?> (98.6 F)</td>
									<td class="text-center"><?php echo isset($list['weight'])?$list['weight']:''; ?></td>
								</tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                              <?php }else{ ?>
                              <div>No data available</div>
                              <?php } ?>
                           </div>
				</div>
                
            </div>
        </div>
    </div>
</div>
<script>

 $(document).ready(function() {
    $('#example4').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
    $(document).ready(function() {

        $('#vitals').bootstrapValidator({
            fields: {
                
                bp: {
                    validators: {
                        notEmpty: {
                            message: 'Bp is required'
                        }
                    }
                },
				fbs_rbs: {
                    validators: {
                        notEmpty: {
                            message: 'FBS/RBS is required'
                        }
                    }
                },
				temp: {
                    validators: {
                        notEmpty: {
                            message: 'Temp is required'
                        }
                    }
                },
				weight: {
                    validators: {
                        notEmpty: {
                            message: 'weight is required'
                        }
                    }
                },
                
                pulse: {
                    validators: {
                        notEmpty: {
                            message: 'Pulse is required'
                        }
                    }
                }
            }
        })

    });
</script>