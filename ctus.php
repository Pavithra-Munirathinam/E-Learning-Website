<?php include ("connection.php");

$name=$mail=$msg=$number='';


if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=test_input($_POST['name']);
	$mail=test_input($_POST['mail']);
	$msg=test_input($_POST['msg']);
	$number=test_input($_POST['number']);

}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

if(empty($name)||empty($mail)||empty($number)){
	echo"<script> alert('Fill The Reqiured Details')</script>";
	require_once"contactus.php";
}
else{
	if (strlen($number)>10||strlen($number)<10){
		echo"<script> alert('Number must be have 10 digits')</script>";
		require_once"contactus.php";
	}
	else{
		$qry="INSERT INTO backendofcontact (Name,Mail,Message,Number) VALUES ('$name','$mail','$msg','$number')";
		mysqli_query($db,$qry);
		echo"<script> alert('Thankyou For Your Details...We will get you in Touch ')</script>";
		require_once"home.php";

	}
}