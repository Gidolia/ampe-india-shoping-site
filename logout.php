<?php
include('config.php');
session_start();
session_destroy();
unset($_SESSION);
echo "<script>alert('Logout Successfully');location.href='index.php';</script>";
?>