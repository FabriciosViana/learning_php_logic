<?php

use Veiculo as GlobalVeiculo;

    class Carro extends Veiculo{
        public $teto_solar = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }
        function alterarPosicaoVolante(){
            echo 'Alterar posição do volante';
        }
    }
    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        
        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }
        function trocarMarcha(){
            echo 'Desengatar embreagem como o mão e engatar marcha com a pé';

        }
        function empinar(){
            echo 'Empinar';
        }

    }

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }
        function freiar(){
            echo 'Freiar';
        }
        function trocarMarcha(){
            echo 'Desengatar embreagem como o pé e engatar marcha com a mão';
        }
    }
    class Caminhao extends Veiculo{

    }

    $carro = new Carro('ABC1234', 'Branco');
    $carro->trocarMarcha();
    echo '<br/>';
    $moto = new Moto('DEF1122', 'Preta');
    $caminhao = new Caminhao;
    $moto->trocarMarcha();
    echo '<br/>';   
    $caminhao->trocarMarcha();


   



?>