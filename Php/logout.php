<?php
 session_start();
 session_destroy();
 unset($_SESSION['password']);
 header("Location: ../Php/LOGIN.php");
?>