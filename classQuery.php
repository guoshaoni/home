<?php
include "db.php";
$cid=$_POST['cid'];
$did=$_POST['did'];
$cname=$_REQUEST['cname'];
$sql="update classes set cname='$cname',did=$did where cid=$cid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}