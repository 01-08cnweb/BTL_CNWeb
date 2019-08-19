<?php
	require('connect.php');
		$iduser = $_GET['del'];
		$sql = "DELETE FROM baithi WHERE idbaithi = '$iduser'";
		$query = mysqli_query($conn,$sql);
		$sql1 = "SELECT * FROM baithi";
	    $query1 = mysqli_query($conn,$sql1);
	    $row = mysqli_fetch_array($query1);
		if ($query and $query1) {
			echo "<p>Xóa thành công 1 bản ghi !</p>";
			
			# code...
		}else {
			echo "Lỗi !";
			# code...
		}
?>