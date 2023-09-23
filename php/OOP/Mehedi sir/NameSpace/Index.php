<?php 
    
    require_once('./StudentClass.php');
    require_once('./TeacherClass.php');
    // use students as student;
    use students\StudentClass as student;
    use teachers\StudentClass as teacher;

    $objStudent = new student();
    $objTeacher = new teacher();

    $objStudent->person().PHP_EOL;
    $objTeacher->person().PHP_EOL;



?>