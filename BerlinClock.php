<?php


class BerlinClock
{
    private $simpleHours;
    private $bloc5_hours;
public function __construct()
{
    $this->simpleHours=array("1stHour","2ndHour","3rdHour","4thHour");
    $this->bloc5_hours=array("5h","10h","15h","20h");

}
public function display_simple_hours($hours): String{
    $text="{";
    for($i=0;$i<$hours;$i++){
        $text+=$this->simpleHours[i]+",";
    }
    $text+="}";
    return $text;
}
    public function display_bloc5_hours($hours): String{
        $text="{";
        for($i=0;$i<$hours%5;$i++){
            $text+=$this->bloc5_hours[i]+",";
        }
        $text+="}";
        return $text;
    }
}