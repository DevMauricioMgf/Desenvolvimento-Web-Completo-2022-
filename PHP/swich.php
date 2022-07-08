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

        $parametro = true; // no php o valor true é interpretado pelo valor 1
    
        switch($parametro) {
            case 1:
                echo 'Entrou no case 1';
                break;

            case 'abc':
                echo 'Entrou no case 2';
                break;

            case true:
                echo 'Entrou no case 3';
                break;

            default:
                echo 'ERRO';
                break;
        }
    
    ?>
    
</body>
</html>