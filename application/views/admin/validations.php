<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<style>
.help-block{
	color:red;
}
</style>
<div class="page-content-wrapper">
                <div class="page-content">
                  
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header> Validations</header>
                                  
                                </div>
                                <div class="card-body" id="bar-parent">
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
<?php include('footer.php'); ?>