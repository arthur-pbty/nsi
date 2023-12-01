<?php
$callback = $_POST['callback'];

setcookie("$callback", '', time() - 3600, '/');

header("Location: index.php");
exit;
?>