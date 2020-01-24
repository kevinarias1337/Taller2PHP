<?php
    
    class Taquilla{

        private $valorEdad;

        public function __construct(){
            $this->valorEdad=0;
        }
        public function getValoredad(){
            return $this->valorEdad;
        }
        public function setValoredad($edad){
            $this->valorEdad=$edad;
        }

        public function taquillaValor(){
            $edad2=$this->valorEdad;
            if($edad2<5){
                echo "¡La función es gratis!";
            }
            if($edad2>=5 && $edad2<=12){
                echo "¡Pagas la mitad del precio!: $5.000";
            }
            if($edad2>=13 && $edad2<=54){
                echo "¡Pagas el precio completo!: $10.000";
            }
            if($edad2>=55){
                echo "!La función es gratis!";
            }
        }
    }



?>