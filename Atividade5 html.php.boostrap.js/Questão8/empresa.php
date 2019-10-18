<html>
    <?php  
        $codfun = $_POST['codfun'];
        $sal = $_POST['sal'];

        if($codfun == 101){
            $sal = $sal + ($sal * 0.05);
            echo"voçe tem direito 5%, seu slário será: $sal";
        }
        if($codfun == 102){
            $sal = $sal + ($sal + 0.075);
            echo"voçe tem direito 5%, seu slário será: $sal";
        }
        if($codfun == 103){
            $sal = $sal + ($sal + 0.1);
            echo"voçe tem direito 5%, seu slário será: $sal";
        }
        if($codfun != 101 && $codfun != 102 && $codfun != 103){
            $sal = $sal + ($sal + 0.15);
            echo"voçe tem direito 5%, seu slário será: $sal";
        }


    
    
    ?>

</html>