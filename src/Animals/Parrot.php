<?php
namespace App\Animals;

use App\Animal;

class Parrot extends Animal
{
    public function __construct($name){
        parent::__construct($name);
    }

    protected function getNoise(): string{
        return 'The ' . $this->getName() . ' says "coco"';
    }
}