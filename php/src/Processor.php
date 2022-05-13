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

            if ($label < 10) {
                $endOfLine = sizeof($exploded) != $label ? PHP_EOL : '';
            }

            if ($label <= 10) {
                $result .= $label . ". $value" . $endOfLine;
                $endOfLine = '';
            }
        }

        return $result;
    }
}
