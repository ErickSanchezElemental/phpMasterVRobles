<?php 
echo 'Hola';


if (isset($_GET['uno']) && isset($_GET['dos'])) {
    if (is_numeric($_GET['uno']) && is_numeric( $_GET['dos'] )) { 
    $resultado = $_GET['uno'] + $_GET['dos'];
    }
}

else{
    $resultado = 'No valido';
}

if (isset($resultado)){
    echo $resultado;
}



?>

<form action="" method="get">
    <input type="number" name="uno">
    <input type="number" name="dos">
    <input type="submit" name="enviar">
</form>