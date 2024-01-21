<?php
include("config.php");

$id=$_GET["id"];
$sql="SELECT * from client_case WHERE caseID='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!--   popup window (modify case records)   -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">

  <body class="g-sidenav-show bg-gray-100">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-1">
              <table class="table align-items-center mb-0 ">
                <thead>
                  <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">case
                      name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">case
                      type</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">client
                      name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">client
                      email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">staff in
                      charge</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">judge
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">date
                      created</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">document
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <form id="editCaseForm" action="update_case.php?id=<?php echo $id?>" method="post"
                    enctype="multipart/form-data">
                    <tr>
                      <td class="text-center"><input type="text" name="case_name" id="caseName"
                          value="<?php echo($row['caseName']) ?>" required></td>
                      <td class="text-center"><input type="text" name="case_type" id="caseType"
                          value="<?php echo($row['caseType']) ?>" required></td>
                      <td class="text-center"><input type="text" name="client_name" id="clientName"
                          value="<?php echo($row['clientName']) ?>" required></td>
                      <td class="text-center"><input type="text" name="client_email" id="clientEmail"
                          value="<?php echo($row['client_email']) ?>" required></td>
                      <td class="text-center"><input type="text" name="staff" id="staff"
                          value="<?php echo($row['staff']) ?>" required></td>
                      <td class="text-center"><input type="text" name="judge" id="judge"
                          value="<?php echo($row['judge']) ?>" required></td>
                      <td class="text-center"><input type="date" name="date_created" id="dateCreated"
                          value="<?php echo($row['date_created']) ?>" required></td>
                      <td class="text-center"><select name="status" id="status" required>
                          <option value="Ongoing">Ongoing</option>
                          <option value="Completed">Completed</option>
                        </select></td>
                      <td class="text-center"><input type="file" name="doc_name" id="doc_name"
                          value="<?php echo($row['doc_name']) ?>" accept=".pdf, .docx, .xlsx, .jpeg"
                          value="<?php echo($row['doc_name']) ?>" required></td>
                      <td class="text-center"><input type="submit" value="Update"></td>
                    </tr>
                  </form>
                </tbody>
              </table>
              <br>
            </div>
          </div>
        </div>
      </div>
      <br>
      <a href="../../pages/case.php">Go back</a>
    </div>
  </body>
</main>