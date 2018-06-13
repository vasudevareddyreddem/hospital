<script src="//oss.maxcdn.com/momentjs/2.8.2/moment.min.js"></script>
<style>
   .entry:not(:first-of-type)
   {
   margin-top: 10px;
   }
   .glyphicon
   {
   font-size: 12px;
   }
   .bg-indigo {
   background: #6673fc;
   color:#fff;
   }
   .min-h-300{
   min-height:300px;
   margin-top:50px;
   }
</style>

<?php //echo '<pre>';print_r($patient_details);exit; ?>
<?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<div class="page-content-wrapper">
<div class="page-content">
<div class="row">
<div class="col-md-12">
<div class="card card-topline-aqua">
   <div class="card-head">
      <header>Start Consultation</header>
   </div>
   <div class="card-body row">
      <div class="container">
         <div class="row">
            <div class="panel-group col-md-9" id="accordion">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                        <div class="right-arrow pull-right" style="cursor:pointer">+</div>
                        <a href="#">Patient Details</a>
                     </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                     <div class="panel-body row">
                        <div class="col-md-3">
                           <strong>Patient Name</strong>
                           <p><?php echo isset($patient_details['name'])?$patient_details['name']:''; ?></p>
                        </div>
						<div class="col-md-3">
                           <strong>Gender</strong>
                           <p><?php echo isset($patient_details['gender'])?$patient_details['gender']:''; ?></p>
                        </div>
                        <div class="col-md-3">
                           <strong>Mobile</strong>
                           <p><?php echo isset($patient_details['mobile'])?$patient_details['mobile']:''; ?></p>
                        </div>
                        <div class="col-md-3">
                           <strong>Blood group:</strong>
                           <p><?php echo isset($patient_details['bloodgroup'])?$patient_details['bloodgroup']:''; ?></p>
                        </div>
                        <div class="col-md-3">
                           <strong>Marital status</strong>
                           <p><?php echo isset($patient_details['martial_status'])?$patient_details['martial_status']:''; ?></p>
                        </div>
                        <div class="col-md-3">
                           <strong>DOB</strong>
                           <p><?php echo isset($patient_details['dob'])?$patient_details['dob']:''; ?></p>
                        </div>
                        <div class="col-md-3">
                           <strong>Age</strong>
                           <p><?php echo isset($patient_details['age'])?$patient_details['age']:''; ?></p>
                        </div>
                        <div class="col-md-3">
                           <strong>Address</strong>
                           <p>
                              <?php echo isset($patient_details['perment_address'])?$patient_details['perment_address'].',':''; ?>
                              <?php echo isset($patient_details['p_c_name'])?$patient_details['p_c_name'].',':''; ?>
                              <?php echo isset($patient_details['p_s_name'])?$patient_details['p_s_name'].',':''; ?>
                              <?php echo isset($patient_details['p_country_name'])?$patient_details['p_country_name'].',':''; ?>
                              <?php echo isset($patient_details['p_zipcode'])?$patient_details['p_zipcode'].',':''; ?>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
			   <a href="javascript:void(0)" data-toggle="modal" data-target="#medicine_list_hmodal" class="btn btn-sm btn-warning">Previous Medication Reports</a>
               <a target="_blank" href="<?php echo base_url('resources/patient_report_details/'.base64_encode($patient_id));?>" class="btn btn-sm btn-success" type="button">Previous Investigation Reports</a>
            </div>
         </div>
      </div>
   </div>
   <div class="clearfix">&nbsp;</div>
</div>
<div class="card card-topline-aqua">
<div class="card-head">
   <header>Start Consultation</header>
