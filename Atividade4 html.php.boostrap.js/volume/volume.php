<html>
<center>
    <br><br><br><br><br><br><br>
<h2>
<?php
 $raio = $_POST['raio'];
 $altura = $_POST['altura'];
 $pi = 3.14;
$volume = $pi * $raio^2 *$altura;
$resultado = $volume;

echo "O volume da caixa de água é " . $resultado;
?>

</center>
<h2>
</html>