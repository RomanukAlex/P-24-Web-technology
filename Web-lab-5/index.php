<?php

require_once "Student.php";

echo <<< HEREDOC
<h3>Create a Student</h3>
<form action="index.php" method="get">
    <input name="name" type="text" required="required"> Name<br> 
    <input name="surname" type="text" required="required"> Surname<br> 
    <input name="faculty" type="text" required="required"> Faculty<br> 
    <input name="courseNumber" type="number" required="required"> Course<br> 
    <input name="groupNumber" type="number" required="required"> Group<br> 
    <input name="age" type="number" required="required"> Age<br>
    <input name="sex" type="text" required="required"> Sex<br><br> 
    <button type="submit">Create Student obj</button>
</form>
HEREDOC;

if (isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['faculty']) && isset($_GET['courseNumber']) &&
    isset($_GET['groupNumber']) && isset($_GET['age']) && isset($_GET['sex'])){
    $student = new Student($_GET['age'], $_GET['sex']);
    $student->setName($_GET['name']);
    $student->setSurname($_GET['surname']);
    $student->setFaculty($_GET['faculty']);
    $student->setCourseNumber($_GET['courseNumber']);
    $student->setGroupNumber($_GET['groupNumber']);

    $student->printObj();

}
