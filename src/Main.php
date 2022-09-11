<?php

declare(strict_types=1);

namespace App;

use Dzusmin\POCPackage\ArrayReturningService;

class Main
{
    public function main(): int
    {
        $array = [];
        $service = new ArrayReturningService();
        $newArray = $service->returnArray($array);

        return count($array) - count($newArray);
    }
}
