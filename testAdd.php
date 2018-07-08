<?php
include "db.php";
$title=$_REQUEST['title'];
$answer=$_REQUEST['answer'];
$score=$_REQUEST['score'];
$author=$_REQUEST['author'];
$exp=$_REQUEST['exp'];
$sid=$_REQUEST['sid'];
$type=$_REQUEST['type'];
$sql="insert into test (title,answer,score,author,exp,sid,`type`) values ('$title','$answer','$score','$author','$exp',$sid,$type)";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}