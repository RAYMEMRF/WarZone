<?php
//     $h = 1 + 8;
//     $variable = 23;
//     $vari = "holas";
//     $herodoc = <<<HO
//     Esto es una prueba de herodoc
// HO;
//
//     echo "Hola mundo<br><br>";
//     echo $h . "<br><br>";
//     echo gettype($variable) . "<br>";//consultar tipo de variable con gettype
//     echo "<br>" . $herodoc . "<br>";
//     echo "<br><br>esto es un saludo $vari";
//
//     if($variable == integer){
//         echo  "<hr>" . "jue verdadero :3 ";
//     }
//     else{
//         echo "<br>" . "no jue verdadero :(" ;
//     }
//
//     $gen = 'hola';
//
//     echo "<br> esto -> {$gen}"

    class Persona{
        public $nombre;
        public $apellido;
        public $edad;
        public $comida;
        public $bebida;
        public $dia;
        public $cansancio;


        public function __construct($nombre, $apellido,$edad, $comida,$bebida,$dia){
            $this->nombre = $nombre;
            $this ->apellido = $apellido;
            $this->edad = $edad;
            $this->comida = $comida;
            $this->bebida = $bebida;
            $this->dia = $dia;
        }

        // public function comer(){
        //
        // }
        //
        // public function beber(){
        //
        // }

        public function hambre(){
            $this->dia * 100 / 1;
        }

        public function sed(){
            $this->dia  * 100 / 1;
        }

        public function cansancioc (){
            $this->cansancio = (self::hambre() + self::sed()) * 100 / 1;
        }

        // public function correr(){
        //     $this->distancia * 100 /
        // }
    }

    $Juancho = new Persona("Juan","Sanchez",25,"Arroz con pollo", "Refresco",0.5); //dia tendra un rango de 0 a 1

$Juancho->cansancioc();



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
    //    $loteria = new Loteria(5,5);
    //    $loteria->sortear();﻿
?>
