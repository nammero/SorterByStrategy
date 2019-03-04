<?php

namespace App;

/**
 * Interface SorterInterface used by Context class for the specific Strategy implementation
 * @package App
 */
interface SorterInterface
{
    public function sortArray(array $arr);
}