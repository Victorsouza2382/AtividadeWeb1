<html>
    <?php

        if ($_POST['num1']){
            $num1 = ($_POST['num1']);
            $num2 = ($_POST['num2']);
            $num3 = ($_POST['num3']);
        }   
        if($num1>=$num2 && $num1>=$num3){
            $maior = $num1;
        }
        
        if($num2>=$num1 && $num2>=$num3) {
            $maior = $num2;
        }
    
        if($num3>=$num1 && $num3>=$num2) {
            $maior = $num3;
        }
 
        echo "O número maior é: $maior.";
    
    ?>
 </html>   