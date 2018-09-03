 <?php
$servername="43.255.154.55";
$username="register_medspac";
$password="register_medspace_db@123";
$dbname="register_medspace_db";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die('connection failed:'.$conn->connect_error);
}

if(isset($_POST['form_one']) && $_POST['form_one']==1){
	//echo '<pre>'; print_r($_POST);exit;
	$sql="INSERT INTO register(h_name,r_name,mobilenumber,email,message,status)
	VALUES  ('".$_POST['h_name']."','".$_POST['r_name']."','".$_POST['mobilenumber']."','".$_POST['email']."','".$_POST['message']."','0')";
	//echo $sql;exit;
	$to = "medspaceit@gmail.com";	
	$from = $_POST['email'];
	$subject = "Form submission";
	$message =$_POST['r_name']." wrote the following:" . "\n\n" ."Name of the Hospital:".$_POST['h_name']."\n\n"."Name of the representative:".$_POST['r_name']."\n\n"."Mobile Number:".$_POST['mobilenumber']."\n\n"."Message:".$_POST['message'];
	$headers = "From:" . $from;
	$currentPath = $_SERVER['PHP_SELF']; 
	$pathInfo = pathinfo($currentPath); 
	//echo $pathInfo['dirname'];exit;
	if($conn->query($sql) === TRUE) {
		if(mail($to,$subject,$message,$headers)==true){			
			$msg='success';
			$id=$conn->insert_id;
			$sql1='UPDATE contact SET status=1 WHERE id='.$id;
		//echo $sql1;exit;
		$result1=$conn->query($sql1);
		}else{			
			$msg='fail';
		}
		header("Location: " . "http://" .$_SERVER['SERVER_NAME']. $pathInfo['dirname']."?message=".$msg."#bottom"); 
	}
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

}
$conn->close();
?>