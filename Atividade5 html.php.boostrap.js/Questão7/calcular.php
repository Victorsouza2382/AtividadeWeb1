<html>
    <?php  
    $sexo = $_POST['sexo'];
    $alt = $_POST['alt'];

    if($sexo == "masculino"){
        $peso = (72.7 * $alt) - 58;
        echo"voce é homem, seu peso ideal é: $peso";
    }
    if($sexo == "feminino"){
        $peso = (62.1 * $altura) - 44.7;
        echo"voce é mulher, seu peso ideal é: $sexo";
    }
    
    
    ?>

</html>