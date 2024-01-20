<?php
include("config.php");

$id=$_GET["id"];
$sql="SELECT * from users WHERE userID='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<div class="card mb-4">
    <!-- put add button here -->
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive">
            <table class="table align-items-center mb-0 ">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            username</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            password</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">role
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <form action="../assets/php-scripts/add_user.php" method="post">
                        <tr>
                            <td class="text-center"><input type="text" name="username" id="userName"
                                    value="<?php echo($row['userName']) ?>" required></td>
                            <td class="text-center"><input type="text" name="u_name" id="name"
                                    value="<?php echo($row['u_name']) ?>" required></td>
                            <td class="text-center"><input type="password" name="u_pass" id="pass"
                                    value="<?php echo($row['pass']) ?>" required></td>
                            <td class="text-center"><input type="email" name="user_email" id="email"
                                    value="<?php echo($row['email']) ?>" required></td>
                            <td class="text-center"><select name="role" id="role" required>
                                <option value='Admin'>Admin</option>
                                <option value='Staff'>Staff</option>
                            </td>
                            <td class="text-center"><input type="submit" value="Add"></td>
                        </tr>
                    </form>

                </tbody>
            </table>
        </div>
    </div>
</div><br>
<div>
    <a href="../../pages/users.php">Go back</a>
</div>