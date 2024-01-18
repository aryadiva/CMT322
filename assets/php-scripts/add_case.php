<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet"/>
<?php
include("config.php");
        // Taking all 7 values from the form data(input)
        $case_name =  $_REQUEST['case_name'];
        $case_type = $_REQUEST['case_type'];
        $client_name =  $_REQUEST['client_name'];
        $staff =  $_REQUEST['staff'];
        $judge =  $_REQUEST['judge'];
        $date_created =  $_REQUEST['date_created'];
        $status = $_REQUEST['status'];
        $doc_path = $_REQUEST['doc_path'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO client_case  VALUES 
                ('','$case_name','$case_type','$client_name','$staff','$judge','$date_created','$status','$doc_path')";
         
        if(mysqli_query($con, $sql)){
            echo "<script>alert('Success!')</script>"; 
            header( "refresh:0.2; url=../../pages/case.php");
        } else{
            echo "ERROR: Unsuccessful $sql. "
                . mysqli_error($con);
        }
         
        // Close conection
        mysqli_close($con);
?>
