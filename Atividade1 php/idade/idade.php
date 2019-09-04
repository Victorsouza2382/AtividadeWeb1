
<html>
    <br> <br> <br> <br> <br> <br> <br>
    <center>
        <h2>
<?php
$anonas = $_POST['ano'];
$anoatual = $_POST['anohj'];
$resultado = ($anoatual - $anonas ) * 365;
$mes = $resultado / 30;


echo "Considerando os mêses perfeitos de 30 dias e os anos com 365 dias : "."<br><br>";
echo "Sua idade em dias é de : " . $resultado ." Dias <br>";
echo "Sua idade em mêses é de : " . $mes ." Mêses <br>";
?>

       </h2>
</center>
</html>