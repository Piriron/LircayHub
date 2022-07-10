<?php if(!empty($_SESSION['userid']) && $_SESSION['userid']) { ?>		
<h3><a href="category.php">Inicio</a> | Conectado : <?php echo ucfirst($_SESSION["name"]); ?> | <a href="logout.php">Cerrar Sesion</a> | <a href="cp_login.php"  target="_blank" class="pull-right">Panel de Control</a>	
</h3>
<?php } else { ?>
<h3><a href="category.php">Inicio</a> | <a href="login.php">Inicio Sesion</a> | <a href="cp_login.php">Panel de Control</a></h3>
<?php } ?>	