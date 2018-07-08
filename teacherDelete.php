<?php
include "db.php";
$ids=$_REQUEST['ids'];
$sql="delete from teacher where tid in ($ids)";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}