<?php 

class Human {
    public $name = "";
    public $weight = 0;

    public function eat() {
        $this->weight += 1;
    }

    public function walk() {
        $this->weight -= 1;
    }
}

$tanaka = new Human();
$tanaka->name = "田中";
$tanaka->weight = 70;
$tanaka->eat();

print $tanaka->name . "の体重は" . $tanaka->weight . "です" . "\n";

class Car {
    public $model = "";
    public $speed = 0;
    public $distance = 0;

    public function run($time) {
        $this->distance = $this->speed * $time;
    }
}

$models = ["ベンツ", "ポルシェ", "レクサス", "プリウス"];
$model = $models[rand(0, 3)];
$speed = rand(70, 120);
$hour = rand(1, 5);

$car = new Car();
$car->model = $model;
$car->speed = $speed;
$car->run($hour);

print $car->model . "が" . $car->speed . "km/hで" . $car->distance . "km走りました" . "\n";