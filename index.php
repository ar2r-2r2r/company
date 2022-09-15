<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Redactor</title>
</head>
<body>
    
    <?php
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
    $db=new Database;
    $result=$db->query("SELECT * FROM `employer`");
    foreach($result as $row=>$value){
        echo $value['id']."=>".$value['firstName']."<br>";
    }
    
    ?>
    <form class="form_add" action="add.php" method="post">
        Add info about new employee<br>
        Input First name <input type="text" name="add_fname"><br>
        Input Last name <input type="text" name="add_lname" ><br>
        Input Date of Birth <input type="date" name="add_dob" ><br>
        Salary <input type="text" name="add_salary" ><br>
        <button>Submit</button>
    </form>


</body>
</html>