</div>
<div class="card-body row">
   <div id="smartwizard" class="col-md-12">
      <ul>
         <li><a href="#step-1">Diagnosis<br /><small>This is step description</small></a></li>
         <li><a href="#step-2">Medication/Investigation<br /><small>This is step description</small></a></li>
         <li><a href="#step-3">Assign<br /><small>This is step description</small></a></li>
      </ul>
      <div>
         <div id="step-1" class="">
            <div class="row">
               <div class="col-md-2"> 
                  <strong>Patient History</strong>
               </div>
               <div class="col-md-1"> 
                  <span class="btn btn-xs btn-info" data-toggle="modal" data-target="#squarespaceModal">View All</span>
               </div>
               <div class="col-md-1"> 
                  <span  data-toggle="modal" data-target="#addnew" class="btn btn-xs btn-info">Add New</span>
               </div>
            </div>
            <div class="row clearfix">
               <?php if(isset($encounters_list) && count($encounters_list)>0){ ?>
               <?php $cnt=0;foreach($encounters_list as $list){
									//echo "<pre>";print_r($list);exit; 

			   ?>
               <?php if($cnt<=3){ ?>								
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="card card-topline-purple">
                     <div class="card-head">
                        <header><?php echo isset($list['vitaltype'])?$list['vitaltype']:'Vitals'; ?> (<?php echo $list['date']; ?> )</header>
                     </div>
                     <div >Temperature : <?php echo isset($list['tep_actuals'])?$list['tep_actuals']:''; ?> : <?php echo isset($list['tep_range'])?$list['tep_range']:''; ?></div>
                     <div>Temperature site : <?php echo isset($list['temp_site_positioning'])?$list['temp_site_positioning']:''; ?></div>
                     <div>Notes: <?php echo isset($list['notes'])?$list['notes']:''; ?></div>
                     <div> Pulse rate : <?php echo isset($list['pulse_actuals'])?$list['pulse_actuals']:''; ?> : <?php echo isset($list['pulse_range'])?$list['pulse_range']:''; ?></div>
                     <div> Pulse rate sight : <?php echo isset($list['pulse_rate_rhythm'])?$list['pulse_rate_rhythm']:''; ?> : <?php echo isset($list['pulse_rate_vol'])?$list['pulse_rate_vol']:''; ?></div>
                     <div>Notes: <?php echo isset($list['notes1'])?$list['notes1']:''; ?></div>
                  </div>
               </div>
               <?php } ?>
               <?php $cnt++;} ?>
               <?php } ?>
               <div class="clearfix">&nbsp;</div>
               <div class="container">
                  <div class="control-group" id="fields">
                     <label class="control-label" for="field1"><strong>Comments</strong></label>
                     <div class="controls">
                        <form id="vitalscomment" name="vitalscomment" role="form" action="<?php echo base_url('resources/vitalscomment'); ?>" method="post" autocomplete="off">
                           <input type="hidden" name="bid" id="bid" value="<?php echo isset($billing_id)?$billing_id:''; ?>">
                          
						  <input type="hidden" name="pid" id="pid" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
                           <div class="entry input-group ">
                              <textarea type="textarea" class="form-control" name="comments[]" id="comments[]"  placeholder="Enter Comments" required></textarea>
                              <span class="input-group-btn">
                              <button class="btn btn-success btn-add" type="button">
                              <span class="glyphicon glyphicon-plus">+</span>
                              </button>
                              </span>
                           </div>
                           <button type="submit" >Send</button>
                        </form>
                        <br>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="step-2" class="">
            <div class="panel tab-border card-topline-green">
               <header class="panel-heading panel-heading-gray custom-tab ">
                  <ul class="nav nav-tabs">
                     <li class="nav-item"><a href="#home" data-toggle="tab" class="active">Medication</a>
                     </li>
                     <li class="nav-item"><a href="#about" data-toggle="tab">Investigation</a>
                     </li>
					
                   
                  </ul>
				  <a href="<?php echo base_url('resources/skip_prescription/'.base64_encode($patient_id).'/'.base64_encode($billing_id)); ?>" >Alternate way</a>
               </header>
               <div class="panel-body">
                  <div class="tab-content">
                     <div class="tab-pane active" id="home">
                        <form id="add_medicines" name="add_medicines" onsubmit="return check_qty()"  action="<?php echo base_url('resources/medicine'); ?>" method="post" >
                           <input type="hidden" name="pid" id="pid" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
                           <input type="hidden" name="bid" id="bid" value="<?php echo isset($billing_id)?$billing_id:''; ?>">
                           <div class="row">
                              <div class="col-md-12 ">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <label>Type of Medicine?</label>									
                                          <select class="form-control" id="type_of_medicine" name="type_of_medicine">
                                             <option value="">Select </option>
                                             <option value="Generic">Generic </option>
                                             <option value="Brand">Brand</option>
                                          </select>
                                       </div>
                                       <div class="col-md-6">
                                          <label>Search for Medicine</label>									
                                          <select class="form-control  select2" id="medicine_name" name="medicine_name">
                                             <option value="">Select</option>
                                             <?php foreach($medicine_list as $list){ ?>
                                             <option value="<?php echo $list['medicine_name']; ?>"><?php echo $list['medicine_name']; ?>-<?php echo $list['dosage']; ?> - <?php echo "Avl qty :".$list['qty']; ?></option>
                                             <?php } ?>
                                          </select>
                                       </div>
                                       <div class="col-md-6">
                                                <label> Qty</label>
                                                <input class="form-control" name="qty" id="qty" type="text" placeholder="enter Qty">
                                            </div>
                                       <div class="col-md-6">
                                          <div class="row">
                                             <div class="col-md-4">
                                                <label>Route</label>
                                                <select class="form-control" id="route" name="route">
                                                   <option value="" >Select Route </option>
                                                   <option value="Mouth" selected>Mouth</option>
                                                </select>
                                             </div>
                                             <div class="col-md-8">
                                                <label> Frequency </label>
                                                <select class="form-control" name="frequency" id="frequency">
                                                   <option value="" >Select</option>
                                                   <option value="4 hours">4 hours</option>
                                                   <option value="6 hours">6 hours</option>
                                                   <option value="12 hours">12 hours</option>
                                                   
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                         <div class="col-md-6">
                                          <label>Condition</label>									
                                          <select class="form-control" id="condition" name="condition">
                                             <option value="" >Select  </option>
                                             <option value="Chronic" >Chronic  </option>
                                             <option value="PRN" >PRN</option>
                                          </select>
                                       </div>
                                       <div class="col-md-6">
                                          <label> Directions</label>
                                          <textarea type="textarea" name="directions" id="directions" class="form-control"  placeholder="Enter Directions" ></textarea>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="row">
                                           <div class="col-md-6">
												<label>Substitute allowed or not allowed?</label>									
												<select class="form-control" name="substitute_name" id="substitute_name">
													<option value="" >Select </option>
													<option value="Yes" >Yes </option>
													<option value="No" >No</option>
												</select>
											</div>
                                             <div class="col-md-6">
                                                <label> Units</label>
                                                <select class="form-control" name="units" id="units">
                                                   <option value="" >Select Units</option>
                                                   <option value="no" >no</option>
                                                   <option value="tablet" >tablet</option>
                                                   <option value="mg" >mg</option>
                                                   <option value="ml" >ml</option>
                                                   <option value="ounce" >ounce</option>
                                                   <option value="bottle" >bottle</option>
                                                   <option value="box" >box</option>
                                                   <option value="tube" >tube</option>
                                                   <option value="gram" >gram</option>
                                                   <option value="can" >can</option>
                                                   <option value="pack" >pack</option>
                                                   <option value="pound" >pound</option>
                                                   <option value="device" >device</option>
                                                   <option value="vial" >vial</option>
                                                   <option value="suppository" >suppository</option>
                                                   <option value="es" >es</option>
                                                   <option value="patch" >patch</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <label> Comment</label>
                                          <textarea type="textarea" name="comments" id="comments" class="form-control"  placeholder="Enter Comment" required></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="clearfix">&nbsp;</div>
                                 <button class="btn btn-sm btn-success" type="submit">Add Prescription</button>
                                 <?php if(isset($patient_medicine_list) && count($patient_medicine_list)>0){?>
                                 <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#prescriptionmodel"  type="button">View Prescription</a>
                                 <?php } ?>
                                 <div class="clearfix">&nbsp;</div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane" id="about">
					 <form id="addinvestigation" name="addinvestigation" onsubmit="return check_lab_test();" action="<?php echo base_url('resources/investigation'); ?>" method="post">
                         <input type="hidden" name="pid" id="pid" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
							<input type="hidden" name="bid" id="bid" value="<?php echo isset($billing_id)?$billing_id:''; ?>">

							<div class="container">
                           <div class="row">
                              <div class="col-md-6">
                                 <label>Investigation type</label>									
                                 <select class="form-control" id="investigation_type" name="investigation_type">
                                    <option value="">Select</option>
                                    <option value="lab">lab  </option>
                                    <option value="Radiology">Radiology</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="email">Search</label><br>
                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#searchmodal" class="btn btn-sm btn-warning">Search</a>
								<span id="countdisplaying" style="display:none">Patinet test count : <span id="testcount" ></span></span>
							  </div>
							  
							  <input type="hidden" name="test_list_count" id="test_list_count" value="">
                              
                              <div class="col-md-6">
                                 <label>Frequency</label>	
										<select class="form-control" name="frequency" id="frequency">
                                                   <option value="" >Select</option>
                                                   <option value="4 hours">4 hours</option>
                                                   <option value="6 hours">6 hours</option>
                                                   <option value="12 hours">12 hours</option>
                                                   <option value="24 hours">24 hours</option>
                                                   
                                                </select>								 
                              </div>
                              <div class="col-md-6">
                                 <label>Priority</label>									
                                 <select class="form-control" id="priority" name="priority">
                                    <option value="">Select Priority </option>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium </option>
                                    <option value="High">High</option>
                                 </select>
                              </div>
                              <div class="col-md-6" id="investigation_formdates">
                                 <label> From</label>
                                 <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" id="datePicker11">
                                    <input class="form-control" name="investigation_formdate" id="investigation_formdate"  type="text" value="" >
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                 </div>
                                 <input class ="form-control" type="hidden" id="dtp_input2" value="" />
                              </div>
                              <div class="col-md-6">
                                 <label> To</label>
                                 <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control" id="investigation_todate" name="investigation_todate"  type="text" value="">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                 </div>
                                 <input class ="form-control" type="hidden" id="dtp_input2" value="" />
                              </div>
                              <div class="col-md-6">
                                 <label>  Associate diagnosis</label>
                                 <input class="form-control" type="text" id="associate_diagnosis" name="associate_diagnosis"placeholder="Enter  Associate diagnosis">
                              </div>
                              <div class="col-md-6">
                                 <label>  Associate problems</label>
                                 <input class="form-control" type="text" id="associate_problems" name="associate_problems"placeholder="Enter  Associate diagnosis">
                              </div>
                           </div>
                           <br/>
                           <button class="btn btn-sm btn-success" type="submit">Add Investigation</button>
								<?php if(isset($patient_investigation_list) && count($patient_investigation_list)>0){?>
                                 <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#investigationmodel"  type="button">View Investigation</a>
                                 <?php } ?>
                        </div>
						</form>
                     </div>
                  </div>
               </div>
               <div class="clearfix">&nbsp;</div>
            </div>
         </div>
         <div id="step-3" class="">
            <div class=" text-center min-h-300">
				
				<div class="row">
				<div class="col-md-6">
				<div class="row">
				<div class="col">
				<form action="<?php echo base_url('resources/patient_completed'); ?>" method="post">
				  <input type="hidden" name="billing_id" id="billing_id" value="<?php echo isset($billing_id)?$billing_id:''; ?>">
					<input type="hidden" name="type" id="type" value="1">
					<input type="hidden" name="pid" id="pid" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
					<button type="submit" class="btn btn-xs btn-info">Assign to Pharmacy</button>
				</form>
				</div>
				<div class="col">
					<form action="<?php echo base_url('resources/patient_completed'); ?>" method="post">
				    <input type="hidden" name="billing_id" id="billing_id" value="<?php echo isset($billing_id)?$billing_id:''; ?>">
                  <input type="hidden" name="type" id="type" value="2">
				<input type="hidden" name="pid" id="pid" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
				<button type="submit" class="btn btn-xs btn-warning">Assign to Investigation</button>
				</form>
				</div>
				</div>
				</div>
				<div class="col-md-6">
				<div class="row">
				<form id="addinganotherdoctor" name="addinganotherdoctor" action="<?php echo base_url('resources/patient_completed'); ?>" method="post">
					<div class="col">
				
                  <input type="hidden" name="pid" id="pid" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
                  <input type="hidden" name="billing_id" id="billing_id" value="<?php echo isset($billing_id)?$billing_id:''; ?>">
                  <input type="hidden" name="type" id="type" value="3">
					<select style="width:200px;" class="form-control" id="assign_another_doctor" name="assign_another_doctor">
						<option value="">Select </option>
						<?php foreach($doctors_list as $list){ ?>
						<option value="<?php echo $list['a_id']; ?>"><?php echo $list['resource_name']; ?></option>
						<?php } ?>
					</select>
				
				</div>
				<div class="col">
				<button type="submit" class="btn btn-xs btn-danger">Assign to another doctor</button>
				</div>
				 </form>
				 </div>
				 </div>
			
				</div>
            </div>
     
      </div>
   </div>
