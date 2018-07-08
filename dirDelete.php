<?php
include "db.php";
$did=$_REQUEST['did'];
$sql="delete from direction where did=$did";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}