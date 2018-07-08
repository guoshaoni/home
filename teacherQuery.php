<?php
include "db.php";
$tid=$_POST['tid'];
$cid=$_POST['cid'];
$did=$_POST['did'];
$mname=$_REQUEST['mname'];
$sql="update teacher set mname='$mname',cid=$cid,did=$did where tid=$tid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}