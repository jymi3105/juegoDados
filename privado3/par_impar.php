<?php
//session_start(); NO hace falta ya la abrimos en menu.php
include_once '../menu/menu.php';
if(!isset($_SESSION['logueado']))
{
    header('Location:../index.php');//redirigir a otra pagina
}
echo '<form action="par_impar2.php" method="POST">
<div id="visualizar_dados">
<h1>Cual crees que va a ser el resultado de la suma de ta tirada de los tres dados, ¿par o impar?</h1>
<fieldset style="text-align:center";>
<br>

<label style="color:white;font-size:1.5em";>PAR:</label>
<input type="radio" id="parimpar" name="parimpar" value="Par"/>
<label style="font-size:1.5em;color:white";>IMPAR:</label>
<input type="radio" id="parimpar" name="parimpar" value="Impar" checked/>
</fieldset>
</div>';
echo '<input style="font-weight:bold; margin-left:40%; margin-top:30px; padding:8px"; type="submit" value="LANZA LOS DADOS!!" name="lanza" "/></form>';

