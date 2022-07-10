<h2>Panel de Control</h2>
<?php if($_SESSION["ownerId"] !='') { ?>
<h3><?php echo "Logged in : ".$_SESSION["ownerUser"];  ?> | <a href="category.php" target="_blank">Foro</a> | <a href="cp_logout.php">Cerrar Sesion</a> </h3>
<?php } else {	?>
<h3><a href="category.php" target="_blank">Foro</a> | <a href="cp_login.php">Login</a> </h3>
<?php } ?>
<br>
<ul class="nav nav-tabs">
	<li id="dashboard" class="active"><a href="dashboard.php">Tablero</a></li>
	<li id="users"><a href="users.php">Usuarios</a></li>
	<li id="category_manager"><a href="category_manager.php">Categorias</a></li> 
</ul>