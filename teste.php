<!DOCTYPE html>
<html>
    <body>
    <?php 
            $x = 5;
            $y = 10;
    
            $resultado = soma($x, $y);
            echo "Resultado da soma: ".$resultado;            
            echo "<br><br>";
            
            $resultado = subtracao($x, $y);
            echo "Resultado da subtração: ".$resultado;           
            echo "<br><br>";
           
            $resultado = multiplicacao($x, $y);
            echo "Resultado da multiplicaçãoo: ".$resultado;
            echo "<br><br>";
            
            $resultado = divisao($x, $y);
            echo "Resultado da divisão: ".$resultado;       
            echo "<br><br>";
    ?>
    </body>
</html>
