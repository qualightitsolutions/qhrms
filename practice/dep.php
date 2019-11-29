<?php

$con=mysqli_connect('localhost','root','','malli');

$qstr = "SELECT * FROM `department`";

?>
<!DOCTYPE html>
<head> </head>
<body>

<table>

 


<tr>
<th>S.NO</th>
<th>department</th>
</tr>
<tr>

<?php   

$q=mysqli_query($con,$qstr);

while($row = mysqli_fetch_array($q)){;



?>
<td>
<?php 
echo $row["dep_id"];
?>

</td>
<td>
<?=$row["dep_name"];?>
</td>


</tr>
<?php
};
?>
</table>




</body>



</html>