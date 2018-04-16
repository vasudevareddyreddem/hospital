<head>
    <link href="<?php echo base_url(); ?>assets/vendor/css/nouislider.css" rel="stylesheet" type="text/css" />
 <script src="<?php echo base_url(); ?>assets/vendor/plugins/nouislider.js" ></script>
</head>
<style>
#myInput {
  background-image: url('<?php echo base_url(); ?>assets/vendor/img/search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
#input-select,
#input-number {
	padding: 7px;
	margin: 15px 5px 5px;
	width: 70px;
}
</style>
<?php //echo '<pre>';print_r($hospital_details);exit; ?>
<div class="page-content-wrapper">
   <div class="page-content" >
      <div class="page-bar">
         <div class="page-title-breadcrumb">
            <div class=" pull-left">
               <div class="page-title">Outsource Test  List</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
               <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
               </li>
               <li class="active">Outsource Test  List</li>
            </ol>
         </div>
      </div>
	  <div class="row">	
	
	<div class="col-md-12 ">
                            <div class="panel tab-border card-topline-green">
                                <header class="panel-heading panel-heading-gray custom-tab ">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item "><a href="#home" data-toggle="tab" class="active" aria-expanded="false">Select One</a>
                                        </li>
                                        <li class="nav-item"><a href="#about" data-toggle="tab" class="" aria-expanded="false">Bidding</a>
                                        </li>
                                        
                                    </ul>
                                </header>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home" aria-expanded="false">
										<div class="row">
										<div class="col-md-4  py-3">
											
											<h3 class="font-weight-bold ">Filters</h3>
											<hr>
												<div class="price-help-class">
													<label><h4 class="font-weight-bold">Price Range</h4></label>
													<div class="example">
															<div id="html5"></div>
															<select id="input-select"></select>
															<input class="pull-right" type="number" min="-20" max="40" step="1" id="input-number">
													</div>
												</div>
												<div class="location-help-class pt-4">
												<label><h4 class="font-weight-bold">Location</h4></label>
														<div class="row">
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 1
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 2
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 3
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 4
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 5
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 6
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 7
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 8
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; Location 9
															</div>
														</div>
												</div>
												<div class="duration-help-class pt-4">
												<label><h3>Duration</h3></label>
														<div class="row">
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; 10 min
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; 20min
															</div>
															<div class="col-md-4 pt-2">
																<input type="checkbox" name="" value=""> &nbsp; 30 min
															</div>
															
														</div>
												</div>

											
											</div>
											<div class="col-md-8  py-3">
												<div class="clearfix">&nbsp;</div>
											 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
											 <table id="myTable">
												  <tr class="header">
													<th style="width:100%;">Name of the test</th>
													
												  </tr>
												  <tr>
													<td><input type="checkbox" name="" value=""> &nbsp; Alfreds Futterkiste</td>
												   
												  </tr>
												  <tr>
													<td><input type="checkbox" name="" value=""> &nbsp;  Berglunds snabbkop</td>
												   
												  </tr>
												  <tr>
													<td> <input type="checkbox" name="" value=""> &nbsp;  Island Trading</td>
													
												  </tr>
												  <tr>
													<td> <input type="checkbox" name="" value=""> &nbsp;  Koniglich Essen</td>
													
												  </tr>
												  <tr>
													<td> <input type="checkbox" name="" value=""> &nbsp;  Laughing Bacchus Winecellars</td>
													
												  </tr>
												  <tr>
													<td> <input type="checkbox" name="" value=""> &nbsp;  Magazzini Alimentari Riuniti</td>
													
												  </tr>
												  <tr>
													<td> <input type="checkbox" name="" value=""> &nbsp;  North/South</td>
													
												  </tr>
												  <tr>
													<td> <input type="checkbox" name="" value=""> &nbsp;  Paris specialites</td>
													
												  </tr>
												</table>
												<div class="clearfix">&nbsp;</div>
												<button class="btn btn-primary ">Submit</button>
											</div>
											</div>
                                        </div>
                                        <div class="tab-pane" id="about" aria-expanded="false">
												<div class="row justify-content-center">
												<div class="col-md-8  card">
												<div class="panel-heading ">
												<h3 class="font-weight-bold text-center">Send for Bidding</h3>
												</div>
												<table id="myTable">
													  <tr class="header">
														<th style="width:100%;">Name of the test</th>
														
													  </tr>
													  <tr>
														<td><input type="checkbox" name="" value=""> &nbsp; Alfreds Futterkiste</td>
													   
													  </tr>
													  <tr>
														<td><input type="checkbox" name="" value=""> &nbsp;  Berglunds snabbkop</td>
													   
													  </tr>
													  <tr>
														<td> <input type="checkbox" name="" value=""> &nbsp;  Island Trading</td>
														
													  </tr>
													 
													</table>
													<div class="location-help-class pt-4">
													<label><h4 class="font-weight-bold">Location</h4></label>
															<div class="row">
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 1
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 2
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 3
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 4
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 5
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 6
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 7
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 8
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; Location 9
																</div>
															</div>
													</div>
													<div class="duration-help-class pt-4">
													<label><h3>Duration</h3></label>
															<div class="row">
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; 10 min
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; 20min
																</div>
																<div class="col-md-4 pt-2">
																	<input type="checkbox" name="" value=""> &nbsp; 30 min
																</div>
																
															</div>
													</div>
													<div class="clearfix">&nbsp;</div>
													<button class="btn btn-primary "> Send for Bidding</button>
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
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
var select = document.getElementById('input-select');

// Append the option elements
for ( var i = -20; i <= 40; i++ ){

	var option = document.createElement("option");
		option.text = i;
		option.value = i;

	select.appendChild(option);
}
</script>			
<script>
var html5Slider = document.getElementById('html5');

noUiSlider.create(html5Slider, {
	start: [ 10, 30 ],
	connect: true,
	range: {
		'min': -20,
		'max': 40
	}
});
</script>			
<script>
var inputNumber = document.getElementById('input-number');

html5Slider.noUiSlider.on('update', function( values, handle ) {

	var value = values[handle];

	if ( handle ) {
		inputNumber.value = value;
	} else {
		select.value = Math.round(value);
	}
});

select.addEventListener('change', function(){
	html5Slider.noUiSlider.set([this.value, null]);
});

inputNumber.addEventListener('change', function(){
	html5Slider.noUiSlider.set([null, this.value]);
});
</script>


