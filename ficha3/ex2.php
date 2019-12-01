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
        
        <form name="numero" method="GET" class=tipografia>

            <input type="number" name="numOne"> <br> 
            <input type="number" name="numTwo"> <br> 
            <input type="submit" value="Enviar dados"> <br>

            
        </form>   
          
        <?php

        $numOne = @$_GET["numOne"];
        $numTwo = @$_GET["numTwo"];
        
        do {
        
        
        }while ($numOne )
        
        ?>

        
    </body>
</html>