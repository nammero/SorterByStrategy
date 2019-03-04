<?php

namespace App;


class SortToBigger implements SorterInterface
{
    public function sortArray(array $arr)
    {
        sort($arr);
        return $arr;
    }
}