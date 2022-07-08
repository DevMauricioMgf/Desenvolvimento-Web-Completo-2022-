<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>

    <?php
    
        /* Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro */

        function calcularImpostoDeRenda($calculo) {

            if ($calculo <= 1903.98){
                $aliquota = false;
            } else if ($calculo <= 2826.65){
                $aliquota = 7.5;
            } else if ($calculo <= 3751.05){
                $aliquota = 15;
            } else if ($calculo <= 4664.68){
                $aliquota = 22.5;
            } else if ($calculo > 4664.68){
                $aliquota = 27.5;
            } else {
                echo 'Error';
            }

            $resultado = $calculo * ($aliquota/100);
            return $resultado;

        }
        
        $valor = calcularImpostoDeRenda(3751.05);
        echo 'O valor do imposto a ser pago é de R$ ' . $valor;

    
    
    ?>
    
</body>
</html>