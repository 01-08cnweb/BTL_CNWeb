<?php
include 'connect.php';
 
// check first if record exists

    



$sql = "SELECT userid FROM users WHERE verification_code = '".$_GET['code']."' and status = '0'";
$result = mysqli_query($conn, $sql);
 
if(mysqli_num_rows($result)>0){
 
    // update the 'status' field, from 0 to 1 (unverified to verified)
      $sql = "UPDATE users
                set status = '1'
                where verification_code = '".$_GET['code']."'";
    $result = mysqli_query($conn,$sql);
 
    if($result){
        // tell the user
        echo "<div>Your email is valid, thanks!. You may now login.</div>";
    }else{
        echo "<div>Unable to update verification code.</div>";
        //print_r($stmt->errorInfo());
    }
 
}else{
    // tell the user he should not be in this page
    echo "<div>We can't find your verification code.</div>";
}
?>