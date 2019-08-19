<?php
	require('connect.php'); 							
	$query = "SELECT * FROM users";		
	$result = mysqli_query ($conn, $query);

    if ($result) {
    	echo '<table class="table">
					  <thead class="thead-dark">
					    <tr>
					    	<th scope="col">Id</th>
					      	<th scope="col">Tên</th>
					      	<th scope="col">Email</th>
					      	<th scope="col">Ngày đăng ký</th>
					      	<th scope="col">Tùy chỉnh</th>
					    </tr>
					  </thead>';
    	while ($row=mysqli_fetch_assoc($result)) {
    		echo '<tbody>
					    <tr><td>'.$row['userid'].'</td>
					      <td>'.$row['first_name'].'&nbsp'.$row['last_name'].'</td>
					      <td>'.$row['email'].'</td>
					      <td>'.$row['registration_date'].'</td>
					      <td>
					         <a href =del-user.php?del='.$row['userid'].'><button type="button" class="btn btn-outline-warning" style="background-color:red !important ;">Delete</button></a>
					         <a href =edit-user.php?edit='.$row['userid'].'><button type="button" class="btn btn-outline-warning" style="background-color:yellow !important ;">Edit</button></a></td>
					    </tr>
				</tbody>';
    	}
    	echo '</table>';
    	mysqli_free_result($result);
    	# code...
    }
    
	
?>