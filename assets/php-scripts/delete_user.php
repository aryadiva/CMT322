<?php
include('config.php');
	$id=$_GET['id'];
    $sql_="DELETE from users WHERE userID='$id'";
	mysqli_query($con,$sql_);
	header('location:../../pages/users.php');
?>