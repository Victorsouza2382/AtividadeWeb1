<?php

    class Model
    {

        protected $id_cargo;
        protected $nome;

        function __get($att){
            return $this->att;

        }
        function __set($att, $valor){
             $this->att = $valor;

        }
      
    }
    
?>