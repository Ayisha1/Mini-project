<?php
$name=$_POST['username'];
$pass=$_POST['passcode'];
$link=mysqli_connect("localhost","root","Safa@2017","person");
$sql="INSERT INTO admin(username,passcode) VAUES('$name','$pass')";
if(mysqli_query($link.$sql)){
	echo"Account created";
}
else{
 echo"Invalid Credentials;".mysqli_error($link);

}
