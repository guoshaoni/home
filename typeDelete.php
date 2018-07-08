<?php
include "db.php";
$tid=$_REQUEST['tid'];
$sql="delete from testType where tid=$tid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}