<?php
include "db.php";
$pname=$_REQUEST['pname'];
$pauthor=$_REQUEST['pauthor'];
$cid=$_REQUEST['cid'];
$sql="insert into pager (cid,pname,pauthor) values ($cid,'$pname','$pauthor')";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}