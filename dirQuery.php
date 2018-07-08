<?php
include "db.php";
$did=$_POST['did'];
$dname=$_REQUEST['dname'];
$sql="update direction set dname='$dname' where did=$did";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}