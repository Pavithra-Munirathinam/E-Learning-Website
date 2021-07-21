<?php include("connection.php");

$fname=$lname=$email=$pass=$cpass="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$fname=test_input($_POST['fname']);
	$lname=test_input($_POST['lname']);
	$email=test_input($_POST['email']);
	$pass=test_input($_POST['pass']);
	$cpass=test_input($_POST['cpass']);
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

if(empty($fname)||empty($lname)||empty($email)||empty($pass)||empty($cpass)){
	echo"<script>alert('Please fill the all required details ')</script>";
	require_once"Reg.php";
}
else{


	if($pass==$cpass){

		$pass=md5($pass);
		$a="INSERT INTO backendofreg(Fname,Lname,Email,Pass) VALUES('$fname','$lname','$email','$pass')";
		mysqli_query($db, $a);
			echo"<script>alert('You Have Registered Seccessfully')</script>";
			require_once"Login.php";
		
		

	}
	else{
		echo"<script>alert('Password is MissMatching')</script>";
		require_once"Reg.php";
	}
	
}



?>







