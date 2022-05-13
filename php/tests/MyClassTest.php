<?php declare(strict_types=1);

namespace KataTests;

use Kata\Processor;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    /** @test */
    public function give_me_a_good_name_please(): void
    {
        $xxx = new Processor();

        $words = 'Hello';

        $result = $xxx->theMethod($words);

        self::assertEquals('1. Hello', $result);
    }

    /** @test */
    public function given_a_text_of_two_words_return_two_items_in_the_list(): void
    {
        $xxx = new Processor();

        $words = 'Hello world';

        $result = $xxx->theMethod($words);

        self::assertEquals("1. Hello\n2. world", $result);
    }
}
