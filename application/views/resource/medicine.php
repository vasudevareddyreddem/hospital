
 <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
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
               <li class="active">Add Medicine</li>
            </ol>
         </div>
      </div>
	  <div class="row">	
			<div class="col-md-12">
	<div class="card ">
		<div class="card-head">
			<header>Add Medicine</header>
			
		</div>
		<div class="card-body">
		<div class="row">
			<div class="col-md-1">
			  <div class="form-group">
				<label >HSN</label>
			  </div>
			</div>
			<div class="col-md-2">
			  <div class="form-group">
					<label >Other code</label>
			  </div>
			</div>
			<div class="col-md-2">
			  <div class="form-group">
					<label >Medicine Name</label>
			  </div>
			</div>
			<div class="col-md-1">
			  <div class="form-group">
					<label >Qty</label>
			  </div>
			</div>
			<div class="col-md-2">
			  <div class="form-group">
					<label >SGST</label>
			  </div>
			</div><div class="col-md-2">
			  <div class="form-group">
					<label >CGST</label>
			  </div>
			</div>
			<div class="col-md-2">
			  <div class="form-group">
					<label >Others</label>
			  </div>
			</div>
			
			</div>
			<form id="addmedicines" name="addmedicines" action="<?php echo base_url('medicine/addpost'); ?>" method="post">

			<div class="input_fields_wrap">
			<div class="row">
			<div class="col-md-1">
			  <div class="form-group">
				<input type="text" id="hsn[]" name="addmedicn[0][hsn]" class="form-control hero-demo"  placeholder="HSN">
			  </div>
			</div>
			<div class="col-md-2">
			  <div class="form-group">
				<input type="text" id="othercode" name="addmedicn[0][othercode]" class="form-control hero-demo"  placeholder="Other Code">
			  </div>
			</div>
			<div class="col-md-2">
			  <div class="form-group">
				<input type="text" id="medicins" name="addmedicn[0][medicine]" class="form-control searchingmedicine"  placeholder="Medicine Name">
			  </div>
			</div>
			<div class="col-md-1">
			  <div class="form-group">
				<input type="text" id="qty" name="addmedicn[0][qty]" class="form-control hero-demo"  placeholder="QTY">
			  </div>
			</div>
			<div class="col-md-2">
			  <div class="form-group">
				<input type="text" id="sgst" name="addmedicn[0][sgst]" class="form-control hero-demo"  placeholder="SGST">
			  </div>
			</div><div class="col-md-2">
			  <div class="form-group">
				<input type="text" id="cgst" name="addmedicn[0][cgst]" class="form-control hero-demo" placeholder="CGST">
			  </div>
			</div>
			<div class="col-md-2">
			  <div class="form-group">
				<input type="text" id="other" name="addmedicn[0][other]" class="form-control hero-demo"  placeholder="Other">
			  </div>
			</div>
			
			</div>

			</div>
		
			<button class="add_field_button">Add More Fields</button>
			<button id="remobing" class="remove_field">Remove</button>
			<button type="submit">Submit</button>
			</form>
			
		</div>
</div>
	  </div>
	
   
   </div>
</div>
<script>

   $(document).ready(function() {
    var max_fields      = 15; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    var availableAttributes = [<?php echo $medicine_lists; ?>];
    
    
    
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
		   $(wrapper).append("<div id='addr"+x+"' class='row'><div class='col-md-1'><div class='form-group'><input type='text' id='hsn[]' name='addmedicn["+x+"][hsn]' class='form-control'  placeholder='HSN'></div></div><div class='col-md-2'><div class='form-group'><input type='text' id='othercode' name='addmedicn["+x+"][othercode]' class='form-control'  placeholder='Other Code'></div></div><div class='col-md-2'><div class='form-group'><input type='text' id='autocomplete' name='addmedicn["+x+"][medicine]' class='form-control searchng'  placeholder='Medicine Name'></div></div><div class='col-md-1'><div class='form-group'><input type='text' id='qty' name='addmedicn["+x+"][qty]' class='form-control'  placeholder='QTY'></div></div><div class='col-md-2'><div class='form-group'><input type='text' id='sgst' name='addmedicn["+x+"][sgst]' class='form-control hero-demo'  placeholder='SGST'></div></div><div class='col-md-2'><div class='form-group'><input type='text' id='cgst' name='addmedicn["+x+"][cgst]' class='form-control' placeholder='CGST'></div></div><div class='col-md-2'><div class='form-group'><input type='text' id='other' name='addmedicn["+x+"][other]' class='form-control '  placeholder='Other'></div></div></div>"); 
            
            $(wrapper).find('.searchng').autocomplete({
                source: availableAttributes
            });	
        }
    });
     $('#remobing').click(function(e){
        e.preventDefault();
		$('div#addr'+x).remove(); x--;
		})
  
    $(".searchingmedicine").autocomplete({
		source: availableAttributes
	});	
    
});

$(document).ready(function() {
 
    $('#addmedicines').bootstrapValidator({
		 framework: 'bootstrap',
		fields: {
          
             'addmedicn[0][hsn]': {
                 validators: {
					notEmpty: {
						message: 'Hsn is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Hsn can only consist of alphanumaric, space and dot'
					}
				}
            },
			'addmedicn[0][othercode]': {
                 validators: {
					notEmpty: {
						message: 'Othercode is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Othercode can only consist of alphanumaric, space and dot'
					}
				}
            },
			'addmedicn[0][medicin]': {
                 validators: {
					notEmpty: {
						message: 'Medicin Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Medicin Name can only consist of alphanumaric, space and dot'
					}
				}
            },
			'addmedicn[0][qty]': {
                 validators: {
					notEmpty: {
						message: 'Qty is required'
					},
					integer: {
                        message: 'The value is not an integer'
                    }
				}
            },
			'addmedicn[0][sgst]': {
                 validators: {
					notEmpty: {
						message: 'sgst is required'
					},
					  between: {
                            min: 0,
                            max: 100,
                            message: 'The percentage of sgst must be between 0 and 100'
                        }
				}
            },
			'addmedicn[0][cgst]': {
                 validators: {
					notEmpty: {
						message: 'cgst is required'
					},
					 between: {
                            min: 0,
                            max: 100,
                            message: 'The percentage of cst must be between 0 and 100'
                        }
				}
            },
           'addmedicn[0][other]': {
                validators: {
					notEmpty: {
						message: 'Other is required'
					},
                    regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Others can only consist of alphanumaric, space and dot'
					}
                }
            }
			}
		
	})
     
});
   </script> 
