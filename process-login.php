<?php
	                    							require('connect.php');
	                    							if (isset($_POST['submit'])) {
	                    								$email = $_POST['email'];
	                    								$password = $_POST['password'];
	                    								$hash_pass = password_hash($password, PASSWORD_DEFAULT);
	                    								$sql = "SELECT * FROM users WHERE email='$email' limit 1";
	                    								$query = mysqli_query($conn,$sql);
	                    								$num = 	mysqli_num_rows($query);
	                    								if ($num != 0) {
	                    									
	                    									$row = mysqli_fetch_array($query);

	                    									if (password_verify($password,$row['password'])) {
	                    										
	                    										if ($row['status']==1) {
	                    											
	                    										
			                    									if ($row['user_level']==1) {
			                    										
			                    										header('location:admin-page.php?user='.$row['userid'].'');
			                    										# code...

			                    									}else{
			                    										header('location:members-page.php?user='.$row['userid'].'');
			                    									}
			                    								}else{echo "<script> alert('Vui lòng xác nhận Email kể kích hoạt tài khoản !')</script>";}
	                    									}
															
	                    								}else {
	                    									
															echo "<script> alert('Tên tài khoản hoặc mật khẩu không đúng !')</script>";
	                    									# code...
	                    								}
	                    								# code...
	                    								}
	                    							?>