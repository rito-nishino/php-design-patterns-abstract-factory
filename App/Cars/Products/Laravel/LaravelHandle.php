<?php

namespace App\Cars\Products\Laravel;

use App\Cars\Products\Interfaces\EngineInterface;
use App\Cars\Items\Laravel\HandleItem;

class LaravelHandle implements EngineInterface
{
    protected $json;

    public function __construct()
    {
        $this->json = 'App/files/handle_parts.json';
    }

    public function partList()
    {
        $part_map = json_decode(file_get_contents($this->json));

        $parts_list = [];
        foreach ($part_map as $parts) {
            if ($parts->model === "Laravel") {
                $parts_list[] = new HandleItem($parts->id, $parts->name, $parts->model);
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
        echo "<h2>Handle</h2>";
        echo "<ul>";
        echo $this->assembly();
        echo "</ul>";
    }

}