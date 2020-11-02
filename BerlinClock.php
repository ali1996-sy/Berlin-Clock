<?php


class BerlinClock
{
    private $simpleHours;
public function __construct()
{
    $this->simpleHours=array("1stHour","2ndHour","3rdHour","4thHour");

}
public function display_simple_hours($hours): String{
    $text="{";
    for($i=0;$i<$hours;$i++){
        $text+=$this->simpleHours[i]+",";
    }
    $text+="}";
    return $text;
}
}