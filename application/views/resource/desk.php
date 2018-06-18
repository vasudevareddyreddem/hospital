<?php //echo '<pre>';print_r($tab);exit; ?>

<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Front Desk</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Front Desk</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="panel tab-border card-topline-yellow">
               <header class="panel-heading panel-heading-gray custom-tab ">
                  <ul class="nav nav-tabs x-scrool">
				    
					 <li class="nav-item "><a href="#aboutop" data-toggle="tab" class="<?php if(isset($tab) && $tab==11 || $tab==12 || $tab==13 || $tab==0){ echo "active";}?>">OP Registration</a>
                     </li>
					 
                     <li class="nav-item"><a href="#home" data-toggle="tab" class="<?php if(isset($tab) && $tab!=11 && $tab!=12 && $tab!=13  && $tab!=0){ echo "active";}?>">IP New-Registration</a>
                     </li>
                     <li class="nav-item"><a href="#about" data-toggle="tab">Reschedule/Repeated -Registration</a>
                     </li>
                   
                  </ul>
               </header>
               <div class="panel-body">
                  <div class="tab-content">
                     <div class="tab-pane <?php if(isset($tab) && $tab!=11 && $tab!=12 && $tab!=13 && $tab!=0){ echo "active";}?>" id="home">
                        <div class="card ">
                           <div class="card-body " id="bar-parent" style="margin-top:30px">
                              <div class="row">
                                 <div class="col-md-3 col-sm-3 col-xs-3">
                                    <ul class="nav nav-tabs tabs-left">
                                       <li class="nav-item">
                                          <a href="#tab_6_1" data-toggle="tab" class="<?php if(isset($tab) && $tab==1){ echo "active";}?>"> Basic Details </a>
                                       </li>
                                       <li class="nav-item <?php if(isset($tab) && $tab==2){ echo "active";}?>">
                                          <a href="#tab_6_2" data-toggle="tab" > Demographic </a>
                                       </li>
                                       <li class="nav-item <?php if(isset($tab) && $tab==3){ echo "active";}?>">
                                          <a href="#tab_6_3" data-toggle="tab"> Next of kin details </a>
                                       </li>
                                       <li class="nav-item <?php if( isset($tab) && $tab==4){ echo "active";}?>">
                                          <a href="#tab_6_4" data-toggle="tab"> Referral </a>
                                       </li>
                                       <li class="nav-item  <?php if( isset($tab) && $tab==5){ echo "active";}?>">
                                          <a href="#tab_6_5" data-toggle="tab"> Guardian </a>
                                       </li>
                                       <li class="nav-item  <?php if( isset($tab) && $tab==6){ echo "active";}?>">
                                          <a href="#tab_6_6" data-toggle="tab"> Payer details </a>
                                       </li>
                                       <li class="nav-item  <?php if( isset($tab) && $tab==7){ echo "active";}?>">
                                          <a href="#tab_6_7" data-toggle="tab"> Socio- economic details </a>
                                       </li>
                                       <li class="nav-item  <?php if( isset($tab) && $tab==8){ echo "active";}?>">
                                          <a href="#tab_6_8" data-toggle="tab"> Billing Information </a>
                                       </li>
                                       <li class="nav-item  <?php if( isset($tab) && $tab==9){ echo "active";}?>">
                                          <a href="#tab_6_9" data-toggle="tab"> Vitals </a>
                                       </li>
                                       <li class="nav-item  <?php if( isset($tab) && $tab==10){ echo "active";}?>">
                                          <a href="#tab_6_10" data-toggle="tab"> Assign  </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="tab-content">
                                       <div class="tab-pane <?php if(isset($tab) && $tab==1){ echo "active";}?>" id="tab_6_1">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/basic_details'); ?> " method="post"  id="basic_details">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <input type="hidden" id=" verifying" name="verifying" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="email">Patient Card Number</label>
                                                   <input type="hidden" class="form-control"  id="patient_old1_card_number"  name="patient_old1_card_number" value="<?php echo isset($patient_detailes['card_number'])?$patient_detailes['card_number']:''; ?>" >
												    <input type="text" class="form-control" onchange="checkpatient_number(this.value);" id="patient_card_number"  name="patient_card_number" placeholder="Enter Card Number" value="<?php echo isset($patient_detailes['card_number'])?$patient_detailes['card_number']:''; ?>">

												   </div>
												    <div class="form-group col-md-6">
                                                   <label for="Name">Name</label>
                                                   <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Name" value="<?php echo isset($patient_detailes['name'])?$patient_detailes['name']:''; ?>">
                                                </div>
												<div class="form-group col-md-6">
                                                   <label for="email">Registration Type </label>
                                                   <select id="registrationtype" name="registrationtype" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="New" <?php if(isset($patient_detailes['registrationtype']) && $patient_detailes['registrationtype']=='New'){ echo "Selected"; } ?>>New</option>
                                                      <option value="Emergency" <?php if(isset($patient_detailes['registrationtype']) &&  $patient_detailes['registrationtype']=='Emergency'){ echo "Selected"; } ?>>Emergency</option>
                                                      <option value="Temporary" <?php if(isset($patient_detailes['registrationtype']) &&  $patient_detailes['registrationtype']=='Temporary'){ echo "Selected"; } ?>>Temporary</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Patient Category</label>
                                                   <select id="patient_category" name="patient_category" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="VIP" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='VIP'){ echo "Selected"; } ?>>VIP</option>
                                                      <option value="Pay Patient" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Pay Patient'){ echo "Selected"; } ?>>pay patient</option>
                                                      <option value="Staff" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Staff'){ echo "Selected"; } ?>>Staff</option>
                                                      <option value="Staff dependent" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Staff dependent'){ echo "Selected"; } ?>>Staff dependent</option>
                                                      <option value="Insurance" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Insurance'){ echo "Selected"; } ?>>Insurance</option>
                                                      <option value="Corporate" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Corporate'){ echo "Selected"; } ?>>Corporate</option>
                                                      <option value="Sponsor" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Sponsor'){ echo "Selected"; } ?>>Sponsor</option>
                                                      <option value="International cash" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='International cash'){ echo "Selected"; } ?>>International cash</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Gender</label>
													<select id="gender" name="gender" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Male" <?php if(isset($patient_detailes['gender']) && $patient_detailes['gender']=='Male'){ echo "Selected"; } ?>>Male</option>
                                                      <option value="Female" <?php if(isset($patient_detailes['gender']) &&  $patient_detailes['gender']=='Female'){ echo "Selected"; } ?>>Female</option>
                                                      <option value="Other" <?php if(isset($patient_detailes['gender']) &&  $patient_detailes['gender']=='Other'){ echo "Selected"; } ?>>Other</option>
                                                   </select> 
												   </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Mobile Number</label>
                                                   <input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Enter Mobile Number" value="<?php echo isset($patient_detailes['mobile'])?$patient_detailes['mobile']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Email</label>
                                                   <input type="email" class="form-control" id="email"  name="email" placeholder="Enter Email" value="<?php echo isset($patient_detailes['email'])?$patient_detailes['email']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label class="">Date of Birth</label>
                                                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                      <input class="form-control" size="16" type="text" id="dob" name="dob" value="<?php echo isset($patient_detailes['dob'])?$patient_detailes['dob']:''; ?>">
                                                      <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                   </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Age</label>
                                                   <input type="text" class="form-control" id="age"  name="age" placeholder="Enter Age" value="<?php echo isset($patient_detailes['age'])?$patient_detailes['age']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Blood Group</label>
												   <?php $modes = array('O-'=>'O-','O+'=>'O+','A-'=>'A-','A+'=>'A+','B-'=>'B-','B+'=>'B+','AB-'=>'AB-','AB+'=>'AB+'); ?>
																	  <select class="form-control" required="required" name="bloodgroup" name="bloodgroup">
																	  <option value = "">Select</option>
																		<?php foreach($modes as $key=>$state):
																				if($patient_detailes['bloodgroup'] == $state):
																				$selected ='selected=selected';
																				else : 
																				$selected = '';
																				endif;
																			 ?>
																			<option value = "<?php echo $state?>" <?php echo $selected;?> ><?php echo $state?></option>
																		<?php endforeach; ?>
																	  </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Marital status</label>
                                                   <select id="martial_status" name="martial_status" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Single" <?php if(isset($patient_detailes['martial_status']) &&  $patient_detailes['martial_status']=='Single'){ echo "Selected"; } ?>>Single</option>
                                                      <option value="Married" <?php if(isset($patient_detailes['martial_status']) &&  $patient_detailes['martial_status']=='Married'){ echo "Selected"; } ?>>Married</option>
                                                      <option value="Other"<?php if(isset($patient_detailes['martial_status']) &&  $patient_detailes['martial_status']=='Other'){ echo "Selected"; } ?>>Other</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="text">National ID</label>
                                                   <input type="text" name="nationali_id" id="nationali_id" class="form-control"  placeholder="Aadhaar Id" value="<?php echo isset($patient_detailes['nationali_id'])?$patient_detailes['nationali_id']:''; ?>" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email"> Permanent address</label>
                                                   <textarea type="textarea" id="perment_address" name="perment_address" class="form-control"  placeholder="Enter Address" ><?php echo isset($patient_detailes['perment_address'])?$patient_detailes['perment_address']:''; ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Nationality</label>
                                                   <div class="row">
                                                      <div class="col-md-3 row">
                                                         <input type="text" id="p_c_name" name="p_c_name" class="form-control"  placeholder="City" value="<?php echo isset($patient_detailes['p_c_name'])?$patient_detailes['p_c_name']:''; ?>">
                                                      </div>
                                                      <div class="col-md-3">
                                                         <input type="text" id="p_s_name" name="p_s_name"  class="form-control"  placeholder="State" value="<?php echo isset($patient_detailes['p_s_name'])?$patient_detailes['p_s_name']:''; ?>">
                                                      </div>
                                                      <div class="col-md-3">
                                                         <input type="text" id="p_zipcode" name="p_zipcode"  class="form-control"  placeholder="Pin Code" value="<?php echo isset($patient_detailes['p_zipcode'])?$patient_detailes['p_zipcode']:''; ?>">
                                                      </div>
                                                      <div class="col-md-3 row">
                                                         <input type="text" id="p_country_name" name="p_country_name" class="form-control"  placeholder="Country" value="<?php echo isset($patient_detailes['t_country_name'])?$patient_detailes['t_country_name']:''; ?>" >
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Temporary Address</label>
                                                   <textarea type="textarea" id="temp_address" name="temp_address" class="form-control"  placeholder="Enter Address" ><?php echo isset($patient_detailes['temp_address'])?$patient_detailes['temp_address']:''; ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Nationality</label>
                                                   <div class="row">
                                                      <div class="col-md-3 row">
                                                         <input type="text" id="t_c_name" name="t_c_name" class="form-control"  placeholder="City" value="<?php echo isset($patient_detailes['t_c_name'])?$patient_detailes['t_c_name']:''; ?>">
                                                      </div>
                                                      <div class="col-md-3 row">
                                                         <input type="text" id="t_s_name" name="t_s_name" class="form-control"  placeholder="State" value="<?php echo isset($patient_detailes['t_s_name'])?$patient_detailes['t_s_name']:''; ?>">
                                                      </div>
                                                      <div class="col-md-3">
                                                         <input type="text" id="t_zipcode" name="t_zipcode"  class="form-control"  placeholder="Pin Code" value="<?php echo isset($patient_detailes['t_zipcode'])?$patient_detailes['t_zipcode']:''; ?>" >
                                                      </div>
                                                      <div class="col-md-3 row">
                                                         <input type="text" id="t_country_name" name="t_country_name" class="form-control" value="<?php echo isset($patient_detailes['t_country_name'])?$patient_detailes['t_country_name']:''; ?>"  placeholder="Country" >
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <button class="btn btn-praimry" id="firstform" type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==2){ echo "active";}?>" id="tab_6_2">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/demographic'); ?> " method="post"  id="demographic" name="demographic" enctype="multipart/form-data">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Religion</label>
                                                   <input type="text" class="form-control" id="religion"  name="religion"  value="<?php echo isset($patient_detailes['religion'])?$patient_detailes['religion']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Caste</label>
                                                   <input type="text" class="form-control" id="caste"  name="caste"  value="<?php echo isset($patient_detailes['caste'])?$patient_detailes['caste']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Mothers maiden name</label>
                                                   <input type="text" class="form-control" id="mothername"  name="mothername"  value="<?php echo isset($patient_detailes['mothername'])?$patient_detailes['mothername']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Language</label>
                                                   <select id="language" name="language" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Telugu" <?php if(isset($patient_detailes['language']) &&  $patient_detailes['language']=='Telugu'){ echo "Selected"; } ?>>Telugu</option>
                                                      <option value="English" <?php if(isset($patient_detailes['language']) &&  $patient_detailes['language']=='English'){ echo "Selected"; } ?>>English</option>
                                                      <option value="Hindi"<?php if(isset($patient_detailes['language']) &&  $patient_detailes['language']=='Hindi'){ echo "Selected"; } ?>>Hindi</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Primary language</label>
                                                   <select id="primarylanguage" name="primarylanguage" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Telugu" <?php if(isset($patient_detailes['primarylanguage']) &&  $patient_detailes['primarylanguage']=='Telugu'){ echo "Selected"; } ?>>Telugu</option>
                                                      <option value="English" <?php if(isset($patient_detailes['primarylanguage']) &&  $patient_detailes['primarylanguage']=='English'){ echo "Selected"; } ?>>English</option>
                                                      <option value="Hindi"<?php if(isset($patient_detailes['primarylanguage']) &&  $patient_detailes['primarylanguage']=='Hindi'){ echo "Selected"; } ?>>Hindi</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Preferred language</label>
                                                   <select id="preferred_language" name="preferred_language" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Telugu" <?php if(isset($patient_detailes['preferred_language']) &&  $patient_detailes['preferred_language']=='Telugu'){ echo "Selected"; } ?>>Telugu</option>
                                                      <option value="English" <?php if(isset($patient_detailes['preferred_language']) &&  $patient_detailes['preferred_language']=='English'){ echo "Selected"; } ?>>English</option>
                                                      <option value="Hindi"<?php if(isset($patient_detailes['preferred_language']) &&  $patient_detailes['preferred_language']=='Hindi'){ echo "Selected"; } ?>>Hindi</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Occupation</label>
                                                   <input type="text" class="form-control" id="occupation"  name="occupation"  value="<?php echo isset($patient_detailes['occupation'])?$patient_detailes['occupation']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Education</label>
                                                   <input type="text" class="form-control" id="education"  name="education"  value="<?php echo isset($patient_detailes['education'])?$patient_detailes['education']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Birth place</label>
                                                   <input type="text" class="form-control" id="birth_place"  name="birth_place"  value="<?php echo isset($patient_detailes['birth_place'])?$patient_detailes['birth_place']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Work phone</label>
                                                   <input type="text" class="form-control" id="work_phone"  name="work_phone"  value="<?php echo isset($patient_detailes['work_phone'])?$patient_detailes['work_phone']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Home phone</label>
                                                   <input type="text" class="form-control" id="home_phone"  name="home_phone"  value="<?php echo isset($patient_detailes['home_phone'])?$patient_detailes['home_phone']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Senior citizen proof?</label>
                                                   <select id="citizen_proof" name="citizen_proof" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Yes" <?php if(isset($patient_detailes['citizen_proof']) &&  $patient_detailes['citizen_proof']=='Yes'){ echo "Selected"; } ?>>Yes</option>
                                                      <option value="No" <?php if(isset($patient_detailes['citizen_proof']) &&  $patient_detailes['citizen_proof']=='No'){ echo "Selected"; } ?>>No</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Patient identifier</label>
                                                   <input type="file" class="form-control" id="patient_identifier"  name="patient_identifier"  value="">
                                                </div>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==3){ echo "active";}?>" id="tab_6_3">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/next'); ?> " method="post"  id="next" name="next" enctype="multipart/form-data">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Relation</label>
                                                   <input type="text" class="form-control" id="relation"  name="relation"  value="<?php echo isset($patient_detailes['relation'])?$patient_detailes['relation']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">First name</label>
                                                   <input type="text" class="form-control" id="first_name"  name="first_name"  value="<?php echo isset($patient_detailes['first_name'])?$patient_detailes['first_name']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Middle name</label>
                                                   <input type="text" class="form-control" id="middel_name"  name="middel_name"  value="<?php echo isset($patient_detailes['middel_name'])?$patient_detailes['middel_name']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Last name</label>
                                                   <input type="text" class="form-control" id="last_name"  name="last_name"  value="<?php echo isset($patient_detailes['last_name'])?$patient_detailes['last_name']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Address1</label>
                                                   <textarea type="textarea" id="next_address1" name="next_address1" class="form-control"  placeholder="Enter Address" ><?php echo isset($patient_detailes['next_address1'])?$patient_detailes['next_address1']:''; ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Address2</label>
                                                   <textarea type="textarea" id="next_address2" name="next_address2" class="form-control"  placeholder="Enter Address" ><?php echo isset($patient_detailes['next_address2'])?$patient_detailes['next_address2']:''; ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Pincode</label>
                                                   <input type="text" class="form-control" id="next_pincode"  name="next_pincode"  value="<?php echo isset($patient_detailes['next_pincode'])?$patient_detailes['next_pincode']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">City</label>
                                                   <input type="text" class="form-control" id="next_city"  name="next_city"  value="<?php echo isset($patient_detailes['next_city'])?$patient_detailes['next_city']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">State</label>
                                                   <input type="text" class="form-control" id="next_state"  name="next_state"  value="<?php echo isset($patient_detailes['next_state'])?$patient_detailes['next_state']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Country</label>
                                                   <input type="text" class="form-control" id="next_country"  name="next_country"  value="<?php echo isset($patient_detailes['next_country'])?$patient_detailes['next_country']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Email</label>
                                                   <input type="email" class="form-control" id="next_email"  name="next_email"  value="<?php echo isset($patient_detailes['next_email'])?$patient_detailes['next_email']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Mobile Number</label>
                                                   <input type="text" class="form-control" id="next_mobile"  name="next_mobile"  value="<?php echo isset($patient_detailes['next_mobile'])?$patient_detailes['next_mobile']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Occupation </label>
                                                   <input type="text" class="form-control" id="next_occupation "  name="next_occupation"  value="<?php echo isset($patient_detailes['next_occupation'])?$patient_detailes['next_occupation']:''; ?>">
                                                </div>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==4){ echo "active";}?>" id="tab_6_4">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/referral'); ?> " method="post"  id="referral">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Referred by?</label>
                                                   <input type="text" class="form-control" id="referred"  name="referred"  value="<?php echo isset($patient_detailes['referred'])?$patient_detailes['referred']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Internal / External?</label>
                                                   <input type="text" class="form-control" id="internal_external"  name="internal_external"  value="<?php echo isset($patient_detailes['internal_external'])?$patient_detailes['internal_external']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Search doctor</label>
                                                   <input type="text" class="form-control" id="search_doctor"  name="search_doctor"  value="<?php echo isset($patient_detailes['search_doctor'])?$patient_detailes['search_doctor']:''; ?>">
                                                </div>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==5){ echo "active";}?>" id="tab_6_5">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/guardian'); ?> " method="post"  id="guardian">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Relationship</label>
                                                   <input type="text" class="form-control" id="relationship"  name="relationship"  value="<?php echo isset($patient_detailes['relationship'])?$patient_detailes['relationship']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">First name</label>
                                                   <input type="text" class="form-control" id="g_first_name"  name="g_first_name"  value="<?php echo isset($patient_detailes['g_first_name'])?$patient_detailes['g_first_name']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Middle name</label>
                                                   <input type="text" class="form-control" id="g_middel_name"  name="g_middel_name"  value="<?php echo isset($patient_detailes['g_middel_name'])?$patient_detailes['g_middel_name']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Last name</label>
                                                   <input type="text" class="form-control" id="g_last_name"  name="g_last_name"  value="<?php echo isset($patient_detailes['g_last_name'])?$patient_detailes['g_last_name']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Gender</label>
                                                   <select id="gender" name="gender" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Male" <?php if(isset($patient_detailes['gender']) &&  $patient_detailes['gender']=='Male'){ echo "Selected"; } ?>>Male</option>
                                                      <option value="Female" <?php if(isset($patient_detailes['gender']) &&  $patient_detailes['gender']=='Female'){ echo "Selected"; } ?>>Female</option>
                                                      <option value="Other" <?php if(isset($patient_detailes['gender']) &&  $patient_detailes['gender']=='Other'){ echo "Selected"; } ?>>Other</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Nationality</label>
                                                   <input type="text" class="form-control" id="nationality"  name="nationality"  value="<?php echo isset($patient_detailes['nationality'])?$patient_detailes['nationality']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Language</label>
                                                   <select id="g_language" name="g_language" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Telugu" <?php if(isset($patient_detailes['g_language']) &&  $patient_detailes['g_language']=='Telugu'){ echo "Selected"; } ?>>Telugu</option>
                                                      <option value="English" <?php if(isset($patient_detailes['g_language']) &&  $patient_detailes['g_language']=='English'){ echo "Selected"; } ?>>English</option>
                                                      <option value="Hindi"<?php if(isset($patient_detailes['g_language']) &&  $patient_detailes['g_language']=='Hindi'){ echo "Selected"; } ?>>Hindi</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Living dependency</label>
                                                   <input type="text" class="form-control" id="living"  name="living"  value="<?php echo isset($patient_detailes['living'])?$patient_detailes['living']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Address1</label>
                                                   <textarea type="textarea" id="g_address1" name="g_address1" class="form-control"  placeholder="Enter Address" ><?php echo isset($patient_detailes['g_address1'])?$patient_detailes['g_address1']:''; ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Address2</label>
                                                   <textarea type="textarea" id="g_address2" name="g_address2" class="form-control"  placeholder="Enter Address" ><?php echo isset($patient_detailes['g_address2'])?$patient_detailes['g_address2']:''; ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Pincode</label>
                                                   <input type="text" class="form-control" id="g_pincode"  name="g_pincode"  value="<?php echo isset($patient_detailes['g_pincode'])?$patient_detailes['g_pincode']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">City</label>
                                                   <input type="text" class="form-control" id="g_city"  name="g_city"  value="<?php echo isset($patient_detailes['g_city'])?$patient_detailes['g_city']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">State</label>
                                                   <input type="text" class="form-control" id="g_state"  name="g_state"  value="<?php echo isset($patient_detailes['g_state'])?$patient_detailes['g_state']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Country</label>
                                                   <input type="text" class="form-control" id="g_country"  name="g_country"  value="<?php echo isset($patient_detailes['g_country'])?$patient_detailes['g_country']:''; ?>">
                                                </div>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==6){ echo "active";}?>" id="tab_6_6">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/payer '); ?> " method="post"  id="payer">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Name</label>
                                                   <input type="text" class="form-control" id="payer_name"  name="payer_name"  value="<?php echo isset($patient_detailes['payer_name'])?$patient_detailes['payer_name']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Mobile</label>
                                                   <input type="text" class="form-control" id="payer_mobile"  name="payer_mobile"  value="<?php echo isset($patient_detailes['payer_mobile'])?$patient_detailes['payer_mobile']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Address</label>
                                                   <textarea type="textarea" id="payer_address" name="payer_address" class="form-control"  placeholder="Enter Address" ><?php echo isset($patient_detailes['payer_address'])?$patient_detailes['payer_address']:''; ?></textarea>
                                                </div>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==7){ echo "active";}?>" id="tab_6_7">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/economicdetails'); ?> " method="post"  id="economicdetails">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Living dependency</label>
                                                   <input type="text" class="form-control" id="dependency"  name="dependency"  value="<?php echo isset($patient_detailes['dependency'])?$patient_detailes['dependency']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Living arrangement</label>
                                                   <input type="text" class="form-control" id="arrangement"  name="arrangement"  value="<?php echo isset($patient_detailes['arrangement'])?$patient_detailes['arrangement']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Income group</label>
                                                   <input type="text" class="form-control" id="incomegroup"  name="incomegroup"  value="<?php echo isset($patient_detailes['incomegroup'])?$patient_detailes['incomegroup']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Description</label>
                                                   <input type="text" class="form-control" id="description"  name="description"  value="<?php echo isset($patient_detailes['description'])?$patient_detailes['description']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Confidential?</label>
                                                   <input type="text" class="form-control" id="confidential"  name="confidential"  value="<?php echo isset($patient_detailes['confidential'])?$patient_detailes['confidential']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="Name">Student?</label>
                                                   <input type="text" class="form-control" id="student"  name="student"  value="<?php echo isset($patient_detailes['student'])?$patient_detailes['student']:''; ?>">
                                                </div>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==8){ echo "active";}?>" id="tab_6_8">
                                          <div class="col-md-12">
                                             <div class="panel tab-border card-topline-green">
                                                <header class="panel-heading panel-heading-gray custom-tab ">
                                                   <ul class="nav nav-tabs x-scrool">
                                                      <li class="nav-item "><a class="<?php if(isset($subtab) && $subtab==''){ echo "active";}?>" href="#subtab1" data-toggle="tab" >Visit info</a>
                                                      </li>
                                                      <li class="nav-item "><a class="<?php if(isset($subtab) && $subtab==2){ echo "active";}?>" href="#subtab2" data-toggle="tab">Order</a>
                                                      </li>
                                                      <li class="nav-item"><a class="<?php if(isset($subtab) && $subtab==3){ echo "active";}?>" href="#subtab3" data-toggle="tab">Bills</a>
                                                      </li>
                                                      <li class="nav-item"><a class=" <?php if(isset($subtab) && $subtab==4){ echo "active";}?>" href="#subtab4" data-toggle="tab">payer auth</a>
                                                      </li>
                                                   </ul>
                                                </header>
                                                <div class="panel-body">
                                                   <div class="tab-content">
                                                      <div class="tab-pane <?php if(isset($subtab) && $subtab==''){ echo "active";}?>" id="subtab1">
                                                         <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/visitinfo'); ?> " method="post"  id="visitinfo">
                                                            <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                                            <input type="hidden" id="bill_id" name="bill_id" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                                            <div class="row">
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Visit Number</label>
                                                                  <input type="text" class="form-control" id="visit_no"  name="visit_no" placeholder="Visit Number" value="<?php echo isset($billing_detailes['visit_no'])?$billing_detailes['visit_no']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="email"> Visit description</label>
                                                                  <textarea type="textarea" id="visit_desc" name="visit_desc" class="form-control"  placeholder=" Visit description" ><?php echo isset($billing_detailes['visit_desc'])?$billing_detailes['visit_desc']:''; ?></textarea>
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label class="">Date of visit</label>
                                                                  <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                                     <input class="form-control" size="16" type="text" id="date_of_visit" name="date_of_visit" value="<?php echo isset($billing_detailes['date_of_visit'])?$billing_detailes['date_of_visit']:''; ?>">
                                                                     <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                  </div>
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Department</label>
                                                                  <input type="text" class="form-control" id="department"  name="department" placeholder="Enter Department" value="<?php echo isset($billing_detailes['department'])?$billing_detailes['department']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Doctor</label>
                                                                  <input type="text" class="form-control" id="docotr_name"  name="docotr_name" placeholder="Enter Doctor Name" value="<?php echo isset($billing_detailes['docotr_name'])?$billing_detailes['docotr_name']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">No- of visits</label>
                                                                  <input type="text" class="form-control" id="no_of_visits"  name="no_of_visits" placeholder="Enter No of visits" value="<?php echo isset($billing_detailes['no_of_visits'])?$billing_detailes['no_of_visits']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label class="">Last visit date</label>
                                                                  <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                                     <input class="form-control" size="16" type="text" id="last_visiting_date" name="last_visiting_date" value="<?php echo isset($billing_detailes['last_visiting_date'])?$billing_detailes['last_visiting_date']:''; ?>">
                                                                     <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <button class="btn btn-praimry " type="submit">Next</button>
                                                         </form>
                                                      </div>
                                                      <div class="tab-pane <?php if(isset($subtab) && $subtab==2){ echo "active";}?>" id="subtab2">
                                                         <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/orderinfo'); ?> " method="post"  id="orderinfo">
                                                            <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                                            <input type="hidden" id="b_id" name="b_id" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                                            <div class="row">
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Service type</label>
                                                                  <input type="text" class="form-control" id="service_type"  name="service_type" placeholder="Enter Service type" value="<?php echo isset($billing_detailes['service_type'])?$billing_detailes['service_type']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Visit type</label>
                                                                  <input type="text" class="form-control" id="visit_type"  name="visit_type" placeholder="Enter Visit type" value="<?php echo isset($billing_detailes['visit_type'])?$billing_detailes['visit_type']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Doctor</label>
                                                                  <input type="text" class="form-control" id="doctor"  name="doctor" placeholder="Enter doctor Name" value="<?php echo isset($billing_detailes['doctor'])?$billing_detailes['doctor']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Payer</label>
                                                                  <input type="text" class="form-control" id="payer"  name="payer" placeholder="Enter Payer" value="<?php echo isset($billing_detailes['payer'])?$billing_detailes['payer']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Price</label>
                                                                  <input type="text" class="form-control" id="price"  name="price" placeholder="Enter Price" value="<?php echo isset($billing_detailes['price'])?$billing_detailes['price']:''; ?>">
                                                               </div>
                                                            </div>
                                                            <a href="<?php echo base_url('resources/desk/'.base64_encode($pid).'/'.base64_encode(8)); ?>" class="btn btn-praimry ">Back</a>
                                                            <button class="btn btn-praimry " type="submit">Next</button>
                                                         </form>
                                                      </div>
                                                      <div class="tab-pane <?php if(isset($subtab) && $subtab==3){ echo "active";}?>" id="subtab3">
                                                         <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/bills'); ?> " method="post"  id="bills">
                                                            <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                                            <input type="hidden" id="b_id" name="b_id" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                                            <div class="row">
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Total Amount</label>
                                                                  <input type="text" class="form-control" id="patient_payer_deposit_amount"  name="patient_payer_deposit_amount" placeholder="Enter Total Amount" value="<?php echo isset($billing_detailes['patient_payer_deposit_amount'])?$billing_detailes['patient_payer_deposit_amount']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Payment mode</label>
																   <?php $modes = array('Cash'=>'Cash','Online'=>'Online','Other'=>'Other'); ?>
																	  <select class="form-control" required="required" name="payment_mode" name="payment_mode">
																	  <option value = "">Select</option>
																		<?php foreach($modes as $key=>$state):
																				if($billing_detailes['payment_mode'] == $state):
																				$selected ='selected=selected';
																				else : 
																				$selected = '';
																				endif;
																			 ?>
																			<option value = "<?php echo $state?>" <?php echo $selected;?> ><?php echo $state?></option>
																		<?php endforeach; ?>
																	  </select>
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Payable Amount</label>
                                                                  <input type="text" class="form-control" id="bill_amount" autocomplete="off"  name="bill_amount" placeholder="Enter Payable Amount" value="<?php echo isset($billing_detailes['bill_amount'])?$billing_detailes['bill_amount']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Received from</label>
                                                                  <input type="text" class="form-control" id="received_form"  name="received_form" placeholder="Enter Received from" value="<?php echo isset($billing_detailes['received_form'])?$billing_detailes['received_form']:''; ?>">
                                                               </div>
															   <div class="form-group col-md-12">
                                                                 <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo"> Have a Privilege card ?</a>
																 </div>
																 <div id="demo" class="collapse in">
																	<div class="form-group col-md-12">
																		<label for="mobile">Privilege card</label>
																		<input type="text" class="form-control" id="coupon_code" autocomplete="off"  name="coupon_code" placeholder="Enter Privilege card Number" value="<?php echo isset($billing_detailes['coupon_code'])?$billing_detailes['coupon_code']:''; ?>">
																	</div>
																	<span id="successmsg" style="color:green;"></span>
																	<span id="errormsg" style="color:red;"></span>
																	
																	<div class="form-group col-md-12">
																	<button type="button" onclick="apply_couponcode();" id="">Apply</button>
																	</div>
																	</div>
																 </div>
                                                            
                                                            <a href="<?php echo base_url('resources/desk/'.base64_encode($pid).'/'.base64_encode(8).'/'.base64_encode($bill_id).'/'.base64_encode(2)); ?>" class="btn btn-praimry ">Back</a>
                                                            <button class="btn btn-praimry " type="submit">Next</button>
                                                         </form>
                                                      </div>
                                                      <div class="tab-pane <?php if(isset($subtab) && $subtab==4){ echo "active";}?>" id="subtab4">
                                                         <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/bills'); ?> " method="post"  id="bills">
                                                            <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                                            <input type="hidden" id="b_id" name="b_id" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                                            <div class="row">
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Sign with payer</label>
                                                                  <input type="text" class="form-control" id="sign_with_payer"  name="sign_with_payer" placeholder="Enter Sign with payer" >
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">&nbsp;&nbsp;&nbsp;</label>
                                                                  <a target="_blank" href="<?php echo base_url('resources/genrate_bill/'.base64_encode($pid).'/'.base64_encode($bill_id)); ?>" class="btn btn-praimry form-control">Generate bill</a>
                                                               </div>
                                                            </div>
                                                            <a href="<?php echo base_url('resources/desk/'.base64_encode($pid).'/'.base64_encode(8).'/'.base64_encode($bill_id).'/'.base64_encode(3)); ?>" class="btn btn-praimry ">Back</a>
                                                            <a href="<?php echo base_url('resources/desk/'.base64_encode($pid).'/'.base64_encode(9).'/'.base64_encode($bill_id)); ?>" class="btn btn-praimry ">Next</a>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==9){ echo "active";}?>" id="tab_6_9">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/vitals'); ?> " method="post"  id="vitals">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <input type="hidden" id="b_id" name="b_id" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                             <div class="row " >
                                             <div class="table-responsive" >
                                                <table class="table table-striped table-bordered table-hover  order-column">
                                                   <thead>
                                                      <tr>
                                                         <th> Vitals </th>
                                                         <th class="text-center" colspan="2"> Values  </th>
                                                         <th class="text-center" colspan="2"> Others  </th>
                                                         <th> Notes  </th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <th>Blood pressure </th>
                                                         <td>Actuals</td>
                                                         <td>Range</td>
                                                         <th>Blood pressure site</th>
                                                         <td>Positioning</td>
                                                         <td></td>
                                                      </tr>
                                                      <tr>
                                                         <th>Temperature </th>
                                                         <td> <input type="text" class="form-control" id="tep_actuals" name="tep_actuals" value="<?php echo isset($vitals_detailes['tep_actuals'])?$vitals_detailes['tep_actuals']:''; ?>" placeholder="Actuals"> </td>
                                                         <td> <input type="text" id="tep_range" name="tep_range" value="<?php echo isset($vitals_detailes['tep_range'])?$vitals_detailes['tep_range']:''; ?>" placeholder="Range"> </td>
                                                         <th>Temperature site</th>
                                                         <td> <input type="text" class="form-control" id="temp_site_positioning" name="temp_site_positioning" value="<?php echo isset($vitals_detailes['temp_site_positioning'])?$vitals_detailes['temp_site_positioning']:''; ?>" placeholder="Positioning "> </td>
                                                         <td> <input type="text" class="form-control" id="notes" name="notes" value="<?php echo isset($vitals_detailes['notes'])?$vitals_detailes['notes']:''; ?>" placeholder="Notes"> </td>
                                                      </tr>
                                                      <tr>
                                                         <th> Pulse rate</th>
                                                         <td> <input type="text" class="form-control" id="pulse_actuals" name="pulse_actuals" value="<?php echo isset($vitals_detailes['pulse_actuals'])?$vitals_detailes['pulse_actuals']:''; ?>" placeholder="Actuals"> </td>
                                                         <td> <input type="text" class="form-control" id="pulse_range" name="pulse_range" value="<?php echo isset($vitals_detailes['pulse_range'])?$vitals_detailes['pulse_range']:''; ?>" placeholder="Range"> 
                                                         </td>
                                                         <th> Pulse rate site  </th>
                                                         <td>
                                                            <div class="row">					
                                                               <input class="col-md-6 form-control"  type="text" id="pulse_rate_rhythm" name="pulse_rate_rhythm" value="<?php echo isset($vitals_detailes['pulse_rate_rhythm'])?$vitals_detailes['pulse_rate_rhythm']:''; ?>" placeholder="Rhythm  ">
                                                               <input class="col-md-6 form-control" type="text" id="pulse_rate_vol" name="pulse_rate_vol" value="<?php echo isset($vitals_detailes['pulse_rate_vol'])?$vitals_detailes['pulse_rate_vol']:''; ?>" placeholder="Vol ">
                                                            </div>
                                                         </td>
                                                         <td> <input type="text" class="form-control" id="notes1" name="notes1" value="<?php echo isset($vitals_detailes['notes1'])?$vitals_detailes['notes1']:''; ?>" placeholder="Notes"> </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==10){ echo "active";}?>" id="tab_6_10">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/billing'); ?> " method="post"  id="billing">
                                             <input type="hidden" id="patientid" name="patientid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <input type="hidden" id="billing_id" name="billing_id" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="email">Doctor  Department</label>
                                                   <select id="department_name" name="department_name" onchange="get_doctor_list(this.value);" class="form-control" >
                                                      <option value="">Select</option>
                                                      <?php foreach($departments_list as $lis){ ?>
                                                      <option value="<?php echo $lis['t_id']; ?>"><?php echo $lis['t_name']; ?></option>
                                                      <?php } ?>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Doctor name</label>
                                                   <select id="department_doctors" name="department_doctors" class="form-control" >
                                                      <option value="">Select Doctor</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">&nbsp;</label>
                                                   <a href="javascript:void(0);" onclick="assign_doctore();" class="btn btn-praimry " >Assign</a>
                                                   <a target="_blank" href="<?php echo base_url('resources/print_patient_details/'.base64_encode($pid).'/'.base64_encode($bill_id)); ?>" class="btn btn-praimry">Print</a>
                                                </div>
                                             </div>
                                             <a href="<?php echo base_url('resources/desk');?>" class="btn btn-praimry " >Completed</a>
                                          </form>
                                       </div>
                                       <!-- end-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="about">
                        <div class="card card-topline-red">
                           <div class="card-head">
                              <header>Patients List</header>
                              <div class="tools">
                                 <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                 <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                 <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                              </div>
                           </div>
                           <div class="card-body table-responsive ">
                              <?php if(isset($patients_list) && count($patients_list)>0){ ?>
                              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
                                 <thead>
                                    <tr>
                                       <th> Patient Id </th>
                                       <th> Patient card Number</th>
                                       <th> Name </th>
                                       <th> Type </th>
                                       <th> Category </th>
                                       <th> Age </th>
                                       <th> Mobile </th>
                                       <th> Action </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach($patients_list as $list){ ?>
                                    <tr class="odd gradeX">
                                       <td> <?php echo $list['pid']; ?> </td>
                                       <td> <?php echo $list['card_number']; ?> </td>
                                       <td>
                                          <?php echo $list['name']; ?>
                                       </td>
                                       <td>
                                          <?php echo $list['registrationtype']; ?>
                                       </td>
                                       <td><?php echo $list['patient_category']; ?> </td>
                                       <td><?php echo $list['age']; ?> </td>
                                       <td><?php echo $list['mobile']; ?> </td>
                                       <td class="valigntop">
                                          <div class="btn-group">
                                             <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                             <i class="fa fa-angle-down"></i>
                                             </button>
                                             <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                   <a href="<?php echo base_url('resources/desk/'.base64_encode($list['pid']).'/'.base64_encode(1)); ?>">
                                                   <i class="icon-docs"></i> Edit </a>
                                                </li>
												<?php if($list['patient_reschedule_date']==1){ ?>
													<li>
                                                    <a href="<?php echo base_url('resources/desk/'.base64_encode($list['pid']).'/'.base64_encode(1).'/'.base64_encode('verify')) ?>">
                                                    <i class="icon-docs"></i> Reschedule </a>
													</li>
												<?php } ?>
                                                <li>
                                                   <a href="<?php echo base_url('resources/desk/'.base64_encode($list['pid']).'/'.base64_encode(8).'/'.base64_encode('reschedule')); ?>">
                                                   <i class="icon-docs"></i> Repeated </a>
                                                </li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                              <?php }else{ ?>
                              <div>No data available</div>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane  <?php if(isset($tab) && $tab==11 || $tab==12 || $tab==13 || $tab==0){ echo "active";}?>" id="aboutop">
                        <div class="card card-topline-red">
                           <div class="card-head">
                              <header>Patients Details</header>
                             
                           </div>
                           <div class="card-body ">
                           <div class="card-body " id="bar-parent" style="margin-top:30px">
                              <div class="row">
                                 <div class="col-md-3 col-sm-3 col-xs-3">
                                    <ul class="nav nav-tabs tabs-left">
                                       <li class="nav-item">
                                          <a href="#tab_6_11" data-toggle="tab" class="<?php if(isset($tab) && $tab !=11 && $tab!=12 && $tab!=13){ echo "active";}?>"> Basic Details </a>
                                       </li>
									   
									   <li class="nav-item ">
                                          <a href="#tab_6_224" data-toggle="tab" class="<?php if(isset($tab) && $tab ==11){ echo "active";}?>"> Vitals </a>
                                       </li>
                                       <li class="nav-item ">
                                          <a href="#tab_6_22" data-toggle="tab" class="<?php if(isset($tab) && $tab ==13){ echo "active";}?>"> Billing Information </a>
                                       </li>
									   <li class="nav-item ">
                                          <a href="#tab_6_223" data-toggle="tab" class="<?php if(isset($tab) && $tab ==12){ echo "active";}?>"> Assign </a>
                                       </li>
                                      
                                    </ul>
                                 </div>
                                 <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="tab-content">
                                       <div class="tab-pane <?php if(isset($tab) && $tab !=11 && $tab !=12 && $tab !=13){ echo "active";}?>" id="tab_6_11">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/basic_details'); ?> " method="post"  id="basic_details1" name="basic_details1">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
											  <input type="hidden" id=" verifying" name="verifying" value="<?php echo isset($bill_id)?$bill_id:''; ?>">

                                             <input type="hidden" id="op" name="op" value="1">
                                             <div class="row">
												<div class="form-group col-md-6">
                                                   <label for="email">Patient Card Number</label>
                                                   <input type="hidden" class="form-control" id="patient_old_card_number"  name="patient_old_card_number"  value="<?php echo isset($patient_detailes['card_number'])?$patient_detailes['card_number']:''; ?>">
												   <input type="text" class="form-control" onchange="checkpatient_number(this.value);" id="patient_card_number1"  name="patient_card_number" placeholder="Enter Card Number" value="<?php echo isset($patient_detailes['card_number'])?$patient_detailes['card_number']:''; ?>">

												</div>
												  <div class="form-group col-md-6">
                                                   <label for="mobile">Referred by?</label>
                                                   <input type="text" class="form-control" id="referred"  name="referred"  value="<?php echo isset($patient_detailes['referred'])?$patient_detailes['referred']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Registration Type </label>
                                                   <select id="registrationtype" name="registrationtype" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="New" <?php if(isset($patient_detailes['registrationtype']) && $patient_detailes['registrationtype']=='New'){ echo "Selected"; } ?>>New</option>
                                                      <option value="Emergency" <?php if(isset($patient_detailes['registrationtype']) &&  $patient_detailes['registrationtype']=='Emergency'){ echo "Selected"; } ?>>Emergency</option>
                                                      <option value="Temporary" <?php if(isset($patient_detailes['registrationtype']) &&  $patient_detailes['registrationtype']=='Temporary'){ echo "Selected"; } ?>>Temporary</option>
                                                   </select>
                                                </div>
												<div class="form-group col-md-6">
                                                   <label for="email">Patient Category</label>
                                                   <select id="patient_category" name="patient_category" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="VIP" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='VIP'){ echo "Selected"; } ?>>VIP</option>
                                                      <option value="Pay Patient" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Pay Patient'){ echo "Selected"; } ?>>pay patient</option>
                                                      <option value="Staff" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Staff'){ echo "Selected"; } ?>>Staff</option>
                                                      <option value="Staff dependent" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Staff dependent'){ echo "Selected"; } ?>>Staff dependent</option>
                                                      <option value="Insurance" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Insurance'){ echo "Selected"; } ?>>Insurance</option>
                                                      <option value="Corporate" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Corporate'){ echo "Selected"; } ?>>Corporate</option>
                                                      <option value="Sponsor" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='Sponsor'){ echo "Selected"; } ?>>Sponsor</option>
                                                      <option value="International cash" <?php if(isset($patient_detailes['patient_category']) &&  $patient_detailes['patient_category']=='International cash'){ echo "Selected"; } ?>>International cash</option>
                                                   </select>
                                                </div>
												<div class="form-group col-md-6">
                                                   <label for="Name">Problem</label>
                                                   <input type="text" class="form-control" id="problem"  name="problem" placeholder="Enter Problem" value="<?php echo isset($patient_detailes['problem'])?$patient_detailes['problem']:''; ?>">
                                                </div>
												 <div class="form-group col-md-6">
                                                   <label for="Name">Gender</label>
													<select id="gender" name="gender" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Male" <?php if(isset($patient_detailes['gender']) && $patient_detailes['gender']=='Male'){ echo "Selected"; } ?>>Male</option>
                                                      <option value="Female" <?php if(isset($patient_detailes['gender']) &&  $patient_detailes['gender']=='Female'){ echo "Selected"; } ?>>Female</option>
                                                      <option value="Other" <?php if(isset($patient_detailes['gender']) &&  $patient_detailes['gender']=='Other'){ echo "Selected"; } ?>>Other</option>
                                                   </select> 
												   </div>
												<div class="form-group col-md-6">
                                                   <label for="Name">Name</label>
                                                   <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Name" value="<?php echo isset($patient_detailes['name'])?$patient_detailes['name']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Mobile Number</label>
                                                   <input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Enter Mobile Number" value="<?php echo isset($patient_detailes['mobile'])?$patient_detailes['mobile']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Email</label>
                                                   <input type="email" class="form-control" id="email"  name="email" placeholder="Enter Email" value="<?php echo isset($patient_detailes['email'])?$patient_detailes['email']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label class="">Date of Birth</label>
                                                   <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd  " data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                      <input class="form-control" size="16" type="text" id="dob" name="dob" value="<?php echo isset($patient_detailes['dob'])?$patient_detailes['dob']:''; ?>">
                                                      <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                   </div>
                                                </div>
												<div class="form-group col-md-6">
                                                   <label for="mobile">Age</label>
                                                   <input type="text" class="form-control" id="age"  name="age" placeholder="Enter Age" value="<?php echo isset($patient_detailes['age'])?$patient_detailes['age']:''; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Blood Group</label>
												   <?php $modes = array('O-'=>'O-','O+'=>'O+','A-'=>'A-','A+'=>'A+','B-'=>'B-','B+'=>'B+','AB-'=>'AB-','AB+'=>'AB+'); ?>
																	  <select class="form-control" required="required" name="bloodgroup" name="bloodgroup">
																	  <option value = "">Select</option>
																		<?php foreach($modes as $key=>$state):
																				if($patient_detailes['bloodgroup'] == $state):
																				$selected ='selected=selected';
																				else : 
																				$selected = '';
																				endif;
																			 ?>
																			<option value = "<?php echo $state?>" <?php echo $selected;?> ><?php echo $state?></option>
																		<?php endforeach; ?>
																	  </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="mobile">Marital status</label>
                                                   <select id="martial_status" name="martial_status" class="form-control" >
                                                      <option value="">Select</option>
                                                      <option value="Single" <?php if(isset($patient_detailes['martial_status']) &&  $patient_detailes['martial_status']=='Single'){ echo "Selected"; } ?>>Single</option>
                                                      <option value="Married" <?php if(isset($patient_detailes['martial_status']) &&  $patient_detailes['martial_status']=='Married'){ echo "Selected"; } ?>>Married</option>
                                                      <option value="Other"<?php if(isset($patient_detailes['martial_status']) &&  $patient_detailes['martial_status']=='Other'){ echo "Selected"; } ?>>Other</option>
                                                   </select>
                                                </div>
												 <div class="form-group col-md-6">
                                                   <label for="text">National ID</label>
                                                   <input type="text" name="nationali_id" id="nationali_id" class="form-control"  placeholder="Aadhaar Id" value="<?php echo isset($patient_detailes['nationali_id'])?$patient_detailes['nationali_id']:''; ?>" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email"> Permanent address</label>
                                                   <textarea type="textarea" id="perment_address" name="perment_address" class="form-control"  placeholder="Enter Address" ><?php echo isset($patient_detailes['perment_address'])?$patient_detailes['perment_address']:''; ?></textarea>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Nationality</label>
                                                   <div class="row">
                                                      <div class="col-md-3 row">
                                                         <input type="text" id="p_c_name" name="p_c_name" class="form-control"  placeholder="City" value="<?php echo isset($patient_detailes['p_c_name'])?$patient_detailes['p_c_name']:''; ?>">
                                                      </div>
                                                      <div class="col-md-3">
                                                         <input type="text" id="p_s_name" name="p_s_name"  class="form-control"  placeholder="State" value="<?php echo isset($patient_detailes['p_s_name'])?$patient_detailes['p_s_name']:''; ?>">
                                                      </div>
                                                      <div class="col-md-3">
                                                         <input type="text" id="p_zipcode" name="p_zipcode"  class="form-control"  placeholder="pin Code" value="<?php echo isset($patient_detailes['p_zipcode'])?$patient_detailes['p_zipcode']:''; ?>">
                                                      </div>
                                                      <div class="col-md-3 row">
                                                         <input type="text" id="p_country_name" name="p_country_name" class="form-control"  placeholder="Country" value="<?php echo isset($patient_detailes['p_country_name'])?$patient_detailes['p_country_name']:''; ?>" >
                                                      </div>
                                                   </div>
                                                </div>
												 
												    <button class="btn btn-praimry" id="firstform1" type="submit">Next</button>
                                          </div>
										</form>
                                       </div>
									   <div class="tab-pane <?php if(isset($tab) && $tab==11){ echo "active";}?>" id="tab_6_224">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/vitals'); ?> " method="post"  id="vitals_1">
                                              <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <input type="hidden" id="b_id" name="b_id" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                             <input type="hidden" id="op" name="op" value="1">
                                             <div class="row table-responsive" >
                                                <table  class="table table-striped table-bordered table-hover  order-column">
                                                   <thead>
                                                      <tr>
                                                         <th> Vitals </th>
                                                         <th class="text-center" colspan="2"> Values  </th>
                                                         <th class="text-center" colspan="2"> Others  </th>
                                                         <th> Notes  </th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <th>Blood pressure </th>
                                                         <td>Actuals</td>
                                                         <td>Range</td>
                                                         <th>Blood pressure site</th>
                                                         <td>Positioning</td>
                                                         <td></td>
                                                      </tr>
                                                      <tr>
                                                         <th>Temperature </th>
                                                         <td>
														 <div class="form-group">
														 <input type="text" class="form-control " id="tep_actuals" name="tep_actuals" value="<?php echo isset($vitals_detailes['tep_actuals'])?$vitals_detailes['tep_actuals']:''; ?>" placeholder="Actuals">
															</div>														
														</td>
                                                         <td>
														 <div class="form-group">
														 <input type="text" id="tep_range" name="tep_range" value="<?php echo isset($vitals_detailes['tep_range'])?$vitals_detailes['tep_range']:''; ?>" placeholder="Range">
														 </div>
														 </td>
                                                         <th>Temperature site</th>
                                                         <td> <div class="form-group"> <input type="text" class="form-control" id="temp_site_positioning" name="temp_site_positioning" value="<?php echo isset($vitals_detailes['temp_site_positioning'])?$vitals_detailes['temp_site_positioning']:''; ?>" placeholder="Positioning "></div> </td>
                                                         <td> <div class="form-group"> <input type="text" class="form-control" id="notes" name="notes" value="<?php echo isset($vitals_detailes['notes'])?$vitals_detailes['notes']:''; ?>" placeholder="Notes"></div> </td>
                                                      </tr>
                                                      <tr>
                                                         <th> Pulse rate</th>
                                                         <td><div class="form-group">  <input type="text" class="form-control" id="pulse_actuals" name="pulse_actuals" value="<?php echo isset($vitals_detailes['pulse_actuals'])?$vitals_detailes['pulse_actuals']:''; ?>" placeholder="Actuals"> </div></td>
                                                         <td><div class="form-group">  <input type="text" class="form-control" id="pulse_range" name="pulse_range" value="<?php echo isset($vitals_detailes['pulse_range'])?$vitals_detailes['pulse_range']:''; ?>" placeholder="Range"></div> 
                                                         </td>
                                                         <th> Pulse rate site  </th>
                                                         <td>
                                                            <div class="row form-group">					
                                                               <input class="col-md-6 form-control"  type="text" id="pulse_rate_rhythm" name="pulse_rate_rhythm" value="<?php echo isset($vitals_detailes['pulse_rate_rhythm'])?$vitals_detailes['pulse_rate_rhythm']:''; ?>" placeholder="Rhythm  ">
                                                               <input class="col-md-6 form-control" type="text" id="pulse_rate_vol" name="pulse_rate_vol" value="<?php echo isset($vitals_detailes['pulse_rate_vol'])?$vitals_detailes['pulse_rate_vol']:''; ?>" placeholder="Vol ">
                                                            </div>
                                                         </td>
                                                         <td><div class="form-group">  <input type="text" class="form-control" id="notes1" name="notes1" value="<?php echo isset($vitals_detailes['notes1'])?$vitals_detailes['notes1']:''; ?>" placeholder="Notes"> </div></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       <div class="tab-pane <?php if(isset($tab) && $tab==13){ echo "active";}?>" id="tab_6_22">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/bills'); ?> " method="post"  id="opbills" name="opbills" enctype="multipart/form-data">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <input type="hidden" id="b_id" name="b_id" value="<?php echo isset($bill_id)?$bill_id:''; ?>">
                                             <input type="hidden" id="op" name="op" value="1">

											  <div class="row">
                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Total Amount</label>
                                                                  <input type="text" class="form-control" id="patient_payer_deposit_amount"  name="patient_payer_deposit_amount" placeholder="Enter Total Amount" value="<?php echo isset($billing_detailes['patient_payer_deposit_amount'])?$billing_detailes['patient_payer_deposit_amount']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Payment mode</label>
																   <?php $modes = array('Cash'=>'Cash','Online'=>'Online','Other'=>'Other'); ?>
																	  <select class="form-control" required="required" name="payment_mode" name="payment_mode">
																	  <option value = "">Select</option>
																		<?php foreach($modes as $key=>$state):
																				if($billing_detailes['payment_mode'] == $state):
																				$selected ='selected=selected';
																				else : 
																				$selected = '';
																				endif;
																			 ?>
																			<option value = "<?php echo $state?>" <?php echo $selected;?> ><?php echo $state?></option>
																		<?php endforeach; ?>
																	  </select>
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Payable Amount</label>
                                                                  <input type="text" class="form-control" id="bill_amount1"  name="bill_amount" placeholder="Enter Payable Amount" value="<?php echo isset($billing_detailes['bill_amount'])?$billing_detailes['bill_amount']:''; ?>">
                                                               </div>
                                                               <div class="form-group col-md-6">
                                                                  <label for="mobile">Received from</label>
                                                                  <input type="text" class="form-control" id="received_form"  name="received_form" placeholder="Enter Received from" value="<?php echo isset($billing_detailes['received_form'])?$billing_detailes['received_form']:''; ?>">
                                                               </div>
															   
															   <div class="form-group col-md-12">
                                                                 <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo1">  Have a Privilege card ?</a>
																 </div>
																 <div id="demo1" class="collapse in">
																	<div class="form-group col-md-12">
																		<label for="mobile">Privilege card</label>
																		<input type="text" class="form-control" id="coupon_code1" autocomplete="off"  name="coupon_code1" placeholder="Enter Privilege card Number" value="<?php echo isset($billing_detailes['coupon_code'])?$billing_detailes['coupon_code']:''; ?>">
																	</div>
																	<span id="successmsg1" style="color:green;"></span>
																	<span id="errormsg1" style="color:red;"></span>
																	
																	<div class="form-group col-md-12">
																	<button type="button" onclick="apply_couponcode1();" id="">Apply</button>
																	</div>
																	</div>
															   
															   
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div> 
									   
									   <div class="tab-pane <?php if(isset($tab) && $tab==12){ echo "active";}?>" id="tab_6_223">
                                          <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/desk'); ?> " method="post"  id="demographic" name="demographic" enctype="multipart/form-data">
                                             <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
                                             <div class="row">
                                                <div class="form-group col-md-6">
                                                   <label for="email">Doctor  Department</label>
                                                   <select id="department_name1" name="department_name" onchange="get_doctor_list(this.value);" class="form-control" >
                                                      <option value="">Select</option>
                                                      <?php foreach($departments_list as $lis){ ?>
                                                      <option value="<?php echo $lis['t_id']; ?>"><?php echo $lis['t_name']; ?></option>
                                                      <?php } ?>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">Doctor name</label>
                                                   <select id="department_doctors1" name="department_doctors" class="form-control" >
                                                      <option value="">Select Doctor</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                   <label for="email">&nbsp;</label>
                                                   <a href="javascript:void(0);" onclick="assign_doctore1();" class="btn btn-praimry " >Assign</a>
                                                   <a target="_blank" href="<?php echo base_url('resources/op_print_patient_details/'.base64_encode($pid).'/'.base64_encode($bill_id)); ?>" class="btn btn-praimry">Print</a>
                                                </div>
                                             </div>
                                             <button class="btn btn-praimry " type="submit">Next</button>
                                          </form>
                                       </div>
                                       
                                    
                                      
                                       
                                       
                                       <!-- end-->
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
         </div>
      </div>
   </div>
