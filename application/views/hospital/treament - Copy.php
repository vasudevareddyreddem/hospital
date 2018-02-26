<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Treatments List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Treatments List</li>
            </ol>
         </div>
      </div>
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
      <div class="panel tab-border card-topline-green">
         <header class="panel-heading panel-heading-gray custom-tab ">
            <ul class="nav nav-tabs">
               <li class="nav-item"><a href="#home" data-toggle="tab" class="<?php if(isset($tab) && $tab ==''){ echo "active"; } ?>">Treatments </a>
               </li>
               <li class="nav-item"><a href="#about" class="<?php if(isset($tab) && $tab ==1){ echo "active"; } ?>" data-toggle="tab">Investigation</a>
               </li>
            </ul>
         </header>
         <div class="panel-body">
            <div class="tab-content">
               <div class="tab-pane <?php if(isset($tab) && $tab ==''){ echo "active"; } ?>" id="home">
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="container">
                           <div class="control-group" id="fields">
                              <label class="control-label" for="field1"><strong>Treatment Details</strong></label>
                              <div class="controls">
                                 <form action="<?php echo base_url('hospital/treatmenaddtpost'); ?>" method="POST" id="treatmentform" name="treatmentform" role="form" autocomplete="off">
                                    <div class="entry input-group ">
                                       
									   <select  class="form-control" id="treatment_name" name="treatment_name[]">
									   <?php if(count($treatment_list)>0){ ?>
									   <option value="">Select</option>
									   <?php foreach($treatment_list as $list){ ?>
									   <option value="<?php echo $list['t_name']; ?>"><?php echo $list['t_name']; ?> </option>
									   <?php } ?>
									   <?php } ?>
									   </select>&nbsp;
									   <select  class="form-control" id="assign_doctor" name="assign_doctor[]">
									   <?php if(count($doctors_list)>0){ ?>
									   <option value="">Select</option>
									   <?php foreach($doctors_list as $list){ ?>
									   <option value="<?php echo $list['r_id']; ?>"><?php echo $list['resource_name']; ?> </option>
									   <?php } ?>
									   <?php } ?>
									   </select>
                                       <span class="input-group-btn">
                                       <button class="btn btn-success btn-add" type="button">
                                       <span class="glyphicon glyphicon-plus">+</span>
                                       </button>
                                       </span>
                                    </div>
                                 
                                 <br>
								 									
                              </div>
							  <button type="submit" class="btn btn-sm btn-success">Add Prescription</button>

								 </form>
                           </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane <?php if(isset($tab) && $tab ==1){ echo "active"; } ?>" id="about">
                  <div class="container">
					<?php if(count($hospital_treatment_list)>0){ ?>
                                    <table id="saveStage" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
												<th>Treatment Name</th>
												<th>Doctor Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach($hospital_treatment_list as $list){ ?>
                                            <tr>
                                                <td><?php echo htmlentities($list['t_d_name']); ?></td>
                                                <td><?php echo htmlentities($list['resource_name']); ?></td>
												<td><?php if($list['t_d_status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
                                                <td><a href="<?php echo base_url('hospital/addtreatmentstatus/'.base64_encode($list['t_d_id']).'/'.base64_encode($list['t_d_status'])); ?>">
                                                                   <?php if($list['t_d_status']==0){ echo "Active";}else{  echo "Deactive";}?>  </a> |
												<a href="<?php echo base_url('hospital/addtreatmentdeletes/'.base64_encode($list['t_d_id'])); ?>">Delete</a>
                                                    
                                                          
                                                </td>
                                            </tr>
										<?php } ?>
											
                                            
                                        </tbody>
                                    </table>
								<?php } ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix">&nbsp;</div>
      </div>
   </div>
</div>
<script>

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

