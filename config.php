<?php
$password = "12345";
// Set a password for the Admin Panel
// You can access the Panel on: www.yourdomain.com/admin.php




$pass = hash('sha256', $password);
unset($password);

?>
