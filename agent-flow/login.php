<html>

<head>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <link href="css/agent-login.css" rel="stylesheet" type="text/css" />
    <script src="assets/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/jquery.min.js" ></script>
</head>

<body>
<div class="container">
    <h1 class="page-header">Agent Login</h1>
    <div class="box">
        <h1>Login</h1>
        <div class="group">
            <input class="inputField" type="email" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label class="inputName">Email</label>
        </div>
        <div class="group">
            <input class="inputField" type="password" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label class="inputName">Password</label>
        </div>
        <a href="patient-list.php" class="clicked"><button id="">Login</button></a>
        <p id="forgot" onclick="forgot()">Forgot Password</p>
    </div>
    <div class="box box1">
        <h1 id="">Reset Password</h1>
        <div class="group">
            <input class="inputField" type="email"required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label class="inputName">Email</label>
        </div>
        <a href="patient-list.php" class="clicked"><button id="">Send Verification Link</button></a>
    </div>
</div>
    <script>
        var cont = 0;

        function forgot(){

            cont++;
		
		if(cont==1){
            $('.box').css('display','none');
			$('.box.box1').css('display','block');
            
		}
		else
		{
			$('.show').css('display','none');
			cont = 0;
		}
}    
    
    </script>
</body>
</html>