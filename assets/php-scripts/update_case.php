<?php
	include('config.php');
	$id=$_GET['id'];
 
	$case_name = $_POST['case_name'];
	$case_type = $_POST['case_type'];
	$client_name = $_POST['client_name'];
	$client_email = $_POST['client_email'];
	$staff = $_POST['staff'];
	$judge = $_POST['judge'];
	$date_created = $_POST['date_created'];
	$status = $_POST['status'];

    $fileName = basename($_FILES["doc_name"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowTypes = array('pdf', 'docx');
    if (in_array($fileType, $allowTypes)) {
        // Performing insert query execution
        // here our table name is college
        $sql="UPDATE client_case SET caseID='$id', caseName='$case_name', caseType='$case_type', clientName='$client_name', client_email='$client_email',
                staff='$staff', judge='$judge', date_created='$date_created', status='$status', doc_name='$fileName' WHERE caseID='$id'";
        // $sql="UPDATE 'client_case' SET caseID='$id' caseName='$case_name', caseType='$case_type', clientName='$client_name', client_email='$client_email',
        //     staff='$staff', judge='$judge', date_created='$date_created', 'status='$status', 'doc_name='$fileName' WHERE caseID='$id'";

        if (mysqli_query($con, $sql)) {
            echo "<script>alert('Success!')</script>";
            include_once("fileUpload.php");
            header('location:../../pages/case.php');
        } else {
            echo "ERROR: Unsuccessful $sql. "
                .mysqli_error($con);
        }
    } else {
        echo "<script>alert('Error Inserting data!')</script>";
    }

    // Close conection
    mysqli_close($con);
?>