<?php
namespace App;

use App\Animals\Fish;

require __DIR__ . '/vendor/autoload.php';

$fish = new Fish("poisson");
echo $fish->noise();