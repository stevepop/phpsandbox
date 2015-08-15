<?php
include 'students.php';
$students = getStudentsData();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Student Scores</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>

<div class="students-scores">
    <h1 class="heading">Student Scores</h1>

    <div class="add-record">
        <a href="addscore.php">Add New</a>
    </div>
    <table class="table-style-one">
        <thead>
        <tr>
            <th>ID</th>
            <th>Student</th>
            <th>Maths</th>
            <th>Tech</th>
            <th>Physics</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($students->rowCount() > 0): ?>
            <?php while ($row = $students->FETCH(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row['student_id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['maths'] ?></td>
                    <td><?php echo $row['tech'] ?></td>
                    <td><?php echo $row['physics'] ?></td>
                    <td><?php echo $row['total'] ?></td>
                </tr>
            <?php endwhile; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>

</body>

</html>