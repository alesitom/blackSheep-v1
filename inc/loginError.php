<?php
if(isset($_GET['errorlogin'])){
?>
<div class="row pt-4">
<div class="col-12 mx-auto alert alert-danger alert-dismissible fade show text-center" role="alert"><h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> Ups.. ¡Algo salió mal!</h4>
    <p>El usuario o clave ingresados son inválidos, por favor reintentalo.</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
<?php
}
?>