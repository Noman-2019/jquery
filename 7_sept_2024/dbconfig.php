<?php 
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("DATABASE","jquery_crud");


$db=new mysqli();
@$db->connect(HOST,USER,PASSWORD);

@$db->select_db(DATABASE);

if ($db->connect_errno) {
    echo $db->connect_error;
    exit();
}
echo $db->error;





?>