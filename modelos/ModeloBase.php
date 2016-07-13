<?php

class ModeloBase {

    function __construct()
    {
        if(!$this->conectar()) {
            echo "No conexion!<hr />"; exit;
        }else { echo "Conexion!<hr />"; }
        mysql_query("SET NAMES 'utf8'");
    }
    
    private function conectar()
    {
        $link = mysql_connect('localhost', 'root', '123456');
        if($link) mysql_select_db('expotic');
        return $link;
    }
    
    public function insert($tbl, $vals)
    {
        if(!$tbl || !is_array($vals)){        
            echo 'No tabla o no Fields<hr />'; exit;
        }
        $campos  = array();
        $valores = array();
        foreach ($vals as $i=>$v){
            $campos[]  = $i;
            $valores[] = "'$v'";
        }
        
        $sql = "INSERT INTO $tbl (".implode(',',$campos).") VALUES (".implode(',',$valores).")";

        if(!mysql_query($sql)){ echo mysql_error(); exit; }
        return mysql_insert_id();
    }

    public function getRegistros($tabla='usuario', $where=FALSE)
    {
        $whr = $where?'WHERE '.implode(' AND ', $where):'';
        $sql = "SELECT * FROM $tabla $whr";
        $resultado = mysql_query($sql);
        
        $registros = array();
        while($reg = mysql_fetch_array($resultado))
        {
            $registros[] = $reg;
        }
        return $registros;
    }
    
    public function delRegistro($tabla='usuario', $id=0){
        $whr = ($tabla=='usuario')?"u_id=$id":"a_id=$id";
        $sql = "DELETE FROM $tabla WHERE $whr";
        return mysql_query($sql);
    }


}
