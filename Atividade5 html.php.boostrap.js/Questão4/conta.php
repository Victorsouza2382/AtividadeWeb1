<html>
    <?php
        $pes = $_POST['pes'];
        $chop = $_POST['chopp'];
        $pizza = $_POST['pizza'];
        $cob = $_POST['cob'];


        $chop = ($chop * 4.80);
        $pizza = ($pizza * 17.0);
        $cob =($cob * 1.50);

        $total = ($chop + $pizza + $cob);
        $desconto = ($total*10)/100;
        $totaldesconto = ($total + $desconto);
        $valor = ($totaldesconto/$pes);

        echo "O valor da Conta é de : " . $totaldesconto ." Reais <br> <br>";
        echo "Cada pessoa vai pagar : " . $valor ." Reais <br> <br>";
        echo "Taxa do garçom é : " . $desconto . "Reais "
    ?>
</html>