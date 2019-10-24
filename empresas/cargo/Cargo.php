<?php

include_once '../Model.php';

class Cargo extends Model{
    
    protected $id_cargo;
    protected $nomes;

    public function inserir($dados)
    {        
        $nome = $dados['nome'];
        $sql = "insert into cargo (nome) values ('$nome')";        
        $this->conexao->executar($sql); 
    }

    public function alterar($dados)
    {
        $nome = $dados['nome'];
        $idcargo = $dados['idcargo'];

        $sql = "UPDATE cargo SET 
                    nome = '$nome'
                    WHERE id_cargo";
                
        $this->conexao->executar($sql); 
    }

    public function deletar($idcargo)
    {

        $sql = "DELETE FROM cargo WHERE id_cargo = $idcargo";
                
        $this->conexao->executar($sql); 
    }

    public function recuperarTodos()
    {
        $sql = "SELECT * FROM cargo";       
        return $this->conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($idcargo)
    {
        $sql = "SELECT * FROM cargo WHERE id_cargo = $idcargo";
        $dados = $this->conexao->recuperarTodos($sql);

        $this->id_cargo = $dados[0]['id_cargo'];
        $this->nomes = $dados[0]['nome'];
    }

}  

?>