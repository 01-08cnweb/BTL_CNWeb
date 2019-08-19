<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/verify.js"></script> 
	<title>Thi Online</title>
</head>
<body>

	<header>
		<?php include("header.php"); ?>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-3" id="left">
					<div class="row text-center" id="menu">
						<div class="col-12">
							<a href="index.html"><h4><i class="fa fa-home"></i>Trang Chủ</h4></a>
						</div>
					</div>
					<div class="qc">
						<a href="#"><img src="images/qc.gif" class="mx-auto d-block"></a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="row" id="login_page">
						<div class="col-12">
							<div id="login" style="margin-top: 50px">
	        				
	        					<div class="container">
	            					<div id="login-row" class="row justify-content-center align-items-center">
	                					<div id="login-column" class="col-md-6">
	                    					<div id="login-box" class="col-md-12">
	                    						<div class="col-12 text-center text-red">
	                    							<?php
	                    								require("process-login.php");
	                    							?>
	                    						</div>
	                    						


	                        					<form id="login-form" class="form" action="" method="POST">
	                            					<h3 class="text-center text-black">ĐăNG NHậP</h3>
                          							<div class="form-group">
											    		<label for="exampleInputEmail1">Địa chỉ email:</label>
											    		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required
	  													value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
											    		<small id="emailHelp" class="form-text text-muted"></small>
											  		</div>
	                            					<div class="form-group">
									    				<label for="password">Mật khẩu:</label>
									      				<input type="password" size="60px" class="form-control" id="password1" name="password" 
										  					placeholder="Password" required
	 														value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" minlength="3" maxlength="20">
										  				<span id='message'><pre>        (Mật khẩu dài từ 6-20 ký tự.)</pre></span>
									  				</div>
	                            					<div class="form-group">
	                                					<label for="remember-me" class="text-black"><span>Nhớ mật khẩu</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
	                            					</div>		
											  		<button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
	                            					<div id="register-link" class="text-right text-black">
	                                					<a href="#" class="text-info">Đăng ký</a>
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



	<footer style="margin-top: 20px">
		<?php include("footer.php"); ?>
	</footer>

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</body>
</html>