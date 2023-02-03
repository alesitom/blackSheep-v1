<?php
session_start();
require "inc/header.php";
if(isset($_SESSION['users']))
    require "pages/index.php";
else
    require "pages/login.php";
require "inc/footer.php";

?>
<!-- esto es un comentario -->