</div>
<!-- view all modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Encounters</h5>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body">
            <div class="container">
               <div class="row">
                  <div class="card card-topline-red col-md-12">
                     <div class="card-head">
                        <header>List</header>
                     </div>
                     <div class="card-body " id="bar-parent">
                        <div class="row">
                           <div class="col-md-3 col-sm-3 col-xs-3">
                              <ul class="nav nav-tabs tabs-left">
                                 <?php $c=0;foreach($encounters_list as $lists){ ?>
                                 <?php if($c==0){?>
                                 <li class="nav-item">
                                    <a href="#tab_6_<?php echo $lists['id']; ?>" class="active" data-toggle="tab"><?php echo isset($lists['vitaltype'])?$lists['vitaltype']:'Vitals'; ?></a>
                                 </li>
                                 <?php }else{ ?>
                                 <li class="nav-item">
                                    <a href="#tab_6_<?php echo $lists['id']; ?>" data-toggle="tab"><?php echo isset($lists['vitaltype'])?$lists['vitaltype']:'Vitals'; ?></a>
                                 </li>
                                 <?php } ?>
                                 <?php $c++;} ?>
                              </ul>
                           </div>
                           <div class="col-md-9 col-sm-9 col-xs-9">
                              <div class="tab-content">
                                 <?php $cn=0;foreach($encounters_list as $list){ ?>
                                 <?php if($cn==0){ ?>
                                 <div class="tab-pane active" id="tab_6_<?php echo $list['id']; ?>">
                                    <p>
                                    <div class="card-head">
                                       <header><?php echo isset($list['vitaltype'])?$list['vitaltype']:'Vitals'; ?></header>
                                    </div>
                                    <div >Temperature : <?php echo isset($list['tep_actuals'])?$list['tep_actuals']:''; ?> : <?php echo isset($list['tep_range'])?$list['tep_range']:''; ?></div>
                                    <div>Temperature site : <?php echo isset($list['temp_site_positioning'])?$list['temp_site_positioning']:''; ?></div>
                                    <div>Notes: <?php echo isset($list['notes'])?$list['notes']:''; ?></div>
                                    <div> Pulse rate : <?php echo isset($list['pulse_actuals'])?$list['pulse_actuals']:''; ?> : <?php echo isset($list['pulse_range'])?$list['pulse_range']:''; ?></div>
                                    <div> Pulse rate sight : <?php echo isset($list['pulse_rate_rhythm'])?$list['pulse_rate_rhythm']:''; ?> : <?php echo isset($list['pulse_rate_vol'])?$list['pulse_rate_vol']:''; ?></div>
                                    <div>Notes: <?php echo isset($list['notes1'])?$list['notes1']:''; ?></div>
                                    </p>
                                 </div>
                                 <?php }else{ ?>
                                 <div class="tab-pane " id="tab_6_<?php echo $list['id']; ?>">
                                    <p>
                                    <div class="card-head">
                                       <header><?php echo isset($list['vitaltype'])?$list['vitaltype']:'Vitals'; ?></header>
                                    </div>
                                    <div >Temperature : <?php echo isset($list['tep_actuals'])?$list['tep_actuals']:''; ?> : <?php echo isset($list['tep_range'])?$list['tep_range']:''; ?></div>
                                    <div>Temperature site : <?php echo isset($list['temp_site_positioning'])?$list['temp_site_positioning']:''; ?></div>
                                    <div>Notes: <?php echo isset($list['notes'])?$list['notes']:''; ?></div>
                                    <div> Pulse rate : <?php echo isset($list['pulse_actuals'])?$list['pulse_actuals']:''; ?> : <?php echo isset($list['pulse_range'])?$list['pulse_range']:''; ?></div>
                                    <div> Pulse rate sight : <?php echo isset($list['pulse_rate_rhythm'])?$list['pulse_rate_rhythm']:''; ?> : <?php echo isset($list['pulse_rate_vol'])?$list['pulse_rate_vol']:''; ?></div>
                                    <div>Notes: <?php echo isset($list['notes1'])?$list['notes1']:''; ?></div>
                                    </p>
                                 </div>
                                 <?php } ?>
                                 <?php $cn++;} ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
               <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
               </div>
               <div class="btn-group btn-delete hidden" role="group">
                  <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
               </div>
               <div class="btn-group" role="group">
                  <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--add new modal-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Add Vitals</h5>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body" >
            <div class="">
               <div class="">
                  <div class=" card card-topline-red">
                     <div class="card-head">
                        <header>List</header>
                     </div>
                     <div class="card-body ">
                        <form action="<?php echo base_url('resources/addvitals'); ?>"  method="post">
                          <input type="hidden" name="bid" id="bid" value="<?php echo isset($billing_id)?$billing_id:''; ?>">
							<input type="hidden" name="pid" id="pid" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
                           <div class="row">
                              <div class="col-md-4 ">
                                 <div class="col-md-12">
                                    <label>Assessment</label>
                                    <select class="form-control" id="assessment_type" name="assessment_type" required>
                                       <option value="Infection" >Infection </option>
                                       <option value="Diabetes" >Diabetes</option>
                                       <option value="Cough & Cold" >Cough & Cold</option>
                                       <option value="New" >New</option>
                                    </select>
                                 </div>
                                 <br>
                                 <div class="col-md-12">
                                    <select class="form-control" id="vitaltype" name="vitaltype" required>
                                       <option value="Chief complaint" >Chief complaint</option>
                                       <option value="Vitals">Vitals</option>
                                       <option value="Allergies">Allergies</option>
                                       <option value="Personal history">Personal history</option>
                                       <option value="Medical history">Medical history</option>
                                       <option value="Surgical history">Surgical history</option>
                                       <option value="Personal history">Personal history</option>
                                       <option value="Physical examination">Physical examination</option>
                                       <option value="Review of systems">Review of systems</option>
                                       <option value="Diagnosis">Diagnosis</option>
                                       <option value="Prescription">Prescription</option>
                                       <option value="Advice">Advice</option>
                                       <option value="Referral">Referral</option>
                                       <option value="Surgery request">Surgery request</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-8 ">
                                 <div class="card-head">
                                    <header>Vitals</header>
                                 </div>
                                 <div class="table-scrollable">
                                    <table class="table table-bordered">
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
                                             <td> <input type="text" class="form-control" id="tep_actuals" name="tep_actuals" value="" placeholder="Actuals" required> </td>
                                             <td> <input type="text" id="tep_range" name="tep_range" value="" placeholder="Range" required> </td>
                                             <th>Temperature site</th>
                                             <td> <input type="text" class="form-control" id="temp_site_positioning" name="temp_site_positioning" value="" placeholder="Positioning " required> </td>
                                             <td> <input type="text" class="form-control" id="notes" name="notes" value="" placeholder="Notes"> </td>
                                          </tr>
                                          <tr>
                                             <th> Pulse rate</th>
                                             <td> <input type="text" class="form-control" id="pulse_actuals" name="pulse_actuals" value="" placeholder="Actuals" required> </td>
                                             <td> <input type="text" class="form-control" id="pulse_range" name="pulse_range" value="" placeholder="Range" required> 
                                             </td>
                                             <th> Pulse rate sight  </th>
                                             <td>
                                                <div class="row">					
                                                   <input class="col-md-6 form-control"  type="text" id="pulse_rate_rhythm" name="pulse_rate_rhythm" value="" placeholder="Rhythm" required>
                                                   <input class="col-md-6 form-control" type="text" id="pulse_rate_vol" name="pulse_rate_vol" value="" placeholder="Vol" required>
                                                </div>
                                             </td>
                                             <td> <input type="text" class="form-control" id="notes1" name="notes1" value="" placeholder="Notes"> </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="clearfix">&nbsp;</div>
                                 <button class="btn btn-sm btn-warning">Clear</button>
                                 <button class="btn btn-sm btn-info">Add & Continue
                              </div>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
               <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
               </div>
               <div class="btn-group btn-delete hidden" role="group">
                  <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal" role="button">Delete</button>
               </div>
               <div class="btn-group" role="group">
                  <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--view investigationmodel modal-->
