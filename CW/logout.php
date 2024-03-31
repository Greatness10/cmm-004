<?php
session_start();
session_destroy();
header("Location: Clone.php");
exit;
?>
