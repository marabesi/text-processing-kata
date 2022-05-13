<?php declare(strict_types=1);

namespace KataTests;

use Kata\Processor;
use PHPUnit\Framework\TestCase;

class ProcessorTest extends TestCase
{

    function dataProvider() {
        return [
            ['Hello', '1. Hello'],
            ['Hello world', "1. Hello\n2. world"],
            ['Hello world bla', "1. Hello\n2. world\n3. bla"],
            ['Hello world this is a long text now read me again', "1. Hello\n2. world\n3. this\n4. is\n5. a\n6. long\n7. text\n8. now\n9. read\n10. me"]
        ];
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function should_give_word_count(string $words, string $expectedValue): void
    {
        $xxx = new Processor();

        $result = $xxx->analyse($words);

        self::assertEquals($expectedValue, $result);
    }
}
