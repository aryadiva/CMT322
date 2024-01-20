<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet"/>
<?php
include("config.php");

// Taking all values from the form data(input)
$case_name = $_REQUEST['case_name'];
$case_type = $_REQUEST['case_type'];
$client_name = $_REQUEST['client_name'];
$client_email = $_REQUEST['client_email'];
$staff = $_REQUEST['staff'];
$judge = $_REQUEST['judge'];
$date_created = $_REQUEST['date_created'];
$status = $_REQUEST['status'];
//$doc_name = $_REQUEST['doc_name'];

$fileName = basename($_FILES["doc_name"]["name"]);
$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
// Allow certain file formats 
$allowTypes = array('pdf', 'docx');
if (in_array($fileType, $allowTypes)) {
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO client_case  VALUES 
                ('', '$case_name', '$case_type', '$client_name', '$client_email', '$staff', '$judge', '$date_created', '$status', '$fileName')
        ";

        if (mysqli_query($con, $sql)) {
                echo "<script>alert('Success!')</script>";
                include_once("fileUpload.php");
                header("refresh:0.2; url=../../pages/case.php");
        } else {
                echo "ERROR: Unsuccessful $sql. "
                        .mysqli_error($con);
        }
}
else{
        echo "<script>alert('Error Inserting data!')</script>";
}

// Close conection
mysqli_close($con);
?>
