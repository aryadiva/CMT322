<?php
	include('config.php');
	$id=$_GET['id'];
 
	$staff_name = $_POST['staff_name'];
	$description = $_POST['description'];
	$date_created = $_POST['date_created'];
	$due_date = $_POST['due_date'];
	$status = $_POST['status'];

    $sql="UPDATE tasks SET taskID='$id', staffName='$staff_name', description ='$description', dateCreated='$date_created', 
    dueDate='$due_date', status='$status'
     WHERE taskID='$id'";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('Success!')</script>";
    header('location:../../pages/tasks.php');
} else {
    echo "ERROR: Unsuccessful $sql. "
        .mysqli_error($con);
}
    // Close conection
    mysqli_close($con);
?>