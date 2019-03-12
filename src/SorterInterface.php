<?php

namespace nammero\sorterbystrategy;

/**
 * Interface SorterInterface used by Sorter class for the specific Strategy implementation
 */
interface SorterInterface
{
    public function sortArray(array $arr);
}
