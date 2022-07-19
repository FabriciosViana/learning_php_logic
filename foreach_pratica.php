<html>
    <head>
        <meta charset= "utf-8"/>
        <title>curso php</title>
    </head>
    <body>
        <?php
            $funcionarios = [
                ['nome'=>'João', 'salario' => 2500, 'data_nasc'=> '06/03/1970'], 
                ['nome'=>'Maria', 'salario' => 3000], 
                ['nome'=>'Júlia', 'salario' => 2200]
            ];
            echo '<pre>';
            print_r($funcionarios);
            echo '<pre/>';
            foreach($funcionarios as $idx => $funcionario){
                // echo "ID $idx - Nome: $nome_funcionario" . '<br/>';
                foreach($funcionario as $idx2 => $valor){
                    echo "$idx2 - $valor <br/>";

                }
                echo '<hr/>';
            }
        ?>


    </body>
</html>