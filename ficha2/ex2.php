
<!doctype html>
<html lang="PT">

   
    <head> 

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title> Exercicio 1</title>
    </head>

    <body>
        
        <form name="numero" method="POST">

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
 echo  "A soma de $a e $c é $soma. ";

 $multi = $b * $d;
 echo "A multiplicação de $b e $d é $multi";

?>

    </body>
</html>