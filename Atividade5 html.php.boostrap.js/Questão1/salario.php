<html>
    <?php 
        $salario = $_POST['sal'];

        if($salario <= 1000){
            $salario = $salario + ($salario * 0.3);
            echo "Seu salario será R$ $salario após o aumento de 30%.";
        }
        else{
            echo"Você não tem direito ao reajuste de salário, pois você recebe mais de mil reais.";
        }
    ?>

</html>