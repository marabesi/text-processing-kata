<?php declare(strict_types=1);

namespace KataTests;

use Kata\TheClass;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    /** @test */
    public function give_me_a_good_name_please(): void
    {
        $xxx = new TheClass();

        $words = 'Hello';

        $result = $xxx->theMethod($words);

        self::assertEquals('1. Hello', $result);
    }
}
