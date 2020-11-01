<?php

//session_start(); NO hace falta ya la abrimos en menu.php
include_once '../menu/menu.php';
if (!isset($_SESSION['logueado'])) {
    header('Location:../index.php'); //redirigir a otra pagina
}
echo '<div id="visualizar_dados">
<h1>Numero de intentos para sumar 7 con dos dados.</h1>';
$intentos=0;
do {
    $sumaAleatorio = 0;
    $tirada1 = rand(1, 6);
    $sumaAleatorio += $tirada1;
    $tirada2=rand(1,6);
    $sumaAleatorio+=$tirada2;

    if ($sumaAleatorio == 7) {

        switch ($tirada1) {
            case 1:
                echo '<img src="../imagenes/uno.png" alt="uno" width="200" height="200">';
                break;
            case 2:
                echo '<img src="../imagenes/dos.png" alt="dos" width="200" height="200">';
                break;
            case 3:
                echo '<img src="../imagenes/tres.png" alt="tres" width="200" height="200">';
                break;
            case 4:
                echo '<img src="../imagenes/cuatro.png" alt="cuatro" width="200" height="200">';
                break;
            case 5:
                echo '<img src="../imagenes/cinco.png" alt="cinco" width="200" height="200">';
                break;
            case 6:
                echo '<img src="../imagenes/seis.png" alt="seis" width="200" height="200">';
                break;
        }

        switch ($tirada2) {
            case 1:
                echo '<img src="../imagenes/uno.png" alt="uno" width="200" height="200">';
                break;
            case 2:
                echo '<img src="../imagenes/dos.png" alt="dos" width="200" height="200">';
                break;
            case 3:
                echo '<img src="../imagenes/tres.png" alt="tres" width="200" height="200">';
                break;
            case 4:
                echo '<img src="../imagenes/cuatro.png" alt="cuatro" width="200" height="200">';
                break;
            case 5:
                echo '<img src="../imagenes/cinco.png" alt="cinco" width="200" height="200">';
                break;
            case 6:
                echo '<img src="../imagenes/seis.png" alt="seis" width="200" height="200">';
                break;
        }
        echo '<br>';

    }
$intentos++;

} while ($sumaAleatorio != 7);

echo '<h1>El numero de intentos ha sido de: ', $intentos, '</h1><br>';


echo '</div>';
