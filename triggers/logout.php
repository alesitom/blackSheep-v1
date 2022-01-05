<?php
require "../config.php";
session_start();
unset($_SESSION['users']);
unset($_SESSION['userdetail']);
session_destroy();
header("location:".urlsite);

?>