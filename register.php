<?php
include ('inc/header.php');
?>
<?php
  if($_POST){
  try{
    validateRegister();
    validateUser();
    saveRegister();
  }catch(Exception $e){
    $leyenda_error="";
    $leyenda_error = $e->getMessage();
  }
}
function validateRegister(){
  $mensaje="";
  if(strlen($_POST["nombre"])< 4){
  $mensaje.="&#8226; El campo NOMBRE es obligatorio y debes ingresar al menos 4 caracteres </br>";
  }
  if(strlen($_POST["apellido"])< 4){
  $mensaje.="&#8226; El campo APELLIDO es obligatorio y debes ingresar al menos 4 caracteres </br>";
  }
  if(!filter_var($_POST["telefono"],FILTER_VALIDATE_INT)){
  $mensaje.="&#8226; El campo TELÉFONO admite sólo números </br>";
  }
  if(strlen($_POST["telefono"])<10){
  $mensaje.="&#8226; El campo TELÉFONO es obligatorio y debes utilizar formato de 10 dígitos </br>";
  }
  if(strlen($_POST["telefono"])>10){
  $mensaje.="&#8226; El campo TELÉFONO es obligatorio y debes utilizar formato de 10 dígitos </br>";
  }
  if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
  $mensaje.="&#8226; Formato de correo electrónico incorrecto </br>";
  }
  if(strlen($_POST["password"])<10) {
  $mensaje.="&#8226; La CLAVE es obligatoria y debe contener al menos 10 caracteres </br>";
  }
  if($_POST["secondPassword"] != $_POST["password"]) {
  $mensaje.="&#8226; Las CLAVES no coinciden. Reintentalo.";
  }
  if ($mensaje){
  throw new Exception($mensaje);
  }
}
  function validateUser(){
  $mensaje="";
  include('inc/conexionBD.php');
  $email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
  $searchdb="SELECT email FROM users WHERE email = '$email'";
  $resultdb=mysqli_query($conexionBD, $searchdb);
  $rows=mysqli_num_rows($resultdb);
  if ($rows>0){
  $mensaje.="&#8226; El email ingresado ya existe en nuestros registros, por favor usa otro o logueate.";}
  if ($mensaje){
  throw new Exception($mensaje);}
  mysqli_free_result($resultdb);
  mysqli_close($conexionBD);}
function saveRegister(){
  require "inc/database.php";
  $newUser = new databaseDB();
  $nombre=filter_var($_POST["nombre"],FILTER_SANITIZE_ADD_SLASHES);
  $apellido=filter_var($_POST["apellido"],FILTER_SANITIZE_ADD_SLASHES);
  $telefono=filter_var($_POST["telefono"],FILTER_SANITIZE_NUMBER_INT);
  $email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
  $password=filter_var($_POST["password"],FILTER_SANITIZE_ADD_SLASHES);
  $secondPassword=filter_var($_POST["secondPassword"],FILTER_SANITIZE_ADD_SLASHES);
  $data="DEFAULT,'$nombre','$apellido','$telefono','$email',MD5('$password'),MD5('$secondPassword'),DEFAULT";
  $newUser->insert("users",$data);
  header ("Location: index.php?userRegisteredSuccessfully");
}
?>
<div class="container">
  <div class="row pt-5 pb-5">
  <div class="col-8 mx-auto">
  <h1 class="text-center">Registro de usuarios</h1></div>
  <div class="col-8 mx-auto pt-3">
  <form method="POST" action=""> <!--  -->
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="nombre" class="h5">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu nombre" >
    </div>
    <div class="form-group col-md-6">
    <label for="apellido" class="h5">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Tu apellido">
    </div>
    </div>
    <div class="form-row pt-2">
    <div class="form-group col-md-6">
    <label for="telefono" class="h5">Teléfono</label>
    <input type="text" class="form-control mono" name="telefono" id="telefono" placeholder="Ej: 3414141414" >
    </div>
    <div class="form-group col-md-6">
    <label for="email" class="h5">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="ejemplo@ejemplo.com">
    </div>
    </div>
    <div class="form-row pt-2">
    <div class="form-group col-md-6">
    <label for="clave" class="h5">Contraseña</label>
    <div class="input-group">
    <input type="password" class="form-control mono" data-toggle="password" name="password" id="password" placeholder="Mín. 10 dígitos alfanuméricos">
    <div class="input-group-append">
      <div class="input-group-text"><i class="fa fa-eye"></i>
    </div>
    </div>
    </div>
    </div>
    <div class="form-group col-md-6">
    <label for="confirmar clave" class="h5">Confirmar Constraseña</label>
    <div class="input-group">
    <input type="password" class="form-control mono" data-toggle="password" name="secondPassword" id="secondPassword" placeholder="Mín. 10 dígitos alfanuméricos">
    <div class="input-group-append">
      <div class="input-group-text"><i class="fa fa-eye"></i>
    </div>
    </div>
    </div>
    </div>  
    </div>
    <div class="row pt-3">
    <button type="submit" class="btn btn-outline-dark btn-lg btn-block mytextbold"><i class="fas fa-user-plus"></i> Registrarme</button>
    </form>
    </div>
    </div>
<?php
if(isset($leyenda_error)){
?>
<div class="row pt-4 mx-auto">
<div class="col-12 alert alert-danger alert-dismissible fade show" role="alert"><h4 class="alert-heading text-center"><i class="fas fa-exclamation-triangle"></i> Ups.. ¡Algo salió mal!</h4><?php echo $leyenda_error ?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
<?php
}
?>
</div>
</div>
</div>
<script src="js/bootstrap-show-password.js"></script>
<?php
require "inc/footer.php";
?>