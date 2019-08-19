<?php
	require('connect.php'); 
	$iduser = $_GET['user'];							
	$query = "SELECT user_level, email FROM users WHERE userid = '$iduser'";		
	$result = mysqli_query ($conn, $query);
	$row = mysqli_fetch_array($result);

    if ($result) {
    	if($row['user_level'] ==1){
    		echo '<p style = "text-align:center;">Xin chào Admin: '.$row['email'].'</p>';
    	}else{
    		echo '<h2 style = "text-align:center;">Xin chào: '.$row['email'].'</h2>';
    	}
    }  
?>