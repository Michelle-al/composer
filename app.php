<?php
namespace App;

use App\Animals\Dove;
use App\Animals\Fish;
use App\Animals\Zebra;
use App\Animals\Parrot;
use App\Animals\CatFish;
use App\Animals\Elephant;
use App\Animals\ClownFish;
use App\Animals\BubbleFish;

require __DIR__ . '/vendor/autoload.php';

//instanciation of animals
$animals = array(
    new Fish("fish1"),
    new Fish("fish2"),
    new Fish("fish3"),
    new Fish("fish4"),
    new Fish("fish5"),
    new BubbleFish("bubbleFish1"),
    new BubbleFish("bubbleFish2"),
    new BubbleFish("bubbleFish3"),
    new CatFish("catFish1"),
    new CatFish("catFish2"),
    new ClownFish("clownFish1"),
    new Elephant("Elephant1"),
    new Elephant("Elephant2"),
    new Zebra("zebra"),
    new Parrot("parrot 1"),
    new Parrot("parrot 2"),
    new Parrot("parrot 3"),
    new Parrot("parrot 4"),
    new Parrot("parrot 5"),
    new Parrot("parrot 6"),
    new Parrot("parrot 7"),
    new Parrot("parrot 8"),
    new Parrot("parrot 9"),
    new Parrot("parrot 10"),
    new Dove("Dove 1"),
    new Dove("Dove 2")
);
 

// function createAnimals($name, $nombre){
//     for($i=1; $i < $nombre; $i++){
//         $nameForArray = '$'. $name . $i;
//         $nameForArray = 'new  ' . $name . '("' . $name . $i . '")';
//         array_push($animals, $nameForArray);
//         return $animals;
//     }
// }
// createAnimals("Fish",5);
 $animal = "";
for($i=0; $i < count($animals); $i++){
    $animal .= $animals[$i]. PHP_EOL;
    
}
echo $animal;