<?php

// MODELO

class AsistenciaM extends ModeloBase {

    function __construct()
    {
        parent::__construct();
    }
    
    function isLogin($usu, $pass)
    {
        $regs = $this->getRegistros('usuario',array("u_usuario='$usu'","u_clave='$pass'"));
        return count($regs)?$regs[0]:array();
    }
    
    function guardarAsistencia($post=array())
    {
        return $this->insert('asistente', $post);
    }
    
    function obtenerAsistencias(){
        return $this->getRegistros('asistente');
    }
    
    
    function eliminarUsuario($id){
        return $this->delRegistro('asistente',$id);
    }

}