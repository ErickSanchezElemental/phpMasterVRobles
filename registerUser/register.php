<?php 

include('../phpMySql/index.php');
$name = $_POST['userName'];
echo $name;


// Ejemplo de operador terniario

// La variable mail, si se cumple la condicion mencionada  isset($_POST['userMail']) entonces caso de ser cierta la condicion el valor de mail sera $_POST['userMail'], en caso de ser falso el valor de mail sera No se encontro el valor
$mail = isset($_POST['userMail']) ? $_POST['userMail'] : 'Error';
echo '<br><br><br>';
echo $mail;

// Esta de empty funciona mejor que el isset para validar si existe
$password = !empty($_POST['userPassword']) ? $_POST['userPassword'] : 'Error';
echo '<br><br><br>';
echo $password;

// Esta de empty funciona mejor que el isset para validar si existe
$nickname = !empty($_POST['userNickName']) ? $_POST['userNickName'] : 'Error';
echo '<br><br><br>';
echo $nickname;

// Vamos a crear una array con los resultados o respuestas
echo '<br><br><br>';
$errorArrays = array();

var_dump($errorArrays);
echo '<br><br><br>';
$errorArrays ['mail'] = $mail;
$errorArrays ['password'] = $password;
$errorArrays ['nickname'] = $nickname;

var_dump ($errorArrays);

echo '<br><br> Validacion de error <br><br>';
// Valida si existe el error

    if ($errorArrays['mail'] == 'Error' || $errorArrays['password'] == 'Error' || $errorArrays['nickname'] == 'Error')
    {
        $statusRegister = 'Error al registrar tus datos, comprueba tu informacion';
    }
    else{
        $statusRegister = 'Usuario registrado'; 
    }


// Guarda el resultado en la sesion y redirige al index para mostrar el resultado
    $_SESSION['statusRegisterSession'] = $statusRegister;

    //Esto mostraria el resultado de la variable guardada en la sesion que es el estatus del usuario registrado e la pantalla de registro si quitamos la relocalizaicon
    echo  $_SESSION['statusRegisterSession'];
    
    //Esta relocalizacion se puede quitar para ver que sucede en esta misma pantalla en cada parte del proceso, esta relocalizacion se lleva la sesion solamente, pero este codigo tiene mucha interactividad en esta misma pantalla, por lo que puedes comentar la relocalizacion y ver a detalle resultados paso a paso
    header('location: index.php');



?>