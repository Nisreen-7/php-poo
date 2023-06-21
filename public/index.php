<?php
use App\Example\Dog;
use App\Example\Fish;
use App\Example\Person;
use App\Example\Zoo;

require '../vendor/autoload.php';


$dog = new Dog("Fido", "Corgi");
$dog->bark();
echo "<br>";
$dog->eat();
echo "<br>";

$person1 = new Person('khattam', 'nisreen');
$person2 = new Person('Alassali', 'louna');

$person1->speak($person2);
echo "<br>";
$fish = new Fish();
$fish->eat();
echo "<br>";
$zoo = new Zoo();
$zoo->add($person1);
$zoo->add($fish);
$zoo->add($dog);
echo "<br>";
$zoo->feedAnimals();