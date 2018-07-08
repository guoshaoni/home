<?php
include "db.php";
$sname=$_REQUEST['sname'];
$did=$_REQUEST['did'];
$sql="insert into stage (did,sname) values ($did,'$sname')";
$data=$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}