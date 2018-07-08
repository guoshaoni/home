<?php
include "db.php";
$sql="select pager.*,classes.cname  from pager,classes where classes.cid=pager.cid";
$data=$mysql->query($sql)->fetch_all(1);
echo json_encode($data);