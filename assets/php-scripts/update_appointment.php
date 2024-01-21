<?php
	include('config.php');
	$id=$_GET['id'];
 
	$case_name = $_POST['caseName'];
	$client_name = $_POST['clientName'];
	$client_email = $_POST['clientEmail'];
	$staff = $_POST['staff'];
	$date = $_POST['date'];

    $sql="UPDATE appointment SET appointmentID='$id', caseName='$case_name', clientName ='$client_name', clientEmail='$client_email', 
    staff='$staff', date='$date' WHERE appointmentID='$id'";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('Success!')</script>";
    header('location:../../pages/appointment.php');
} else {
    echo "ERROR: Unsuccessful $sql. "
        .mysqli_error($con);
}
    // Close conection
    mysqli_close($con);
?>