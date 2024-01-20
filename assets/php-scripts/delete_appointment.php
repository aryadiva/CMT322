<?php
include('config.php');
	$id=$_GET['id'];
    $sql_="DELETE from appointment WHERE appointmentID='$id'";
	mysqli_query($con,$sql_);
	header('location:../../pages/appointment.php');
?>