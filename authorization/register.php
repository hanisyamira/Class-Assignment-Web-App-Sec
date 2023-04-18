<?php
session_start();

$_SESSION['name'] = 'students';
$_SESSION['time'] = time();
echo "<br>session_id(): ".session_id();

// Or maybe pass along the session id, if needed
echo '<br /><a href="login.php?' . session_id() . '">login</a>';
?>