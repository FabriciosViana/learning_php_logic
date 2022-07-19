<html>
    <head>
        <meta charset= "utf-8"/>
        <title>curso php</title>
    </head>
    <body>
        <?php
            $registros = [
                ['titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteúdo notícia 1'], 
                ['titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteúdo notícia 2'],
                ['titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteúdo notícia 3'],
                ['titulo' => 'Titulo noticia 4', 'conteudo' => 'Conteúdo notícia 4']
            ];
            echo '<pre>';
            print_r($registros);
            echo '<pre>';
            
            $idx = 0;
            //count -> conta a quantidade de elementos de array
            /*
            echo ' O array possui: ' . count($registros) . ' registros';
            echo '<br/>';
            while($idx < count($registros)){
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                // print_r() ;
                echo '<hr/>';
                $idx++;
            }
            */
            /*
            do{
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                echo '<hr/>';
                $idx++;

            }while($idx < count($registros));*/

            for($idx = 0;$idx < count($registros); $idx++){
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                echo '<hr/>';
            }
            

        ?>


    </body>
</html>