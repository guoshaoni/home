<?php
include "db.php";

$ids=$_REQUEST['ids'];
$pid=$_REQUEST['pid'];
for($i=0;$i<count($ids);$i++){
    $sql="insert into paperextra (tid,pid) values ($ids[$i],$pid)";
    $mysql->query($sql);
}
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}