<?php 
    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
    }

    //-----------------------------------\\

    class Geladeira implements EquipamentoEletronicoInterface{
        public function abrirPorta(){
            echo 'Abrir a porta';
        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }


    class Tv implements EquipamentoEletronicoInterface{
        public function trocarCanal(){
            echo 'Trocar de canal';
        }
        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }

    $x= new Geladeira();
    $x->ligar();


    $y= new Tv();

    //----------------------------------\\


    interface MamiferoInterface{
        public function respirar();
    }

    interface TerrestreInterface{
        public function andar();
    }

    interface AquaticoInterface{
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface{

        public function respirar(){
            echo 'Respirar';
        }
        public function andar(){
            echo 'andar';
        }
        public function conversar(){
            echo 'conversar';
        }

    }

    class Baleia implements MamiferoInterface, AquaticoInterface{

        public function respirar(){
            echo 'Respirar';
        }
        public function nadar(){
            echo 'Nadar';
        }

        protected function esguichar(){
            echo 'Esguichar';
        }
    }
    //-----------------------------------------\\\

    interface AnimalInterface {
        public function comer();
    }
    interface  AveInterface extends AnimalInterface{
        public function voar();
        public function comer();
    }

    class Papagaio implements AveInterface{
        public function voar(){
            echo 'voar';
        }
        public function comer(){
            echo 'comer';
        }
    }
?>