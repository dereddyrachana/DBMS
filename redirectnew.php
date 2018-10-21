<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {  font-family:sans-serif;
  background: rgb(79, 123, 255);
}
form{
	align-content: center;
}
table{
	top:50px;
	left:50px;
	position: relative;
	color:black;
	height:50px;
	border:2px solid black;
	margin:none;
	border-radius:15px;
}
#next{
	color:orange;
	position:absolute;
	bottom:100px;
	left:50%;
	border-radius: 20px;
	border-style: none;
	margin:20px;
	padding:20px;
	cursor:pointer;
}
</style>

</head>
<body>
<table style="width:600px;height:600px; margin:auto;color:black"  border="1" bgcolor="white" align="center">
 <tr><th align="center" colspan="5" > <h2 style="color:black">Student Information</h2></th></tr>
<td align="justify"> <h4> Registration_no</h4></td>
<td align="justify"> <h4> Name</h4></td>
<td align="justify"> <h4> CGPA</h4></td>
<td align="justify"> <h4> Phone NO</h4></td>
<td align="justify"> <h4> Email</h4></td>
<?php
if(isset($_POST["submit"]))
{
include('t.php');
$username = $_POST["userid"];
$password = $_POST["psw"];
$query = "SELECT * FROM student WHERE registration_no=$username AND Password = $password" ;
$result = mysqli_query($db,$query) or die('Incorrect info');
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo $row['registration_no'];
	echo "</td><td>";
	echo $row['Name'];
	echo "</td><td>";
	echo $row['CGPA'];
	echo "</td><td>";
	echo $row['Phone No'];
	echo "</td><td>";
	echo $row['E-mail'];
	echo "</td></tr>";
}
//echo "</table>";
}
?>
<button id="next">NEXT</button>

</body>
</html>