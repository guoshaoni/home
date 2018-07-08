<?php
include "db.php";
$name = $_REQUEST['name'];
$pass = md5($_REQUEST['pass']);
$type = $_REQUEST['type'];
session_start();
$code=$_REQUEST['code'];

$sql="select * from $type";
$data= $mysql->query($sql)->fetch_all(1);

/*for($i=0;$i<count($data);$i++){
    session_start();
    if($data[$i]['mname']== $name){
        if($_SESSION['code'] == $code1){
            if($data[$i]['mpass'] == $pass){
                echo '1';
                $_SESSION['user'] = $name;
                if($type == 'student'){
                    $_SESSION['uid'] = $data[$i]['uid'];
                    $_SESSION['cname'] = $data[$i]['cname'];
                }
                exit();
            }else{
                echo '2';
                exit();
            }
        }else{
            echo '4';
            exit();
        }
    }
}
echo 3;*/

for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]['mname'] == $name) {
        if ($data[$i]['mpass'] == $pass) {
            $_SESSION['user'] = $name;
            if($type == 'student'){
                $_SESSION['uid'] = $data[$i]['uid'];
                $_SESSION['cid'] = $data[$i]['cid'];
            }
            echo '1';
            exit();
        } else {
            echo "2";
            exit();
        }
    }
}
echo '3';