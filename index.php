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
ini_set('display_errors', 0); //без него Warning: Undefined array key "orderby" in line 14,18,...
$order = "asc";
if ($_GET['orderby'] == "id" && $_GET['order'] == "asc") {
    $order = "desc";
}
if ($_GET['orderby'] == "firstName" && $_GET['order'] == "asc") {
    $order = "desc";
}
if ($_GET['orderby'] == "lastname" && $_GET['order'] == "asc") {
    $order = "desc";
}
if ($_GET['orderby'] == "dob" && $_GET['order'] == "asc") {
    $order = "desc";
}
if ($_GET['orderby'] == "salary" && $_GET['order'] == "asc") {
    $order = "desc";
}

if ($_GET['orderby']) {
    $orderby = "order by " . $_GET['orderby'];
}
if ($_GET['order']) {
    $sort_order = $_GET['order'];
}

echo "<table>";
echo "<tr>";
echo "          <th><a href='?orderby=id&order=" . $order . "'>id</a></th>";
echo "          <th><a href='?orderby=firstName&order=" . $order . "'>first name</a></th>";
echo "          <th><a href='?orderby=lastName&order=" . $order . "'>last name</a></th>";
echo "          <th><a href='?orderby=dob&order=" . $order . "'>date of birth</a></th>";
echo "          <th><a href='?orderby=salary&order=" . $order . "'>salary</a></th>";
echo "      </tr>";

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
$db = new Database;
$result = $db->query("SELECT * FROM `employer` " . $orderby . " " . $sort_order . "");
foreach ($result as $row => $value) {
    ?><tr>

        <td><?=$value['id']?></td>
        <td><?=$value['firstName']?></td>
        <td><?=$value['lastName']?></td>
        <td><?=$value['dob']?></td>
        <td><?=$value['salary']?></td>
        </tr>
        <?php
}

?>
    </table>
    <form class="form_add" action="add.php" method="post">
        <span class="span_add" id="info" >Add info about employer to database</span><br>
        <span class="span_add">Enter first name</span> <input type="text" required name="add_fname"><br>
        <span class="span_add">Enter last name</span> <input type="text" required name="add_lname" ><br>
        <span class="span_add">Enter date of birth</span> <input type="date" min="1800-01-01" max="2022-10-01"
        required name="add_dob" ><br>
        <span class="span_add">Enter salary</span> <input type="text" required name="add_salary" ><br>
        <div class="btn"><button type="submit">Submit</button></div>
    </form>

    <form class="form_del" action="del.php" method="post">
        <span class="span_dell" id="info" >Delete info about employer</span><br>
        <span class="span_dell">Enter first name</span> <input type="text" required name="del_fname"><br>
        <span class="span_dell">Enter last name</span> <input type="text" required name="del_lname" ><br>
        <span class="span_dell">Enter date of birth</span> <input type="date" min="1800-01-01" max="2022-10-01"
         required  name="del_dob" ><br>
        <span class="span_dell">Enter salary</span> <input type="text" required name="del_salary" ><br>
        <div class="btn"><button type="submit">Submit</button></div>
    </form>
    <form class="form_red" action="red.php" method="post">
        <span class="span_dell" id="info" >Redact info about employer</span><br>
        <span class="span_dell">Enter first name</span> <input type="text" required name="fname"><br>
        <span class="span_dell">Enter new first name</span> <input type="text" required name="red_fname"><br>
        <span class="span_dell">Enter last name</span> <input type="text" required  name="lname" ><br>
        <span class="span_dell">Enter new last name</span> <input type="text" required name="red_lname" ><br>
        <span class="span_dell">Enter date of birth</span> <input type="date" min="1800-01-01" max="2022-10-01"
         required name="dob" ><br>
        <span class="span_dell">Enter new date of birth</span> <input type="date" min="1800-01-01" max="2022-10-01"
         required  name="red_dob" ><br>
        <span class="span_dell">Enter salary</span> <input type="text" required  name="salary" ><br>
        <span class="span_dell">Enter new salary</span> <input type="text" required  name="red_salary" ><br>
        <div class="btn"><button type="submit">Submit</button></div>
    </form>
</body>
</html>