<?php

namespace App\Cars\Factories;

use App\Cars\Factories\Interfaces\FactoryInterface;
use App\Cars\Products\Laravel\LaravelEngine;
use App\Cars\Products\Laravel\LaravelTire;
use App\Cars\Products\Laravel\LaravelHandle;

class LaravelFactory implements FactoryInterface
{
    public function engine()
    {
        return new LaravelEngine();
    }

    public function tire()
    {
        return new LaravelTire();
    }

    public function handle()
    {
        return new LaravelHandle();
    }

}