<?php
include "db.php";
$sql="select student.uid,student.mname,classes.cname from student,classes where student.cid=classes.cid";
$data=$mysql->query($sql)->fetch_all(1);
echo json_encode($data);