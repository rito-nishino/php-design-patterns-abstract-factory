<?php
require_once 'autoload.php';

use App\Cars\Factories\LaravelFactory;
use App\Cars\Factories\CakephpFactory;


$car_models = [
    1 => "laravel",
    2 => "cakephp"
];

$target = $car_models[rand(1,2)];

if ($target == "laravel") {
    $model = new LaravelFactory();
} else if ($target == "cakephp") {
    $model = new CakephpFactory();
}

echo sprintf("<h1>Car Model：%s</h1>", $target);

$engine = $model->engine();
$engine->add();

$tire = $model->tire();
$tire->add();

$handle = $model->handle();
$handle->add();


