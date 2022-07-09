<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    
        $num = 1;

        echo '-- Inicio do loop --<br>';

        while($num<10) {

            $num++; //critério de parada
            /* 
            if($num>100){
                break;
            } */

            if ($num == 2 || $num == 6) {
                continue;
            }

            echo $num . '<br>';
        }       

        echo '-- Fim do loop --';
    ?>
    
</body>
</html>