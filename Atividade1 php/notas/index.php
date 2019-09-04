
<html>
    <center> 
        <br> <br> <br> <br>
<h3>
<?php

    $aluno = $_POST['nome'];
    $nota1 = $_POST['p1'];
    $nota2 = $_POST['p2'];
    $nota3 = $_POST['p3'];
    $nota4 = $_POST['p4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    echo "O aluno: " . $aluno ." Obteve as respectivas notas: <br>"
        ."Primeiro Bimestre: " . $nota1 . "<br>"
        ."Segundo Bimestre: " . $nota2 . "<br>"
        ."Terceiro Bimestre: " . $nota3 . "<br>"
        ."Quarto Bimestre: " . $nota4 . "<br>"
        ."Sua média final é: " . $media . " <br> ";
        

    if ($media >= 7):
        echo "Aluno Aprovado!";
    elseif (($media < 7) && ($media >= 5)):
        echo "Aluno em Recuperação!";
    else:
        echo "Aluno Reprovado Mais Sorte Da Próxima Vez!";
    endif;
    
?>
</h3>
</center>
</html>


