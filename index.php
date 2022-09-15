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
    <table>
        <tr>
            <th>id</th>
            <th>first name</th>
            <th>last name</th>
            <th>date of birth</th>
            <th>salary</th>
        </tr>
    <?php
    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
    $db=new Database;
    $result=$db->query("SELECT * FROM `employer`");
    foreach($result as $row=>$value){
        ?><tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['firstName'] ?></td>
        <td><?= $value['lastName'] ?></td>
        <td><?= $value['dob'] ?></td>
        <td><?= $value['salary'] ?></td>
        </tr>
        <?php 
    }
    
    ?>
    </table>
   
    <form class="form_add" action="add.php" method="post">
        <span class="span_add" id="info" >Add info about employer to database</span><br>
        <span class="span_add">Enter first name</span> <input type="text" name="add_fname"><br>
        <span class="span_add">Enter last name</span> <input type="text" name="add_lname" ><br>
        <span class="span_add">Enter date of birth</span> <input type="date" name="add_dob" ><br>
        <span class="span_add">Enter salary</span> <input type="text" name="add_salary" ><br>
        <div class="btn"><button type="submit">Submit</button></div>
    </form>

    <form class="form_del" action="del.php" method="post">
        <span class="span_dell" id="info" >Delete info about employer</span><br>
        <span class="span_dell">Enter first name</span> <input type="text" name="del_fname"><br>
        <span class="span_dell">Enter last name</span> <input type="text" name="del_lname" ><br>
        <span class="span_dell">Enter date of birth</span> <input type="date" name="del_dob" ><br>
        <span class="span_dell">Enter salary</span> <input type="text" name="del_salary" ><br>
        <div class="btn"><button type="submit">Submit</button></div>
    </form>
</body>
</html>