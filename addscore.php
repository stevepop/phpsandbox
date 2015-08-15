<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Student Scores</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>

<form action="students.php" method="post" class="basic-grey">
    <h1>Add Student Score</h1>
    <label>
        <input id="name" type="text" name="student_id" placeholder="Student's ID"/>
    </label>
    <label>
        <input id="name" type="text" name="name" placeholder="Student's Name"/>
    </label>

    <label>
        <input id="maths" type="text" name="maths" placeholder="Maths"/>
    </label>
    <label>
        <input id="tech" type="text" name="tech" placeholder="Tech"/>
    </label>
    <label>
        <input id="physics" type="text" name="physics" placeholder="Physics"/>
    </label>

    <label>
        <span>&nbsp;</span>
        <input type="submit" name="add-score" class="button" value="Save"/>
    </label>
</form>
</body>
</html>