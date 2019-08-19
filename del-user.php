<?php
	require('connect.php');
		$iduser = $_GET['del'];
		$sql = "DELETE FROM users WHERE userid = '$iduser'";
		$query = mysqli_query($conn,$sql);
		$sql1 = "SELECT * FROM users";
	                    								$query1 = mysqli_query($conn,$sql1);
	                    								$row = mysqli_fetch_array($query1);
		if ($query and $query1) {
			echo "<p>Xóa thành công 1 bản ghi !</p>";
			header('refresh:1;admin-page.php?user='.$row['userid'].'');
			# code...
		}else {
			echo "Lỗi !";
			# code...
		}
?>