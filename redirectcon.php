<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {  font-family:sans-serif;
  background: lightblue;
}
form{
	align-content: center;
}
h2{
	text-align: center;
	color:white;
	font-size: 40px;
}
/*table{
	top:50px;
	left:50px;
	position: relative;
	color:black;
	height:50px;
	border:2px solid black;
	margin:none;
	border-radius:15px;
}*/
#next{
	color:black;
	position:relative;
	bottom:100px;
	left :50%;
	border-radius: 20px;
	font-size:15px;
	border-style: none;
	margin:20px;
	padding:20px;
	cursor:pointer;
	top:20px;
}
#container{
	text-align: left;
	border: gray solid 2px;
	height:600px;
	margin:40px;
	padding:10px;
	border-radius: 10px;
	background-color: white;

}
h4{
	padding:20px;
	color:lightblue;
	font-size:24px;
}
</style>

</head>
<body>
<!-- <table style="width:600px;height:600px; margin:auto;color:black"  border="1" bgcolor="white" align="center"> -->
 <!-- <tr><th align="center" colspan="5" >  --><h2>Student Information</h2><!-- </th></tr> -->
 <div id="container"> 
<!-- <td align="justify"> --> <h4> Registration_no:</h4><!-- </td> -->
<!-- <td align="justify">  --><h4> Name:</h4><!-- </td> -->
<!-- <td align="justify"> --> <h4> CGPA:</h4><!-- </td>
 --><!-- <td align="justify"> --> <h4> Phone NO:</h4><!-- </td> -->
<!-- <td align="justify">  --><h4> Email:</h4><!-- </td> -->
</div>
<?php
if(isset($_POST["submit"]))
{
include('t.php');
$username = $_POST["userid"];
$password = $_POST["psw"];
$query = "SELECT * FROM student WHERE registration_no=$username AND Password = $password" ;
$result = mysqli_query($con, $query) or die('Incorrect info');
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

<form name="login2" method =  "post"  action="block3.html">
	<input class="button" id="next"  type="SUBMIT" name="Next" value="NEXT">

</form>

</body>
</html>