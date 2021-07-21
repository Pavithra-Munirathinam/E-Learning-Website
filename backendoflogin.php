<?php include ("connection.php");

$email='';
$pass='';
$name='';
$passs='';

if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=test_input($_POST['email']);
	$pass=test_input($_POST['pass']);
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

if(empty($name)||empty($pass)){
	echo"<script> alert('You Idiot Fill The Columns First')</script>";
	require_once"Login.php";
}
else{
	$pass=md5($pass);
	/*echo $name;
	echo $pass;*/
	$qr="SELECT * FROM `backendofreg` WHERE Email='$name' AND Pass='$pass'";
	$ax=mysqli_query($db,$qr);
	if (mysqli_num_rows($ax)==1) {
		
	
		echo"<script> alert('Congrats You Have Logged in Succesfully')</script>";
		require_once "Home.php";


	}
	else{
		echo"<script> alert('Sorry No Records Found')</script>";
		require_once"Login.php";
	}
}
?>