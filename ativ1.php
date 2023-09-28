<html>
    <head>
        <title>Ativ 1</title>
    </head>
    <body>
        <h1>Votações</h1><br>
        <p>Coloque sua idade:</p>
        <form method="get" action=>
            <input type = number name="idade"></input>
            <input type = submit></input>
        </form>
        <?php
            $num = $_GET['idade'];
            if($num < 16){
                echo "Não pode votar";
            }
            elseif ($num >= 16 && $num <= 18){
                echo "Voto é facultativo";
            }
            elseif($num = 19 && $num < 66){
                echo "Voto é obrigatório";
            }
            else{
                echo "Voto é Facultativo";
            }
        ?> 
        <style>
            body{
                text-align: center;
            }

        </style>
    </body>
</html>