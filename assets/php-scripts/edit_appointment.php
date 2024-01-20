<?php
include("config.php");

$id=$_GET["id"];
$sql="SELECT * from appointment WHERE appointmentID='$id'";
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
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">case
                            name</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            client name</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            client email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            staff in charge</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <form action="../assets/php-scripts/add_appointment.php" method="post">
                        <tr>
                            <td class="text-center"><input type="text" name="caseName" id="caseName" value="<?php echo($row['caseName']) ?>" required></td>
                            <td class="text-center"><input type="text" name="clientName" id="clientName" value="<?php echo($row['clientName']) ?>" required></td>
                            <td class="text-center"><input type="text" name="clientEmail" id="clientEmail" value="<?php echo($row['clientEmail']) ?>" required>
                            </td>
                            <td class="text-center"><input type="text" name="staff" id="staff" value="<?php echo($row['staff']) ?>" required></td>
                            <td class="text-center"><input type="date" name="date" id="date" value="<?php echo($row['date']) ?>" required></td>
                            <td class="text-center"><input type="submit" value="Update"></td>
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