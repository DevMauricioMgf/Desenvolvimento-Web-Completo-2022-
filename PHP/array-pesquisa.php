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

        //in_array() -> true ou false para a existência do que está sendo procurado


        //array_search() -> retorna o índice do valor pesquisado caso o valor exista

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        

        //$existe = in_array('Banana', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio
        $existe = array_search('Morango', $lista_frutas);
        //caso false -> null
        
/* 
            if($existe != null) {
            echo 'Sim, o valor pesquisado existe no array.';
        } else {
            echo 'Não, o valor pesquisado não existe no array.';
        } */

        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('Morango' ,$lista_coisas['frutas']);
    
    
    
    
    ?>
    
</body>
</html>