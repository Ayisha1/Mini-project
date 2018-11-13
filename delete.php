<?php

$s_id=$_POST['s_id'];
$link=mysqli_connect("localhost","root","Safa@2017","person");
$sql="delete from student where s_id='$s_id'";
	
if(mysqli_query($link,$sql)){
	header("Location: cancel.html");
}
else {
	echo"Invalid Credential".mysqli_error($link);
}
mysqli_close($link);

?>
