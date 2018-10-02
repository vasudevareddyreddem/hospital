<?php include("header.php"); ?>

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <!--Section: Main info-->
            <section class="pt-5 wow fadeIn">

                <!--Grid row-->
                <div class="row mt-5">

                    <!--Grid column-->
                    <div class="col-md-6 mb-5">

                        <img src="img/card.png" class="img-fluid " alt="">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-5">

                        <!-- Main heading -->
                        <h3 class="h3 mb-3">Medspace Health Card</h3>
                        <p>
                            Medspace card is a collection of medical records that get generated during any clinical encounter. The purpose of collecting medical records is to have accurate and faster diagnosis that translates into better treatment at lower costs, avoiding unnecessary investigations every time we visit hospitals.
                        </p>
                        <p>Medspace card is designed to store patient’s medical history. It gives each patient a smart card containing his/her complete medical history. </p>
                        <p>When a patient visits the hospital, patient’s information, medical records can be accessed directly through Medspace card. At the end of the process it has the capability to update patient’s information.</p>
                        <!-- Main heading -->
                    </div>
                    <!--Grid column-->
                    
                    <!--Grid column-->
                    <div class="col-md-12 mb-3">

                        <!-- Main heading -->
                        <h3 class="h3 mb-3">Medspace Health Card Benefits</h3>
                        <ul>
                            <li><p>
                            Health cards are designed to save customers data and have the capacity to update patient healthcare information. 
                            </p></li>
                            <li><p>Health card  gives access to assess the complete and detailed medical records of the patient.</p></li>
                            <li><p>Through these health cards patients can easily book appointment with the concerned doctor or  hospital.</p></li>
                            <li><p>Offers various discounts on OP, IP, Medicines and Lab tests.</p></li>
                        </ul>
                        <!-- Main heading -->

                    </div>
                    <!--Grid column-->
                    
                    <!--Grid column-->
                    <div class="col-md-12 mb-5">

                        <!-- Main heading -->
                        <h3 class="h3 mb-3">Medspace Online Appointment / Pharmacy / Lab Tests App</h3>
                        <p>
                            Medspace Appointment App can be used for booking appointments in hospital for a particular department with date & time slot.  
                        </p>
                        <p>Once the date and time slot is done then the hospital’s authorized person will send slot confirmation message and patient will receive slot confirmation on their mobile app. </p>
                        <!-- Main heading -->
                        
                        <ul>
                            <li>
                                <h4>Pharmacy</h4>
                                <p>
                                    Medicines can be ordered by calling the pharmacy or by uploading the genuine prescription. The prescription will be sent to nearby pharmacies. Final bill, discount and delivery date will be sent to you by the pharmacies. You can accept the pharmacy order and get confirmation on mobile app. 
                                </p>
                            </li>
                            <li>
                                <h4>Lab</h4>
                                <p>
                                    Patient will have the option to choose the prescribed lab test and submit the duly filled online form to the lab. Patient will receive  the information regarding date, time and details of the lab technician who collect the samples at your doorstep for minor tests, and for major tests patient will be given appointment to approach the lab. Reports will be generated within twelve hours after collecting samples. 
                                </p>
                            </li>
                        </ul>
                        
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Main info-->

        </div>
    </main>
    <!--Main layout-->

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
    
<?php include("footer.php"); ?>