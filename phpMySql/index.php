<?php

//Conexion con bd guardada en variable
$conection = mysqli_connect('localhost', 'root', '', 'phpmysql' );

//Comprobacion de conexion
if (mysqli_connect_errno()) {
    echo "La conexion fallo ".mysqli_connect_error();
}
else {
    echo 'correcto conection';
}

//Creamos una variable con la consulta que queremos hacer
$query = ('
    SELECT * FROM notas;
');

// Creamos la variable que consultara, la cual toma la conexion y la consulta
$consulta = mysqli_query($conection,$query );

// Interpretamos el resultado en arreglos 

// Arreglo asociativo del primer registro
$arrayDeConsultas = mysqli_fetch_assoc($consulta);
var_dump($arrayDeConsultas);


// Arreglo asociativo con todas las consultas
while ($aDeCon = mysqli_fetch_assoc($consulta)) {
    var_dump($aDeCon);

    // Mostrar un dato concreto
   echo '
    <br>
    <br>
    ';
    echo $aDeCon ['descripcion'];
    echo $aDeCon ['titulo'];
};




?>