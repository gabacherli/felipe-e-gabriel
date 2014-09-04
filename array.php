<!DOCTYPE html>
<html>
     <head>
         <meta charset ="UTF-8" />
         <title>Fibonacci</title>
     </head>
	 <body>
	     <b>Array</b><hr/><hr/>
	     <?php	
                $array [0][0] = 'Turma';
                $array [0][1] = 'Disciplina';
                $array [0][2] = 'Semana';
                $array [0][3] = 'Professor';
                $array [1][0] = '02K01';
                $array [1][1] = 'Tecnologia Web II';
                $array [1][2] = 'Segunda';
                $array [1][3] = 'Charles';
                $array [2][0] = '02J01';
                $array [2][1] = 'Linguagem de Programação I';
                $array [2][2] = 'Terça';
                $array [2][3] = 'João';
                $array [3][0] = '02K01';
                $array [3][1] = 'Linguagem de Programação I';
                $array [3][2] = 'Quarta';
                $array [3][3] = 'Charles';
                
                echo "<table width = '0' border ='1'>
                    <tr>
                     <td><b>Turma</td>
                     <td><b>Disciplina</td>
                     <td><b>Semana</td>
                     <td><b>Professor</td>
                    </tr>";
                $totalAlunos = count ($array);
                
                for ($i = 0; $i<$totalAlunos; $i++){
                    echo "<tr>";
                        echo "<td>".$array[$i][0]."</td>";
                        echo "<td>".$array[$i][1]."</td>";
                        echo "<td>".$array[$i][2]."</td>";
                        echo "<td>".$array[$i][3]."</td>";
                    echo "</tr>";
                    
                }

            echo "</table>";
            echo "<br><br><br><br>";
            ?>
         </body>
</html>