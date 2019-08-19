<?php
	require('connect.php'); 							
	$query = "SELECT * FROM testquiz";		
	$result = mysqli_query ($conn, $query);

    if ($result) {
    	echo '<table class="table">
					  <thead class="thead-dark">
					    <tr>
					    	<th scope="col">User Name</th>
					      	<th scope="col">Email</th>
					      	<th scope="col">Điểm</th>
					      	
					    </tr>
					  </thead>';
    	while ($row=mysqli_fetch_assoc($result)) {
    		echo '<tbody>
					    <tr><td>'.$row['username'].'</td>
					      <td>'.$row['email'].'</td>
					      <td>'.$row['sp'].'</td>
					    </tr>
				</tbody>';
    	}
    	echo '</table>';
    	mysqli_free_result($result);
    	# code...
    }
    
	
?>