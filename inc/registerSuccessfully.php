<?php
if(isset($_GET['userRegisteredSuccessfully'])){
?>
<div class="row pt-4">
<div class="col-6 mx-auto alert alert-success alert-dismissible fade show text-center" role="alert"><h4 class="alert-heading"><i class="fas fa-check-circle"></i> ¡Bien hecho!</h4><p>Creaste tu usuario correctamente, ya podés ingresar.</p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
<?php
}
?>