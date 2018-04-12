<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Admin Chating
				</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Admin chating</li>
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
         
         <div class="panel-body">
            <div class="tab-content">
               <div  id="resources">
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="container">
							 <div class="panel-group" id="accordion">
    <div class="panel panel-default">
       <a href="#"><div data-toggle="collapse" data-parent="#accordion" class="panel-heading" href="#collapse1">
        <h4  href="#collapse1" class="panel-title expand">
           <div class="right-arrow pull-right">+</div>
          <span><span class="notification-icon circle deepPink-bgcolor">A</span>   Congratulations!. </span>
		  <span class="pull-right view-all-time">Just Once &nbsp;&nbsp;</span> 
        </h4>
      </div></a>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <a href="#"><div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
             <h4  href="#collapse1" class="panel-title expand">
           <div class="right-arrow pull-right">+</div>
          <span><span class="notification-icon circle deepPink-bgcolor">A</span>   John Micle  is now following you. </span>
		  <span class="pull-right view-all-time">Just Once &nbsp;&nbsp;</span> 
        </h4>
      </div>
	  </a>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
       <a href="#"><div data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-heading">
              <h4  href="#collapse1" class="panel-title expand">
           <div class="right-arrow pull-right">+</div>
          <span><span class="notification-icon circle deepPink-bgcolor">A</span>   Congratulations!. </span>
		  <span class="pull-right view-all-time">Just Once &nbsp;&nbsp;</span> 
        </h4>
      </div></a>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div> 
                        </div>
                        <div class="clearfix">&nbsp;</div>
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
 
    $('#resourcechat').bootstrapValidator({
		fields: {
          
             comment: {
                 validators: {
					notEmpty: {
						message: 'Comment is required'
					}
				}
            },
			image: {
                 validators: {
					regexp: {
					regexp: "(.*?)\.(docx|doc|pdf|xlsx|xls|png|jpg|jpeg|gif|Png)$",
					message: 'Uploaded file is not a valid. Only docx,doc,xlsx,png,jpg,gif,Png,pdf files are allowed'
					}
				}
            },resource_name: {
                 validators: {
					notEmpty: {
						message: 'Resource is required'
					}
				}
            }
			}
		
	})
     
});

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


