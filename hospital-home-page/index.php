<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hospital Portal</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrapValidator.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
	    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
   
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <style type="text/css">
      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #345ef2!important;
              }
          }
    </style>
</head>


<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" >
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.php">
        <strong><img style="width:210px;height:auto;" src="img/logo.png" alt="logo"></strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto nav" >
			<li class="nav-item active">
            <a class="nav-link" href="#home-section">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="#hospital-section" >Hospital</a>
          </li> 
		  <li class="nav-item">
            <a class="nav-link" href="#waste-m-section" >Waste Mangement</a>
          </li>
          
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          
          <li class="nav-item">
            <a href="#"  data-toggle="modal" data-target="#centralModalInfo" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fa fa-user mr-2"></i>Register
            </a>
          </li>&nbsp;
		
		
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <div class="view" style="background-image: url('img/ban2.png'); background-repeat: no-repeat; background-size: cover;" id="home-section">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class=" h1 h1-style-caption" >
	
                Welcome To Medspace
              </h1>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
  <div class="clearfix">&nbsp;</div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="img/card.png" class="img-fluid " alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

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

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

    
     

    

      <!--Section: Not enough-->
      <section id="hospital-section">

        <h2 class=" h3 text-center py-2">Our Hospital Process</h2>
		 
                <p class="text-center ">Online Doctor Appointment with Using MedSpace App and Hospital Management Software.</p>
				<br>

        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-4">
          

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fa fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                
                <p class="grey-text">E-Health Card (MedSpace) OP Appointment Requested 
to particular Department Hospitals with Date & time Slot.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fa fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                
                <p class="grey-text">Hospital Authorized Person should  Send Date and Time 
Slot Accept Confirmation Message received by patient in 
Medspace Mobile App.	</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fa fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
               
                <p class="grey-text">Medspace Patient Visit the Hospital at Scheduled Time,
				Receptionist Enter Full Patient Details & send to Concern Assigned Doctor.</p>
                <div style="height:15px"></div>
              </div>
            </div>
			<div class="row">
              <div class="col-2">
                <i class="fa fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                
                <p class="grey-text">First Doctor Confirm The patient was new or old.
					<ol>
					<li><p>If old Patient, Doctor Check Previous History of patient.</p></li>
					<li><p>If New Patient Direct Start Consultancy.</p></li>
					</ol>
                </p>
                <div style="height:15px"></div>
              </div>
            </div> 
            <!--/Fourth row-->
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4 flex-center">
            <img src="img/hospital-process.png" alt="MDB Magazine Template displayed on iPhone" class="z-depth-0 img-fluid">
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4 mt-2">
            <!--First row-->
            
			<div class="row">
              <div class="col-2">
                <i class="fa fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                
                <p class="grey-text">Doctor Having Three Options 
	
					<ol>
					<li><p>Pharmacy</p></li>
					<li><p> Lab</p></li>
					<li><p> IP</p></li>
					</ol>
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fa fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
               
                <p class="grey-text"><strong>Pharmacy:</strong> Doctor Simply Choose Medicines In Drop Down 
    (if Doctor Type one letter of medicine name it will automatically shows).	
	If selected Medicine Not Available & Chooses 
	another  Combination of  Medicine.</p>
                <div style="height:15px"></div>
              </div>          
			  <div class="row">
				  <div class="col-2">
					<i class="fa fa-check-circle fa-2x indigo-text"></i>
				  </div>
				  <div class="col-10">
				   
					<p class="grey-text"><strong> Lab:</strong> Doctor Simply Choose Diagnostics in
						Drop Down, to  select any lab test and send to 
						laboratory concern person.</p>
					<div style="height:15px"></div>
				  </div>
            </div>  
			<div class="row">
				  <div class="col-2">
					<i class="fa fa-check-circle fa-2x indigo-text"></i>
				  </div>
				  <div class="col-10">
				   
					<p class="grey-text"><strong> IP:</strong> if patient has any Emergency issue, Doctor
	Send full details  to IP Authorized Person.</p>
					<div style="height:15px"></div>
				  </div>
            </div>
            <!--/Second row-->

          

            

        </div>
        <!--/First row-->

      </section>
	  
      <hr class="my-5">
     <section class="mt-5 wow fadeIn" id="waste-m-section">

        <!--Grid row-->
        <div class="row">

        

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Waste Mangement Software </h3>
			 <p>
              Bio-medical Waste Management Rules, 2016 notified on 28.03.2016 and as amended thereof under the Environment (Protection) Act, 1986, stipulates that it is the duty of every Health Care Facility (HCF) to establish a bar code system for bags or containers containing bio-medical waste (BMW) to be sent out of the premises or place for any purpose, by 27.03.2019. Also, Rule 5 of the BMWM Rules, 2016 stipulates that it is the duty of the every Operator of Common Bio-medical Waste Treatment Facility (CBWTF) to establish bar code system for handling of bio-medical waste. </p><p>
