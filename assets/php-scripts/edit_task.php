<?php
include("config.php");

$id=$_GET["id"];
$sql="SELECT * from tasks WHERE staffID='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!--   popup window (modify case records)   -->
<div class="card mb-4">
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-1">
              <table class="table align-items-center mb-0 ">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">staff name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date created</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">due date</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                  </tr>
                </thead>
                <tbody>
                  <form id ="editTaskForm" action="../assets/php-scripts/add_task.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                    <tr>
                      <td class="text-center"><input type="text" name="staff_name" id="staffName" value="<?php echo($row['staffName']) ?>" required></td>
                      <td class="text-center"><input type="text" name="description" id="description" value="<?php echo($row['description']) ?>" required></td>
                      <td class="text-center"><input type="date" name="date_created" id="dateCreated" value="<?php echo($row['dateCreated']) ?>" required></td>
                      <td class="text-center"><input type="date" name="due_date" id="dueDate" value="<?php echo($row['dueDate']) ?>" required></td>
                      <td class="text-center"><select name="status" id="status" value="<?php echo($row['status']) ?>"required>
                          <option value="Ongoing" >Ongoing</option>
                          <option value="Completed" >Completed</option>
                        </select></td>
                      <td class="text-center"><input type="submit" value="Update"></td>
                    </tr>
                  </form>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      <br>
      <a href="../../pages/case.php">Go back</a>
    </div>