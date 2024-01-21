<?php
include('config.php');
	$id=$_GET['id'];
    $sql_="DELETE from tasks WHERE taskID='$id'";
	mysqli_query($con,$sql_);
	header('location:../../pages/tasks.php');
?>