These guidelines have been prepared to facilitate and provide guidance to both the Occupier as well as Operator of CBWTF to establish bar code system and also to have uniformity in adoption of the bar code system throughout the country, thereby ensuring effective enforcement of the BMWM Rules, 2016. </p>
            
            <!-- Main heading -->


           

          
          </div>
		    <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="img/barcode.png" class="img-fluid " alt="">

          </div>
          <!--Grid column-->
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>

      <hr class="mb-5">

      <!--Section: More-->
      <section>

        <h2 class="my-2 h3 text-left">Need for Bar Code System </h2>
		<p>Bar code system would help in accounting the quantity of biomedical waste being collected, treated and disposed. This system would also help the prescribed authorities in monitoring the implementation of BMWM Rules, 2016. The benefits of Bar code system are summarised below; </p>
		<ol>
			<li><p>Tracking of biomedical waste from source of generation to intended destination for final treatment and disposal;</p> </li>
			<li><p>Daily check on the Occupier, transporter (involved in transportation of bio-medical waste within HCF as well as transportation of bio-medical waste from HCF to the CBWTF premises) and Operator of a CBWTF; </p> </li>
			<li><p>Preventing pilferage of bio-medical waste at HCFs as well as during transportation of waste from HCF to the CBWTF; </p> </li>
			<li><p>)  Keeping record of visits made by CBWTF to the member HCFs for collection of waste; </p> </li>
			<li><p>Identification of source of generation of bio-medical waste in case waste is disposed of improperly; </p> </li>
			<li><p>Creates real time online monitoring of waste generation, collection, transportation, treatment and disposal; and </p> </li>
			<li><p>Quantification of bio-medical waste generated, colour coding-wise waste handed over to the CBWTF operator by the Occupier and waste collected daily by the Operator of a 
			CBWTF from the member HCFs for further treatment and disposal. 
			</p> </li>
		</ol>
       

       

      </section>
	  <section class="my-5">

        <h2 class="my-2 h3 text-left">Stakeholders responsible for Implementation of the Bar Code System  </h2>
		<p><strong> Prescribed Authority:</strong> The State Pollution Control Board (SPCB) in respect of the State, Pollution Control Committee (PCC) in respect of the Union Territory (UT) and Director General, Armed Forces Medical Services (DGAFMS) in respect of Armed Forces Health Care Establishments fall under the jurisdiction of the Ministry of Defense are the prescribed authority for overall enforcement of the BMWM Rules, 2016 including implementation of Bar code system.. </p>
		<p><strong>Health Care Facility:</strong> The person having administrative control over the institution and the premises generating bio-medical waste, which includes a hospital, nursing home, clinic, dispensary, veterinary institution, animal house, pathological laboratory, blood bank, health care facility and clinical establishment, is responsible to implement bar code labelling system.  </p>
		<p><strong>  Operator of a Common Bio-medical Waste Treatment Facility (CBWTF):</strong> The person who owns or controls a Common Bio-medical Waste Treatment Facility (CBWTF) for the collection, reception, storage, transport, treatment and disposal or any other form of handling of bio-medical waste is also responsible for implementing a Bar coding system.</p>
		
       

       

      </section>
      <!--Section: More-->

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
					<div id="bottom" >
				<div class="page-alert">
					<div class="alert alert-success page-alert" id="alert-1">
						 <strong >Your query successfully sent!</strong>
					</div>
					</div>
				</div>
				<script>
				document.getElementById("contact").click();
				</script>
				<?php } ?>
				
				<?php if(isset($_GET['message'])&& $_GET['message']=='fail'){ ?>
				<div id="bottom" >
				<div class="page-alerts">
					<div class="alert alert-warning page-alert" id="alert-2">					
						 <strong >Technical problem will occured. Please try again. </strong>
					</div>
					</div>
				</div>
				<script>
				document.getElementById("contact").click();
				</script>
				<?php } ?>
				</span>
				
				
        <!--Body-->
	 <form id="defaultForm" method="post"  action="register_form.php">	 
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
				<p>6-2-102,Thyagaraja Nagar Area,Revenue Ward No 6,
				Old Maternity Road,Tirupati,
				Chittor- 517501
				Andhra Pradesh - India</p>
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
  $('.nav a').click(function(){  
    //Toggle Class
    $(".active").removeClass("active");      
    $(this).closest('li').addClass("active");
    var theClass = $(this).attr("class");
    $('.'+theClass).parent('li').addClass('active');
    //Animate
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 160
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
						message:  'The Hospital name is required and cannot be empty'
					}
				}
            },
			
            
            r_name: {
                 validators: {
					notEmpty: {
						message:  'The Representative name is required and cannot be empty'
					},
					
				}
            },mobilenumber: {
                 validators: {
					notEmpty: {
						message: 'Mobile number is required and cannot be empty'
					},
					regexp: {
					regexp:/^[0-9]{10,14}$/,
					message: 'Mobile number must be 10 to 14 digits'
					}
				}
            },email: {
                 validators: {
					notEmpty: {
						message: 'Email Id is required and cannot be empty'
					},
					regexp: {
					regexp:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message:'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            }
            }
        })
     
});

</script>
  
</body>

</html>
