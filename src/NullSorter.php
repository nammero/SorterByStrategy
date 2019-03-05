<?php

namespace nammero\sorterbystrategy;


class NullSorter implements SorterInterface
{
    public function sortArray(array $arr)
    {
        // do nothing
    }
}