<div class="modal fade" id="investigationmodel" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Investigation</h5>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body">
            <div class="">
               <div class="">
                  <div class=" card card-topline-red">
                     <div class="card-head">
                        <header>Investigation List</header>
                     </div>
                     <div class="card-body ">
                        <div class="col-md-12 ">
                           <div class="table-scrollable">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>Investigation type</th>
                                       <th>Priority</th>
                                       <th>Associate diagnosis </th>
                                       <th>Associate problems</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach($patient_investigation_list as $list){ ?>
                                    <tr id="investigation_id_<?php echo $list['id']; ?>">
									   <td><?php echo $list['investigation_type']; ?></td>
										<td><?php echo $list['priority']; ?></td>
                                       <td><?php echo $list['associate_diagnosis']; ?> </td>
                                       <td><?php echo $list['associate_problems']; ?></td>
                                       <td><span onclick="removeinvestigation(<?php echo $list['id']; ?>);" >Remove</span></td>
                                    </tr>
                                    <?php }?>											
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
<!--view investigationmodel-->
<!--view preciption modal-->
<div class="modal fade" id="prescriptionmodel" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Prescription</h5>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body">
            <div class="">
               <div class="">
                  <div class=" card card-topline-red">
                     <div class="card-head">
                        <header>Prescription List</header>
                     </div>
                     <div class="card-body ">
                        <div class="col-md-12 ">
                           <div class="table-scrollable">
                              <table class="table table-bordered">
                                 <thead>
                                    <tr>
                                       <th>Type of Medicine?</th>
                                       <th>Search for Medicine</th>
                                       <th>Dosage </th>
                                       <th>Condition</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach($patient_medicine_list as $list){ ?>
                                    <tr id="medicine_id_<?php echo $list['m_id']; ?>">
                                       <td><?php echo $list['type_of_medicine']; ?></td>
                                       <td><?php echo $list['medicine_name']; ?></td>
                                       <td><?php echo $list['dosage']; ?> </td>
                                       <td><?php echo $list['condition']; ?></td>
                                       <td><span onclick="removemedicine(<?php echo $list['m_id']; ?>);" >Remove</span></td>
                                    </tr>
                                    <?php }?>											
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
<!--view preciption modal-->
<!--search modal-->
<div class="modal fade" id="searchmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Add Test List</h5>
            <button type="button" id="popupclose" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body" style="height:400px;overflow:hidden; overflow-y: scroll;">
            <div class="">
               <div class="">
                  <div class=" card card-topline-red">
                     <div class="card-head">
                        <header>List</header>
                     </div>
                     <div class="card-body ">
                        <div class="row">
                           <div class="col-md-12 ">
                              <div class="row">
                                 <div class="col-md-3 ">
                                    &nbsp;
                                 </div>
                                 <div class="col-md-6 ">
                                    <label>Investigation search</label>
                                    <select class="form-control" onchange="investdation_serach(this.value);" name="investdation_serach" id="investdation_serach">
                                       <option value="">Select </option>
                                       <option value="Lab">Lab </option>
                                       <option value="Radiology">Radiology</option>
                                    </select>
                                 </div>
                              </div>
                              <br>
                              <div class="row">
							  <div class="col-md-3 ">
                                    &nbsp;
                                 </div>
                                 <div class="col-md-6">
                                    <label>Internal code</label>
                                    <select onchange="labtest_serach(this.value)" id="internal_code" name="internal_code" class="form-control  select2" style="width:100%">
                                    </select>
                                 </div>
                                 
                              </div>
                           </div>
						   <div class="col-md-12 ">

                           <input type="hidden" name="test_patient_id" id="test_patient_id" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
                           <input type="hidden" name="test_patient_bid" id="test_patient_bid" value="<?php echo isset($billing_id)?$billing_id:''; ?>">

							 <div class="card-head">
                                 <header>Search results	</header>
                              </div>
                              <div class="table-scrollable">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th> Test Name</th>
                                          <th>Short form</th>
                                          <th>Description </th>
                                          <th>Select</th>
                                       </tr>
                                    </thead>
                                    <tbody id="testlist">
                                      
                                    </tbody>
                                 </table>
                              </div>
                              <div class="clearfix">&nbsp;</div>
								 <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
								 <button type="button" onclick="addtestlist();" class="btn btn-sm btn-info">Add </button>
								 <a href="javascript:void(0)" onclick="get_patient_list()" data-toggle="modal" data-target="#test_list_searchmodal" class="btn btn-sm btn-warning">View</a>
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
<input type="hidden" name="patient_id_test_list" id="patient_id_test_list" value="<?php echo isset($patient_id)?$patient_id:''; ?>">
 <input type="hidden" name="patient_bid_test_list" id="patient_bid_test_list" value="<?php echo isset($billing_id)?$billing_id:''; ?>">

