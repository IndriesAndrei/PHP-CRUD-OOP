<?php 
    include ('includes/header.php'); 
    require('signupConfig.php');
    $data = new signupConfig();
    $id = $_GET['id']; 
    $data->setId($id);

    if (isset($_POST['edit_student'])) {
        $data->setName($_POST['name']);
        $data->setEmail($_POST['email']);
        $data->setPhone($_POST['phone']);
        $data->setCourse($_POST['course']);

        echo $data->update();
        echo "<script>alert('Data updated successfully!'); document.location='index.php'</script>";
    }

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
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name">Student Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?= $val['name']; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="email">Student Email:</label>
                        <input type="email" id="email" name="email" class="form-control" value="<?= $val['email']; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="phone">Student Phone:</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="<?= $val['phone']; ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="course">Student Course:</label>
                        <input type="text" id="course" name="course" class="form-control" value="<?= $val['course']; ?>" />
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="edit_student" class="btn btn-primary">Save Student</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
