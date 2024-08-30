<?php
include "connection.php";
$id = $_GET['id'];
if(hapusProduct($id)>0){
    header("location:kelolaproduct.php");
}
?>