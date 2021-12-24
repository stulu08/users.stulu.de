<?php
$userId = $_GET['user'];
$userPw = $_GET['password'];
if($userId == null || $userPw == null) {
if($userId == null)
echo "user invalid\\n";
if($userPw == null)
echo "password in invalid";
}
else
echo "session-id=67382827367483";
?>