<!--medicine_list_hmodal_modal-->
<div class="modal fade" id="medicine_list_hmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
            <h5 class="modal-title" id="lineModalLabel">Previous Medicine List </h5>
         <div class="modal-header bg-indigo">
            <button type="button" id="popupclose" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body" style="height:400px;overflow:hidden; overflow-y: scroll;">
            <div class="">
               <div class="">
                  <div class=" card card-topline-red">
                     <div class="card-head">
                        <header>Previous Medicine List</header>
                     </div>
                     <div class="card-body ">
                        <div class="row">
                           	<table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
								<thead>
									<tr>
										<th> Type of Medicine? </th>
										<th> Search for Medicine </th>
										<th> Dosage  </th>
										<th> Condition </th>
										<th> Modified Prescription Reason</th>
										<th> Date </th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($patient_privious_medicine_list as $list){ ?>
									<tr class="odd gradeX">
										
										<td> <?php echo $list['type_of_medicine']; ?> </td>
										<td><?php echo $list['medicine_name']; ?></td>
										<td><?php echo $list['dosage']; ?></td>
										<td><?php echo $list['condition']; ?> </td>
										<td><?php echo $list['edit_reason']; ?></td>
										<td><?php echo date('M-j-Y h:i A',strtotime(htmlentities($list['create_at'])));?></td>
									</tr>
									
								<?php } ?>
									
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
<!-- patient_lab_test_list_model-->
<div class="modal fade" id="test_list_searchmodal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header bg-indigo">
            <h5 class="modal-title" id="lineModalLabel">Lab Test List</h5>
            <button type="button" id="popupclose" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
         </div>
         <div class="modal-body" style="height:400px;overflow:hidden; overflow-y: scroll;">
            <div class="">
               <div class="">
                  <div class=" card card-topline-red">
                     <div class="card-head">
                        <header>List</header>
                     </div>
                     <div class="card-body ">
                        <div class="row">
                           
						   <div class="col-md-12 ">

                              <div class="table-scrollable">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th> Test Name</th>
                                          <th> Type</th>
                                          <th> Amount</th>
                                          <th> Duration</th>
                                          <th>Short form</th>
                                          <th>Description </th>
                                          <th>Department</th>
                                          <th>Remove</th>
                                       </tr>
                                    </thead>
                                    <tbody id="lab_test_type_list">
                                      
                                    </tbody>
                                 </table>
                              </div>
                              <div class="clearfix">&nbsp;</div>
								 <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
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
<!-- patient_lab_test_list_model-->
<script>

     $('#investigation_formdate').datepicker({ 
    startDate: new Date(),
});

