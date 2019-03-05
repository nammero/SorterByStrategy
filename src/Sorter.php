<?php

namespace nammero\sorterbystrategy;

/**
 * Class Sorter using Strategy interface
 */
class Sorter
{
    private $sortStrategy;

    public function setSortStrategy(SorterInterface $sortStrategy): void
    {
        $this->sortStrategy = $sortStrategy;
    }

    public function __construct(SorterInterface $sortInterfaceObject)
    {
        $this->sortStrategy = $sortInterfaceObject;
    }

    public function sortArr($arr): array
    {
        return $this->sortStrategy->sortArray($arr);
    }
}
