<?php
       /************* DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex2.php                     *
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
        
        <form name="numero" method="POST" class=tipografia>

            <input type="number" name="a"> <br> 
            <input type="number" name="b"> <br> 
            <input type="number" name="c"> <br> 
            <input type="number" name="d"> <br> 
            <input type="submit" value="Enviar dados"> <br>

            
        </form>     

        <?php
 
 $a = @$_POST["a"];
 $b = @$_POST["b"];
 $c = @$_POST["c"];
 $d = @$_POST["d"];
 $soma;
 $multi;


 $soma = $a + $c;
 echo  "<p>A soma de $a e $c é $soma. </p>";

 $multi = $b * $d;
 echo "<p> A multiplicação de $b e $d é $multi </p>";

?>

    </body>
</html>