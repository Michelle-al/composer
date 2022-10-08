<?php
namespace App\Animals;

use App\Animal;

class Zebra extends Animal
{
    public function __construct($name){
        parent::__construct($name);
    }

    protected function getNoise(): string{
        return 'The ' . $this->getName() . ' says "hiiiii"';
    }
    public function __toString(): string
    {
        return $this->noise();
    }
}