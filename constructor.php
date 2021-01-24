<?php 
class Fruit {
    public $name;
    public $color; 

    //create construct
    function __construct($name, $color){
        $this->name = $name; 
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}
// create first object
$apple = new Fruit("Apple", "red");
// create another object
$banana = new Fruit("Banana", "yellow");
echo $apple -> get_name()." is: ". $apple -> get_color();
echo "<br>";
echo $banana -> get_name()." is: ".$banana ->get_color();
?>