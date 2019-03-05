<?php

namespace nammero\sorterbystrategy;

/**
 * Class SortToSmaller implement DESC sorting
 */
class SortToSmaller implements SorterInterface
{
    public function sortArray(array $arr): array
    {
        rsort($arr);
        return $arr;
    }
}
