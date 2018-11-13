<?php
$con=mysqli_connect("localhost","root","Safa@2017","person");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT name,dob,email_id,mobile_no,gender,address,g_name,g_mobile_no,g_address,rank,branch,religion,caste,income,mark,s_id,verified FROM student");?>

<!DOCTYPE html>
<html>
    <head>
        <title> Fetching data </title>
	<style>
font{
	color:white;
}
</style>
    </head>

    <body bgcolor="black">
<font>
<center><img src="admin.jpg" alt="Avatar" style="width:100px"></center>
<center><h2>ADMIN</h2></center>


        <table width="400" style="border-color:white" border="2" cellpadding="2" cellspacing='1'>
                 <tr>
		<th>Name</th>
		<th>DateOfBirth</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Address</th>
		<th>G_Name</th>
		<th>G_mobile_no</th>
		<th>G_Address</th>
		<th>Rank</th>
		<th>Branch</th>
		<th>Religion</th>
		<th>Caste</th>
		<th>Income</th>
		<th>Mark</th>
		<th>S_ID</th>
		<th>Verified</th>
		<th>Verify</th>
		<th>Delete</th>    
          	 </tr>

<?php
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['dob'] . "</td>";
echo "<td>" . $row['email_id'] . "</td>";
echo "<td>" . $row['mobile_no'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['g_name'] . "</td>";
echo "<td>" . $row['g_mobile_no'] . "</td>";
echo "<td>" . $row['g_address'] . "</td>";
echo "<td>" . $row['rank'] . "</td>";
echo "<td>" . $row['branch'] . "</td>";
echo "<td>" . $row['religion'] . "</td>";
echo "<td>" . $row['caste'] . "</td>";
echo "<td>" . $row['income'] . "</td>";
echo "<td>" . $row['mark'] . "</td>";
echo "<td>" . $row['s_id'] . "</td>";
echo "<td>" . $row['verified'] . "</td>";
echo "<td><a href=\"edit.php?id=$data[id]\" style=\"text-decoration: none\">Verify</a></td>";
echo "<td><a href=\"delete.html?id=$data[id]\" style=\"text-decoration: none\">Delete</a></td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</table>
</font>
   </body>

</html>
