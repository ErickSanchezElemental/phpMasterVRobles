<?php
 class usuarioController
{
    public function mostrarTodosUsuarios(){
        require_once '../models/usuarios.php';

        $usuario = new Usuario();
        $usuario->getNombre ();
    }
}

?>