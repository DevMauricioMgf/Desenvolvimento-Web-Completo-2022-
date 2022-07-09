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

       $funcionario1 = null;
       $funcionario2 = '';
       $funcionario3 = false;

       //valores null
       if(is_null($funcionario1)){
        echo 'Sim, a variável é null';
       }else{
        echo 'Não, a variável é null';
       }

       echo '<br>';

       if(is_null($funcionario2)){
        echo 'Sim, a variável é null';
       }else{
        echo 'Não, a variável é null';
       }

       echo '<br>';

       if(is_null($funcionario3)){
        echo 'Sim, a variável é null';
       }else{
        echo 'Não, a variável é null';
       }

       echo '<br>';

       echo '<hr>';

       //valores vazios
       if(empty($funcionario1)){
        echo 'Sim, a variável esta vazia';
       }else{
        echo 'Não, a variável esta vazia';
       }

       echo '<br>';

       if(empty($funcionario2)){
        echo 'Sim, a variável esta vazia';
       }else{
        echo 'Não, a variável esta vazia';
       }

       echo '<br>';

       
       if(empty($funcionario3)){
        echo 'Sim, a variável esta vazia';
       }else{
        echo 'Não, a variável esta vazia';
       }

       echo '<br>';

       //null, empty e false entram no parâmetro empty

    
    ?>
    
</body>
</html>