
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
			<!--<table class="table table-striped custom-table table-hover"  id="myTable">
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
				<tbody>
				  <tr id="row0">
           
						<td>1</td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td>
							 <form onsubmit="$('#hero-demo').blur();return false;" class="pure-form">
								<input id="" autofocus type="text" name="q" placeholder="medicine name ..." Class="form-control hero-demo">
							</form>
						</td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
           
        </tr>
				</tbody>
			</table>-->
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
				<tbody>
					<tr id='addr0'>
						
						<td>1</td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td>
							 <form onsubmit="$('#hero-demo').blur();return false;" class="pure-form">
								<input id="" autofocus type="text" name="q" placeholder="medicine name ..." Class="form-control hero-demo">
							</form>
						</td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						<td><input type="text" class="form-control"></td>
						
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
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
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='' class='form-control input-md'  /> </td><td><input  name='mail"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder='Medicine name'  class='form-control input-md '></td><td><input  name='mobile"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='mobile"+i+"' type='text' placeholder=''  class='form-control input-md'></td>");

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
 </script>
 <script>
        $(function(){
            $('.hero-demo').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = ['ActionScript', 'AppleScript', 'Asp', 'Assembly', 'BASIC', 'Batch', 'C', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'PowerShell', 'Python', 'Ruby', 'Scala', 'Scheme', 'SQL', 'TeX', 'XML'];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });
            $('#advanced-demo').autoComplete({
                minChars: 0,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = [['Australia', 'au'], ['Austria', 'at'], ['Brasil', 'br'], ['Bulgaria', 'bg'], ['Canada', 'ca'], ['China', 'cn'], ['Czech Republic', 'cz'], ['Denmark', 'dk'], ['Finland', 'fi'], ['France', 'fr'], ['Germany', 'de'], ['Hungary', 'hu'], ['India', 'in'], ['Italy', 'it'], ['Japan', 'ja'], ['Netherlands', 'nl'], ['Norway', 'no'], ['Portugal', 'pt'], ['Romania', 'ro'], ['Russia', 'ru'], ['Spain', 'es'], ['Swiss', 'ch'], ['Turkey', 'tr'], ['USA', 'us']];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~(choices[i][0]+' '+choices[i][1]).toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                },
                renderItem: function (item, search){
                    search = search.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
                    var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
                    return '<div class="autocomplete-suggestion" data-langname="'+item[0]+'" data-lang="'+item[1]+'" data-val="'+search+'"><img src="img/'+item[1]+'.png"> '+item[0].replace(re, "<b>$1</b>")+'</div>';
                },
                onSelect: function(e, term, item){
                    console.log('Item "'+item.data('langname')+' ('+item.data('lang')+')" selected by '+(e.type == 'keydown' ? 'pressing enter or tab' : 'mouse click')+'.');
                    $('#advanced-demo').val(item.data('langname')+' ('+item.data('lang')+')');
                }
            });
        });

        if (~window.location.href.indexOf('http')) {
            (function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();
            (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=114593902037957";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            $('#github_social').html('\
                <iframe style="float:left;margin-right:15px" src="//ghbtns.com/github-btn.html?user=Pixabay&repo=jQuery-autoComplete&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>\
                <iframe style="float:left;margin-right:15px" src="//ghbtns.com/github-btn.html?user=Pixabay&repo=jQuery-autoComplete&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>\
            ');
        }
    </script>