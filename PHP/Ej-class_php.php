<?php

    class Persona{
        public $genero
        public $edad
        public $nombre
        public $apellido
        public $ci = true

        public function __construct($nombre, $edad, $apellido,){
            $this-> nombre = $nombre
            $this -> apellido = $apellido
            $this-> edad = $edad
        }
    }




// // usando los métodos constructores y destructores.
//
//    class Loteria {
//       // atributos
//       public $numero;
//       public $intentos;
//       public $total_intentos;
//       public $resultado = false;
//
//       // metodos
//       public function __construct($numero, $intentos){
//          $this->numero = $numero;
//          $this->intentos = $intentos;
//       }
//
//       public function sortear(){
//          $minimo = $this->numero / 2;
//          $maximo = $this->numero * 2;
//          for ($i=0; $i < $this->intentos; $i++) {
//             if($this->resultado){
//                break;
//             }
//             $int = rand($minimo, $maximo);
//             self::intentos($int, $i);
//          }
//       }
//
//       public function intentos($int, $ciclo){
//          if($int == $this->numero){
//             echo "<strong>". $int ." == ". $this->numero ."</strong><br>";
//             $this->total_intentos = $ciclo; // el numero de iteraciones del bucle será la cantidad de intentos
//             $this->resultado = true;
//          }else{
//             echo $int ." != ". $this->numero . "<br>";
//          }
//       }
//
//       public function __destruct(){
//          if($this->resultado){
//             echo "¡Felicidades!, has acertado en ". ($this->total_intentos + 1) . " intentos";
//          }else{
//             echo "¡Rayos!, has perdido en ". $this->intentos . " intentos";
//          }
//       }
//    }
//
//    $loteria = new Loteria(10,5);
//    $loteria->sortear();﻿





   ?>
