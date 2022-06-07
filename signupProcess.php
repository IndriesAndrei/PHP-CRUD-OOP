<?php

if (isset($_POST['save_student'])) {
    require_once('signupConfig.php');

    $st = new signupConfig();
    $st->setName($_POST['name']);
    $st->setEmail($_POST['email']);
    $st->setPhone($_POST['phone']);
    $st->setCourse($_POST['course']);

    $st->insertData();

    echo "<script>alert('Data saved successfully!'); document.location='index.php'</script>";

}