<?php 

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight; 
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();

// or about cars

class Car{
    public $name;
    public $year;

    public function __construct($name, $year){
        $this->name = $name;
        $this->year = $year;
    }
    public function describe(){
        echo " Car name is : {$this->name} and cars year is : {$this->year} year"."<BR>";
    }

}
 class BMW extends Car{
    public $color;
    public function __construct($name, $year, $color){
        $this->name = $name;
        $this->year = $year;
        $this->color = $color;
    }
    public function print_color(){
        echo "{$this->name} has a {$this->color}"."<BR>";
    }
    public function print_cars_year(){
        echo "Year of this car is: {$this->year}"."<BR>";
    }
}

// create another extends class
class MB extends Car{
    public $weight;
    public function __construct($name, $year, $weight){
        $this->name = $name;
        $this->year = $year;
        $this->weight = $weight;
    }
}
// create objects(this objects have different arguments ! and constructors)
$bmw = new BMW("BMW", "2010","red");
$md = new MB("Mers-Benz", "1998", "600432");

$bmw->describe();
$md -> describe();
$bmw->print_cars_year();
$bmw->print_color();
?>