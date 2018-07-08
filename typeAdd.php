<?php
include "db.php";
$tname=$_REQUEST['tname'];
$sql="insert into testtype (tname) values ('$tname')";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}