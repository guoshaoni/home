<?php
include "db.php";
$cid=$_REQUEST['cid'];
$sql="select * from classes where cid=$cid";
$data=$mysql->query($sql)->fetch_assoc();
echo json_encode($data);
