<html>
    <head>
        <meta charset= "utf-8"/>
        <title>curso php</title>
    </head>
    <body>
        <?php
        //funcao is_array() verifica se é um array
            /*
            $array = ['notebook', 'teclado'];
            $retorno = is_array($array);
            if($retorno){
                echo 'Sim é um array';
            }else{
                echo 'Não é um array';
            }*/

        //funcao array_keys() retorna todas as chaves de um array
            /*
            $array = [1=> 'a', 7=> 'b', 18=> 'c'];
            echo '<pre>';
            print_r ($array);
            echo '<pre>';
            $chaves_array = array_keys($array);
            echo '<pre>';
            print_r ($chaves_array);
            echo '<pre>';
            */
        /*funcao sort() ordena um array inclusive modificando os indices de acordo com a 
            ordenação*/
            /*
            $array = ['teclado','gabinete', 'cabo hdmi','mouse','notebook', 'fonte atx'];
            echo '<pre>';
            print_r ($array);
            echo '<pre>';
            sort($array); //true ou false para tentativa de ordenação
            echo '<pre>';
            print_r ($array);
            echo '<pre>';
            */
        //funcao asort() ordena o array, preservando o seu indice original
            /*
            $array = ['teclado','gabinete', 'cabo hdmi','mouse','notebook', 'fonte atx'];
            echo '<pre>';
            print_r ($array);
            echo '<pre>';
            asort($array);
            echo '<pre>';
            print_r ($array);
            echo '<pre>';
            */
        //funcao count() conta a quantidade de elementos existentes de um array
            /*
            $array = ['teclado','gabinete', 'cabo hdmi','mouse','notebook', 'fonte atx'];
            echo '<pre>';
            print_r ($array);
            echo '<pre>';
            echo count($array);
            echo '<pre>';
            print_r ($array);
            echo '<pre>';
            */
        //funcao array_merge() funde um ou mais arrays
            /*
            $array1 = ['osx', 'windows'];
            $array2 = ['linux'];
            $array3 = ['solaris'];
            $novo_array = array_merge($array1, $array2, $array3);

            echo '<pre>';
            print_r ($novo_array);
            echo '<pre>';
            */

        //funcao explode() Divide um string baseada em um delimitador
            /*
            $string = '26/04/2018';
            $array_retorno = explode('/', $string);
            echo '<pre>';
            print_r ($array_retorno);
            echo '<pre>';
            */
        // funcao implode() junta os elementos de um array em uma string
            /*
            $array = ['a','b', 'x', 'y'];
            $string_retorno = implode(',', $array);
            echo $string_retorno;
            */
            
        ?>


    </body>
</html>