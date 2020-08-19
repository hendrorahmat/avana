<?php

function proccess(string $data, int $index)
{
    $totalLength = strlen($data);
    $totalOpenPaenthesis = 0;

    for ($i = 0; $i < $totalLength; $i++) {
        if ($data[$i] === "(" && $i > $index) {
            $totalOpenPaenthesis++;
        }

        if ($data[$i] === ")" && $i > $index) {
            $totalOpenPaenthesis--;

            if ($totalOpenPaenthesis === -1) {
                return $i;
            }
        }
    }
};

echo proccess("a (b c (d e (f) g) h) i (j k)", 2);
