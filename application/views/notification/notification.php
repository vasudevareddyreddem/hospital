<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Notification
				</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Notification</li>
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
						<form action="<?php echo base_url('admin/sendnotification'); ?>" method="post" >
							<div class="form-group col-md-6">
							<label for="mobile">Notification</label>
							<input type="text" class="form-control" id="notification"  name="notification" placeholder="Enter Notification" value="">
							</div>
							<div class="form-group col-md-6">
							<label for="mobile">&nbsp;</label>
							<button class="btn btn-praimry " type="submit">Submit</button>
							</div>
							</form>
							
   
    
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
<script>
   function opennotification(id){
	   if(id !=''){
		    jQuery.ajax({
   			url: "<?php echo base_url('admin/get_notification_msg');?>",
   			data: {
				notification_id: id,
			},
   			type: "POST",
   			format:"Json",
   					success:function(data){
					$('#notification_count1').empty();
   					$('#notification_count').empty();
   					var parsedData = JSON.parse(data);
   					$('#notification_msg').append(parsedData.names_list);
   					$('#notification_time').append(parsedData.time);
   					$('#notification_count1').append(parsedData.Unread_count);
   					$('#notification_count').append(parsedData.Unread_count);
   					}
           });
	   }
	}
   </script>
<!--script for add row comment-->


