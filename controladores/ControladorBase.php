<?php

class ControladorBase {

    protected $c;    // controlador
    protected $a;    // Accion
    private $pathView;
    private $viewVars;
    //private   $insC; // Instancia de controller
    
    function __construct($action='index', $ctrl='index')
    {
        session_start();
        
        $this->a = trim(strtolower($action));
        $this->c = trim(strtolower($ctrl));
        
        if(!$this->isSession() && $action!='index' && $ctrl!='index'){
            $this->sessionClose();
            $this->redirect('index', 'index');
            return ;
        }
        
        echo "ControladorBase & $ctrl - Instancia creada!<hr />";
        if(method_exists($this, $action)){
            echo "<b>metodo $action</b>: execute!<hr />";
            $this->a = $action;
            $this->viewVars = $this->$action();
        }else{
            echo "<b>metodo $action</b>: No existe!<hr />"; exit;
        }
    }
            
    function getView()
    {   
        $vars = is_null($this->viewVars)?array():$this->viewVars;
        $sep = DIRECTORY_SEPARATOR;
        $this->pathView = PATH.$sep.'vistas'.$sep.$this->c.$sep.$this->a.'.php';
        if(!file_exists($this->pathView)){
            echo "<b>getView - $this->pathView</b>: No existe!<hr />"; exit;
        }else include_once $this->pathView;
    }
    
    function getModelo($name=FALSE)
    {
        $sep = DIRECTORY_SEPARATOR;
        $pathModel = PATH.$sep.'modelos'.$sep.ucfirst($name).'.php';
        if(!file_exists($pathModel)){
            echo "<b>getModelo - $pathModel</b>: No existe!<hr />"; exit;
        }else{ include_once $pathModel; }

        return new $name();
    }
    
    function isSession()
    {
        return key_exists('OK', $_SESSION)?$_SESSION['OK']:FALSE;
    }
            
    function sessionClose()
    {
        //session_start();
        $_SESSION['OK'] = FALSE;
        session_destroy();
        $this->redirect('index', 'index');
    }
    
    function redirect($c,$a)
    {
        if(!$c || !$a){
            echo "Es Necesario c y a<hr />"; exit;
        }
        header("Location: ".BASE."?c=$c&a=$a");
    }
            
    function getC()
    {
        return $this->c;
    }
    
    function getA()
    {
        return $this->a;
    }
}
