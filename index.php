<?php

 class Cassabottiglie{

   private $numBottiglie;
   private $pesoSingBot;
   private $pesoCassa;

   function __construct($numBottiglie, $pesoSingBot, $pesoCassa){

      $this -> numBottiglie = $numBottiglie;
      $this -> pesoSingBot = $pesoSingBot;
      $this -> pesoCassa = $pesoCassa;

   }

   private function calcPesoTotBot(){

      return $this -> pesoSingBot * $this -> numBottiglie;

   }

   private function calcPesoTot(){

     return $this -> pesoCassa + $this -> calcPesoTotBot();
   }

   public function printMe(){
     echo "Sono una cassa con " . $this -> numBottiglie . " bottiglie.
     Una singola bottiglia pesa " . $this -> pesoSingBot . ". La cassa vuota pesa: " . $this -> pesoCassa . "<br>
     Il peso tot delle bottiglie è " . $this -> calcPesoTotBot() . "<br>
     La cassa carica pesa: " . $this -> calcPesoTot() . "<hr>";
   }

 }

 $cassa1 = new Cassabottiglie(70,2,10);

 $cassa1 -> printMe();

 $cassa2 = new Cassabottiglie(50,3,10);

 $cassa2 -> printMe();

 $cassa3 = new Cassabottiglie(20,5,20);

 $cassa3 -> printMe();

 ?>
