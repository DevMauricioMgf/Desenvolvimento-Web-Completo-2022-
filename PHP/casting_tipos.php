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
    
        //gettype() => retorna o tipoo da variável
        $valor = '15.35';
        $valor2 = (int)$valor; //float, double, real

        echo $valor . ' ' .gettype($valor);
        echo '<br>';
        echo $valor2 . ' ' .gettype($valor2);
    ?>
    
</body>
</html>