<?php
session_start();
unset($_SESSION['id']);

echo "<script>window.location='../login.php';</script>";
?> 