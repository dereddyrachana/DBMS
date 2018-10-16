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
$block=$_POST['block'];
$roomType=$_POST['roomType'];
$beds=$_POST['beds'];

// Insert data into mysql 
$sql="INSERT INTO tbl_name(block, roomType, beds)VALUES('$block', '$roomType', '$beds')";


if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else{
	echo 'Inserted';
}

header("refresh:2; url=index.html");
?>



