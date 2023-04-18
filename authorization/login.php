<?php
session_start();



echo $_SESSION['name']; 
echo date('Y m d H:i:s', $_SESSION['time']);
echo "<br>session_id(): ".session_id();

echo '<br /><a href="action1.php">action1</a>';
?>