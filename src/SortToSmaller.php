<?php

namespace App;


class SortToSmaller implements SorterInterface
{
    public function sortArray(array $arr)
    {
        rsort($arr);
        return $arr;
    }
}