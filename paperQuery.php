<?php
include "db.php";
$pname=$_REQUEST['pname'];
$pauthor=$_REQUEST['pauthor'];
$cid=$_REQUEST['cid'];
$pid=$_REQUEST['pid'];
$sql="update pager set pname='$pname',cid=$cid,pauthor='$pauthor' where pid=$pid";
$mysql->query($sql);
if($mysql->affected_rows){
    echo 'ok';
    exit;
}else{
    echo 'error';
}