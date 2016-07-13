<?php

// MODELO

class UsuarioM extends ModeloBase {

    function __construct()
    {
        parent::__construct();
    }
    
    function isLogin($usu, $pass)
    {
        $regs = $this->getRegistros('usuario',array("u_usuario='$usu'","u_clave='$pass'"));
        return count($regs)?$regs[0]:array();
    }
    
    function guardarUsuario($post=array())
    {
        return $this->insert('usuario', $post);
    }
    
    function obtenerUsuarios(){
        return $this->getRegistros('usuario');
    }
    
    function eliminarUsuario($id){
        return $this->delRegistro('usuario',$id);
    }

}