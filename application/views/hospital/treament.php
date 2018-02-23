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
      <div class="panel tab-border card-topline-green">
         <header class="panel-heading panel-heading-gray custom-tab ">
            <ul class="nav nav-tabs">
               <li class="nav-item"><a href="#home" data-toggle="tab" class="active">Treatments </a>
               </li>
               <li class="nav-item"><a href="#about" data-toggle="tab">Investigation</a>
               </li>
            </ul>
         </header>
         <div class="panel-body">
            <div class="tab-content">
               <div class="tab-pane active" id="home">
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="container">
                           <div class="control-group" id="fields">
                              <label class="control-label" for="field1"><strong>Treatment Details</strong></label>
                              <div class="controls">
                                 <form role="form" autocomplete="off">
                                    <div class="entry input-group ">
                                       
									   <select  class="form-control" id="treatment_name" name="treatment_name">
									   <?php if(count($treatment_list)>0){ ?>
									   <option value="">Select</option>
									   <?php foreach($treatment_list as $list){ ?>
									   <option value="<?php echo $list['t_name']; ?>"><?php echo $list['t_name']; ?> </option>
									   <?php } ?>
									   <?php } ?>
									   </select>&nbsp;
									   <select  class="form-control" id="assign_doctor" name="assign_doctor">
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
                                 </form>
                                 <br>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <button class="btn btn-sm btn-warning" type="button">Clear</button>
                        <button class="btn btn-sm btn-info" type="button">View Prescription</button>
                        <button class="btn btn-sm btn-success" type="button">Add Prescription</button>
                        <div class="clearfix">&nbsp;</div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="about">
                  <div class="container">
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

