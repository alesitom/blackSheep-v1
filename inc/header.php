<!doctype html>
<html lang="es">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<style>
body{font-family: 'Source Sans Pro', sans-serif;}
h1{font-weight: 700;}
.mono{
    font-family: 'Source Code Pro', monospace;
}
.mytextbold{
    font-weight: 600;
}
</style>
<title>BLACK SHEEP INC</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
<a class="navbar-brand" href="index.php"><img src="https://img.icons8.com/ios-filled/50/000000/sheep2.png"/> BLACK SHEEP</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
    <?php
    if(!isset($_SESSION['users']))
    {
    ?>
    <li class="nav-item">
    <a class="nav-link" href="register.php"><i class="fas fa-user-plus"></i> REGISTRATE</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="index.php"><i class="fas fa-sign-in-alt"></i> INGRESAR</a>
    </li>
    <?php }
    ?>
    <?php
    if(isset($_SESSION['users']))
    {
    ?>
    <li class="nav-item">
    <a class="nav-link" href="triggers/logout.php"><i class="fas fa-sign-out-alt"></i> SALIR</a>
    </li>
    <?php }
    ?>
    </ul>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>