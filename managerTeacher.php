<?php
include "db.php";
$sql="select teacher.tid,teacher.mname,classes.cname,direction.dname from teacher,classes,direction where teacher.cid=classes.cid and teacher.did=direction.did";
$data=$mysql->query($sql)->fetch_all(1);
echo json_encode($data);