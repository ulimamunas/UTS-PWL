<?php
include "connection.php";
$id = $_GET['id'];
if(hapusAkun($id)>0){
    header("location:kelolauser.php");
}
?>