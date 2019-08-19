
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<title></title>
</head>
<body>
	<header>
		<?php
				include('header-admin1.php');
		?>
	</header>
	<div class="row" style="margin-top: 20px">
		<div class="col-12 text-center">
			<h1>Cập nhật bài thi</h1>
		</div>
	</div>

<?php
	require('connect.php'); 							
	$query = "SELECT * FROM baithi";		
	$result = mysqli_query ($conn, $query);

    if ($result) {
    	echo '<table class="table">
					  <thead class="thead-dark">
					    <tr>
					    	<th scope="col">Id</th>
					      	<th scope="col">Img</th>
					      	<th scope="col">Subject</th>
					      	<th scope="col">Title</th>
					      	<th scope="col">Link</th>
					      	<th scope="col"></th>
					    </tr>
					  </thead>';
    	while ($row=mysqli_fetch_assoc($result)) {
    		echo '<tbody>
					    <tr>
					    	<form action=update-baithi.php method=post>
					    <td><input type=text name=cid value="'.$row['idbaithi'].'"</td>
					      <td><input type=text name=cimg value="'.$row['img'].'"</td>
					      <td><input type=text name=csubject value="'.$row['subject'].'"</td>
					      <td><input type=text name=ctitle value="'.$row['title'].'"</td>
					      <td><input type=text name=clink value="'.$row['link'].'"</td>
					      <td><button type="submit" name="update" class="btn btn-primary">Update</button></td>
					      </form>
					    </tr>
				</tbody>';
    	}
    	echo '</table>';
    	mysqli_free_result($result);
    	# code...
    }

?>
	<footer>
		<?php
			include("footer.php");
		?>
	</footer>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>