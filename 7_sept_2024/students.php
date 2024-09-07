<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once "dbconfig.php";

$sql=$db->query("SELECT *FROM students");?>

<table border="2">
    <tr>
    <th>id</th>
    <th>name</th>
    <th>gender</th>
    <th>DOB</th>
    <th>email</th>
    <th>phone</th>
    <th>address</th>
</tr>



<?php while($row=$sql->fetch_assoc()){ ?>
<tr>
    <td><?php echo $row['id'] ?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['DOB'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['phone'] ?></td>
<td><?php echo $row['address'] ?></td>

</tr>
<?php  } ?> 

</table>

</body>
</html>





