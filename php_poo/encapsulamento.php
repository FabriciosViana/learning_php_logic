<?php 
    class Pai{
        private $nome = 'jorge';
        protected $sobrenome = 'silva';
        public $humor = 'feliz';
        
        public function __get($atrr){
            return $this->$atrr;
        }
        public function __set($atrr, $value){
            $this->$atrr = $value;
        }
        private function executarMania(){
            echo 'Assobiar';
        }
        protected function responder(){
            echo 'Oi';
        }
        public function executarAcao(){
            $x= rand(1, 10);
            if($x >= 1 && $x<= 8){
                $this->responder();
            }else{
                $this->executarMania();
            }
           
        }

    }

    class Filho extends Pai{
        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '<pre/>';
        }
        private function executarMania(){
            echo 'Cantar';
        }

        public function x(){
            $this->executarMania();
        }
        protected function responder(){
            echo 'Olá';
        }
    }

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '<pre/>';
    $filho->executarAcao();
    echo '<br/>';
    $filho->x();



   


    // $pai = new Pai();
    // //echo $pai->humor;
    // echo $pai->executarAcao();
    // echo '<br/>';
   
    
?>