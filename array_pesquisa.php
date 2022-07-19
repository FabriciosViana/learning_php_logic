<html>
    <head>
        <meta charset= "utf-8"/>
        <title>curso php</title>
    </head>
    <body>
        <?php
            //in_array() => true ou false para a existência do que está sendo procurado
            //array_search() => retorna o indice do valor pesquisado, caso ele exista
            $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
            // echo '<pre>';
            //     print_r($lista_frutas);
            // echo '<pre>';

            // $existe = in_array('Abacati', $lista_frutas);
            // $existe = array_search('Banana', $lista_frutas);
            
            // if($existe){
            //     echo 'Sim, o valor existe no array';
            // }else{
            //     echo 'Não, o valor não existe no array';
            // }
            // echo $existe;
            $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['João', 'Maria']
            ];

            echo '<pre>';
                print_r($lista_coisas);
            echo '<pre>';

            echo array_search('Uva', $lista_coisas['frutas']);

            ?>
             


    </body>
</html>