<?php
       /************* DESCRIÇÃO DO DOCUMENTO ************
        * Nome do ficheiro: ex4.php                     *
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
            $primeira = round('4,78905',2);
            $segunda = round('4,7',2);
            $terceira = round('5,8954',2);
            $quarta = round('5',2);
        ?>

    <p>   Arredondamentos com duas casa decimais: </p>
    <p>    4,78905= <?php echo number_format((float)$primeira, 2, '.', '') ?>   </p>
    <p>    4,7=  <?php echo number_format((float)$segunda, 2, '.', '')?>    </p>
    <p>    5,8954= <?php  echo number_format((float)$terceira, 2, '.', '')?>   </p>
    <p>    5= <?php echo number_format((float)$quarta, 2, '.', '')?>    </p>
   

</body>



</html>