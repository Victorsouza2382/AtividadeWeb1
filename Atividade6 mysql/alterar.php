    <html>    
    <?php 

        $sql = "delete from cargo where id_cargo=2;";
        $conexao = new PDO('mysql:host=localhost;dbname=empresas;charset=utf8', 'root', '');
        $conexao->query($sql);
        
    ?>
</html>
