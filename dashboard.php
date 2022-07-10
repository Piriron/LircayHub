<?php 
include_once 'config/Database.php';
include_once 'class/Owner.php';

$database = new Database();
$db = $database->getConnection();

$owner = new Owner($db);
if(!$owner->loggedIn()) {	
	header("Location: cp_login.php");	
}
include('inc/header.php');
?>
<title>Foro de discusion</title>
<link rel="stylesheet" href="css/style.css">
<?php include('inc/container.php');?>
<div class="container"> 	
	<?php include('menus.php'); ?>
	<h2>Bienvenido/a al panel de control</h2>
</div>
<?php include('inc/footer.php');?>