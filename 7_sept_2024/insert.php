<?php
// print_r($_POST);
// $data=$_POST['mydata'];

$serializedata=$_POST['mydata'];
parse_str($serializedata,$data); 


// print_r($result);



$name=$data['name'];
$gender=$data['gender'];
$dob=$data['dob'];
$email=$data['email'];
$phone=$data['phone'];
$address=$data['address'];

require_once "dbconfig.php";
// echo "INSERT INTO students VALUES(NULL,'$name','$gender','$dob','$email','$phone','$address')"; 
$sql="INSERT INTO students VALUES(NULL,'$name','$gender','$dob','$email','$phone','$address')";

$db->query($sql);

if($db->affected_rows){
    echo "successfully inserted";
}else{
    echo "failed";
}





?>