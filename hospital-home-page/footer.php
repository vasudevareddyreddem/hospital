    
    <!-- Central Modal Medium Info -->
    <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Register</p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>


                <span id="errormsg_1">
                    <?php
				if(isset($_GET['message'])&& $_GET['message']=='success'){
					?>
                    <div id="bottom">
                        <div class="page-alert">
                            <div class="alert alert-success page-alert" id="alert-1">
                                <strong>Your query successfully sent!</strong>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById("contact").click();
				</script>
                    <?php } ?>

                    <?php if(isset($_GET['message'])&& $_GET['message']=='fail'){ ?>
                    <div id="bottom">
                        <div class="page-alerts">
                            <div class="alert alert-warning page-alert" id="alert-2">
                                <strong>Technical problem will occured. Please try again. </strong>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.getElementById("contact").click();
				</script>
                    <?php } ?>
                </span>


                <!--Body-->
                <form id="defaultForm" method="post" action="register_form.php">
                    <div class="modal-body">
                        <input type="hidden" name="form_one" value="1">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class=" control-label">Name of the Hospital</label>
                                <div class="">
                                    <input type="text" class="form-control" name="h_name" placeholder="Enter Name of the Hospital" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Name of the Representative</label>
                                <div class="">
                                    <input type="text" class="form-control" name="r_name" placeholder="Enter Name of the Representative" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Mobile Number</label>
                                <div class="">
                                    <input type="text" class="form-control" name="mobilenumber" placeholder="Enter Mobile Number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Email</label>
                                <div class="">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" control-label">Message</label>
                                <div class="">
                                    <textarea type="text" class="form-control" name="message" placeholder="Enter Message Here"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-primary pull-right" name="signup" value="Sign up">Register</button>
                        <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Info-->


    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="h4">Registered Address</h3>
                    <p>6-2-102, Thyagaraja Nagar Area, Revenue Ward No 6,
                        Old Maternity Road, Tirupati,
                        Chittor- 517501,
                        Andhra Pradesh - India.</p>
                </div>
                <div class="col-md-2">&nbsp;
                </div>
                <div class="col-md-4">
                    <h3 class="h4">Contact Us</h3>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>
                        &nbsp; medspaceit@gmail.com</p>
                    <p><i class="fa fa-phone-square" aria-hidden="true"></i>

                        &nbsp; 7095103103</p>
                </div>
            </div>
        </div>
    </footer>

    
    <script type="text/javascript">
        function scrollNav() {
            $('.nav a').click(function() {
                //Toggle Class
                $("li.active").removeClass("active");
                $(this).closest('li').addClass("active");
                //    var theClass = $(this).attr("class");
                //    $('.'+theClass).parent('li').addClass('active');
                //Animate
                $('html, body').stop().animate({
                    scrollTop: $($(this).attr('href')).offset().top - 160
                }, 400);
                return false;
            });
            $('.scrollTop a').scrollTop();
        }
        scrollNav();
    </script>
    
    <script type="text/javascript">
        setTimeout(function() {
            $('#errormsg_1').fadeOut('fast');
        }, 10000);

        $(document).ready(function() {
            // Generate a simple captcha
            $('#defaultForm').bootstrapValidator({


                fields: {
                    h_name: {
                        validators: {
                            notEmpty: {
                                message: 'The Hospital name is required and cannot be empty'
                            }
                        }
                    },


                    r_name: {
                        validators: {
                            notEmpty: {
                                message: 'The Representative name is required and cannot be empty'
                            },

                        }
                    },
                    mobilenumber: {
                        validators: {
                            notEmpty: {
                                message: 'Mobile number is required and cannot be empty'
                            },
                            regexp: {
                                regexp: /^[0-9]{10,14}$/,
                                message: 'Mobile number must be 10 to 14 digits'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Email Id is required and cannot be empty'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                                message: 'Please enter a valid email address. For example johndoe@domain.com.'
                            }
                        }
                    }
                }
            })
            // Validate the form manually
            $('#validateBtn').click(function() {
                $('#defaultForm').bootstrapValidator('validate');
            });

            $('#resetBtn').click(function() {
                $('#defaultForm').data('bootstrapValidator').resetForm(true);
            });
        });
    </script>

</body>

</html>