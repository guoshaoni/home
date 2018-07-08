<?php
include "db.php";
$cname=$_REQUEST['cname'];
$did=$_REQUEST['did'];
$sql="insert into classes (did,cname) values ($did,'$cname')";
$data=$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}