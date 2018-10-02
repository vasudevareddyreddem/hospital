<?php include("header.php"); ?>

    
    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <!--Section: Not enough-->
            <section class="pt-3 wow fadeIn">
                <hr>
                <h2 class=" h3 text-center py-2">Our Hospital Process</h2>

                <p class="text-center ">Online Doctor Appointment with Using MedSpace App and Hospital Management Software.</p>
                <br>
                <div class="row mt-5">

                    <!--First column-->
                    <div class="col-md-6">

                        <p>Medspace is an advanced hospital information management system mainly focuses on the clinical, administration and financial needs of the hospital. It is designed to track patient health flow and can be accessed by doctors and health care providers. It is easy to track patient information, prescriptions, laboratory test results, operations, medical history etc. Medspace also provides health cards to the patients (customers), these health cards will benefit the patient to access medical history.</p>
                        
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-6">
                        <img src="img/" alt="MDB Magazine Template displayed on iPhone" class="img-fluid"/>
                    </div>
                    <!--/Second column-->
                </div>
                <!-- row-->
                <div class="row mb-5">
                    
                    <div class="col-md-12">
                        <hr class="my-4">
                        <h3 class="h3 mb-3">Hospital Admin</h3>
                        <p>
                            This is the main module of the HIMS. Hospital admin can add resources like doctor, receptionist, pharmacy, lab coordinator, ward management, nurse. Hospital admin can manage departments of hospitals. It can add speciality and assign department to consultant. Maintains ward details.  Patient details, reports are recorded. Dashboard  contains patient analytics like total number of patients, rescheduled patients, new patients. 
                        </p>
                        <hr class="my-4">
                    </div>
                    
                    <div class="col-md-12">
                        <h3 class="h3 mb-3">Reception</h3>
                        <p>
                            Reception module handles in-patient, out-patient registration, appointment scheduling and availability of doctors. This module collects and stores patient profile. It handles enquires about patient’s admission and discharge details with in the hospital. This facilitates patients to reschedule or repeat appointments with doctor. Birth certificates/death certificates/discharge reports can be generated in this module. 
                        </p>
                        <hr class="my-4">
                    </div>
                    
                    <div class="col-md-12">
                        <h3 class="h3 mb-3">Doctor</h3>
                        <p>
                            Doctor can view in-patient and out-patient details in the worksheet and can start the consultation. Prescribe necessary examinations. Add diagnosis and prescriptions for the patients and can directly send the prescriptions and laboratory tests to pharmacy, lab coordinator or the patient can be assigned to another doctor. 
                        </p>
                        <hr class="my-4">
                    </div>
                    
                    <div class="col-md-12">
                        <h3 class="h3 mb-3">Lab Coordinator</h3>
                        <p>
                            The  test prescribed by the doctor is automatically send to laboratory. Lab can feed the details of the test results and print the reports. If the lab doesn’t have the prescribed test then a procurement can be sent to the outsource lab. The test results can be downloaded from patients database.
                        </p>
                        <hr class="my-4">
                    </div>
                
                    <div class="col-md-12">
                        <h3 class="h3 mb-3">Pharmacy</h3>
                        <p>
                            The medicine prescribed by the doctor is send to the pharmacy. Can view prescriptions and issue medicines to the patients. This module maintains all the medicine information, dosage details etc. Medicines can be uploaded and viewed details. It can be linked to main billing. As patient collects medicines from pharmacy their charges will automatically transfer to patient billing.
                        </p>
                        <hr class="my-4">
                    </div>
                    
                    <div class="col-md-12">
                        <h3 class="h3 mb-3">Ward Management</h3>
                        <p>
                            The ward management module manages in-patient discharge & transfer. This module takes care of room /ward allocation to the patient once the patient is admitted to the IPD. Assign beds to the patients. It deals with the maintenance of the wards, inter- and intra-ward transfers and preparation of the discharge summary. Can view nursing notes.
                        </p>
                        <hr class="my-4">
                    </div>
                    
                    <div class="col-md-12">
                        <h3 class="h3 mb-3">Nurse Station Module</h3>
                        <p>
                            Nurse station module enables coordination between nursing station and ward. This module helps the nurses to manage laboratory tests, prescriptions and daily observations. Helps in monitoring of patient condition and keeps record of doctor and nurse notes. This module has the facility to request discharge and bed transfer. It has the facility to order medicines, laboratory tests etc. This module has patient details, diagnosis, admitted physician. Patient condition chart gives the statistics of the patient and maintains reports of patients.
                        </p>
                        <hr class="my-4">
                    </div>
                    
                    <div class="col-md-12">
                        <h3 class="h3 mb-3">Operation Theatre /ICU: </h3>
                        <p>
                            Operation theatre module maintains scheduling of operation theatres, surgery team, patient tracking, operation theatre consumable management. Maintains preoperative and post operative conditions of the patient. Maintains the complete information of surgery including start time, end time, surgery team, notes etc.
                        </p>
                        <p>ICU module has all the details about patients. The patients can be admitted to any of the ICU’s. Patient follow up can be done and the notes are recorded. Medicines can be requested from pharmacy and send lab tests requests to laboratory.
                        </p>
                    </div>
                    
                </div>

            </section>
            
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