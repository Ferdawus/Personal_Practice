<?php 
use function App\Guardians\Guardian\greet;
use function App\Students\Cmt\getStudents;

require_once('./Guardians/Guardian.php');
require_once('./Students/Cmt.php');
require_once('./Students/Emt.php');
require_once('./Teachers/Teacher.php');

    echo greet().PHP_EOL;
    echo getStudents().PHP_EOL;
?>