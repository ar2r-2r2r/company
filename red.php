<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$salary=$_POST['salary'];
$red_fname=$_POST['red_fname'];
$red_lname=$_POST['red_lname'];
$red_dob=$_POST['red_dob'];
$red_salary=$_POST['red_salary'];
// $employer=new Employer($fname,$lname,$dob,$salary);
$db=new Database;
$db->execute("UPDATE `employer` SET `firstName`='$red_fname', `lastName`='$red_lname', `dob`='$red_dob', `salary`='$red_salary' WHERE firstName='$fname' AND `lastName`='$lname' AND `dob`='$dob' AND `salary`='$salary'");
header('Location: /');         //переход на главную