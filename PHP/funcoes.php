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

        //void (sem retorno)
        function exibirBoasVindas() {
            echo 'Bem-vindo ao curso de PHP!<br>';
        }

        exibirBoasVindas();

        //return(com retorno)
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area . ' m²';
        }

        $resultado = calcularAreaTerreno(5, 25);
        echo $resultado;

        /* 
            Quando utilizar return? com return o valor retornado pode ser trabalhado dentro da lógica do script 
        
        */
    
    ?>
    
</body>
</html>