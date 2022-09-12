<?php

declare(strict_types=1);

namespace App;

use Dzusmin\POCPackage\ArrayReturningService;

class Main
{
    public function main(): int
    {
        $service = new ArrayReturningService();

        return $service->returnInt();
    }
}
