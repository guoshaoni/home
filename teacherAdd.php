<?php
include "db.php";
$mname=$_REQUEST['mname'];
$cid=$_REQUEST['cid'];
$did=$_REQUEST['did'];
$sql="insert into teacher (cid,did,mname,mpass) values ($cid,$did,'$mname',md5('123456'))";
$data=$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}