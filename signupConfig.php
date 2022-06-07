<?php

// connect to database
require_once('database.php');

class signupConfig {
    private $id;
    private $name;
    private $email;
    private $phone;
    private $course;
    protected $dbCnx;

    public function __construct($id=0, $name='', $email='', $phone='', $course='')
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->course = $course;

        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    // setter (initialize variables so we can use them)
    public function setId($id) {
        $this->id = $id;
    }

    // getter
    public function getId() {
        return $this->id;
    }

    public function setName($name) {
       $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone($phone) {
       return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function insertData() {
        // try to insert data in the database
        try {
            $stmt = $this->dbCnx->prepare("INSERT INTO students(name, email, phone, course) VALUES (?, ?, ?, ?) ");
            $stmt->execute([$this->name, $this->email, $this->phone, $this->course]);
            echo "<script>alert('Data saved successfully!'); document.location='index.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // get data from the Database
    public function fetchAll() {
        try {
            $stmt = $this->dbCnx->prepare("SELECT * FROM students");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // fetch single data from DB
    public function fetchOne() {
        try {
            $stmt = $this->dbCnx->prepare("SELECT FROM students WHERE id = ?");
            $stmt->execute([$this->id]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // update data in DB
    public function update() {
        try {
            $stmt = $this->dbCnx->prepare("UPDATE students SET name = ?, email = ?, phone = ?, course = ? WHERE id= ?");
            $stmt->execute([$this->name, $this->email, $this->phone, $this->course, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // delete data from DB
    public function delete() {
        try {
            $stmt = $this->dbCnx->prepare("DELETE FROM students WHERE id = ?");
            $stmt->execute([$this->id]);
            return $stmt->fetchAll();
            echo "<script>alert('Data deleted successfully!'); document.location='index.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}