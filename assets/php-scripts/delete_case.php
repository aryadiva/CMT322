<?php
include('config.php');
	$id=$_GET['id'];
    $sql_="DELETE from client_case WHERE caseID='$id'";
	mysqli_query($con,$sql_);
	header('location:../../pages/case.php');
?>