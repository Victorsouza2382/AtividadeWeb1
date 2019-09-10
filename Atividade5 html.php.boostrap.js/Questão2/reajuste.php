<html>
    <?php
    $salario = $_POST['sal'];

        if ($salario <= 2000){
            $salario = $salario + ($salario * 0.5);
            echo" seu salário será R$ $salario com reajuste de 50%.";  
        }
        else{
            $salario = $salario + ($salario * 0.3);
            echo"seu salário será R$ $salario com reajuste de 30%";
        }
        
    ?>

</html>