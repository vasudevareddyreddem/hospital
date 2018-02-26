<style>
.dat-help .col-md-6{
	       -webkit-box-flex: 0;
    -webkit-flex: 0 0 50%;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 80%;
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
						            <div class = "mdl-tabs mdl-js-tabs">
						               <div class = "mdl-tabs__tab-bar tab-left-side">
						                  <a href = "#tab4-panel" class = "mdl-tabs__tab is-active">Announcements</a>
						                  <a href = "#tab5-panel" class = "mdl-tabs__tab">Notifications</a>
						               </div>
						               <div class = "mdl-tabs__panel is-active p-t-20" id = "tab4-panel">
						                  <div class="row">
											  <div class="col-4 card dat-help">
											  <br>
											  <h3>Announcements</h3>
											 <textarea type="textarea" class="form-control"  placeholder="Selected Hospitals" ></textarea>
												<table id="example" class="display select " cellspacing="0" width="100%">
												<thead>
													  <tr>
														 <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
														 <th>Select All</th>
														 
													  </tr>
												   </thead>
												 
												</table>	
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
						               <div class = "mdl-tabs__panel p-t-20" id = "tab5-panel">
						                  <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo. </p>
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
	$(document).ready(function (){   
   var table = $('#example').DataTable({
      'ajax': 'https://api.myjson.com/bins/1us28',  
      'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<input type="checkbox" name="id[]" value="' 
                + $('<div/>').text(data).html() + '">';
         }
      }],
      'order': [1, 'asc']
   });

   // Handle click on "Select all" control
   $('#example-select-all').on('click', function(){
      // Check/uncheck all checkboxes in the table
      var rows = table.rows({ 'search': 'applied' }).nodes();
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
   });

   // Handle click on checkbox to set state of "Select all" control
   $('#example tbody').on('change', 'input[type="checkbox"]', function(){
      // If checkbox is not checked
      if(!this.checked){
         var el = $('#example-select-all').get(0);
         // If "Select all" control is checked and has 'indeterminate' property
         if(el && el.checked && ('indeterminate' in el)){
            // Set visual state of "Select all" control 
            // as 'indeterminate'
            el.indeterminate = true;
         }
      }
   });
    
   $('#frm-example').on('submit', function(e){
      var form = this;

      // Iterate over all checkboxes in the table
      table.$('input[type="checkbox"]').each(function(){
         // If checkbox doesn't exist in DOM
         if(!$.contains(document, this)){
            // If checkbox is checked
            if(this.checked){
               // Create a hidden element 
               $(form).append(
                  $('<input>')
                     .attr('type', 'hidden')
                     .attr('name', this.name)
                     .val(this.value)
               );
            }
         } 
      });

      // FOR TESTING ONLY
      
      // Output form data to a console
      $('#example-console').text($(form).serialize()); 
      console.log("Form submission", $(form).serialize()); 
       
      // Prevent actual form submission
      e.preventDefault();
   });
});

	</script>
