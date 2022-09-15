<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$fname=$_POST['del_fname'];
$lname=$_POST['del_lname'];
$dob=$_POST['del_dob'];
$salary=settype($_POST['del_salary'], 'integer');
$db=new Database;
$db->execute("DELETE FROM `employer` WHERE firstName='$fname' AND `lastName`='$lname' AND `dob`='$dob' AND `salary`='$salary'");
header('Location: /');         //переход на главную
