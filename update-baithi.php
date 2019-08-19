<?php
	require('connect.php');
	$id = $_POST['cid'];
	$img = $_POST['cimg'];
	$subject = $_POST['csubject'];
	$title = $_POST['ctitle'];
	$link = $_POST['clink'];
	$sql = "UPDATE baithi SET img = '$img',subject = '$subject', title = '$title' , link = '$link' WHERE idbaithi = '$id'";
	$query=mysqli_query($conn,$sql);
	$sql1 = "SELECT * FROM baithi";
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