<html>
    <head>
        <meta charset= "utf-8"/>
        <title>curso php</title>
    </head>
    <body>
        <?php
            //Arrays numéricos
            /*
            $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
            $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
            $lista_frutas[]= 'Abacaxi';
            
            echo '<pre>';
                var_dump($lista_frutas);
             echo '<pre>';
            echo '<hr/>';

            echo '<pre>';
                print_r($lista_frutas);
            echo '<pre>';
            echo $lista_frutas[2];
            */

            //Arrays associativos
            $lista_frutas = array(
                'a'=> 'Banana',
                'b'=>'Maçã', 
                'x'=>'Morango', 
                'z'=>'Uva', 
                '2'=>'Abacate');
            $lista_frutas['w'] = 'Abacaxi';

            echo '<pre>';
                var_dump($lista_frutas);
            echo '<pre>';
           
            echo $lista_frutas['w'];

        ?>


    </body>
</html>