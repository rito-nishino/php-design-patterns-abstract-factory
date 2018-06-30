<?php

namespace App\Cars\Products\Interfaces;

interface EngineInterface
{
    public function partList();
    public function assembly();
    public function add();
}