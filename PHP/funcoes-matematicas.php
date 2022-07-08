<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <?php
    
        $num = 9.6;

        echo ceil($num); // arredonda para cima
        echo "<br>";
        echo floor($num);
        echo "<br>";
        echo round($num);// arredonda de acordo a casa decimal .5
        echo "<br>";
        echo rand(1,10); //gerar um valor aleatório
        echo '<br> ' . getrandmax();
        echo '<br>';
        echo sqrt(26.01);
    
    
    ?>
    
</body>
</html>