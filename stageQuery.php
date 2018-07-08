<?php
include "db.php";
$sid=$_POST['sid'];
$did=$_POST['did'];
$sname=$_REQUEST['sname'];
$sql="update stage set sname='$sname',did=$did where sid=$sid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}