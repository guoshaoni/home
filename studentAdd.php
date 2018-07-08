<?php
include "db.php";
$mname=$_REQUEST['mname'];
$cid=$_REQUEST['cid'];
$sql="insert into student (cid,mname,mpass) values ($cid,'$mname',md5('123456'))";
$data=$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}