<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
    <div class="text-center">
       <h1>Login Panel</h1>
       <h4>Trascendencia Gestion de Inventario</h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Nombre Usuario</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-danger" style="border-radius:0%">Login</button>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
