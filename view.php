<?php 
    include ('includes/header.php'); 
    require('signupConfig.php');
    $data = new signupConfig();
    $id = $_GET['id']; 
    $data->setId($id);

    $data->setName($_POST['name']);
    $data->setEmail($_POST['email']);
    $data->setPhone($_POST['phone']);
    $data->setCourse($_POST['course']);

    $record = $data->fetchOne();
    $val = $record[0];
?>

<div class="row">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Edit Student Data</h4>
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <span>Student Name:</span>
                    <p class="form-control"><?= $val['name']; ?></p>
                </div>

                <div class="mb-3">
                    <span>Student Email:</span>
                    <p class="form-control"><?= $val['email']; ?></p>
                </div>

                <div class="mb-3">
                    <span>Student Phone:</span>
                    <p class="form-control"><?= $val['phone']; ?></p>
                </div>

                <div class="mb-3">
                    <span>Student Course:</span>
                    <p class="form-control"><?= $val['course']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
