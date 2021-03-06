<?php

namespace App\Cars\Products\Cakephp;

use App\Cars\Products\Interfaces\EngineInterface;
use App\Cars\Items\Cakephp\TireItem;

class CakephpTire implements EngineInterface
{
    protected $json;

    public function __construct()
    {
        $this->json = 'App/files/tire_parts.json';
    }

    public function partList()
    {
        $part_map = json_decode(file_get_contents($this->json));

        $parts_list = [];
        foreach ($part_map as $parts) {
            if ($parts->model === "cakephp") {
                $parts_list[] = new TireItem($parts->id, $parts->name, $parts->model);
            }
        }
        return $parts_list;
    }

    public function assembly()
    {
        $list = "";
        foreach ($this->partList() as $parts) {
            $list .= sprintf(
                "<li>Parts-No.%d %s | Target Model - %s</li>",
                $parts->getId(), $parts->getName(), $parts->getModel()
            );
        }
        return $list;
    }

    public function add()
    {
        echo "<h2>Tire</h2>";
        echo "<ul>";
        echo $this->assembly();
        echo "</ul>";
    }
}