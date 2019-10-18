<?php

include_once 'Cargo.php';

$cargos = Cargo::recuperarTodos();

include_once '../cabecalho.php';
?>

    <h1>Cargo</h1>

    <a class="btn btn-warning" href="formulario.php">Novo</a>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <td>Ações</td>
            <td>ID</td>
            <td>Nome</td>
        </tr>
        <?php
        foreach ($cargos as $cargo) {
            echo "
                <tr>
                    <td><a class='trash' href='processamento.php?acao=deletar&id_cargo={$cargo['id_cargo']}'>Excluir</td>
                    <td>{$cargo['id_cargo']}</td>
                    <td>{$cargo['nome']}</td>
                </tr>
            ";
        }
        ?>
    </table>

    <script>
        $(function(){
            $('.trash').click(function(){

                if(!confirm('Deseja excluir?') ){
                    return false;
                }
                
            })
        })
    </script>

<?php include_once '../rodape.php'; ?>