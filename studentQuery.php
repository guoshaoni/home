<?php
include "db.php";
$uid=$_POST['uid'];
$cid=$_POST['cid'];
$mname=$_REQUEST['mname'];
$sql="update student set mname='$mname',cid=$cid where uid=$uid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}