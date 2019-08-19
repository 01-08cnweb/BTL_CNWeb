<header>
	    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
	    	<div class="container">
				  <a class="navbar-brand" href="#">
				  	<img src="images/logo.jpg">
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="navbar-nav mr-auto">
						<h3>HỆ THỐNG THI ONLINE MIỄN PHÍ</h3>
					</div>
					
					<form class="form-inline my-2 my-lg-0">
					  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					  <button class="btn my-2 my-sm-0" type="submit">Search</button>
					  <a href="logout.php">&nbsp(Đăng xuất)</a>
					  

					</form>

				  </div>
				  <p>&nbsp<?php require("curr-user.php"); ?></p>
			</div>
		</nav>
	</header>