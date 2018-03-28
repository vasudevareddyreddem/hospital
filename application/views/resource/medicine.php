
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
	<div class="card ">
		<div class="card-head">
			<header>Patient Prescription Issue</header>
			
		</div>
		<div class="card-body ">
		<div class="table-responsive">
			
			<table class="table table-bordered table-hover" id="tab_logic">
					<thead>
					<tr>
						<th> S.NO</th>
						<th>HSN</th>
						<th>Other Code</th>
						<th>Medicine Name</th>
						<th>QTY</th>
						<th>SGST</th>
						<th>CGST</th>
						<th>Other</th>
					</tr>
				</thead>
				<form action="<?php echo base_url('medicine/addpost'); ?>" method="post">
				<tbody>
					<tr id='addr0'>
						
						<td>1</td>
						<td><input id="hsn" name="hsn[]" type="text" class="form-control"></td>
						<td><input id="othercode" name="othercode[]" type="text" class="form-control"></td>
						<td>
							<input id="medicines0" autofocus type="text" onkeyup="autopouplated(this.value,'0')" name="medicine[]" placeholder="medicine name ..." Class="form-control hero-demo">
								<ul class="text-left mar-t10 pad-l-r" id="searchresult">
								</ul>
						</td>
						<td><input id="qty" name="qty[]" type="text" class="form-control"></td>
						<td><input id="sgst" name="sgst[]" type="text" class="form-control"></td>
						<td><input id="cgst" name="cgst[]" type="text" class="form-control"></td>
						<td><input id="others" name="others[]" type="text" class="form-control"></td>
						
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
				</form>
			</table>
			<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
			
			</div>
		</div>
	</div>
</div>
	  </div>
	
   
   </div>
</div>
 <script>
    $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html('<td>'+ (i+1) +'</td><td><input name="hsn[]" type="text"  class="form-control input-md"  /> </td><td><input  name="othercode[]" type="text" class="form-control input-md"></td><td><input  name="medicine[]" id="medicines"'+i+' onkeyup="autopouplated(this.value,'+i+')" type="text" class="form-control input-md hero-demo"></td><td><input  name="qty[]" type="text" class="form-control input-md"></td><td><input  name="sgst[]" type="text" class="form-control input-md"></td><td><input  name="cgst[]" type="text" class="form-control input-md"></td><td><input  name="other[]" type="text"  class="form-control input-md"></td>');

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });
	 
	

});

	
	
	function autopouplated(val ,id){
		jQuery.ajax({
					url: "<?php echo base_url('medicine/search');?>",
					data: {
						searchdata: val,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						$('#searchresult').empty();
						for(i=0; i<data.text.length; i++) {
						$('#searchresult').append(data.text[i].medicine_name);                      
                      
					}
				 }
				});
		
	}	
	 
 </script>
