<?php

namespace App\Cars\Items\Laravel;

class TireItem
{
    private $id;
    private $name;
    private $model;

    public function __construct($id, $name, $model)
    {
        $this->id = $id;
        $this->name = $name;
        $this->model = $model;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getModel()
    {
        return $this->model;
    }
}