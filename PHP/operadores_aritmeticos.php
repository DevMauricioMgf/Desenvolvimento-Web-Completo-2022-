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
    
        $num1 = 11;
        $num2 = 3;

        echo "A soma entre $num1 e $num2 é: " . ($num1 + $num2);
        echo '<br>';
        echo "A diferença entre $num1 e $num2 é: " . ($num1 - $num2);
        echo '<br>';
        echo "A multiplicação entre $num1 e $num2 é: " . ($num1 * $num2);
        echo '<br>';
        echo "A divisão entre $num1 e $num2 é: " . ($num1 / $num2);
        echo '<br>';
        echo "O módulo entre $num1 e $num2 é: " . ($num1 % $num2); //resto da divisão
    
    ?>
    
</body>
</html>