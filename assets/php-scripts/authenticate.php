<?php
session_start();
// Change this to your connection info.
include("config.php");

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['userName'], $_POST['pass']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// hashed password
$pass_hash=password_hash($_POST['pass'], PASSWORD_BCRYPT, array('cost'=>12));

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT userID, pass, u_name, u_role FROM users WHERE userName = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['userName']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userID, $pass, $u_name, $u_role);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['pass'], $pass_hash)) {
            // Verification success! User has logged-in!
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $u_name;
            $_SESSION['id'] = $userID;
            $_SESSION['u_role'] = $u_role;

            // Redirect based on user level
            if ($u_role == 'Admin') {
                //session_regenerate_id();
                header('Location: ../../pages/dashboard_admin.php');
            } elseif ($u_role == 'Staff') {
                // session_regenerate_id();
                header('Location: ../../pages/dashboard_staff.php');
            } else {
                // session_regenerate_id();
                // Handle other user levels or provide a default redirection
                header('Location: ../../pages/sign-in.php');} 
            }
            else {
            // Incorrect password
            echo 'Incorrect password! <br>';
            //echo($pass_hash=password_hash($_POST['pass'], PASSWORD_BCRYPT, array('cost'=>12)));
        }
    } else {
        // Incorrect username
        echo 'Incorrect username! ';
    }

	$stmt->close();
}
else {
    // Handle database error
    echo 'Database error';}
?>