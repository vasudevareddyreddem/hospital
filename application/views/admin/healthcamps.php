<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Health Camps</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Health Camps</li>
                </ol>
            </div>
        </div>

        <div class="panel tab-border card-topline-green">
            
            <header class="panel-heading panel-heading-gray custom-tab ">
                 <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#home" data-toggle="tab" class="<?php if(isset($tab) && $tab ==''){ echo " active"; } ?>">Add Health Camps</a>
                    </li>
                    <li class="nav-item"><a href="#about" data-toggle="tab" class="<?php if(isset($tab) && $tab ==1){ echo " active"; } ?>">Health Camps List</a>
                    </li>
					
                 </ul>
            </header>
            
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane <?php if(isset($tab) && $tab ==''){ echo " active"; } ?>" id="home">
                        <div class="container">

                            <form action="<?php echo base_url('wallet/addpost'); ?>" method="post" id="coupon_post" name="coupon_post" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <label> Hospital Name </label>
                                        <select class="form-control" id="hospital_id" name="hospital_id">
                                            <option value="">Select</option>
                                            <?php foreach($hospital_list as $list){ ?>
                                            <option value="<?php echo $list['hos_id']; ?>">
                                                <?php echo $list['hos_bas_name']; ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
									<div class="form-group col-md-12 ">
                                                   <label class="">Booking Date </label>
                                                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                      <input class="form-control" size="16" type="text" id="date" name="date" value="" data-bv-field="date">
                                                      <span class="input-group-addon"><span class="fa fa-calendar"><span style="color:red" id="check"></span></span></span>
                                                   </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="date" data-bv-result="NOT_VALIDATED" style="display: none;">Booking Date is required</small></div>
												
<div class="form-group col-md-12 has-success">
<label class="">From Time </label>
<select class="form-control" id="time" name="time" data-bv-field="time">
<option value="">Select</option>
			<option value="12:00 am">12:00 am</option>
			<option value="12:30 am">12:30 am</option>
			<option value="01:00 am">01:00 am</option>
			<option value="01:30 am">01:30 am</option>
			<option value="02:00 am">02:00 am</option>
			<option value="02:30 am">02:30 am</option>
			<option value="03:00 am">03:00 am</option>
			<option value="03:30 am">03:30 am</option>
			<option value="04:00 am">04:00 am</option>
			<option value="04:30 am">04:30 am</option>
			<option value="05:00 am">05:00 am</option>
			<option value="05:30 am">05:30 am</option>
			<option value="06:00 am">06:00 am</option>
			<option value="06:30 am">06:30 am</option>
			<option value="07:00 am">07:00 am</option>
			<option value="07:30 am">07:30 am</option>
			<option value="08:00 am">08:00 am</option>
			<option value="08:30 am">08:30 am</option>
			<option value="09:00 am">09:00 am</option>
			<option value="09:30 am">09:30 am</option>
			<option value="10:00 am">10:00 am</option>
			<option value="10:30 am">10:30 am</option>
			<option value="11:00 am">11:00 am</option>
			<option value="11:30 am">11:30 am</option>
			<option value="12:00 pm">12:00 pm</option>
			<option value="12:30 pm">12:30 pm</option>
			<option value="01:00 pm">01:00 pm</option>
			<option value="01:30 pm">01:30 pm</option>
			<option value="02:00 pm">02:00 pm</option>
			<option value="02:30 pm">02:30 pm</option>
			<option value="03:00 pm">03:00 pm</option>
			<option value="03:30 pm">03:30 pm</option>
			<option value="04:00 pm">04:00 pm</option>
			<option value="04:30 pm">04:30 pm</option>
			<option value="05:00 pm">05:00 pm</option>
			<option value="05:30 pm">05:30 pm</option>
			<option value="06:00 pm">06:00 pm</option>
			<option value="06:30 pm">06:30 pm</option>
			<option value="07:00 pm">07:00 pm</option>
			<option value="07:30 pm">07:30 pm</option>
			<option value="08:00 pm">08:00 pm</option>
			<option value="08:30 pm">08:30 pm</option>
			<option value="09:00 pm">09:00 pm</option>
			<option value="09:30 pm">09:30 pm</option>
			<option value="10:00 pm">10:00 pm</option>
			<option value="10:30 pm">10:30 pm</option>
			<option value="11:00 pm">11:00 pm</option>
			<option value="11:30 pm">11:30 pm</option>
	
</select>
</div>
<div class="form-group col-md-12 has-success">
<label class="">To Time </label>
<select class="form-control" id="time" name="time" data-bv-field="time">
<option value="">Select</option>
			<option value="12:00 am">12:00 am</option>
			<option value="12:30 am">12:30 am</option>
			<option value="01:00 am">01:00 am</option>
			<option value="01:30 am">01:30 am</option>
			<option value="02:00 am">02:00 am</option>
			<option value="02:30 am">02:30 am</option>
			<option value="03:00 am">03:00 am</option>
			<option value="03:30 am">03:30 am</option>
			<option value="04:00 am">04:00 am</option>
			<option value="04:30 am">04:30 am</option>
			<option value="05:00 am">05:00 am</option>
			<option value="05:30 am">05:30 am</option>
			<option value="06:00 am">06:00 am</option>
			<option value="06:30 am">06:30 am</option>
			<option value="07:00 am">07:00 am</option>
			<option value="07:30 am">07:30 am</option>
			<option value="08:00 am">08:00 am</option>
			<option value="08:30 am">08:30 am</option>
			<option value="09:00 am">09:00 am</option>
			<option value="09:30 am">09:30 am</option>
			<option value="10:00 am">10:00 am</option>
			<option value="10:30 am">10:30 am</option>
			<option value="11:00 am">11:00 am</option>
			<option value="11:30 am">11:30 am</option>
			<option value="12:00 pm">12:00 pm</option>
			<option value="12:30 pm">12:30 pm</option>
			<option value="01:00 pm">01:00 pm</option>
			<option value="01:30 pm">01:30 pm</option>
			<option value="02:00 pm">02:00 pm</option>
			<option value="02:30 pm">02:30 pm</option>
			<option value="03:00 pm">03:00 pm</option>
			<option value="03:30 pm">03:30 pm</option>
			<option value="04:00 pm">04:00 pm</option>
			<option value="04:30 pm">04:30 pm</option>
			<option value="05:00 pm">05:00 pm</option>
			<option value="05:30 pm">05:30 pm</option>
			<option value="06:00 pm">06:00 pm</option>
			<option value="06:30 pm">06:30 pm</option>
			<option value="07:00 pm">07:00 pm</option>
			<option value="07:30 pm">07:30 pm</option>
			<option value="08:00 pm">08:00 pm</option>
			<option value="08:30 pm">08:30 pm</option>
			<option value="09:00 pm">09:00 pm</option>
			<option value="09:30 pm">09:30 pm</option>
			<option value="10:00 pm">10:00 pm</option>
			<option value="10:30 pm">10:30 pm</option>
			<option value="11:00 pm">11:00 pm</option>
			<option value="11:30 pm">11:30 pm</option>
	
</select>
</div>

												
									
								<br>
                                <div class="">
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-sm btn-success pull-right" type="button">Add</button>
                                </div>	

                                </div>
                                

                            </form>


                        </div>
                        </div>
                    </div>
                    <div class="tab-pane <?php if(isset($tab) && $tab ==1){ echo " active"; } ?>" id="about">
                        <div class="container">
                            <div class="row">
                                <div class="card-body col-md-12 table-responsive">
                                  
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
                                        <thead>
                                            <tr>
                                                <th>Hospital Name</th>
                                                <th>Booking Date</th>
                                                <th>From Time</th>
                                                <th>To Time</th>
                                                <th>Created Date & Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
												<td> hospital 1</td>
												<td> 29-01-2019</td>
												<td>1pm</td>
												<td>6pm</td>
												<td>2018-12-31 16:05:37</td>
											</tr> 
											</tbody>
                                    </table>
                                  

                                </div>
                            </div>

                        </div>
                    </div>
					
					
                   
					
                </div>
            </div>
            
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">

                        <div style="padding:10px">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 style="pull-left" class="modal-title">Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger alert-dismissible" id="errormsg" style="display:none;"></div>
                            <div class="row">
                                <div id="content1" class="col-xs-12 col-xl-12 form-group">
                                    Are you sure ?
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <button type="button" aria-label="Close" data-dismiss="modal" class="btn  blueBtn">Cancel</button>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <a href="?id=value" class="btn  blueBtn popid" style="text-decoration:none;float:right;"> <span aria-hidden="true">Ok</span></a>
                                </div>
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
    $(document).ready(function() {
        $('#example4').DataTable({
          
        });
    }); 
	$(document).ready(function() {
        $('#example5').DataTable({
            "order": [
                [1, "desc"]
            ]
        });
    });
	

    function walletadmindeactive(id) {
        $(".popid").attr("href", "<?php echo base_url('wallet/status'); ?>" + "/" + id);
    }
	function walletadmindelete(id) {
        $(".popid").attr("href", "<?php echo base_url('wallet/delete'); ?>" + "/" + id);
    }
	function walletamt_admindelete(id) {
        $(".popid").attr("href", "<?php echo base_url('wallet/amt_delete'); ?>" + "/" + id);
    }	
	function wallet_amt_admindeactive(id){
        $(".popid").attr("href", "<?php echo base_url('wallet/amt_status'); ?>" + "/" + id);
    }
	
	

    function adminstatus(id) {
        if (id == 1) {
            $('#content1').html('Are you sure you want to deactivate?');

        }
        if (id == 0) {
            $('#content1').html('Are you sure you want to activate?');
        }
    }


    function adminstatus2(id) {

        $('#content1').html('Are you sure you want to delete?');

    }

    $(document).ready(function() {
        $('#coupon_post').bootstrapValidator({

            fields: {

                wallet_amount: {
                    validators: {
                        notEmpty: {
                            message: 'Wallet Amount is required'
                        },
                        regexp: {
                            regexp: /^[0-9. ]+$/,
                            message: 'Wallet Amount can only consist of digits'
                        }
                    }
                },
               ip_amount_percentage: {
                    validators: {
                        notEmpty: {
                            message: 'Ip amount percentage is required'
                        },
                         between: {
							min:0,
							max: 99,
							message: 'The Ip amount percentage must be between 0 and 99'
						}
                    }
                },
				op_amount_percentage: {
                    validators: {
                        notEmpty: {
                            message: 'OP amount percentage is required'
                        },
                         between: {
							min:0,
							max: 99,
							message: 'The OP amount percentage must be between 0 and 99'
						}
                    }
                },
				lab_amount_percentage: {
                    validators: {
                        notEmpty: {
                            message: 'Lab amount percentage is required'
                        },
                         between: {
							min:0,
							max: 99,
							message: 'The Lab amount percentage must be between 0 and 99'
						}
                    }
                },
                hospital_id: {
                    validators: {
                        notEmpty: {
                            message: 'Hospital Name is required'
                        }
                    }
                },
                type: {
                    validators: {
                        notEmpty: {
                            message: 'Type is required'
                        }
                    }
                }
            }
        })

    });
	$(document).ready(function() {
        $('#add_wallet_amt').bootstrapValidator({
			fields: {
				wallet_amount: {
                    validators: {
                        notEmpty: {
                            message: 'Wallet Amount is required'
                        },
                        regexp: {
                            regexp: /^[0-9. ]+$/,
                            message: 'Wallet Amount can only consist of digits'
                        }
                    }
                }
            }
        })

    });
</script>

