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
   

    <body class= tipografia>
    <div class=header> </div>
   
    <form name="ordenacao" method="POST">
           <p> <input  type="number"   name="a"     placeholder="Número A" required> </p>
           <p> <input  type="number"   name="b"     placeholder="Número B" required> </p>
           <p> <input  type="number"   name="c"     placeholder="Número C" required> </p>
           <p> <input  type="number"   name="d"     placeholder="Número D" required> </p>
           <p> <input  name="submeter" type="submit"   value="ORDENAR">
        </form>

    <?php

$numa = $_POST['a'];
$numb = $_POST['b'];
$numc = $_POST['c'];
$numd = $_POST['d'];

$numeros= array($numa,$numb,$numc,$numd);
sort($numeros);

echo "A lista de números ordenada é: <br>";

$arrlength = count($numeros);
for($i=0; $i<$arrlength; $i++){
    echo $numeros[$i];
    echo "<br>";
}
?>

    </body>
</html>