<?php
$userId = $_GET['user'];
$userPw = $_GET['password'];
if($userId == null || $userPw == null) {
if($userId == null)
echo "user invalid\r\n";
if($userPw == null)
echo "password in invalid\r\n";
}
else
echo "session-id=67382827367483";
?>
