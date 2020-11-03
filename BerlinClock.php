<?php

class BerlinClock
{
    private $simlpeMinutes ;
    private $Minutes_5 ;


    public function __construct()
    {
$simpleMinutes = array("OFF" , "OFF" , "OFF" , "OFF");
$Minutes_5 = array("OFF" , "OFF" ,"OFF" ,"OFF","OFF","OFF","OFF","OFF","OFF","OFF","OFF");

    }
    public function display_simple_minutes($minutes): string
    {

        $stringToReturn ="";
        for($index =0 ; $index < $minutes %5; $index++){
            $stringToReturn = $stringToReturn . "[" .$this ->simpleMinutes[$index] ="ON"."]";
        }
        for($index =$minutes % 5 ; $index < sizeof($this->simlpeMinutes); $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->simpleMinutes[$index]  . "]";
        }
        return $stringToReturn;
    }
    public function display_5_by_5_minutes($minutes):string{

  $stringToReturn ="";
        for($index =0 ; $index < floor($minutes /5); $index++){
            $stringToReturn = $stringToReturn . "[" .$this ->Minutes_5 [$index] ="ON" ."]";
        }
        for($index =$minutes ; $index < sizeof($this->simlpeMinutes); $index++){
            $stringToReturn = $stringToReturn . "[" .$this ->Minutes_5 [$index]  ."]";
        }
return $stringToReturn;
}
}