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

        $texto = 'Curso Completo de PHP';
    
        //string to lower
        echo $texto;
        echo '<br>';
        echo strtolower($texto);

        echo '<hr>';
        //string to upper
        echo $texto;
        echo '<br>';
        echo strtoupper($texto);

        echo '<hr>';
        // uppercase first
        echo $texto;
        echo '<br>';
        echo ucfirst($texto);

        echo '<hr>';
        // string lenght
        echo $texto;
        echo '<br>';
        echo strlen($texto); //espaço em branco conta como caracter

        echo '<hr>';
        // string replace
        echo $texto;
        echo '<br>';
        echo str_replace('.' , ',', '22.20'); //trocar vírgula por ponto; vice versa

        echo '<hr>';
        // string 
        echo $texto;
        echo '<br>';

        echo substr($texto, 0, 14) . ' ...';

    ?>
    
</body>
</html>