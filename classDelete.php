<?php
include "db.php";
$cid=$_REQUEST['cid'];
$sql="delete from classes where cid=$cid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}