<?php

namespace App;

/**
 * Class SortToBigger implement ASC sorting
 * @package App
 */
class SortToBigger implements SorterInterface
{
    public function sortArray(array $arr): array
    {
        sort($arr);
        return $arr;
    }
}