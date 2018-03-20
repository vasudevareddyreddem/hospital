<?php //echo '<pre>';print_r($hospital_details);exit; ?>
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
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#home" data-toggle="tab" class="active">New-Registration</a>
                                        </li>
                                        <li class="nav-item"><a href="#about" data-toggle="tab">Reschedule-Registration</a>
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
						<a href="#tab_6_8" data-toggle="tab"> Billing </a>
					</li>
					<li class="nav-item  <?php if( isset($tab) && $tab==9){ echo "active";}?>">
						<a href="#tab_6_9" data-toggle="tab"> Vitals </a>
					</li>
					<li class="nav-item  <?php if( isset($tab) && $tab==10){ echo "active";}?>">
						<a href="#tab_6_10" data-toggle="tab"> Billing </a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-9">
				<div class="tab-content">
					<div class="tab-pane <?php if(isset($tab) && $tab==1){ echo "active";}?>" id="tab_6_1">
						 <form class=" pad30 form-horizontal" action="<?php echo base_url('resources/basic_details'); ?> " method="post"  id="basic_details">
                                        <input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
										<div class="row">
											 <div class="form-group col-md-6">
											  <label for="email">Registration Type </label>
												<select id="registrationtype" name="registrationtype" class="form-control" >
													<option value="">Select</option>
													<option value="New" <?php if($patient_detailes['registrationtype']=='New'){ echo "Selected"; } ?>>New</option>
													<option value="Emergency" <?php if($patient_detailes['registrationtype']=='Emergency'){ echo "Selected"; } ?>>Emergency</option>
													<option value="Temporary" <?php if($patient_detailes['registrationtype']=='Temporary'){ echo "Selected"; } ?>>Temporary</option>
												</select>
											</div>
											<div class="form-group col-md-6">
											  <label for="email">Patient category</label>
												<select id="patient_category" name="patient_category" class="form-control" >
													<option value="">Select</option>
													<option value="VIP" <?php if($patient_detailes['patient_category']=='VIP'){ echo "Selected"; } ?>>VIP</option>
													<option value="Pay Patient" <?php if($patient_detailes['patient_category']=='Pay Patient'){ echo "Selected"; } ?>>pay patient</option>
													<option value="Staff" <?php if($patient_detailes['patient_category']=='Staff'){ echo "Selected"; } ?>>Staff</option>
													<option value="Staff dependent" <?php if($patient_detailes['patient_category']=='Staff dependent'){ echo "Selected"; } ?>>Staff dependent</option>
													<option value="Insurance" <?php if($patient_detailes['patient_category']=='Insurance'){ echo "Selected"; } ?>>Insurance</option>
													<option value="Corporate" <?php if($patient_detailes['patient_category']=='Corporate'){ echo "Selected"; } ?>>Corporate</option>
													<option value="Sponsor" <?php if($patient_detailes['patient_category']=='Sponsor'){ echo "Selected"; } ?>>Sponsor</option>
													<option value="International cash" <?php if($patient_detailes['patient_category']=='International cash'){ echo "Selected"; } ?>>International cash</option>
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
											  <input type="text" class="form-control" id="bloodgroup"  name="bloodgroup" placeholder="Enter Blood Group" value="<?php echo isset($patient_detailes['bloodgroup'])?$patient_detailes['bloodgroup']:''; ?>">
											</div>
											<div class="form-group col-md-6">
											  <label for="mobile">Martial status</label>
												<select id="martial_status" name="martial_status" class="form-control" >
													<option value="">Select</option>
													<option value="Single" <?php if($patient_detailes['martial_status']=='Single'){ echo "Selected"; } ?>>Single</option>
													<option value="Married" <?php if($patient_detailes['martial_status']=='Married'){ echo "Selected"; } ?>>Married</option>
													<option value="Other"<?php if($patient_detailes['martial_status']=='Other'){ echo "Selected"; } ?>>Other</option>
												</select>
											</div>
											<div class="form-group col-md-6">
											  <label for="text">National ID</label>
											  <input type="text" name="nationali_id" id="nationali_id" class="form-control"  placeholder="Adhar Id" value="<?php echo isset($patient_detailes['nationali_id'])?$patient_detailes['nationali_id']:''; ?>" >
											</div>
											
											
										
										
											<div class="form-group col-md-6">
											  <label for="email"> Perment Address</label>
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
												<input type="text" id="p_zipcode" name="p_zipcode"  class="form-control"  placeholder="Zip Code" value="<?php echo isset($patient_detailes['p_zipcode'])?$patient_detailes['p_zipcode']:''; ?>">
											 </div>
											 
											
												<div class="col-md-3 row">
												<input type="text" id="p_country_name" name="p_country_name" class="form-control"  placeholder="Country" value="<?php echo isset($patient_detailes['t_country_name'])?$patient_detailes['t_country_name']:''; ?>" >
											 
											</div>
											</div>
											</div>
											<div class="form-group col-md-6">
											  <label for="email">temp Address</label>
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
												<input type="text" id="t_zipcode" name="t_zipcode"  class="form-control"  placeholder="Zip Code" value="<?php echo isset($patient_detailes['t_zipcode'])?$patient_detailes['t_zipcode']:''; ?>" >
											 </div>
											<div class="col-md-3 row">
												<input type="text" id="t_country_name" name="t_country_name" class="form-control" value="<?php echo isset($patient_detailes['t_country_name'])?$patient_detailes['t_country_name']:''; ?>"  placeholder="Country" >
											 
											</div>
											</div>
											</div>
											
										</div>
										<button class="btn btn-praimry " type="submit">Submit</button>
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
													<option value="Telugu" <?php if($patient_detailes['language']=='Telugu'){ echo "Selected"; } ?>>Telugu</option>
													<option value="English" <?php if($patient_detailes['language']=='English'){ echo "Selected"; } ?>>English</option>
													<option value="Hindi"<?php if($patient_detailes['language']=='Hindi'){ echo "Selected"; } ?>>Hindi</option>
												</select>
											</div>
											<div class="form-group col-md-6">
											  <label for="mobile">Primary language</label>
												<select id="primarylanguage" name="primarylanguage" class="form-control" >
													<option value="">Select</option>
													<option value="Telugu" <?php if($patient_detailes['primarylanguage']=='Telugu'){ echo "Selected"; } ?>>Telugu</option>
													<option value="English" <?php if($patient_detailes['primarylanguage']=='English'){ echo "Selected"; } ?>>English</option>
													<option value="Hindi"<?php if($patient_detailes['primarylanguage']=='Hindi'){ echo "Selected"; } ?>>Hindi</option>
												</select>
											</div>
											<div class="form-group col-md-6">
											  <label for="mobile">Preferred language</label>
												<select id="preferred_language" name="preferred_language" class="form-control" >
													<option value="">Select</option>
													<option value="Telugu" <?php if($patient_detailes['preferred_language']=='Telugu'){ echo "Selected"; } ?>>Telugu</option>
													<option value="English" <?php if($patient_detailes['preferred_language']=='English'){ echo "Selected"; } ?>>English</option>
													<option value="Hindi"<?php if($patient_detailes['preferred_language']=='Hindi'){ echo "Selected"; } ?>>Hindi</option>
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
													<option value="Yes" <?php if($patient_detailes['citizen_proof']=='Yes'){ echo "Selected"; } ?>>Yes</option>
													<option value="No" <?php if($patient_detailes['citizen_proof']=='No'){ echo "Selected"; } ?>>No</option>
												</select>
											</div>
											<div class="form-group col-md-6">
											  <label for="Name">Patient identifier</label>
											  <input type="file" class="form-control" id="patient_identifier"  name="patient_identifier"  value="">
											</div>
								</div>
							<button class="btn btn-praimry " type="submit">Submit</button>

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
								<button class="btn btn-praimry " type="submit">Submit</button>
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
													<button class="btn btn-praimry " type="submit">Submit</button>

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
													<option value="Male" <?php if($patient_detailes['gender']=='Male'){ echo "Selected"; } ?>>Male</option>
													<option value="Female" <?php if($patient_detailes['gender']=='Female'){ echo "Selected"; } ?>>Female</option>
													<option value="Other" <?php if($patient_detailes['gender']=='Other'){ echo "Selected"; } ?>>Other</option>
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
													<option value="Telugu" <?php if($patient_detailes['g_language']=='Telugu'){ echo "Selected"; } ?>>Telugu</option>
													<option value="English" <?php if($patient_detailes['g_language']=='English'){ echo "Selected"; } ?>>English</option>
													<option value="Hindi"<?php if($patient_detailes['g_language']=='Hindi'){ echo "Selected"; } ?>>Hindi</option>
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
						<button class="btn btn-praimry " type="submit">Submit</button>
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
						<button class="btn btn-praimry " type="submit">Submit</button>
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
							<button class="btn btn-praimry " type="submit">Submit</button>
						</form>
						</div>
						
						<div class="tab-pane <?php if(isset($tab) && $tab==8){ echo "active";}?>" id="tab_6_8">
						<form class=" pad30 form-horizontal" action="<?php echo base_url('resources/billing'); ?> " method="post"  id="billing">
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
							<button class="btn btn-praimry " type="submit">Submit</button>
						</form>
						</div>
						
						<div class="tab-pane <?php if(isset($tab) && $tab==9){ echo "active";}?>" id="tab_6_9">
						<form class=" pad30 form-horizontal" action="<?php echo base_url('resources/billing'); ?> " method="post"  id="billing">
							<input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
							<div class="row">
								Step 9
							</div>
							<button class="btn btn-praimry " type="submit">Submit</button>
						</form>
						</div>
						
						
						<div class="tab-pane <?php if(isset($tab) && $tab==10){ echo "active";}?>" id="tab_6_10">
						<form class=" pad30 form-horizontal" action="<?php echo base_url('resources/billing'); ?> " method="post"  id="billing">
							<input type="hidden" id="pid" name="pid" value="<?php echo isset($pid)?$pid:''; ?>">
							<div class="row">
								step 10
							</div>
							<button class="btn btn-praimry " type="submit">Submit</button>
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
	<div class="card-body ">
	<?php if(isset($patients_list) && count($patients_list)>0){ ?>
		<table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
			<thead>
				<tr>
					<th> Patient Id </th>
					<th> Name </th>
					<th> Type </th>
					<th> category </th>
					<th> Age </th>
					<th> Mobile </th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($patients_list as $list){ ?>
				<tr class="odd gradeX">
					
					<td> <?php echo $list['pid']; ?> </td>
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
								<li>
									<a href="<?php echo base_url('resources/desk/'.base64_encode($list['pid']).'/'.base64_encode(8)); ?>">
										<i class="icon-docs"></i> Billing </a>
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
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
	  </div>
	
   
   </div>
</div>
<script>
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
					message: 'Name can only consist of alphanumaric, space and dot'
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
					message: 'Living dependency can only consist of alphanumaric, space and dot'
					}
				}
            },arrangement: {
                 validators: {
					notEmpty: {
						message: 'Living arrangement is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Living arrangement can only consist of alphanumaric, space and dot'
					}
				}
            },incomegroup: {
                 validators: {
					notEmpty: {
						message: 'Income group is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Income group can only consist of alphanumaric, space and dot'
					}
				}
            },description: {
                validators: {
					notEmpty: {
						message: 'Description is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Description can only consist of alphanumaric, space and dot'
					}
                }
            },confidential: {
                validators: {
					notEmpty: {
						message: 'Confidential is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Confidential can only consist of alphanumaric, space and dot'
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
					message: 'student group can only consist of alphanumaric, space and dot'
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
					message: 'Relationship can only consist of alphanumaric, space and dot'
					}
				}
            },g_first_name: {
                 validators: {
					notEmpty: {
						message: 'First Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'First Name can only consist of alphanumaric, space and dot'
					}
				}
            },g_middel_name: {
                 validators: {
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Middle Name can only consist of alphanumaric, space and dot'
					}
				}
            },g_last_name: {
                 validators: {
					notEmpty: {
						message: 'Last Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Last Name can only consist of alphanumaric, space and dot'
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
						message: 'Zipcode is required'
					},
					stringLength: {
                        max: 6,
                        message: 'Zipcode  must be less than 10 characters'
                    },
					regexp: {
					// regexp: /^[0-9A-Za-z ]{5,10}$/,
					 regexp: /^[0-9][1-9]([0-9][0-9][0-9])|[1-9][0-9]([0-9][0-9][0-9])$/ ,
					message: 'Zipcode is not valid, Should be like 32216.'
					}
				}
            },g_city: {
               validators: {
					notEmpty: {
						message: 'City is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'City can only consist of alphanumaric, space and dot'
					}
				}
            },g_state: {
              validators: {
					notEmpty: {
						message: 'State is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'State can only consist of alphanumaric, space and dot'
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
					message: 'Country can only consist of alphanumaric, space and dot'
					}
				}
			},nationality: {
              validators: {
					notEmpty: {
						message: 'Nationality is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Nationality can only consist of alphanumaric, space and dot'
					}
				}
			},living: {
              validators: {
					notEmpty: {
						message: 'Living dependency is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Living dependency can only consist of alphanumaric, space and dot'
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
					message: 'Referred by can only consist of alphanumaric, space and dot'
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
					message: 'Internal external can only consist of alphanumaric, space and dot'
					}
				}
			},search_doctor: {
              validators: {
					notEmpty: {
						message: 'Search doctor is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Search doctor can only consist of alphanumaric, space and dot'
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
					message: 'Relation can only consist of alphanumaric, space and dot'
					}
				}
            },first_name: {
                 validators: {
					notEmpty: {
						message: 'First Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'First Name can only consist of alphanumaric, space and dot'
					}
				}
            },middel_name: {
                 validators: {
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Middle Name can only consist of alphanumaric, space and dot'
					}
				}
            },last_name: {
                 validators: {
					notEmpty: {
						message: 'Last Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Last Name can only consist of alphanumaric, space and dot'
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
						message: 'Zipcode is required'
					},
					stringLength: {
                        max: 6,
                        message: 'Zipcode  must be less than 10 characters'
                    },
					regexp: {
					// regexp: /^[0-9A-Za-z ]{5,10}$/,
					 regexp: /^[0-9][1-9]([0-9][0-9][0-9])|[1-9][0-9]([0-9][0-9][0-9])$/ ,
					message: 'Zipcode is not valid, Should be like 32216.'
					}
				}
            },next_city: {
               validators: {
					notEmpty: {
						message: 'City is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'City can only consist of alphanumaric, space and dot'
					}
				}
            },next_state: {
              validators: {
					notEmpty: {
						message: 'State is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'State can only consist of alphanumaric, space and dot'
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
					message: 'Country can only consist of alphanumaric, space and dot'
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
					message: 'Occupation can only consist of alphanumaric, space and dot'
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
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Religion can only consist of alphanumaric, space and dot'
					}
				}
            },caste: {
                 validators: {
					notEmpty: {
						message: 'Caste is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Caste can only consist of alphanumaric, space and dot'
					}
				}
            },mothername: {
                 validators: {
					notEmpty: {
						message: 'Mother name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Mother name can only consist of alphanumaric, space and dot'
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
					message: 'Occupation  can only consist of alphanumaric, space and dot'
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
					message: 'Education  can only consist of alphanumaric, space and dot'
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
					message: 'Birth place  can only consist of alphanumaric, space and dot'
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
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Blood group can only consist of alphanumaric, space and dot'
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
             name: {
                 validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumaric, space and dot'
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
					regexp:  /^[0-9]{2}$/,
					message:'Mobile Number must be 10 to 14 digits'
					}
				
				}
            },
			bloodgroup: {
                 validators: {
					notEmpty: {
						message: 'Blood group is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Blood group can only consist of alphanumaric, space and dot'
					}
				}
            },
			martial_status: {
                 validators: {
					 notEmpty: {
                        message: 'Please select Martial status'
                    }
				
				}
            },
            nationali_id: {
                 validators: {
					notEmpty: {
						message: 'National ID is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,16}$/,
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
					message: 'City can only consist of alphanumaric, space and dot'
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
					message: 'Country can only consist of alphanumaric, space and dot'
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
					message: 'State can only consist of alphanumaric, space and dot'
					}
				
				}
            },
            p_zipcode: {
                 validators: {
					notEmpty: {
						message: 'Zipcode is required'
					},
					stringLength: {
                        max: 6,
                        message: 'Zipcode  must be less than 10 characters'
                    },
					regexp: {
					// regexp: /^[0-9A-Za-z ]{5,10}$/,
					 regexp: /^[0-9][1-9]([0-9][0-9][0-9])|[1-9][0-9]([0-9][0-9][0-9])$/ ,
					message: 'Zipcode is not valid, Should be like 32216.'
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
					message: 'City can only consist of alphanumaric, space and dot'
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
					message: 'State can only consist of alphanumaric, space and dot'
					}
				
				}
            },
			t_zipcode: {
              validators: {
					notEmpty: {
						message: 'Zipcode is required'
					},
					stringLength: {
                        max: 6,
                        message: 'Zipcode  must be less than 10 characters'
                    },
					regexp: {
					// regexp: /^[0-9A-Za-z ]{5,10}$/,
					 regexp: /^[0-9][1-9]([0-9][0-9][0-9])|[1-9][0-9]([0-9][0-9][0-9])$/ ,
					message: 'Zipcode is not valid, Should be like 32216.'
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
					message: 'Country can only consist of alphanumaric, space and dot'
					}
				
				}
            }
            }
        })
     
});


</script>