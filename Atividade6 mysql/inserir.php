<html>    
    <?php 

        $sql = "insert into funcionarios (nome) values ('Victor')";
        $conexao = new PDO('mysql:host=localhost;dbname=empresas;charset=utf8', 'root', '');
        $conexao->query($sql);
        
    ?>
</html> 