
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Billing</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Billing</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel tab-border card-topline-yellow">
                    <header class="panel-heading panel-heading-gray custom-tab ">
                        <ul class="nav nav-tabs x-scrool">

                            <li style="border-right:2px solid #fff" class="nav-item">
                                <a href="#bill" data-toggle="tab" class="<?php if(isset($tab)&& $tab==''){ echo " active";}?>"> Bill</a>
                            </li>

                            <li class="nav-item">
                                <a href="#bill_list" data-toggle="tab" class="<?php if(isset($tab)&& $tab==2){ echo "active";}?>">Bills List</a>
                            </li>

                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            
                            <div class="tab-pane  <?php if(isset($tab) && $tab==''){ echo " active";}?>" id="bill">
                                <div class="card">
                                    <div class="card-head">
                                        <header>Bill Details</header>
                                    </div>
                                    <div class="card-body ">
                                        <div class="card-body " id="bar-parent" style="margin-top:30px">

                                            <form name="bill_details" id="bill_details" action="" method="post" class="pad30 form-horizontal" onsubmit="">

                                                <div class="row">
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="bd_category">Category</label>
                                                        <select class="form-control" id="bd_category" name="bd_category" onchange="" >
                                                            <option value="0" disabled>Select</option>
                                                            <option value="1">IP</option>
                                                            <option value="2">Lab</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="bd_cnumber">Card Number</label>
                                                        <input type="text" name="bd_cnumber" id="bd_cnumber" class="form-control" placeholder="Enter Card Number">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="bd_name">Name</label>
                                                        <input type="text" name="bd_name" id="bd_name" class="form-control" placeholder="Enter Name">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="bd_mobile">Mobile</label>
                                                        <input type="text" name="bd_mobile" id="bd_mobile" class="form-control" placeholder="Enter Mobile Number">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="bd_amount">Amount</label>
                                                        <input type="text" name="bd_amount" id="bd_amount" class="form-control" placeholder="Enter Amount">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label for="bd_ccode">Coupon Code</label>
                                                        <input type="text" name="bd_ccode" id="bd_ccode" class="form-control" placeholder="Enter Coupon Code">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="bd_dammount"> Doctor </label>
                                                        <input type="text" name="bd_dammount" id="bd_dammount" class="form-control" placeholder="Discounted Amount">
                                                    </div>
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="tab-pane <?php if(isset($tab)&& $tab==2){ echo " active";}?>" id="bill_list">
                                <div class="card">
                                    <div class="card-head">
                                        <header>Bills List</header>
                                    </div>
                                    <div class="card-body table-responsive ">
                                        
                                        <table class="table table-striped table-bordered" id="example3">
                                            <thead>
                                                <tr>
                                                    <th> Category </th>
                                                    <th> Card Number </th>
                                                    <th> Name </th>
                                                    <th> Mobile </th>
                                                    <th> Amount </th>
                                                    <th> Discounted Amount </th>
                                                    <th> Coupon Code </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
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
<script>
    $(document).ready(function() {

        $('#bill_details').bootstrapValidator({
            fields: {
                
                bd_category: {
                    validators: {
                        notEmpty: {
                            message: 'Category is required'
                        }
                    }
                },
                bd_cnumber: {
                    validators: {
                        notEmpty: {
                            message: 'Card Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]*$/,
                            message: 'Card Number must be in digits'
                        }
                    }
                },
                bd_name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9. ]+$/,
                            message: 'Name can only consist of alphanumeric, space and dot'
                        }
                    }
                },
                bd_mobile: {
                    validators: {
                        notEmpty: {
                            message: 'Mobile Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,14}$/,
                            message: 'Mobile Number must be 10 to 14 digits'
                        }
                    }
                },
                bd_amount: {
                    validators: {
                        notEmpty: {
                            message: 'Amount is required'
                        },
                        regexp: {
                            regexp: /^[0-9]*$/,
                            message: 'Amount must be in digits'
                        }
                    }
                },
                
                bd_ccode: {
                    validators: {
                        notEmpty: {
                            message: 'Coupon Code is required'
                        }
                    }
                },
                bd_dammount: {
                    validators: {
                        notEmpty: {
                            message: 'Discounted Amount is required'
                        }
                    }
                }
            }
        })

    });
</script>