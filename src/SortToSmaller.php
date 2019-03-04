<?php

namespace App;

/**
 * Class SortToSmaller implement DESC sorting
 * @package App
 */
class SortToSmaller implements SorterInterface
{
    public function sortArray(array $arr): array
    {
        rsort($arr);
        return $arr;
    }
}