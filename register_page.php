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
		include("connect.php"); ?>
	</header>


	<main>
		<div class="container">
			<div class="row">
				<div class="col-3" id="left">
					<div class="row text-center" id="menu">
						<div class="col-12">
							<a href="index.php"><h4><i class="fa fa-home"></i>Trang Chủ</h4></a>
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
	        							$conn = mysqli_connect('localhost','root','','test');
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


													$sql = "SELECT userid FROM users WHERE email = '$email' and status = '0'";
								            $result = mysqli_query($conn,$sql);
								            if (mysqli_num_rows($result)>0) {
								                echo '<div>Your email is already in the system but not yet verified.</div>';
								            }else{
								 
								                // now, compose the content of the verification email, it will be sent to the email provided during sign up
								                // generate verification code, acts as the "key"
								                $verificationCode = md5(rand());
								 
								                // send the email verification
								                $verificationLink = "http://localhost/BTL_CNWeb/activate.php?code=" . $verificationCode;
								                


								                $htmlStr = "";
								                $htmlStr .= "Hi " . $email . ",<br /><br />";
								 
								                $htmlStr .= "Please click the button below to verify your subscription.<br /><br /><br />";
								                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
								 
								                $htmlStr .= "Kind regards,<br />";
								                $htmlStr .= "<a href='https://BTL_CNWeb/index.php' target='_blank'>Test online</a><br />";
								 
								 
								                $name = "Test online";
								                $email_sender = "ntduong191098@gmail.com";
								                $subject = "Verification Link | Test online | Subscription";
								                $to = $email;

								                $headers = "From: ntduong191098@gmail.com" . "\r\n" .
								 
								                $headers  = "MIME-Version: 1.0\r\n";
								                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
								                // $headers .= "From: {$name} <{$email_sender}> \n";
								 
								                $body = $htmlStr;
								 
								                // send email using the mail function, you can also use php mailer library if you want
								                if( mail($to, $subject, $body, $headers) ){
								 
								                    // tell the user a verification email were sent
								                    echo "<div id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can login.</div>";
								 
								 
								                    // save the email in the database
								                    
								 
								                    //write query
								                    $sql = "INSERT INTO
								                                users
								                            SET
								                            	first_name = '$first_name',
								                            	last_name = '$last_name',
								                                email = '$email',
								                                password = '$hash_pass',
								                                registration_date = NOW(),
								                                verification_code = '$verificationCode',
								                                status = '0'";
								                    $result = mysqli_query($conn,$sql);

								 
								                    // Execute the query
								                    if($result){
								                        // echo "<div>Unverified email was saved to the database.</div>";
								                        
								                    }else{
								                        echo "<div>Unable to save your email to the database.";
								                        //print_r($stmt->errorInfo());
								                    }
								 
								                }else{
								                    die("Sending failed.");
								                }
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
	                                					<a href="login_page.php" class="text-info">Login here</a>
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