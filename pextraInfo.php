<?php
include "db.php";

$sql="select test.*,stage.sname,pager.pname,classes.cname from test,stage,pager,classes where test.sid=stage.sid and pager.cid=classes.cid";
$data=$mysql->query($sql)->fetch_all(1);
echo json_encode($data);