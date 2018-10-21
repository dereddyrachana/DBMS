<html>
<p>In progress</p>



<?php
$con = mysqli_connect("localhost", "root", "");
/*if(!con)
{
	echo 'Not Connected To Server';
}*/
if(!mysqli_select_db($con,'tutorial'))
{
	echo 'Database Not Selected';
}

// Get values from form 

$rreg_no1=$_POST['rreg_no1'];
$rreg_no2=$_POST['rreg_no2'];
$rreg_no3=$_POST['rreg_no3'];
$rreg_no4=$_POST['rreg_no4'];
$rreg_no5=$_POST['rreg_no5'];
$registration_no=$_POST['registration_no'];

// Insert data into mysql 
$sql="INSERT INTO nn(rreg_no1, rreg_no2, rreg_no3,rreg_no4,rreg_no5,registration_no)VALUES('$rreg_no1', '$rreg_no2', '$rreg_no3','$rreg_no4','$rreg_no5','$registration_no')";


if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else{
	echo 'Inserted';
}


?>

<form name="login3" method =  "post"  action="register1.html">
	<input class="button"  type="SUBMIT" name="submit" value="sign out">
</form>

</html>