function check_lab_test(){
	var count=$('#test_list_count').val();
	if(count==''){
		alert('Please select atleast one Investigation test');		
		return false;
		
	}
	
}

function check_qty(){
	var med_name = $('#medicine_name').text();
	var qty=$('#qty').val();
	var or_qty = med_name.split(":");
	if(or_qty[1]  <= qty){
		
		alert('medicine quantity is greater than available quantity');
		return false;
	}
	
	
}
function addtestlist(){
	var favorite = [];
            $.each($("input[name='testlistid']:checked"), function(){            
                favorite.push($(this).val());
            });
			jQuery.ajax({
					url: "<?php echo base_url('resources/selected_test');?>",
					data: {
						ids: favorite,
						patinet_id: $('#test_patient_id').val(),
						patinet_bid: $('#test_patient_bid').val(),
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
							 $('#countdisplaying').show();
							 $('#testcount').empty();
							 $('#test_list_count').empty();
							 $('#testcount').append(data.count);
							 $('#test_list_count').append(data.count);
							 $('#popupclose').click();
						}
					}
			});
       //+ favorite.join("/");
	}
	function investdation_serach(id){
		if(id!=''){
			$('#internal_code').empty();
			jQuery.ajax({
					url: "<?php echo base_url('resources/investigationsearch');?>",
					data: {
						searchdata: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
						$('#internal_code').empty();
						$('#internal_code').append("<option value=''>select </option>");                      

						for(i=0; i<data.text.length; i++) {
						$('#internal_code').append("<option value="+data.text[i].id+">"+data.text[i].type_name+"</option>");                      
						}
						}
				 }
			});
		}
	}
	function labtest_serach(id){
		if(id!=''){
			$('#testlist').empty();
			jQuery.ajax({
					url: "<?php echo base_url('resources/testsearch');?>",
					data: {
						type: 'Lab',
						test_type_id: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
						$('#testlist').empty();
						for(i=0; i<data.text.length; i++) {
						//$('#testlist').append("<option value="+data.text[i].l_assistent_id+">"+data.text[i].l_code+"</option>");                      
						$('#testlist').append("<tr><td>"+data.text[i].t_name+"</td><td>"+data.text[i].t_short_form+"</td><td>"+data.text[i].t_description+"</td><td><input type='checkbox' id='testlistid' name='testlistid' value="+data.text[i].t_id+"></td></tr>");                      

						}
						}
				 }
			});
		}
	}
	function get_patient_list(){
			$('#lab_test_type_list').empty();
			jQuery.ajax({
					url: "<?php echo base_url('resources/get_patinent_list');?>",
					data: {
						patinet_id: $('#patient_id_test_list').val(),
						patinet_bid: $('#patient_bid_test_list').val(),
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
						$('#lab_test_type_list').empty();
						for(i=0; i<data.text.length; i++) {
						//$('#testlist').append("<option value="+data.text[i].l_assistent_id+">"+data.text[i].l_code+"</option>");                      
						$('#lab_test_type_list').append("<tr id=td_id"+data.text[i].PLid+"><td>"+data.text[i].t_name+"</td><td>"+data.text[i].type_name+"</td><td>"+data.text[i].amuont+"</td><td>"+data.text[i].duration+"</td><td>"+data.text[i].t_short_form+"</td><td>"+data.text[i].t_description+"</td><td>"+data.text[i].t_department+"</td><td><a onclick='remove_patient_lab_test("+data.text[i].PLid+");'>Remove</a></td></tr>");                      

						}
						}
				 }
			});
	}
	function remove_patient_lab_test(t_id){
		jQuery.ajax({
					url: "<?php echo base_url('resources/remove_patient_treatment_id');?>",
					data: {
						t_id: t_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg==1){
   						jQuery('#td_id'+id).hide();
   					}
				 }
			});
		
	}
	
	$(".form-control").change(function(){
            $('#addinvestigation').bootstrapValidator('revalidateField', 'investigation_formdate');
            $('#addinvestigation').bootstrapValidator('revalidateField', 'investigation_todate');

	}); 
	$(document).ready(function() {
		$('#addinganotherdoctor').bootstrapValidator({
		fields: {
          assign_another_doctor: {
                  validators: {
					notEmpty: {
						message: 'Doctor is required'
					}
				}
            }
			}
		
	})
     
});	
	$(document).ready(function() {
		
 
    $('#addinvestigation').bootstrapValidator({
		fields: {
          
             investigation_type: {
                 validators: {
					notEmpty: {
						message: 'Investigation type is required'
					}
				}
            },investigation_formdate: {
                 validators: {
					notEmpty: {
						message: 'Date is required'
					}
				}
            },frequency: {
                  validators: {
					notEmpty: {
						message: 'Frequency is required'
					}
				}
            },priority: {
                  validators: {
					notEmpty: {
						message: 'Priority is required'
					}
				}
            },associate_diagnosis: {
                  validators: {
					notEmpty: {
						message: 'Associate diagnosis is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Associate diagnosis can only consist of alphanumeric, space and dot'
					}
				}
            },associate_problems: {
                  validators: {
					notEmpty: {
						message: 'Associate  problems is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Associate  problems can only consist of alphanumeric, space and dot'
					}
				}
            }
			}
		
	})
     
});
	$(document).ready(function() {
	$('#add_medicines').bootstrapValidator({
		fields: {
          
             type_of_medicine: {
                 validators: {
					notEmpty: {
						message: 'Type of Medicine? is required'
					}
				}
            }, 
			medicine_name: {
                 validators: {
					notEmpty: {
						message: 'Search for Medicine is required'
					}
				}
            },
			substitute_name: {
                 validators: {
					notEmpty: {
						message: 'Substitute allowed is required'
					}
				}
            },
			condition: {
                 validators: {
					notEmpty: {
						message: 'Condition is required'
					}
				}
            },
			dosage: {
                 validators: {
					notEmpty: {
						message: 'Dosage is required'
					}
				}
            },route: {
                 validators: {
					notEmpty: {
						message: 'Route is required'
					}
				}
            },
			frequency: {
                 validators: {
					notEmpty: {
						message: 'Frequency is required'
					}
				}
            },
			directions: {
                 validators: {
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Directions can only consist of alphanumeric, space and dot'
					}
				}
            },
			qty: {
                 validators: {
					notEmpty: {
						message: 'Qty is required'
					},
					regexp: {
					regexp:  /^[0-9]+$/,
					message: 'Qty can only consist of digits'
					}
				}
            },
			units: {
                 validators: {
					notEmpty: {
						message: 'Units is required'
					}
				}
            },
			comments: {
                 validators: {
					notEmpty: {
						message: 'Comments is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Comments can only consist of alphanumeric, space and dot'
					}
				}
            },
			type_of_medicine: {
                 validators: {
					notEmpty: {
						message: 'Type of Medicine? is required'
					}
				}
            }
			}
		
	})
     
});
	$(document).ready(function() {
	$('#vitalscomment').bootstrapValidator({
		fields: {
          
             'comments[]': {
                 validators: {
					notEmpty: {
						message: 'Comment is required'
					}
				}
            }
			}
		
	})
     
});	
   function removemedicine(id){
   	if(id!=''){
   		 jQuery.ajax({
   					url: "<?php echo site_url('resources/removemedicine');?>",
   					data: {
   						medicine_id: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   					if(data.msg==1){
   						jQuery('#medicine_id_'+id).hide();
   					}
   				 }
   				});
   			}
   	
   }
   function removeinvestigation(id){
   	if(id!=''){
   		 jQuery.ajax({
   					url: "<?php echo site_url('resources/removeinvestigation');?>",
   					data: {
   						investigation_id: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   					if(data.msg==1){
   						jQuery('#investigation_id_'+id).hide();
   					}
   				 }
   				});
   			}
   	
   }
   	$(function() {
     $(".expand").on( "click", function() {
       // $(this).next().slideToggle(200);
       $expand = $(this).find(">:first-child");
       
       if($expand.text() == "+") {
         $expand.text("-");
       } else {
         $expand.text("+");
       }
     });
   });
</script>
<!--script for add row comment-->
<script>
   $(function()
   {
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();
   
        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);
   
        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus">-</span>');
    }).on('click', '.btn-remove', function(e)
    {
   $(this).parents('.entry:first').remove();
   
   e.preventDefault();
   return false;
   });
   });
   
</script>
<script>
   $(document).ready(function() {
     $("#select2insidemodal").select2({
       dropdownParent: $("#myModal")
     });
   });
   
</script>
