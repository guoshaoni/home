<?php
include "db.php";
$sid=$_REQUEST['sid'];
$sql="delete from stage where sid=$sid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}