<?php
    include_once '../Conexao.php';
    include_once '../Model.php';

    class Cargo extends Model
    {

        protected $id_cargo;
        protected $nome;

          
        public function inserir($dados){
            $nome = $dados['nome'];

            $sql = "insert into cargo (nome) values ('$nome')";
    
             $conexao = new Conexao();
             return $conexao->executar($sql);  
        }   
        public function alterar($dados){
            $nome = $dados['nome'];
            $id_cargo = $dados['id_cargo'];

            $sql = "update cargo set nome = '$nome' where $id_cargo";

            $conexao = new Conexao();
            $conexao->executar($sql);
            
        }
        public function deletar($id_cargo){
           

            $sql = "delete from cargo where id_cargo = $id_cargo";

            $conexao = new Conexao();
            $conexao->executar($sql);
        }
        public function recuperarTodos(){
            $sql = "select * from cargo";

            $conexao = new Conexao();
            return $conexao->recuperarTodos($sql);

        }
    }

?>