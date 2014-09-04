<!DOCTYPE html>
<html>
     <head>
         <meta charset ="UTF-8" />
         <title>Fibonacci</title>
     </head>
	 <body>
	     <b>Série de Fibonacci</b><hr/><hr/>
	     <?php	
                $y = 0;
                $x = 1;
                $aux = 0;
                for ($aux = 0; $x < 14; $aux++){
                    $y = $y + $x;
                    $x = $y - $x;
                    echo $x ." ";
                }
             ?>
         </body>
</html>