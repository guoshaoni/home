<?php
include "db.php";
$tid=$_POST['tid'];
$tname=$_REQUEST['tname'];
$sql="update testtype set tname='$tname' where tid=$tid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}