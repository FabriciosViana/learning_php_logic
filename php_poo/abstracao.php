<?php 
    //modelo
    class Funcionario{
        //atributos
        public $nome = 'José';
        public $telefone = '11 99999-9999';
        public $numFilhos = 2;
        public $cargo = null;
        public $salario = null;

        //getters e setters overloading/sobrecarregar
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }

        /*
        //getters e setters
        function setNome($nome){
            $this->nome = $nome;
        }
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
    
        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        } */

        //métodos
        function resumirCadFunc(){
            return $this->__get('nome')  . ' possui ' .  $this->__get('numFilhos') . " filho(s)";
        }
        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s)';


    echo '<br/>';
    echo '<hr/>';

    $x = new Funcionario();
    echo '<br/>';
    $x->__set('nome','Maria');
    $x->__set('numFilhos', 0);
    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s)';
 
