<?php include ('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12 mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Add Student</h4>
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </div>
            <div class="card-body">
                <form action="signupProcess.php" method="POST">
                    <div class="mb-3">
                        <label for="name">Student Name:</label>
                        <input type="text" id="name" name="name" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="email">Student Email:</label>
                        <input type="email" id="email" name="email" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="phone">Student Phone:</label>
                        <input type="text" id="phone" name="phone" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <label for="course">Student Course:</label>
                        <input type="text" id="course" name="course" class="form-control" />
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
