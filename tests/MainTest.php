<?php

declare(strict_types=1);

namespace Tests;

use App\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /** @test */
    public function it_should_test_main(): void
    {
        $main = new Main();
        $this->assertSame(-1, $main->main());
    }
}
