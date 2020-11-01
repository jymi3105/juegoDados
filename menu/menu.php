<?php
session_start();
if(isset($_SESSION['logueado']))
{
echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilo_menu.css" rel="stylesheet" type="text/css">
    <title>Menu</title>
</head>
<body>
<h1>Menu</h1>

<nav>
	<a href="../privado1/tirada_dados.php">Tirada</a>
	<a href="../privado2/sumar_7.php">Sumar 7</a>
	<a href="../privado3/par_impar.php">Par/Impar</a>
	<a href="../privado4/about.php">Acerca de</a>
	
	<div class="animation start-home"></div>
</nav>


</body>
</html>';
}
else{
	header('Location:../index.php');//redirigir a otra pagina
}