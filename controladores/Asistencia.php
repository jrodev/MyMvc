<?php

// CONTROLADOR

class Asistencia extends ControladorBase {

    function __construct($action='index', $ctrl='index')
    {
        parent::__construct($action, $ctrl); // Ejecutando constructor padre
    }

    function registrar()
    {
        $usu = $this->getModelo('AsistenciaM');
        $vars = array();
        if(count($_POST)){ // es Post
            $isVoid = FALSE;
            foreach ($_POST as $val){
                if(trim($val)==''){
                    $vars['msg'] = 'algun Campo Vacio';
                    $isVoid=TRUE; break;
                }
            }
            
            if($isVoid){ return $vars; }
            else{
                $id = $usu->guardarAsistencia($_POST);
                if($id){ $vars['msg']='Se registro'; }
                else $vars['msg']='Error!!';
            }            
        }
        return $vars;
    }
            
    function listado()
    {
        $usu = $this->getModelo('AsistenciaM');
        if(key_exists('id', $_GET)) 
            $usu->eliminarUsuario((int)$_GET['id']);
        $regs = $usu->obtenerAsistencias();
        return array('usu'=>$_SESSION['usu'], 'regs'=>$regs);
    }
    
}
