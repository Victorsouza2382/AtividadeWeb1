<html>
    <?php 

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $me = $_POST['me'];
    $nualuno =  $_POST['nualuno'];

        $media = ($n1 + ($n2 *2) + ($n3 *3)+ $me)/7;
        echo'media em pontos é: '. number_format($media, 2, ',', '.') . '<br>' ;

            if ($media >=9) {
                $letra = "A";
                echo"Número do aluno: ". $nualuno;
                echo"<br>Mensão: ". $letra;
            } 
            if($media >= 7.5 && $media < 9.0){
                $letra = "B";
                echo"Número do aluno: ". $nualuno;
                echo"<br>Mensão: ". $letra;
            }
        
            if($media >= 6 && $media < 7.5){
                $letra = "C";
                echo"Número do aluno: ". $nualuno;
                echo"<br>Mensão: ". $letra;
            }
            if($media >= 4.0 && $media < 6.0){
                $letra = "D";
                echo"Número do aluno: ". $nualuno;
                echo"<br>Mensão: ". $letra;
            }
            
            if($media < 4.0){
                $letra = "E";
                echo"Número do aluno: ". $nualuno;
                echo"<br>Mensão: ". $letra;
            }



            
    ?>

</html>