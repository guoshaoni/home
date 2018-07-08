<?php
header('Content-type:text/html;charset=utf8');
$mysql = new mysqli('localhost','root','','exam',3306);
$mysql->query('set names utf8');