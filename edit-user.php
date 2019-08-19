
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
			<h1>Thay đổi thông tin người dùng</h1>
		</div>
	</div>

<?php
	require('connect.php'); 							
	$query = "SELECT * FROM users";		
	$result = mysqli_query ($conn, $query);

    if ($result) {
    	echo '<table class="table">
					  <thead class="thead-dark">
					    <tr>
					    	<th scope="col"></th>
					      	<th scope="col">First Name</th>
					      	<th scope="col">Last Name</th>
					      	<th scope="col">Email</th>
					      	<th scope="col">User levek</th>
					      	<th scope="col"></th>
					    </tr>
					  </thead>';
    	while ($row=mysqli_fetch_assoc($result)) {
    		echo '<tbody>
					    <tr>
					    	<form action=update-user.php method=post>
					    <td><input type=hidden name=id value="'.$row['userid'].'"</td>
					      <td><input type=text name=cfname value="'.$row['first_name'].'"</td>
					      <td><input type=text name=clname value="'.$row['last_name'].'"</td>
					      <td><input type=text name=cemail value="'.$row['email'].'"</td>
					      <td><input type=text name=cuser_level value="'.$row['user_level'].'"</td>
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