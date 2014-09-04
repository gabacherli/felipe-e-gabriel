<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8"/>
		<title>Exercicio 1 - Tabela com PHP</title>
		<link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
		<style type="text/css">
		     .estilo1{
			 background-color: #FF0000;
			 }			 
		 
		</style>
	</head>
	
	<body>
         <?php
		     echo "<table border ='2'>";
			     echo "<tr>";
				     echo "<th>";
					 echo "ID";
					 echo "</th>";
					 echo "<th>";
					 echo "NOME";
					 echo "</th>";
				 echo"</tr>";				 
				 
				 for($i = 0; $i < 10; $i++)/*Construção da tabela com repetição*/
				 {
				     if($i%2==0) $style = "estilo1";/*Se o resto for = 0, a linha será colorida*/
					 
					 else $style = "";/*Se o resto for != 0, a linha será branca*/					 
					 
				     echo "<tr>";
					     echo "<td class='$style'>$i</td>";
						 echo "<td class='$style'>nome</td>";
					 echo "</tr>";
					 
				 }
			 
			 echo"</table>";
         ?>		 
	</body>
</html>