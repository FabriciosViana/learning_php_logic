<html>
    <head>
        <meta charset= "utf-8"/>
        <title>curso php</title>
    </head>
    <body>
        <?php
            $lista_coisas = [];
            $lista_coisas['frutas'] = array(1 =>'Banana',2 => 'Maçã',3 => 'Morango',4 => 'Uva');
            $lista_coisas['pessoas'] = [1=>'João',2=> 'José',3=> 'Maria'];
            
            echo '<pre>';
                print_r($lista_coisas);
            echo '<pre>';
            echo '<hr>';
            echo $lista_coisas['frutas'][3];
            echo '<br>';
            echo $lista_coisas['pessoas'][2];
        ?>


    </body>
</html>