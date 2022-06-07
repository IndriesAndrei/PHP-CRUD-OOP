<?php 
  require_once('signupConfig.php');
  include('includes/header.php'); 

  $data = new signupConfig();
  $allStudents = $data->fetchAll();

?>

<div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>Students CRUD APP
                  <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
                </h4>
              </div>
              <div class="card-body">
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Student Phone</th>
                            <th>Student Course</th>
                            <th>Action</th>
                          </tr>

                          <?php foreach($allStudents as $key => $student) {

                            }
                          ?>
                      </thead>
                      <tbody>
                        <?php 
                            foreach($allStudents as $key => $student) {
                              ?>
                                <tr>
                                  <td><?= $student['id']; ?></td>
                                  <td><?= $student['name']; ?></td>
                                  <td><?= $student['email']; ?></td>
                                  <td><?= $student['phone']; ?></td>
                                  <td><?= $student['course']; ?></td>
                                  <td>
                                    <a href="student-view.php?id=<?= $student['id']; ?>"  class="btn btn-info btn-sm">View</a>
                                    <a href="student-edit.php?id=<?= $student['id']; ?>"  class="btn btn-success btn-sm">Edit</a>
                                    <form action="delete.php?id=<?= $student['id']; ?>&req=delete" method="POST" class="d-inline">
                                      <button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                  </td>
                                </tr>
                              <?php
                            } 
                        ?>
                       
                      </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php include('includes/footer.php'); ?>
