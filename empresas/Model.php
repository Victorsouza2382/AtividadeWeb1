<?php

include_once '../Conexao.php';

class Model{

    private $conexao = null;

    public function __construct()
    {
        if(!$this->conexao){
            $this->conexao = new Conexao();
        }
    }

    function __get($att){    
        return $this->$att;
    }

    function __set($att, $valor){
        $this->$att = $valor;
    }
}

?>