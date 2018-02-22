<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
   
    <title>Hospital</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendor/plugins/tether/css/tether.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/vendor/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/vendor/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css" />

	<!-- style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/login.css">
	<!-- favicon -->
    
</head>
<style>
.help-block{
	color:red;
}
</style>
<body class="backimg">
    <div class="form-title">
        <h1>Login Form</h1>
    </div>
    <!-- Login Form-->
    <div class="login-form text-center">
        <div class="">
        </div>
        <div class="form formLogin">
            <h2>Login to your account</h2>
            <form id="loginform" name="loginform" action="<?php echo base_url('admin/loginpost'); ?>" method="post" enctype="multipart/form-data">
				<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
					<div class="form-group">
					<input class="form-control" type="text" id="email_id" name="email_id"  placeholder="Email Address" />
					</div>
					<div class="form-group">
					<input class="form-control" type="password" id="password" name="password" placeholder="Password" />
					</div>
				<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="remember text-left">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox" checked>
                        <label for="checkbox2">
                            Remember me
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block text-white">Login</button>
                <div class="forgetPassword"><a href="javascript:void(0)">Forgot your password?</a>
                </div>
            </form>
        </div>
    
        <div class="form formReset">
            <h2>Reset your password?</h2>
            <form>
                <input type="email" placeholder="Email Address" />
                <button>Send Verification Email</button>
            </form>
        </div>
    </div>
    <!-- start js include path -->
	<script src="<?php echo base_url(); ?>assets/vendor/plugins/jquery.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/vendor/plugins/login.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/plugins/pages.js" ></script>
	<script src="<?php echo base_url(); ?>assets/vendor/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/vendor/plugins/bootstrapValidator.min.js" ></script>
    
	<script>
	$(document).ready(function() {
    $('#loginform').bootstrapValidator({
        
        fields: {
            email_id: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },
             
            password: {
                validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
                }
            }
        })
     
});


</script>
    <!-- end js include path -->
</body>


</html>