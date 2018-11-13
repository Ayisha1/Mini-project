<?php
session_start();
$s_id = $_SESSION['S_ID'];
	$name=$_POST['Name'];
	$dob=$_POST['dob'];
	$email_id=$_POST['Email_Id'];
	$mobile_no=$_POST['Mobile_Number'];
	$gender=$_POST['Gender'];
	$address=$_POST['Address'];
	$g_name=$_POST['Guardian_Name'];
	$g_mob_no=$_POST['G_Mobile_Number'];
	$g_address=$_POST['G_Address'];
	$rank=$_POST['Rank'];
	$branch=$_POST['Branch'];
	$religion=$_POST['Religion'];
	$caste=$_POST['Caste'];
	$income=$_POST['Income'];
	$mark=$_POST['Mark'];
	include("result.php");
$link=mysqli_connect("localhost","root","Safa@2017","person");
$sql="update student set name='$name',dob='$dob',email_id='$email_id',mobile_no='$mobile_no',gender='$gender',address='$address',g_name='$g_name',g_mobile_no='$g_mob_no',g_address='$g_address',rank='$rank',branch='$branch',
religion='$religion',caste='$caste',income='$income',mark='$mark' where s_id='$s_id'";
	
if(mysqli_query($link,$sql)){
	header("Location: verification.html");
}
else {
	echo"Invalid Credential".mysqli_error($link);
}
mysqli_close($link);

?>
