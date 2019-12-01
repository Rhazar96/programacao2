<?php
       /************* DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex7.php                     *
        * UC: P2                                        *
        * @author Cláudio Ferreira                      *
        * @version 1.0                                  *
        * Data: Novembro de 2019                        *
        * Descrição: exercício prático                  *
        *************************************************/

?>


<!DOCTYPE html>
<html lang="pt-pt">

<head>
<meta charset="utf-8">
<title> Exercícios de P2 - Cláudio Ferreira </title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<div class=header> </div>

<?php
		$a = 4; $c = 6;
           
        echo "<p>4 é igual a 5?</p>";
        if($a == 5) {echo '<p>Verdadeiro</p>';} else {echo '<p>Falso</p>';}

        echo "<p>4 é diferente de 6?</p>";
        if($a != 6) {echo '<p>Verdadeiro</p>';} else {echo '<p>Falso</p>';}

        echo "<p>4 é maior que 5?</p>";
        if($a > 5) {echo '<p>Verdadeiro</p>';} else {echo '<p>Falso</p>';}

        echo "<p>(4 é menor que 5) e (6 é maior que 10)?</p>";
        if($a < 5) {echo '<p>Verdadeiro</p>';} else {echo '<p>Falso</p>';}
           
        echo "<p>Negação ((40 é menor que 50) ou (60 é maior que 90))?</p>";
        if(!(40 < 50 || 60 > 90)) {echo '<p>Verdadeiro</p>';} else {echo '<p>Falso</p>';}
		?>
    
       

</body>



</html>