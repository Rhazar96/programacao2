<?php
       /************* DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex1.php                     *
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
        $num = @$_GET["num"];

        if($num > 100)  {
         echo "<p>O $num é maior que 100</p>";
        } elseif ($num == 100) {
        echo "<p>o $num é igual a 100</p>";  
         } else {
         echo "<p>o $num é menor que 100</p>";
        }   
        ?>        

        
        <form method="GET">

            <p> <input type="number" name="num">    </p>
            <p> <input type="submit" value="Enviar dados">   </p>
        
        </form>     
        




    </body>
</html>