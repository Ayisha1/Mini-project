<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form
$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);
$_SESSION['username'] = $musername;
if($myusername=='admin' and $mypassword=='admin'){
	  echo "admin";
		//$_SESSION['admission_no'] = $admission_no;
		header("Location: test.php");
	}
else{
$sql = "SELECT * FROM login WHERE username = '$myusername' and passcode = '$mypassword'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1) {
	$p = "select s_id,name,verified from student where s_id in (select s_id from login where username='$myusername')"; 
	$resu = mysqli_query($db,$p);
	$r=$resu->fetch_object();
            $name=$r->name;
	    $verified=$r->verified;
	    $s_id=$r->s_id;
	    $_SESSION['S_ID'] = $s_id;
	if($s_id == NULL)
	{
		header('Location: cancel.html');
	}
	else
	{
		if($name==NULL){
			header('Location: student.html');
		}
		else{
			if($verified==0)
			{	
				header('Location: verification.html');
			}
			else{
				header('Location: confirmed.html');
			}	
	}
}}
//die();
//$_SESSION['login_user'] = $myusername;
else {
$error = "Your Login Name or Password is invalid";
}}}
?>
<html>
<head>
<title>Login Page</title>
<style type = "text/css">
body {

font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
label {
font-weight:bold;
width:100px;
font-size:14px;
}.box {
border:#666666 solid 1px;
}
</style>
</head>
<body bgcolor = "#000000">
<br><br><br><br><br><br><br><br>
<font color="white" style="font-size:30px">
<div align = "center">
<div style = "width:300px; border: solid 1px #333333; " align = "left">
<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
<div style = "margin:30px">
<form action = "" method = "post">
<label>UserName :</label><input type = "text" name = "username" class = "box"/><br /><br />
<label>Password :</label><input type = "password" name = "password" class = "box" /><br/><br />
<input type = "submit" value = " Submit "/><br />
</form>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
</div>
</font>
</body>
</html>
