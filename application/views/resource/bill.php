<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <style>
	@font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}
#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
	padding:10px;
}


	</style>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div id="company">
        <h2 class="name">Company Name</h2>
        <div>455 Foggy Heights, AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      </div>
    </header>
    <main>
	<table style="width:100%">
	  <tr style="background:#ddd;line-height:40px">
		<th colspan="4">Paient info</th>
		
	  </tr>
	
	  <tr>
		<td><strong>Name:</strong> <span>siva kumar reddy</span></td>
		<td><strong>Name:</strong> <span>siva kumar reddy</span></td>
		<td><strong>Name:</strong> <span>siva kumar reddy</span></td>
		<td><strong>Name:</strong> <span>siva kumar reddy</span></td>
	  </tr>
	    <tr>
		<td colspan="2"><strong>Address:</strong> <span>Use this tool as test data for an automated system </span></td>
		<td><strong>Name:</strong> <span>siva kumar reddy</span></td>
		<td><strong>Name:</strong> <span>siva kumar reddy</span></td>
		
	  </tr>   
	  <tr>
		<td colspan="3"><strong>Address:</strong> <span>Use this tool as test data for an automated system </span></td>
		<td><strong>Name:</strong> <span>siva kumar reddy</span></td>
		
		
	  </tr> 
	  
	</table>
    
      
   
      
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>