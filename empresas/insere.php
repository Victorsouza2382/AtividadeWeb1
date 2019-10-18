
<?php 
$cargo = $_POST['cargo'];

$conexao = new PDO('mysql:host=localhost;dbname=empresas', 'root', '') or 
die ('ERROR');
$sql = "insert into cargo (nome) values ('$cargo')";
$conexao->query($sql);





?>