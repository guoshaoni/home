<?php
include "db.php";
 $sql="select test.*,testtype.tname,stage.sname from test,testtype,stage where test.type=testtype.tid and test.sid=stage.sid";
 $data=$mysql->query($sql)->fetch_all(1);
 echo json_encode($data);