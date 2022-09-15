<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$fname=$_POST['add_fname'];
$lname=$_POST['add_lname'];
$dob=$_POST['add_dob'];
$salary=$_POST['add_salary'];
// $employer=new Employer($fname,$lname,$dob,$salary);
$db=new Database;
$db->execute("INSERT INTO `employer` SET `firstName`='$fname', `lastName`='$lname', `dob`='$dob', `salary`='$salary'");
header('Location: /');         //переход на главную