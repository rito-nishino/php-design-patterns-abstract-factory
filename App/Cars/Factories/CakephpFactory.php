<?php

namespace App\Cars\Factories;

use App\Cars\Factories\Interfaces\FactoryInterface;
use App\Cars\Products\Cakephp\CakephpEngine;
use App\Cars\Products\Cakephp\CakephpTire;
use App\Cars\Products\Cakephp\CakephpHandle;

class CakephpFactory implements FactoryInterface
{
    public function engine()
    {
        return new CakephpEngine();
    }

    public function tire()
    {
        return new CakephpTire();
    }

    public function handle()
    {
        return new CakephpHandle();
    }
}