<?php 
include('../phpMySql/index.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form de registro</title>
</head>
<body>

<h2>Resultado del registro: <?php if (isset($_SESSION['statusRegisterSession'])){echo $_SESSION['statusRegisterSession'];} else {
    echo 'No hay resultados de registro aun';
} ?></h2>
    <h1>My form</h1>
    <form action="register.php" method="post">
        <input type="text" name="userName">
        <input type="email" name="userMail">
        <input type="password" name="userPassword">
        <input type="text" name="userNickName">
        <input type="submit" name="submit">
    </form>
</body>
</html>