<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
</head>
    <style>
        body{
            font-family: "Helvetica Neue",Helvetica,Arial;
            background-color: lightgrey;
            text-align: center;
        }

        input{
            padding: 10px;
            width: 40px;
        }

        .enviar{
            padding: 10px;
            width: 100px;
            margin-bottom: 20px;
        }
    </style>
<body>
    <h1>Doador de sangue</h1>

    <form action="" method="post"> 

    <h2>Informe a sua idade</h2><input type="number" name="idade" id="idade">

    <h2>Informe o seu peso</h2><input type="number" name="peso" id="peso">

    <input class="enviar" type="submit" id="verificar" value="Verificar" ></button>

    </form>   



    <?php

        if(isset($_POST['idade']) && isset($_POST['peso']) && !empty($_POST['idade'])  && !empty($_POST['peso'])) {

            $idade = addslashes($_POST['idade']);
            $peso = addslashes($_POST['peso']);

            if (($idade >= 16 && $idade <= 69) && $peso >=50) {
                $atende = 'Atende aos requisitos';
            } else{
                $atende = 'Não atende aos requisitos';
            }
            echo $atende;
        } else{
            echo 'ERROR';
        }

    ?>

    
</body>
</html>