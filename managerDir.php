<?php
include "db.php";
$sql="select * from direction";
$data=$mysql->query($sql)->fetch_all(1);
echo json_encode($data);