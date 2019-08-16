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

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {          
 require('process_register_page.php');
} 

?>

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
				
					<div class="col-sm-8 text-center">
						<h2>Thank you for registering</h2>
					<p style="font-size: 20px;">You can now be able to login </p>
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