<?php 
$name=$_POST['username'];
$pass=$_POST['password'];
$des=$_POST['des'];
$dep=$_POST['dep'];
$con=mysqli_connect('localhost','root','','malli');
$qs="INSERT INTO `emp`(emp_name) values('".$name."')";
$qsd="INSERT INTO `department`(dep_name) values('".$dep."')";
mysqli_query($con,$qsd);

$q = mysqli_query($con,$qs);
if($q){
	echo "ok";
	
}
else{
	
	echo "not";
}


?>

<!DOCTYPE html>
<html>

<head></head>
<body>
<form  method="post">
<input type="text" name="username" >
<input type="text" name="password">
<input type="text" name="des">
<input type="text" name="dep">
<input type="submit" value="submit">
</form>
</body>





</html>