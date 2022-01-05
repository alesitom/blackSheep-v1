<section class= "container pt-5 pb-5">
<div class="container bg-light">
<?php
  include ('inc/registerSuccessfully.php');
?>
<div class="row">
  <div class="col-6 mx-auto pt-3 pb-2">
  <h1 class="text-center">Login de usuarios</h1>
  <form method="POST" action="triggers/login.php"> <!--  -->
    <div class="form-group">
    <label for="email" class="h5">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="ejemplo@ejemplo.com">
    </div>
    <div class="form-group">
    <label for="clave" class="h5">Contraseña</label>
    <div class="input-group mono">
    <input type="password" class="form-control" data-toggle="password" name="password" id="password">
    <div class="input-group-append">
      <div class="input-group-text"><i class="fa fa-eye"></i>
    </div>
    </div>
    </div>
    </div>
    <div class=" mx-auto pt-3">
    <button type="submit" class="btn btn-outline-dark btn-lg btn-block mytextbold" name="loginAction"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
    </form>
  </div>
  <div class="row">
  <div class="col mx-auto pt-5">
  <div class="mx-auto">
  <h4 class="text-center">Si todavía no tenes usuario <a href="register.php">registrate acá</a></h5></div>
  </div>
  </div>
<?php
include ('inc/loginError.php');
?>
</div>
</div>
<script src="js/bootstrap-show-password.js"></script>
</section>