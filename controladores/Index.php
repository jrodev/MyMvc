<?php

// CONTROLADOR

class Index extends ControladorBase {

    function __construct($action='index', $ctrl='index')
    {
        parent::__construct($action, $ctrl); // Ejecutando constructor padre
    }
    
    function index()
    {
        return array('usu'=>'Jaime');
    }
    
    function Login()
    {
        
        if($this->isSession()){
            $this->redirect('usuario', 'listado');
            return ;
        }

        if(count($_POST)){ // es Post
            
            if($this->isSession()){
                $this->redirect('usuario', 'listado');
                return ;
            }
            
            $login = $this->getModelo('UsuarioM');
            $usu = $login->isLogin($_POST['usuario'],$_POST['clave']);
            var_dump($usu);
            if(count($usu)){
                $_SESSION['OK'] = TRUE;
                $_SESSION['usu'] = $usu['u_usuario'];
                $this->redirect('usuario', 'listado');
            }else{
                $_SESSION['OK']  = FALSE;
                return array('msg'=>'Usuario Erroneo!!');
            };
        }
        //return $_POST;
    }
    
    function logout()
    {
        $this->sessionClose();
    }

}
