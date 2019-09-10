
<html>
<center>
    <br><br><br><br><br><br><br>
<h2>
<?php 
$n1 = $_POST['p1'];
$n2 = $_POST['p2'];
$n3 = $_POST['p3'];
$media = (($n1 * 2) + ($n2 * 3) + ($n3 * 5))/10;

echo "O aluno Obteve a respectiva Média Ponderada : <br>"
."Sua média final é " . $media ;

?>
</center>
<h2>
</html>