<?php

$sname= '127.0.0.1';

$uname= "root";

$password = "";

$db_name = "SNA_test";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
?>