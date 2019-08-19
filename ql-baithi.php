<?php
	require('connect.php'); 							
	$query = "SELECT * FROM baithi";		
	$result = mysqli_query ($conn, $query);

    if ($result) {
    	echo '<table class="table">
					  <thead class="thead-dark">
					    <tr>
					    	<th scope="col">Id</th>
					      	<th scope="col">Subject</th>
					      	<th scope="col">Link</th>
					      	<th scope="col">Tùy chỉnh</th>
					    </tr>
					  </thead>';
    	while ($row=mysqli_fetch_assoc($result)) {
    		echo '<tbody>
					    <tr>
					    <td>'.$row['idbaithi'].'</td>
					      <td>'.$row['subject'].'</td>
					      <td>'.$row['link'].'</td>
					      <td>
					         <a href =del-baithi.php?del='.$row['idbaithi'].'><button type="button" class="btn btn-outline-warning" style="background-color:red !important ;">Delete</button></a>
					         <a href =edit-baithi.php?edit='.$row['idbaithi'].'><button type="button" class="btn btn-outline-warning" style="background-color:yellow !important ;">Edit</button></a></td>
					    </tr>
				</tbody>';
    	}
    	echo '</table>';
    }