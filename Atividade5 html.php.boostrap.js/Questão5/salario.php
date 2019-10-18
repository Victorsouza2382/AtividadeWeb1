<html>
    <?php  
      $salmin = $_POST['salmin'];
      $hotr = $_POST['hotr'];
      $depenf = $_POST['depenf'];
      $hrstrab = $_POST['hrstrab'];
      
    


      $valor_hora = ($salmin/5);
      $salmes = ($hotr*$valor_hora);
      $valor_dep = ($depenf*32);
      $valor_horaex = $hrstrab * ($valor_hora*1.5);
      $salbruto = $salmes + $valor_dep + $valor_horaex;

      if($salbruto < 2000){
        $ir = 0;
      }
      else{
            if($salbruto>=2000 && $salbruto<=5000){
                $ir = $salbruto * 0.10;
            } 
            else{
                $ir = $salbruto * 0.20;
            }
         }
          
        

      $salli = $salbruto - $ir;
      if($salli<=3500){
         $gratifi = 1000;
      }
      else{
          $gratifi = 500;
      }
      $sal_final = $salli + $gratifi;

      echo'Salário a Receber:'. $sal_final;

    ?>

</html>