<?php
namespace App\model;

    class Carro {
        public $nome;
        public $marca;
        public $potencia;
        public $torque;
        public $aerodinamica;
        public $tracao;
    
        function __construct($nome, $marca, $potencia, $torque) {
            $this->nome = $nome;
            $this->marca = $marca;
            $this->potencia = $potencia;
            $this->torque = $torque;


            
        }
        

}