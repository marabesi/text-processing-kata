<?php declare(strict_types=1);

namespace Kata;

class Processor
{
    public function analyse(string $words): string
    {
        $exploded = explode(' ', $words);

        $result = '';
        foreach ($exploded as $key => $value) {
            $label = $key + 1;
            $endOfLine = sizeof($exploded) != $label ? PHP_EOL : '';

            $result .= $label . ". $value" . $endOfLine;
        }

        return $result;
    }
}
