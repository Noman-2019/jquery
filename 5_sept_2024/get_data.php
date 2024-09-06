<?php 


$db=new mysqli("localhost","root","","tablejquery");
// $b=[1=>"city of mosque",2=>"popular for rasmalai",3=>"city of mango"];

// echo $b[$p];
$p=$_GET['id'];


// echo "";

$sql="SELECT * FROM jq WHERE id='$p'";

  $ro=$db->query($sql);
$result=$ro->fetch_assoc();
  
//   echo $result['id'];
//   echo $result['name'];
  echo $result['name']. "is popular for " .$result['details'];

?>

