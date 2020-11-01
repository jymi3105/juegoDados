<?php
//session_start(); NO hace falta ya la abrimos en menu.php
include_once '../menu/menu.php';
if(!isset($_SESSION['logueado']))
{
    header('Location:../index.php');//redirigir a otra pagina
}
echo '<div id="visualizar_dados">';
for($i=0;$i<5;$i++)
{

    $aleatorio=rand(1,6);
    switch($aleatorio)
    {
        case 1: echo'<img src="../imagenes/uno.png" alt="uno" width="150" height="150">';break;
        case 2: echo'<img src="../imagenes/dos.png" alt="dos" width="150" height="150">';break;
        case 3: echo'<img src="../imagenes/tres.png" alt="tres" width="150" height="150">';break;
        case 4: echo'<img src="../imagenes/cuatro.png" alt="cuatro" width="150" height="150">';break;
        case 5: echo'<img src="../imagenes/cinco.png" alt="cinco" width="150" height="150">';break;
        case 6: echo'<img src="../imagenes/seis.png" alt="seis" width="150" height="150">';break;
    }
 }
 echo '</div>';