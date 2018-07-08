<?php
include "db.php";
$sql="select classes.cid,classes.cname,direction.dname from classes,direction where classes.did=direction.did";
$data=$mysql->query($sql)->fetch_all(1);
echo json_encode($data);