<?php
       /************* DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex5.php                     *
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
   

    <body class= tipografia>
    <div class=header> </div>
   
    <form name="numerar" method="POST">
           <p> <input  type="number"   name="num"     placeholder="Número" required> </p>
           <p> <input  name="submeter" type="submit"   value="ENVIAR">
        </form>



    <?php

    $num = @$_POST['num'];
    if($num > 0) {
        echo "escreva um número maior que 0"
    } else {
        for($num; )
    }

    ?>


    </body>
</html>