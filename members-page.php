<?php  
	require('process-login.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/verify.js"></script> 
	<title></title>
</head>
	<body>

		<header>
			<?php include("header-user.php"); ?>
		</header>
		<?php require("curr-user.php"); ?>


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
					<div class="qc">
						<a href="#"><img src="images/qc2.jpg" class="mx-auto d-block"></a>
					</div>
				</div>
				<div class="col-9">
					<img src="images/banner.gif" class="mx-auto d-block">
					<div class="row" id="nd">
						<div class="col-md-4">
							<div class="card">
								<img src="images/toan.png" class="card-img-top">
								<div class="card-body">
									<h4 class="card-title">MÔN TOÁN</h4>
									<p class="card-text">Bộ đề thi môn toán năm 2019</p>
									<a href="BaiThi/bai3.html" class="btn btn-outline-secondary">Thi ngay</a>
								</div>
							</div>
						</div>	
						<div class="col-md-4">
							<div class="card">
								<img src="images/sinh.jpg" class="card-img-top">
								<div class="card-body">
									<h4 class="card-title">MÔN SINH HỌC</h4>
									<p class="card-text">Bộ đề thi môn sinh học năm 2019</p>
									<a href="index.php" class="btn btn-outline-secondary">Thi ngay</a>
								</div>
							</div>
						</div>	
						<div class="col-md-4">
							<div class="card">
								<img src="images/li.jpg" class="card-img-top">
								<div class="card-body">
									<h4 class="card-title">MÔN LÝ</h4>
									<p class="card-text">Bộ đề thi môn lý năm 2019</p>
									<a href="index.php" class="btn btn-outline-secondary">Thi ngay</a>
								</div>
							</div>
						</div>	
					</div>
					<div class="row" id="nd">
						<div class="col-md-4">
							<div class="card">
								<img src="images/ta.png" class="card-img-top">
								<div class="card-body">
									<h4 class="card-title">MÔN TIẾNG ANH</h4>
									<p class="card-text">Bộ đề thi môn tiếng anh năm 2019</p>
									<a href="BaiThi/english/english.html" class="btn btn-outline-secondary">Thi ngay</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="images/hoa.png" class="card-img-top">
								<div class="card-body">
									<h4 class="card-title">MÔN HÓA</h4>
									<p class="card-text">Bộ đề thi môn hóa năm 2019</p>
									<a href="index.php" class="btn btn-outline-secondary">Thi ngay</a>
								</div>
							</div>
						</div>		
						<div class="col-md-4">
							<div class="card">
								<img src="images/su.png" class="card-img-top">
								<div class="card-body">
									<h4 class="card-title">MÔN LỊCH SỬ</h4>
									<p class="card-text">Bộ đề thi môn lịch sử năm 2019</p>
									<a href="index.php" class="btn btn-outline-secondary">Thi ngay</a>
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