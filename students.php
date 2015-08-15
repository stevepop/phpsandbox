<?php

$DB_host = "localhost";
$DB_user = "dev";
$DB_pass = "devpass";
$DB_name = "sandbox";

try
{
    $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
    $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "ERROR : ".$e->getMessage();
}

// If form was submitted, process posted data and insert student score
if (isset($_POST['add-score']) and $_POST['add-score'] == 'Save') {
    addStudentMarks($_POST);
}

// Display the scores
function getStudentsData()
{
    global $DBcon;

    if ($DBcon) {
        $stmt = $DBcon->prepare("SELECT * FROM students");
        $stmt->execute();
        return $stmt;
    }
}

function addStudentMarks($posted)
{
    global $DBcon;

    $total = $posted['maths'] + $posted['tech'] + $posted['physics'];

    if ($DBcon) {
        $sql = "insert into students
              (student_id, `name`, maths, tech, physics, total)
              VALUES (:student_id, :student_name, :maths, :tech, :physics, :total)";
        $stmt = $DBcon->prepare($sql);
        $stmt->execute(array(
            ':student_name' => $posted['name'],
            ':student_id' => $posted['student_id'],
            ':maths' => $posted['maths'],
            ':tech' => $posted['tech'],
            ':physics' => $posted['physics'],
            ':total' => $total
        ));
    }

    // Score has been inserted, let's display the table
    header("location: index.php");
    exit();

}
