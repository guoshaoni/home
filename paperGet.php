<?php
include "db.php";
$pid=$_REQUEST['pid'];
$sql="select * from pager where pid=$pid";
$data=$mysql->query($sql)->fetch_assoc();
echo json_encode($data);
