
<?php
session_start();
$s_id = $_SESSION['S_ID'];
//$s_id=$_POST['s_id'];
$link=mysqli_connect("localhost","root","Safa@2017","person");
$sql="update student set verified='1' where s_id='$s_id'";
	
if(mysqli_query($link,$sql)){
	header("Location: verify.html");
}
else {
	echo"Invalid Credential".mysqli_error($link);
}
mysqli_close($link);

?>

