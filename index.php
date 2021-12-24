<?php
$userId = $_GET['user'];
$userPw = $_GET['password'];
if($userId == null || $userPw == null)
echo "error: invalid-data";
else
$id = uniqid() + uniqid();
echo $id;
?>
