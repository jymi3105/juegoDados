<?php
//session_start(); NO hace falta ya la abrimos en menu.php
include_once '../menu/menu.php';
if (!isset($_SESSION['logueado'])) {
    header('Location:../index.php'); //redirigir a otra pagina
}
echo '<form action="par_impar.php" method="POST">
<div id="visualizar_dados">

<div>';
echo '<input style="font-weight:bold; margin-left:40%; margin-top:30px; padding:8px"; type="submit" value="VOLVER" name="volver" "/>';


    echo '<div id="visualizar_dados">';
    $message = "HAS FALLADO!!!";
    $sumaDados = 0;
    for ($i = 0; $i < 3; $i++) {

        $aleatorio = rand(1, 6);
        $sumaDados += $aleatorio;
        switch ($aleatorio) {
            case 1:
                echo '<img src="../imagenes/uno.png" alt="uno" width="150" height="150">';
                break;
            case 2:
                echo '<img src="../imagenes/dos.png" alt="dos" width="150" height="150">';
                break;
            case 3:
                echo '<img src="../imagenes/tres.png" alt="tres" width="150" height="150">';
                break;
            case 4:
                echo '<img src="../imagenes/cuatro.png" alt="cuatro" width="150" height="150">';
                break;
            case 5:
                echo '<img src="../imagenes/cinco.png" alt="cinco" width="150" height="150">';
                break;
            case 6:
                echo '<img src="../imagenes/seis.png" alt="seis" width="150" height="150">';
                break;
        }
    }

    echo '<h1>La suma de dados es de: ', $sumaDados, '</h1>';
    echo '</div></form>';

   if ($sumaDados % 2 == 1 && $_POST['parimpar'] == "Par") {
        echo "<script type='text/javascript'>alert('$message');</script>";
    } elseif ($sumaDados % 2 == 0 && $_POST['parimpar'] == "Impar") {
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1>Has acertado!!</h1>';
    }
