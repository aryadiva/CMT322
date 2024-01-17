<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
<?php
include("config.php");
        // Taking all values from the form data(input)
        $username =  $_REQUEST['username'];
        $u_name = $_REQUEST['u_name'];
        $u_pass = $_REQUEST['u_pass'];
        $user_email =  $_REQUEST['user_email'];
        $role =  $_REQUEST['role'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO client_case  VALUES 
                ('','$user_name','$u_name','$u_name','$user_email','$role')";
         
        if(mysqli_query($con, $sql)){
            echo "<script>alert('Success!')</script>"; 
            header( "refresh:0.2; url=../../pages/users.php");
        } else{
            echo "ERROR: Unsuccessful $sql. "
                . mysqli_error($con);
        }
         
        // Close conection
        mysqli_close($con);
?>