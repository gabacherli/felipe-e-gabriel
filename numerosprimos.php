<!DOCTYPE html>
<html>
     <head>
         <meta charset ="UTF-8" />
         <title>Números Primos</title>
     </head>
	 <body>
	     <b>Números Primos</b><hr/><hr/>
	     <?php	
             $primo = true;
             $x = 32;
             if ($x > 2 && $x % 2 == 0) {$primo = false;}
             for ($i = 3; $i < $x ; $i = $i + 2){
                 if ($x % $i == 0){
                     $primo = false;
                     break;
                 }
             }
             if ($primo == true){
             echo "O número inserido é primo!";}
             else {echo "O número inserido não é primo.";}
             ?>
         </body>
</html>