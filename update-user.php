<?php
	require('connect.php');
	$id = $_POST['id'];
	$fname = $_POST['cfname'];
	$lname = $_POST['clname'];
	$email = $_POST['cemail'];
	$userlevel = $_POST['cuser_level'];
	$sql = "UPDATE users SET first_name = '$fname',last_name = '$lname', email = '$email' , user_level = '$userlevel' WHERE userid = '$id'";
	$query=mysqli_query($conn,$sql);
	$sql1 = "SELECT * FROM users";
	$query1 = mysqli_query($conn,$sql1);
	$row = mysqli_fetch_array($query1);
	if ($query and $query1) {
			echo "<p>Cập nhật thành công .</p>";
			
			# code...
		}else {
			echo "Lỗi !";
			# code...
		}

?>