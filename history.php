<?php
include 'db.php';

session_start();
$cid = $_SESSION['cid'];
$uid = $_SESSION['uid'];

$sql ="select cname from classes where cid=$cid";
$data1 = $mysql->query($sql)->fetch_assoc()['cname'];

$sql1 ="select * from (select * from pager where cid=$cid) as temp where pid in (select DISTINCT pid from record where uid=$uid)";
$data = $mysql ->query($sql1)->fetch_all(1);

$result =[ $data,$data1 ];
echo json_encode($result);

