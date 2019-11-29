<?php

$a = mysqli_connect("localhost", "root", "", "malli" );

if($a){
	$q = "select * FROM   department";
	
	$res = mysqli_query($a, $q );
	
	while( $r = mysqli_fetch_array($res)){
		
		echo $r['dep_name'];
	}
	
}else{
	
	echo "DB not connected";
}



?>