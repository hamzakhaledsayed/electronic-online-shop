<?php

include_once "Database.php";
$db=new Database();
ob_start();
session_start();

$msg=$db->RunDML("delete from customer where customerid='".$_SESSION["id"]."'");
 
 
session_destroy();
    echo $msg;
 
?>