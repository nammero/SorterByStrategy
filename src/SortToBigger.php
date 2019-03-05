<?php

namespace nammero\sorterbystrategy;

/**
 * Class SortToBigger implement ASC sorting
 */
class SortToBigger implements SorterInterface
{
    public function sortArray(array $arr): array
    {
        sort($arr);
        return $arr;
    }
}
