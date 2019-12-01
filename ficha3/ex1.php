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

    <div class=tipografia>
    <form name="numero" method="GET">

        <input type="number" name="num"> <br> 
        <input type="submit" value="Enviar dados"> <br>
     </form>  


            <p>
            <?php
            switch(@$_GET["num"]) {
                case 1: echo "Janeiro"; break;
                case 2: echo "Fevereiro"; break;
                case 3: echo "Março"; break;
                case 4: echo "Abril"; break;
                case 5: echo "Maio"; break;
                case 6: echo "Junho"; break;
                case 7: echo "Julho"; break;
                case 8: echo "Agosto"; break;
                case 9: echo "Setembro"; break;
                case 10: echo "Outubro"; break;
                case 11: echo "Novembro"; break;
                case 12: echo "Dezembro"; break;
            
                default: echo "Erro"; break; };
            ?>
            </p>
            
           

    </body>
</html>