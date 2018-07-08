<?php
include "db.php";
$pid=$_REQUEST['pid'];
$sql="delete from pager where pid=$pid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}