<?
// 新增資料
require_once("../db_connect.php");

$now = date("Y-m-d H:i:s");
$sql = "INSERT INTO users (name, phone, email,creat_at) VALUES ('Tom','0912345678','tom@gmail.com', '$now')";

if ($conn->query($sql) === TRUE) {
    echo "新增資料OK";
} else {
    echo "新增資料不OK";
}

$conn->close();