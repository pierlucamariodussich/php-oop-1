<?php 

class Room{

      public $number;
      public $floor;
      public $price;

      public function totalprice($guest, $night){
          
           return $this->price * $guest * $night;
      }

      function __construct($number, $floor,$price){
          $this->number = $number;
          $this->floor = $floor;
          $this->price = $price;
      }

  

}

function price($month){
    if($month == "02" || $month =="03" || $month =="04" || $month =="05"|| 
    $month =="06"|| $month =="09"|| $month =="10"|| $month =="11"){
      return $price = 70;
    } elseif ($month == "07" || $month == "08"){
      return $price = 100;
    } elseif ($month == "01" || $month == "12"){
      return $price = 90;
    } 
};


$month= date("m");
$room101 = new Room(101,1,price($month));
$room102 = new Room(102,1,price($month));
$room201 = new Room(103,2,price($month));

$rooms = [];
$rooms[]= $room101;
$rooms[]= $room102;
$rooms[]= $room201;




foreach ($rooms as $value ){
    echo '<h2> La stanza '.$value->number." che si trova al piano ".$value->floor."° costa: ".$value->price."€ a notte per persona </h2> <br> "; 
};


echo "<h2>Il prezzo totale della camera ".$room101->number." per due persone e per 5 notti è ".$room101->totalprice(2,5)."€. </h2>";





















?>