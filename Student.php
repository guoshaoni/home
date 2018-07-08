<?php
include "db.php";

session_start();
$uid=$_REQUEST['uid'];
//$uid=$_SESSION['uid'];
$sql="select * from student where uid=$uid";
echo $sql;
exit;
$data=$mysql->query($sql)->fetch_assoc();
echo json_encode($sql);