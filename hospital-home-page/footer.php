

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