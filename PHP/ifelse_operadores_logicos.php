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

        //operadores condicionais
        // == igual
        // === identico
        //!= ou <> 
        //!== não identico
        //< menor; > maior
        //<= menor ou igual; >= maior ou igual


        //operadores lógicos
        // f e v = f
        //E: && ou AND -> retorna verdadeiro se todos os resultados forem verdadeiros

        //OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados for veredadeiro
        //XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa
        //! -> inverte o resultado retornado pela expressão
        //v xor v = f
        //() estabelecer precedência
        //f = !(f) = v

        if (22 == 22 && 3 == 3 && !(5!=5)) {
            echo 'Verdadeiro';
        } else{
            echo 'Falso';
        }
    ?>

    
</body>
</html>