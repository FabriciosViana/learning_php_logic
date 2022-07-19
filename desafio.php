<html>
    <head>
        <meta charset= "utf-8"/>
        <title>curso php</title>
    </head>
    <body>
        <h1>Desafio:</h1>
        <h3>Crie um script capaz de produzir, através de um laço de repetição, um array
            com 6 elementos númericos aleatórios entre 1 e 60, simulando o funcionamento
            da mega sena. Atente-se ao fato de que os números aleatórios contidos dentro
            do array não podem ser repetidos.
        </h3>
        <hr>
        <?php
            $numeros = [];
            while(count($numeros) <= 5){
                $num = rand(1, 60);
                if(!in_array($num, $numeros)){
                    $numeros[] = $num;
                }

            }
            echo '<pre>';
            print_r($numeros);
            echo '<pre/>';

        ?>


    </body>
</html>