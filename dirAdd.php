<?php
include "db.php";
$dname=$_REQUEST['dname'];
$sql="insert into direction (dname) values ('$dname')";
$data=$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}