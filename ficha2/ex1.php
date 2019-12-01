
<!doctype html>
<html lang="PT">

   
    <head> 

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title> Exercicio 1</title>
    </head>


     

    <body>

    <?php
 
    $num = @$_GET["num"];

    if($num > 100)  {
    echo "O $num é maior que 100";
    } elseif ($num == 100) {
    echo "o $num é igual a 100";  
    } else {
    echo "o $num é menor que 100";
    }

?>        

        <form method="GET">

            <input type="number" name="num"> <br> 
            <input type="submit" value="Enviar dados"> <br>

            
        </form>     





    </body>
</html>