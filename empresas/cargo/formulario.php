<?php 
include_once '../cabecalho.php'; 
include_once'Cargo.php';

$cargo = new Cargo();

if(!empty($_GET['id_cargo'])){
    $cargo->recuperarPorId($_GET['id_cargo']);
}

?>

    <h1>Cargo</h1>

    <form action="processamento.php?acao=salvar" method="post">
        
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="idcargo" id="idcargo" value="<?php echo $cargo->id_cargo; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $cargo->nomes; ?>" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a class="btn btn-danger" href="index.php">Voltar</a>
            </div>
        </div>
    </form>

<?php include_once '../rodape.php'; ?>