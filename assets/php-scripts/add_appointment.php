<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
<?php
include("config.php");
        // Taking all values from the form data(input)
        $caseName =  $_REQUEST['clientName'];
        $clientName = $_REQUEST['clientName'];
        $clientEmail = $_REQUEST['clientEmail'];
        $staff =  $_REQUEST['staff'];
        $date =  $_REQUEST['date'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users VALUES 
                ('','$caseName','$clientName','$clientEmail','$staff','$date')";
         
        if(mysqli_query($con, $sql)){
            echo "<script>alert('Success!')</script>"; 
            header( "refresh:0.2; url=../../pages/appointment.php");
        } else{
            echo "ERROR: Unsuccessful $sql. "
                . mysqli_error($con);
        }
         
        // Close conection
        mysqli_close($con);
?>