<?php
	include('config.php');
	$id=$_GET['id'];
 
	$userName = $_POST['user_name'];
	$u_name = $_POST['u_name'];
	$pass = $_POST['u_pass'];
	$email = $_POST['user_email'];
	$role = $_POST['role'];

    $sql="UPDATE users SET userID='$id', userName='$userName', u_name='$u_name', pass='$pass', email='$email', u_role='$role'
     WHERE userID='$id'";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('Success!')</script>";
    header('location:../../pages/users.php');
} else {
    echo "ERROR: Unsuccessful $sql. "
        .mysqli_error($con);
}
    // Close conection
    mysqli_close($con);
?>