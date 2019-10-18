<?php
include_once "Cargo.php";

    $cargo = new Cargo();
    switch ($_GET['acao']){
        case 'salvar': 
            $cargo->inserir($_POST);
            break;
            
        case 'deletar': 
            $cargo->deletar($_GET['id_cargo']);
            break;
    }

header('location: index.php');

?>