</div>
<div id="sucessmsg" style="display:none;"></div>
<script>
 
 $(document).ready(function() {
    $('#example4').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );

function checkpatient_number(num){
	var val1=$('#patient_old_card_number').val();
	var val2=$('#patient_card_number1').val();
	var val3=$('#patient_card_number').val();
	var val4=$('#patient_old1_card_number').val();
	if(val1 != val2 || val4 != val3){
			var length=num.length;
			if(length>= '12' && length<= '16'){
					jQuery.ajax({
						url: "<?php echo base_url('resources/checking_card_number');?>",
							data: {
								card_number: num,
							},
							dataType: 'json',
							type: 'POST',
							success: function (data) {
								$('#sucessmsg').show();
								if(data.msg==1){
									document.getElementById("firstform1").disabled = true;
									document.getElementById("firstform").disabled = true;
									 $('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Card number already exits. Please use another one <i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
								}
								
							}
						});
			}else{
				document.getElementById("firstform1").disabled = false;
				document.getElementById("firstform").disabled = false;
				$('#sucessmsg').show();
				$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Invalid card number. Please try again. <i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  

			}
	}
	
	
}
function apply_couponcode(){
	var amount=$('#bill_amount').val();
	if(amount !=''){
		document.getElementById("errormsg").innerHTML="";
				jQuery.ajax({
   				url: "<?php echo base_url('admin/checking_coupon_code');?>",
   					data: {
   						coupon_code: $('#coupon_code').val(),
   						bill_amount: amount,
   						patient_id: $('#pid').val(),
   						biling_id: $('#b_id').val(),
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						$('#sucessmsg').show();
						if(data.msg==1){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-succ"> Privilege code applied Successfully.<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
							$('#bill_amount').val(data.amt);
							document.getElementById("successmsg").innerHTML="Privilege code applied Successfully. Payable Amount is "+data.cou_amt+" decreased";
						}
						if(data.msg==2){
							 $('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Invalid Privilege code. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
						}if(data.msg==3){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Technical problem will occurred. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
						}if(data.msg==4){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn">Privilege code is expired. Please try another one<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
						}
   						
   					}
   				});

	}else{
		 document.getElementById("errormsg").innerHTML="Please Payable Amount";
	}
	
}
function apply_couponcode1(){
	var amount=$('#bill_amount1').val();
	if(amount !=''){
		document.getElementById("errormsg1").innerHTML="";
				jQuery.ajax({
   				url: "<?php echo base_url('admin/checking_coupon_code');?>",
   					data: {
   						coupon_code: $('#coupon_code1').val(),
   						bill_amount: amount,
   						patient_id: $('#pid').val(),
   						biling_id: $('#b_id').val(),
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						$('#sucessmsg').show();
						if(data.msg==1){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-succ"> Privilege code applied Successfully.<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
							$('#bill_amount1').val(data.amt);
							document.getElementById("successmsg1").innerHTML="Privilege code applied Successfully. Payable Amount is "+data.cou_amt+" decreased";
						}
						if(data.msg==2){
							 $('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Invalid Privilege code. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
						}if(data.msg==3){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Technical problem will occurred. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
						}if(data.msg==4){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn">Privilege code is expired. Please try another one<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
						}
   						
   					}
   				});

	}else{
		 document.getElementById("errormsg1").innerHTML="Please Payable Amount";
	}
	
}
   function assign_doctore(){
   	var pid=$('#patientid').val();
   	var bid=$('#billing_id').val();
   	var dep=$('#department_name').val();
   	var doctid=$('#department_doctors').val();
   	jQuery.ajax({
   				url: "<?php echo base_url('resources/assign_doctor');?>",
   					data: {
   						patient_id: pid,
   						billing_id: bid,
   						depart_id: dep,
   						doct_id: doctid,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						$('#sucessmsg').show();
   						if(data.msg==1){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-succ"> Doctor and Treatment Successfully Assigned<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
   						}else{
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Technical problem will occurred. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
   						}
   					}
   				});
   }
   function assign_doctore1(){
   	var pid=$('#patientid').val();
   	var bid=$('#billing_id').val();
   	var dep=$('#department_name1').val();
   	var doctid=$('#department_doctors1').val();
   	jQuery.ajax({
   				url: "<?php echo base_url('resources/assign_doctor');?>",
   					data: {
   						patient_id: pid,
   						billing_id: bid,
   						depart_id: dep,
   						doct_id: doctid,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						$('#sucessmsg').show();
   						if(data.msg==1){
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-succ"> Doctor and Treatment Successfully Assigned<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
   						}else{
   							$('#sucessmsg').html('<div class="alt_cus"><div class="alert_msg1 animated slideInUp bg-warn"> Technical problem will occurred. Please try again<i class="fa fa-check  text-success ico_bac" aria-hidden="true"></i></div></div>');  
   						}
   					}
   				});
   }
   function get_doctor_list(id){
   				jQuery.ajax({
   					url: "<?php echo base_url('resources/get_doctors_list');?>",
   					data: {
   						dep_id: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						$('#department_doctors').empty();
   						$('#department_doctors1').empty();
   						$('#department_doctors').append("<option>select</option>");
   						$('#department_doctors1').append("<option>select</option>");
   						for(i=0; i<data.list.length; i++) {
   							$('#department_doctors').append("<option value="+data.list[i].t_d_doc_id+">"+data.list[i].resource_name+"</option>");                      
   							$('#department_doctors1').append("<option value="+data.list[i].t_d_doc_id+">"+data.list[i].resource_name+"</option>");                      
                         
   						}
   						//console.log(data);return false;
   					}
   				
   				});
   	
   }
   	$(document).ready(function() {
    
       $('#opbills').bootstrapValidator({
   		fields: {
   			patient_payer_deposit_amount: {
                   validators: {
					notEmpty: {
						message: 'Total Amount is required'
					},
					regexp: {
					regexp:  /^[0-9]*$/,
					message:'Total Amount must be digits'
					}
				}
               },payment_mode: {
                    validators: {
   					notEmpty: {
   						message: 'Payment mode is required'
   					}
   				}
               },bill_amount: {
                     validators: {
					notEmpty: {
						message: 'Payable Amount is required'
					},
					regexp: {
					regexp:  /^[0-9]*$/,
					message:'Payable Amount must be digits'
					}
				}
               },received_form: {
                      validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumeric, space and dot'
					}
				}
               }
   			}
   		
   	})
        
   }); 
   $(document).ready(function() {
    
       $('#vitals').bootstrapValidator({
   		fields: {
   			tep_actuals: {
                    validators: {
   					notEmpty: {
   						message: 'Actualsis required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Actualsis can only consist of alphanumeric, space and dot'
					}
   				}
               },tep_range: {
                    validators: {
   					notEmpty: {
   						message: 'Range is required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Range can only consist of alphanumeric, space and dot'
					}
   				}
               },temp_site_positioning: {
                    validators: {
   					notEmpty: {
   						message: 'Positioning is required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Positioning can only consist of alphanumeric, space and dot'
					}
   				}
               },notes: {
                    validators: {
   					notEmpty: {
   						message: 'Notes is required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Notes can only consist of alphanumeric, space and dot'
					}
   				}
               },pulse_actuals: {
                    validators: {
   					notEmpty: {
   						message: 'Actuals is required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Actuals can only consist of alphanumeric, space and dot'
					}
   				}
               },pulse_range: {
                    validators: {
   					notEmpty: {
   						message: 'Range is required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Range can only consist of alphanumeric, space and dot'
					}
   				}
               },pulse_rate_rhythm: {
                    validators: {
   					notEmpty: {
   						message: 'Rhythm is required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Rhythm can only consist of alphanumeric, space and dot'
					}
   				}
               },pulse_rate_vol: {
                    validators: {
   					notEmpty: {
   						message: 'Vol is required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Vol can only consist of alphanumeric, space and dot'
					}
   				}
               },notes1: {
                    validators: {
   					notEmpty: {
   						message: 'Notes is required'
   					},regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Notes can only consist of alphanumeric, space and dot'
					}
   				}
               }
   			}
   		
   	})
        
   });
   	$(document).ready(function() {
    
       $('#bills').bootstrapValidator({
   		fields: {
             
                patient_payer_deposit_amount: {
                    validators: {
   					notEmpty: {
   						message: 'Total Amount is required'
   					},
   					regexp: {
   					regexp: /^[0-9.]*$/,
   					message: 'Total Amount can only consist of digits and dot'
   					}
   				}
               },
   			payment_mode: {
                    validators: {
   					notEmpty: {
   						message: 'Payment mode is required'
   					}
   				}
               },bill_amount: {
                    validators: {
   					notEmpty: {
   						message: 'Payable Amount is required'
   					},
   					regexp: {
   					regexp: /^[0-9.]*$/,
   					message: 'Payable Amount can only consist of digits and dot'
   					}
   				}
               },received_form: {
                    validators: {
   					notEmpty: {
   						message: 'Received from is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Received from can only consist of alphanumeric, space and dot'
   					}
   				}
               }
   			}
   		
   	})
        
   });	
   $(document).ready(function() {
    
       $('#orderinfo').bootstrapValidator({
   		fields: {
             
                service_type: {
                    validators: {
   					notEmpty: {
   						message: 'Service type is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Service type can only consist of alphanumeric, space and dot'
   					}
   				}
               },
   			visit_type: {
                    validators: {
   					notEmpty: {
   						message: 'Visit type is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Visit type can only consist of alphanumeric, space and dot'
   					}
   				}
               },doctor: {
                    validators: {
   					notEmpty: {
   						message: 'Doctor is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Doctor can only consist of alphanumeric, space and dot'
   					}
   				}
               },payer: {
                    validators: {
   					notEmpty: {
   						message: 'Payer is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Payer can only consist of alphanumeric, space and dot'
   					}
   				}
               },price: {
                     validators: {
   					notEmpty: {
   						message: 'price is required'
   					},
                       regexp: {
   					regexp: /^[0-9. ]+$/,
   					message: 'price can only consist of digits, space and dot'
   					}
                   }
               }
   			}
   		
   	})
        
   });	$(document).ready(function() {
    
       $('#visitinfo').bootstrapValidator({
   		fields: {
             
                visit_no: {
                    validators: {
   					notEmpty: {
   						message: 'Visit Number is required'
   					},
   					regexp: {
   					regexp: /^[0-9]*$/,
   					message: 'Visit Number can only consist of digits'
   					}
   				}
               },
   			department: {
                    validators: {
   					notEmpty: {
   						message: 'Department is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Department can only consist of alphanumeric, space and dot'
   					}
   				}
               },docotr_name: {
                    validators: {
   					notEmpty: {
   						message: 'Doctor is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Doctor can only consist of alphanumeric, space and dot'
   					}
   				}
               },no_of_visits: {
                    validators: {	
						notEmpty: {
   						message: 'No- of visits is required'
   					},
   					regexp: {
   					regexp: /^[0-9]*$/,
   					message: 'No- of visits can only consist of digits'
   					}
   				}
               },visit_desc: {
                     validators: {
   					notEmpty: {
   						message: 'Visit description is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Visit description wont allow <> [] = % '
   					}
                   }
               },
              payer_address: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               }
   			}
   		
   	})
        
   });
   $(document).ready(function() {
    
       $('#payer').bootstrapValidator({
   		fields: {
             
                payer_name: {
                    validators: {
   					notEmpty: {
   						message: 'Name is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Name can only consist of alphanumeric, space and dot'
   					}
   				}
               },payer_mobile: {
                    validators: {
   					notEmpty: {
   						message: 'Mobile Number is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'Mobile Number must be 10 to 14 digits'
   					}
   				}
               },
              payer_address: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               }
   			}
   		
   	})
        
   });
   
   	$(document).ready(function() {
    
       $('#economicdetails').bootstrapValidator({
   		fields: {
             
                dependency: {
                    validators: {
   					notEmpty: {
   						message: 'Living dependency is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Living dependency can only consist of alphanumeric, space and dot'
   					}
   				}
               },arrangement: {
                    validators: {
   					notEmpty: {
   						message: 'Living arrangement is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Living arrangement can only consist of alphanumeric, space and dot'
   					}
   				}
               },incomegroup: {
                    validators: {
   					notEmpty: {
   						message: 'Income group is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Income group can only consist of alphanumeric, space and dot'
   					}
   				}
               },description: {
                   validators: {
   					notEmpty: {
   						message: 'Description is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Description can only consist of alphanumeric, space and dot'
   					}
                   }
               },confidential: {
                   validators: {
   					notEmpty: {
   						message: 'Confidential is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Confidential can only consist of alphanumeric, space and dot'
   					}
                   }
               },
              student: {
                   validators: {
   					notEmpty: {
   						message: 'student is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'student group can only consist of alphanumeric, space and dot'
   					}
                   }
               }
   			}
   		
   	})
        
   });
   	
   	$(document).ready(function() {
    
       $('#guardian').bootstrapValidator({
   		fields: {
             
                relationship: {
                    validators: {
   					notEmpty: {
   						message: 'Relationship is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Relationship can only consist of alphanumeric, space and dot'
   					}
   				}
               },g_first_name: {
                    validators: {
   					notEmpty: {
   						message: 'First Name is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'First Name can only consist of alphanumeric, space and dot'
   					}
   				}
               },g_middel_name: {
                    validators: {
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Middle Name can only consist of alphanumeric, space and dot'
   					}
   				}
               },g_last_name: {
                    validators: {
   					notEmpty: {
   						message: 'Last Name is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Last Name can only consist of alphanumeric, space and dot'
   					}
   				}
               },g_address1: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               },g_address2: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               },
              
   			g_pincode: {
                   validators: {
   					notEmpty: {
   						message: 'Pin code is required'
   					},
   					regexp: {
   					regexp: /^[0-9]{5,7}$/,
   					message: 'Pin code  must be  5 to 7 characters'
   					}
   				}
               },g_city: {
                  validators: {
   					notEmpty: {
   						message: 'City is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'City can only consist of alphanumeric, space and dot'
   					}
   				}
               },g_state: {
                 validators: {
   					notEmpty: {
   						message: 'State is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'State can only consist of alphanumeric, space and dot'
   					}
   				}
               },
   			g_country: {
                 validators: {
   					notEmpty: {
   						message: 'Country is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Country can only consist of alphanumeric, space and dot'
   					}
   				}
   			},nationality: {
                 validators: {
   					notEmpty: {
   						message: 'Nationality is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Nationality can only consist of alphanumeric, space and dot'
   					}
   				}
   			},living: {
                 validators: {
   					notEmpty: {
   						message: 'Living dependency is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Living dependency can only consist of alphanumeric, space and dot'
   					}
   				}
   			},
   			gender: {
                 validators: {
   					notEmpty: {
   						message: 'gender is required'
   					}
   				}
   			},
   			g_language: {
                 validators: {
   					notEmpty: {
   						message: 'Language is required'
   					}
   				}
   			}
   			}
   		
   	})
        
   });
   
   	$(document).ready(function() {
    
       $('#referral').bootstrapValidator({
   		fields: {
             
                referred: {
                    validators: {
   					notEmpty: {
   						message: 'Referred by is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Referred by can only consist of alphanumeric, space and dot'
   					}
   				}
               },
   			internal_external: {
                 validators: {
   					notEmpty: {
   						message: 'Internal external is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Internal external can only consist of alphanumeric, space and dot'
   					}
   				}
   			},search_doctor: {
                 validators: {
   					notEmpty: {
   						message: 'Search doctor is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Search doctor can only consist of alphanumeric, space and dot'
   					}
   				}
   			}
   			}
   		      })
        
   });
   $(document).ready(function() {
    
       $('#next').bootstrapValidator({
   		fields: {
             
                relation: {
                    validators: {
   					notEmpty: {
   						message: 'Relation is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Relation can only consist of alphanumeric, space and dot'
   					}
   				}
               },first_name: {
                    validators: {
   					notEmpty: {
   						message: 'First Name is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'First Name can only consist of alphanumeric, space and dot'
   					}
   				}
               },middel_name: {
                    validators: {
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Middle Name can only consist of alphanumeric, space and dot'
   					}
   				}
               },last_name: {
                    validators: {
   					notEmpty: {
   						message: 'Last Name is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Last Name can only consist of alphanumeric, space and dot'
   					}
   				}
               },next_address1: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               },next_address2: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               },
              
   			next_pincode: {
                   validators: {
   					notEmpty: {
   						message: 'Pin code is required'
   					},
   					regexp: {
   					regexp: /^[0-9]{5,7}$/,
   					message: 'Pin code  must be  5 to 7 characters'
   					}
   				}
               },next_city: {
                  validators: {
   					notEmpty: {
   						message: 'City is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'City can only consist of alphanumeric, space and dot'
   					}
   				}
               },next_state: {
                 validators: {
   					notEmpty: {
   						message: 'State is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'State can only consist of alphanumeric, space and dot'
   					}
   				}
               },
   			next_country: {
                 validators: {
   					notEmpty: {
   						message: 'Country is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Country can only consist of alphanumeric, space and dot'
   					}
   				}
   			},
   			next_email: {
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
   			next_mobile: {
                 validators: {
   					notEmpty: {
   						message: 'Mobile Number is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'Mobile Number must be 10 to 14 digits'
   					}
   				}
   			},
   			next_occupation: {
                 validators: {
   					notEmpty: {
   						message: 'Occupation is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Occupation can only consist of alphanumeric, space and dot'
   					}
   				}
   			}
   			}
   		      })
        
   });
   	$(document).ready(function() {
    
       $('#demographic').bootstrapValidator({
   		fields: {
             
                religion: {
                    validators: {
   					notEmpty: {
   						message: 'Religion is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z ]+$/,
   					message: 'Religion can only consist of alphabets and space'
   					}
   				}
               },caste: {
                    validators: {
   					notEmpty: {
   						message: 'Caste is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z ]+$/,
   					message: 'Caste can only consist of alphabets and space'
   					}
   				}
               },mothername: {
                    validators: {
   					notEmpty: {
   						message: 'Mother name is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Mother name can only consist of alphanumeric, space and dot'
   					}
   				}
               },
               language: {
                  validators: {
   					notEmpty: {
   						message: 'Language is required'
   					}
   				}
               },primarylanguage: {
                  validators: {
   					notEmpty: {
   						message: 'Primary Language is required'
   					}
   				}
               },preferred_language: {
                  validators: {
   					notEmpty: {
   						message: 'Preferred Language is required'
   					}
   				}
               },
               occupation: {
                   validators: {
   					notEmpty: {
   						message: 'Occupation is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Occupation  can only consist of alphanumeric, space and dot'
   					}
   				}
               },
   			education: {
                   validators: {
   					notEmpty: {
   						message: 'Education is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Education  can only consist of alphanumeric, space and dot'
   					}
   				}
               },
   			birth_place: {
                   validators: {
   					notEmpty: {
   						message: 'Birth place is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Birth place  can only consist of alphanumeric, space and dot'
   					}
   				}
               },
   			work_phone: {
                   validators: {
   					notEmpty: {
   						message: 'Work phone is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'Work Phone must be 10 to 14 digits'
   					}
   				}
               },home_phone: {
                   validators: {
   					notEmpty: {
   						message: 'Home phone is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'Home Phone must be 10 to 14 digits'
   					}
   				}
               },
   			
   			bloodgroup: {
                    validators: {
   					notEmpty: {
   						message: 'Blood group is required'
   					}
					}
               },
   			citizen_proof: {
                    validators: {
   					 notEmpty: {
                           message: 'Please select Senior citizen proof'
                       }
   				
   				}
               },
               patient_identifier: {
                    validators: {
   					regexp: {
   					regexp: "(.*?)\.(docx|doc|pdf|xlsx|xls|png|jpeg|jpg)$",
   					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,pdf,png,jpeg,jpg files are allowed'
   					}
               }
               }
   			}
   		      })
        
   });
   		
   		$(document).ready(function() {
    
       $('#basic_details').bootstrapValidator({
           
           fields: {
               patient_card_number: {
                   validators: {
   					regexp: {
   					regexp: /^[0-9]{12,16}$/,
   					message: 'Card Number must be 12 to 16 digits'
   					}
   				}
               }, 
			   registrationtype: {
                   validators: {
                         notEmpty: {
                           message: 'Please select Registration Type '
                       }
                   }
               },
   			patient_category: {
                   validators: {
                         notEmpty: {
                           message: 'Please select Patient category '
                       }
                   }
               },
			   gender: {
                   validators: {
                         notEmpty: {
                           message: 'Please select Gender'
                       }
                   }
               },
                name: {
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
               email: {
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
               mobile: {
                    validators: {
   					notEmpty: {
   						message: 'Mobile Number is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'Mobile Number must be 10 to 14 digits'
   					}
   				
   				}
               },
   			age: {
                    validators: {
   					notEmpty: {
   						message: 'Age is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Age must be digits'
   					}
   				
   				}
               },
   			bloodgroup: {
                    validators: {
   					notEmpty: {
   						message: 'Blood group is required'
   					}
					}
   				
               },
   			martial_status: {
                    validators: {
   					 notEmpty: {
                           message: 'Please select Marital status'
                       }
   				
   				}
               },
               nationali_id: {
                    validators: {
   					notEmpty: {
   						message: 'National ID is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'National ID must be 10 to 14 digits'
   					}
   				
   				}
               }, 
   			perment_address: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               },
               p_c_name: {
                   validators: {
   					notEmpty: {
   						message: 'City is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'City can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
               p_country_name: {
                   validators: {
   					notEmpty: {
   						message: 'Country is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Country can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
   			p_s_name: {
                   validators: {
   					notEmpty: {
   						message: 'State is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'State can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
               p_zipcode: {
                    validators: {
   					notEmpty: {
   						message: 'Pin code is required'
   					},
   					regexp: {
   					regexp: /^[0-9]{5,7}$/,
   					message: 'Pin code  must be  5 to 7 characters'
   					}
   				}
               },
   			temp_address: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               },
   			t_c_name: {
                   validators: {
   					notEmpty: {
   						message: 'City is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'City can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
   			t_s_name: {
                   validators: {
   					notEmpty: {
   						message: 'State is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'State can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
   			t_zipcode: {
                 validators: {
   					notEmpty: {
   						message: 'Pin code is required'
   					},
   					regexp: {
   					regexp: /^[0-9]{5,7}$/,
   					message: 'Pin code  must be  5 to 7 characters'
   					}
   				}
               },
   			t_country_name: {
                   validators: {
   					notEmpty: {
   						message: 'Country is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Country can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               }
               }
           })
        
   });
   $(document).ready(function() {
    
       $('#basic_details1').bootstrapValidator({
           
           fields: {
               registrationtype: {
                   validators: {
                         notEmpty: {
                           message: 'Please select Registration Type '
                       }
                   }
               },
			   patient_card_number: {
                   validators: {
   					regexp: {
   					regexp: /^[0-9]{12,16}$/,
   					message: 'Card Number must be 12 to 16 digits'
   					}
   				}
               }, 
   			patient_category: {
                   validators: {
                         notEmpty: {
                           message: 'Please select Patient category '
                       }
                   }
               },
			   gender: {
                   validators: {
                         notEmpty: {
                           message: 'Please select gender '
                       }
                   }
               },
                name: {
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
			   referred: {
                    validators: {
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Referred  by can only consist of alphanumeric, space and dot'
   					}
   				}
               },
			   problem: {
                    validators: {
   					notEmpty: {
   						message: 'Problem is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Problem can only consist of alphanumeric, space and dot'
   					}
   				}
               },
               email: {
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
               mobile: {
                    validators: {
   					notEmpty: {
   						message: 'Mobile Number is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'Mobile Number must be 10 to 14 digits'
   					}
   				
   				}
               },
   			age: {
                    validators: {
   					notEmpty: {
   						message: 'Age is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Age must be digits'
   					}
   				
   				}
               },
   			bloodgroup: {
                    validators: {
   					notEmpty: {
   						message: 'Blood group is required'
   					}
   				}
               },
   			martial_status: {
                    validators: {
   					 notEmpty: {
                           message: 'Please select Marital status'
                       }
   				
   				}
               },
               nationali_id: {
                    validators: {
   					notEmpty: {
   						message: 'National ID is required'
   					},
   					regexp: {
   					regexp:  /^[0-9]{10,14}$/,
   					message:'National ID must be 10 to 14 digits'
   					}
   				
   				}
               }, 
   			perment_address: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               },
               p_c_name: {
                   validators: {
   					notEmpty: {
   						message: 'City is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'City can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
               p_country_name: {
                   validators: {
   					notEmpty: {
   						message: 'Country is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Country can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
   			p_s_name: {
                   validators: {
   					notEmpty: {
   						message: 'State is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'State can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
               p_zipcode: {
                    validators: {
   					notEmpty: {
   						message: 'Pin code is required'
   					},
   					regexp: {
   					regexp: /^[0-9]{5,7}$/,
   					message: 'Pin code  must be  5 to 7 characters'
   					}
   				}
               },
   			temp_address: {
                   validators: {
   					notEmpty: {
   						message: 'Address is required'
   					},
                       regexp: {
   					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
   					message:'Address wont allow <> [] = % '
   					}
                   }
               },
   			t_c_name: {
                   validators: {
   					notEmpty: {
   						message: 'City is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'City can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
   			t_s_name: {
                   validators: {
   					notEmpty: {
   						message: 'State is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'State can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               },
   			t_zipcode: {
                 validators: {
   					notEmpty: {
   						message: 'Pin code is required'
   					},
   					regexp: {
   					regexp: /^[0-9]{5,7}$/,
   					message: 'Pin code  must be  5 to 7 characters'
   					}
   				}
               },
   			t_country_name: {
                   validators: {
   					notEmpty: {
   						message: 'Country is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Country can only consist of alphanumeric, space and dot'
   					}
   				
   				}
               }
               }
           })
        
   });
    $(document).ready(function() {
    
       $('#vitals_1').bootstrapValidator({
   		fields: {
   			tep_actuals: {
                    validators: {
   					notEmpty: {
   						message: 'Actuals is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Actuals can only consist of alphanumeric, space and dot'
   					}
   				}
               },tep_range: {
                    validators: {
   					notEmpty: {
   						message: 'Range is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Range can only consist of alphanumeric, space and dot'
   					}
   				}
               },temp_site_positioning: {
                    validators: {
   					notEmpty: {
   						message: 'Positioning is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Positioning can only consist of alphanumeric, space and dot'
   					}
   				}
               },notes: {
                    validators: {
   					notEmpty: {
   						message: 'Notes is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Notes can only consist of alphanumeric, space and dot'
   					}
   				}
               },pulse_actuals: {
                    validators: {
   					notEmpty: {
   						message: 'Actuals is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Actuals can only consist of alphanumeric, space and dot'
   					}
   				}
               },pulse_range: {
                    validators: {
   					notEmpty: {
   						message: 'Range is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Range can only consist of alphanumeric, space and dot'
   					}
   				}
               },pulse_rate_rhythm: {
                    validators: {
   					notEmpty: {
   						message: 'Rhythm is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Rhythm can only consist of alphanumeric, space and dot'
   					}
   				}
               },pulse_rate_vol: {
                    validators: {
   					notEmpty: {
   						message: 'Vol is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Vol can only consist of alphanumeric, space and dot'
   					}
   				}
               },notes1: {
                    validators: {
   					notEmpty: {
   						message: 'Notes is required'
   					},
   					regexp: {
   					regexp: /^[a-zA-Z0-9. ]+$/,
   					message: 'Notes can only consist of alphanumeric, space and dot'
   					}
   				}
               }
   			}
   		
   	})
        
   });
   
   
</script>
