<style>
.dat-help .col-md-6{
	       -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 80%;
}
.dataTables_info{
	display:none
}
</style>
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Support</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Support</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
	                  
					
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card-box">
									<div class="card-head">
										<header>Release Announcement or Notifications</header>
									</div>
									<div class="card-body ">
										<div class="panel tab-border card-topline-green">
                                <header class="panel-heading panel-heading-gray custom-tab ">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#announc" data-toggle="tab" class="active" aria-expanded="false">Announcements</a>
                                        </li>
                                        <li class="nav-item"><a href="#notifi" data-toggle="tab" class="" aria-expanded="false">Notifications</a>
                                        </li>
                                      
                                    </ul>
                                </header>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="announc" aria-expanded="false">
                                            <div class="row">
											  <div class="col-4 card dat-help">
											  <br>
											  <h3>Announcements</h3>
											 <textarea id="example-console" type="textarea" class="form-control"  placeholder="Selected Hospitals" ></textarea>
												<div class="card-body ">
                                    <form id="frm-example" action="/nosuchpage" method="POST">											
										<table id="example" class="display select" cellspacing="0" width="100%">
										   <thead>
											  <tr>
												 <th><input name="select_all" value="1" type="checkbox"></th>
												 <th>Name</th>
											 
											  </tr>
										   </thead>
										  
										   <tbody>
											   <tr>
												   <td>1</td>
												   <td>Tiger Nixon</td>
												  
											   </tr>
											   <tr>
												   <td>2</td>
												   <td>Garrett Winters</td>
											   
											   </tr>
											   <tr>
												   <td>3</td>
												   <td>Ashton Cox</td>
											   
											   </tr>
											   <tr>
												   <td>4</td>
												   <td>Cedric Kelly</td>
											   
											   </tr>
											   <tr>
												   <td>5</td>
												   <td>Airi Satou</td>
												 
											   </tr>
											   <tr>
												   <td>6</td>
												   <td>Brielle Williamson</td>
												   
											   </tr>
											   <tr>
												   <td>7</td>
												   <td>Herrod Chandler</td>
												   
											   </tr>
											   <tr>
												   <td>8</td>
												   <td>Rhona Davidson</td>
												 
											   </tr>
											  
											   
											  
										   </tbody>
										</table>
										<hr>


										<button class="btn btn-success">Submit</button>

										</form>
                                </div>	
                                         </div>
											 
											  <div class="col-md-8 chat-help">
											<div class="panel ">
												<div class="panel-heading bg-indigo">
													<span class="glyphicon glyphicon-comment"></span> Announcements
													
												</div>
												<div class="panel-body">
													 <textarea style="height:150px;" type="textarea" class="form-control"  placeholder="Enter Address" ></textarea>
													 <div class="clearfix">&nbsp;</div>
												 <button class="btn btn-sm deepPink-bgcolor pull-right" type="submit" > Submit</button>
												</div>
												
											</div>
								</div>
										  </div>
                                        </div>
                                        <div class="tab-pane" id="notifi" aria-expanded="false">
                                           <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
									</div>
								</div>
                        </div>
                    </div>
                    <!-- end admited patient list -->
                </div>
				
				
				
				
				
				
            </div>
<script>
//
// Updates "Select all" control in a data table
//
function updateDataTableSelectAllCtrl(table){
   var $table             = table.table().node();
   var $chkbox_all        = $('tbody input[type="checkbox"]', $table);
   var $chkbox_checked    = $('tbody input[type="checkbox"]:checked', $table);
   var chkbox_select_all  = $('thead input[name="select_all"]', $table).get(0);

   // If none of the checkboxes are checked
   if($chkbox_checked.length === 0){
      chkbox_select_all.checked = false;
      if('indeterminate' in chkbox_select_all){
         chkbox_select_all.indeterminate = false;
      }

   // If all of the checkboxes are checked
   } else if ($chkbox_checked.length === $chkbox_all.length){
      chkbox_select_all.checked = true;
      if('indeterminate' in chkbox_select_all){
         chkbox_select_all.indeterminate = false;
      }

   // If some of the checkboxes are checked
   } else {
      chkbox_select_all.checked = true;
      if('indeterminate' in chkbox_select_all){
         chkbox_select_all.indeterminate = true;
      }
   }
}

$(document).ready(function (){
   // Array holding selected row IDs
   var rows_selected = [];
   var table = $('#example').DataTable({
     'columnDefs': [{
   'targets': 0,
   'searchable': false,
   'orderable': false,
   'width': '1%',
   'className': 'dt-body-center',
   'render': function (data, type, full, meta){
       return '<input type="checkbox">';
   }
}],
      'order': [1, 'asc'],
      'rowCallback': function(row, data, dataIndex){
         // Get row ID
         var rowId = data[0];

         // If row ID is in the list of selected row IDs
         if($.inArray(rowId, rows_selected) !== -1){
            $(row).find('input[type="checkbox"]').prop('checked', true);
            $(row).addClass('selected');
         }
      }
   });

   // Handle click on checkbox
   $('#example tbody').on('click', 'input[type="checkbox"]', function(e){
      var $row = $(this).closest('tr');

      // Get row data
      var data = table.row($row).data();

      // Get row ID
      var rowId = data[0];

      // Determine whether row ID is in the list of selected row IDs 
      var index = $.inArray(rowId, rows_selected);

      // If checkbox is checked and row ID is not in list of selected row IDs
      if(this.checked && index === -1){
         rows_selected.push(rowId);

      // Otherwise, if checkbox is not checked and row ID is in list of selected row IDs
      } else if (!this.checked && index !== -1){
         rows_selected.splice(index, 1);
      }

      if(this.checked){
         $row.addClass('selected');
      } else {
         $row.removeClass('selected');
      }

      // Update state of "Select all" control
      updateDataTableSelectAllCtrl(table);

      // Prevent click event from propagating to parent
      e.stopPropagation();
   });

   // Handle click on table cells with checkboxes
   $('#example').on('click', 'tbody td, thead th:first-child', function(e){
      $(this).parent().find('input[type="checkbox"]').trigger('click');
   });

   // Handle click on "Select all" control
   $('thead input[name="select_all"]', table.table().container()).on('click', function(e){
      if(this.checked){
         $('tbody input[type="checkbox"]:not(:checked)', table.table().container()).trigger('click');
      } else {
         $('tbody input[type="checkbox"]:checked', table.table().container()).trigger('click');
      }

      // Prevent click event from propagating to parent
      e.stopPropagation();
   });

   // Handle table draw event
   table.on('draw', function(){
      // Update state of "Select all" control
      updateDataTableSelectAllCtrl(table);
   });
    
   // Handle form submission event 
   $('#frm-example').on('submit', function(e){
      var form = this;

      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
         // Create a hidden element 
         $(form).append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );
      });

      // FOR DEMONSTRATION ONLY     
      
      // Output form data to a console     
      $('#example-console').text($(form).serialize());
      console.log("Form submission", $(form).serialize());
       
      // Remove added elements
      $('input[name="id\[\]"]', form).remove();
       
      // Prevent actual form submission
      e.preventDefault();
   });
});
</script>
