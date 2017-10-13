<?php
session_start();
header("Location: index.php");
session_unset($_SESSION['user']);
session_unset($_SESSION['user1']);
session_unset($_SESSION['studentid']);
session_unset();
session_destroy();
?>