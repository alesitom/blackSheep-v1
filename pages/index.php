<section class="pb-5">
<div class="container pb-5">
    <div class="row">
    <div class="col mx-auto pt-4">
    <h1>Hola <?php echo $_SESSION['users']; echo" "; echo $_SESSION['userSurname'];?></h1>
    </div>
    </div>
</div>
<div class="container pt-4 pb-5">
    <div class="row pb-5">
    <div class="col-8 mx-auto">
    <h3><i class="fas fa-user-shield"></i> Tus datos registrados son:</h3>
    <ul>
    <li>Nombre: <?php echo $_SESSION['users'];?>
    <li>Apellido: <?php echo$_SESSION['userSurname'];?></li>
    <li>Email registrado: <?php echo$_SESSION['userEmail'];?></li>
    <li>Teléfono registrado: <?php echo $_SESSION['userPhoneNumber'];?></li>
    <li>Sos miembro desde: <?php echo$_SESSION['userStartDate'];?></li>
    </ul>
    </div>
    </div> <!-- esto es un comentario -->
</div>
</section>