<?php
include "db.php";
$tid=$_REQUEST['tid'];
$title=$_REQUEST['title'];
$answer=$_REQUEST['answer'];
$score=$_REQUEST['score'];
$author=$_REQUEST['author'];
$exp=$_REQUEST['exp'];
$sid=$_REQUEST['sid'];
$type=$_REQUEST['type'];
$sql="update test set title='$title',answer='$answer',score='$score',author='$author',exp='$exp',sid=$sid,type=$type where tid=$tid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}