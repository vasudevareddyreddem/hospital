<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Rources List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Rources</li>
            </ol>
         </div>
      </div>
	  <div class="row">	
			<div class="col-md-12">
                            <div class="panel tab-border card-topline-yellow">
                                <header class="panel-heading panel-heading-gray custom-tab ">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#home" data-toggle="tab" class="active">Home</a>
                                        </li>
                                        <li class="nav-item"><a href="#about" data-toggle="tab">About</a>
                                        </li>
                                    </ul>
                                </header>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home">
                                            <div class="card ">
	
	<div class="card-body " id="bar-parent" style="margin-top:30px">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3">
				<ul class="nav nav-tabs tabs-left">
					<li class="nav-item">
						<a href="#tab_6_1" data-toggle="tab" class="active"> Home </a>
					</li>
					<li class="nav-item">
						<a href="#tab_6_2" data-toggle="tab"> Profile </a>
					</li>
					
					<li class="nav-item">
						<a href="#tab_6_1" data-toggle="tab"> Settings </a>
					</li>
					<li class="nav-item">
						<a href="#tab_6_1" data-toggle="tab"> More </a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9">
				<div class="tab-content">
					<div class="tab-pane active" id="tab_6_1">
						 <form class=" pad30 form-horizontal" action=" " method="post"  id="contact_form">
                                        <div class="row">
											 <div class="form-group col-md-6">
											  <label >first Name</label>
											  <input type="text" class="form-control"  name="first_name" id="first_name" placeholder="Enter Name" >
											</div>
											<div class="form-group col-md-6">
											  <label >Last Name</label>
											  <input type="text" class="form-control"  name="last_name" id="last_name" placeholder="Enter Name" >
											 
											</div>
<div class="form-group col-md-6">
	<label class="">Date Picking</label>
	<div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		<input class="form-control" size="16" type="text" value="">
		<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
	</div>
</div>
											<div class="form-group col-md-6">
											  <label for="email">Email</label>
											  <input type="email" class="form-control"  placeholder="Enter email" >
											</div>
											
										
										
											<div class="form-group col-md-6">
											  <label for="email">National ID</label>
											  <input type="text" class="form-control"  placeholder="Adhar Id" >
											</div>
											
											
										
										
											<div class="form-group col-md-6">
											  <label for="email">Address1</label>
											  <textarea type="textarea" class="form-control"  placeholder="Enter Address" ></textarea>
											</div>
											<div class="form-group col-md-6">
											  <label for="email">Address2</label>
											  <textarea type="textarea" class="form-control"  placeholder="Enter Address" ></textarea>
											</div>
											<div class="form-group col-md-6">
											  <label for="email">Address3</label>
											  
											 <div class="row">
											 <div class="col-md-6">
												<input type="text" class="form-control"  placeholder="Enter Zip Code" >
											 </div>
											 <div class="col-md-6 row">
												<input type="text" class="form-control"  placeholder="Enter City" >
											 
											</div>
											</div>
											</div>
											<div class="form-group col-md-6">
											  <label for="email">Nationality</label>
											  
											 <div class="row">
											 <div class="col-md-6">
												<input type="text" class="form-control"  placeholder=" Enter State" >
											 </div>
											 <div class="col-md-6 row">
												<input type="text" class="form-control"  placeholder="Enter Country" >
											 
											</div>
											</div>
											</div>
											
										</div>
										<button class="btn btn-praimry " type="submit">Submit</button>
                                    </form>
					</div>
					<div class="tab-pane fade" id="tab_6_2">
						<p>Doming conclusionemque sed ex, invenire ocurreret dissentiet his no. Ius cu novum assueverit, eam ex dolor molestiae theophrastus. Ex sed alii dolorum, et vis impetus expetendis dissentiunt. Vim ad soluta admodum tibique, inermis salutandi at mei, mutat nominati eos id. Id aeque iudico sit, eros adolescens est te.</p>
					</div>
					<div class="tab-pane fade" id="tab_6_3">
						<p>Most of its text is made up from sections 1.10.32–3 of Cicero's De finibus bonorum et malorum (On the Boundaries of Goods and Evils; finibus may also be translated as purposes).</p>
					</div>
					<div class="tab-pane fade" id="tab_6_4">
						<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                        </div>
                                        <div class="tab-pane" id="about">
                                            <div class="card card-topline-red">
	<div class="card-head">
		<header>MANAGED TABLE</header>
		<div class="tools">
			<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
			<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
			<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
		</div>
	</div>
	<div class="card-body ">
		<table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
			<thead>
				<tr>
					<th> Username </th>
					<th> Email </th>
					<th> Status </th>
					<th> Joined </th>
					<th> Actions </th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX">
					
					<td> shuxer </td>
					<td>
						<a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success"> Approved </span>
					</td>
					<td> 12 Jan 2012 </td>
					<td class="valigntop">
						<div class="btn-group">
							<button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
								<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-left" role="menu">
								<li>
									<a href="javascript:;">
										<i class="icon-docs"></i> New Post </a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-tag"></i> New Comment </a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-user"></i> New User </a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="javascript:;">
										<i class="icon-flag"></i> Comments
										<span class="badge badge-success">4</span>
									</a>
								</li>
							</ul>
						</div>
					</td>
				</tr>
				
				<tr class="odd gradeX">
					<td> restest </td>
					<td>
						<a href="mailto:userwow@gmail.com"> test@gmail.com </a>
					</td>
					<td>
						<span class="label label-sm label-success"> Approved </span>
					</td>
					<td> 12.12.2011 </td>
					<td class="valigntop">
						<div class="btn-group">
							<button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
								<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="javascript:;">
										<i class="icon-docs"></i> New Post </a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-tag"></i> New Comment </a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-user"></i> New User </a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="javascript:;">
										<i class="icon-flag"></i> Comments
										<span class="badge badge-success">4</span>
									</a>
								</li>
							</ul>
						</div>
					</td>
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
    $('#contact_form').bootstrapValidator({
        
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
     
});


</script>