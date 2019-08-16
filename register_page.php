<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- <script src="js/verify.js"></script>  -->
	<title>Thi Online</title>
</head>
<body>

	<header>
		<?php include("header.php");
		include("mysqli_connect.php"); ?>
	</header>


	<main>
		<div class="container">
			<div class="row">
				<div class="col-3" id="left">
					<div class="row text-center" id="menu">
						<div class="col-12">
							<a href="#"><h4><i class="fa fa-home"></i>Trang Chủ</h4></a>
						</div>
					</div>
					<div class="qc">
						<a href="#"><img src="images/qc.gif" class="mx-auto d-block"></a>
					</div>
				</div>
				<div class="col-9">
					<div class="row" id="login_page">
						<div class="col-12">
							<div id="login">
	        					<h3 class="text-center text-black pt-5">Đăng Ký</h3>

	        					<div class="col-12 text-center errors">
	        						<?php
	        							$conn = mysqli_connect('localhost','root','','demo');
										if (isset($_POST['submit'])) {
											if (empty($_POST['first_name']) or empty($_POST['last_name']) or empty($_POST['email']) or empty($_POST['password']) or empty($_POST['cfpassword'])) {
												echo '<p style="color:red">Please fill all textbox</p>';
											}else{
												$first_name = $_POST['first_name'];
												$last_name = $_POST['last_name'];
												$email = $_POST['email'];
												$password = $_POST['password'];
												$cfpassword = $_POST['cfpassword'];
												// echo $first_name. ' ' .$last_name. ' ' .$email. ' ' .$password;
												if ($password !== $cfpassword) { //#4
												echo '<p style="color:red">Your two password did not match.</p>';
												}else{
													$hash_pass = password_hash($password, PASSWORD_DEFAULT);
													$sql = "SELECT * FROM users WHERE email='$email'";
													$result = mysqli_query($conn,$sql);
													if (mysqli_num_rows($result)==0) {
														$sql1 = "INSERT INTO users(first_name,last_name,email,password,registration_date)
																VALUES('$first_name','$last_name','$email','$hash_pass',NOW())";
															$test = mysqli_query($conn,$sql1);
														if ($test) {
															echo '<p style="color:green">Them thanh cong.</p>';
															header("location: register_thanks.php");
															mysqli_close();
														}else{
															echo '<p style="color:red">Khong thanh cong.</p>';
														}
														
													}else{
														echo '<p style="color:red">Email have already exist.</p>';
													}
												}
											}
										}


									?> 
	        					</div>



	        					<div class="container">
	            					<div id="login-row" class="row justify-content-center align-items-center">
	                					<div id="login-column" class="col-md-6">
	                    					<div id="login-box" class="col-md-12">
	                        					<form id="login-form" class="form" action="" method="post">
	                            					<h3 class="text-center text-info">Register</h3>
	                            					<div class="form-group">
	                               						<label for="username" class="text-info">First Name:</label><br>
	                                					<input type="text" name="first_name" placeholder="First Name" id="first_name" class="form-control">
	                            					</div>
	                            					<div class="form-group">
	                               						<label for="username" class="text-info">Last Name:</label><br>
	                                					<input type="text" name="last_name" placeholder="Last Name" id="last_name" class="form-control">
	                            					</div>
	                            					<div class="form-group">
	                               						<label for="username" class="text-info">E-mail:</label><br>
	                                					<input type="text" name="email" placeholder="E-mail" id="email" class="form-control">
	                            					</div>
	                            					<div class="form-group">
	                                					<label for="password" class="text-info">Password:</label><br>
	                                					<input type="password" name="password" placeholder="Password" id="password" class="form-control">
	                            					</div>
	                            					<div class="form-group">
	                               						<label for="username" class="text-info">Confirm Password:</label><br>
	                                					<input type="password" name="cfpassword" placeholder="Confirm Password" id="cfpassword" class="form-control">
	                            					</div>
	                            					<div class="form-group">
	                                					
	                                					<input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
	                            					</div>
	                            					<div id="login-link" class="text-right">
	                                					<a href="#" class="text-info">Login here</a>
	                            					</div>
	                        					</form>
	                    					</div>
	                					</div>
	            					</div>
	        					</div>
	    					</div>
	    				</div>
					</div>
				</div>
			</div>
		</div>
	</main>



	<footer style="margin-top: 200px">
		<?php include("footer.php"); ?>
	</footer>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</body>
</html>