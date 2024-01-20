<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet"/>
<?php
    include("config.php");
    // Taking all values from the form data(input)
    $staff_name =  $_REQUEST['staff_name'];
    $description = $_REQUEST['description'];
    $date_created = $_REQUEST['date_created'];
    $due_date = $_REQUEST['due_date'];
    $status =  $_REQUEST['status'];

    $sql = "INSERT INTO tasks  VALUES 
                ('','$staff_name','$description','$date_created','$due_date','$status')";

    if(mysqli_query($con, $sql)){
        echo "<script>alert('Success!')</script>"; 
        header( "refresh:0.2; url=../../pages/tasks.php");
    } else{
        echo "ERROR: Unsuccessful $sql. "
            . mysqli_error($con);
    }
    
    // Close conection
    mysqli_close($con);
?>