<?php

namespace nammero\sorterbystrategy;

/**
 * Class Context using Strategy interface
 */
class Sorter
{
    private $sortInterfaceObject;

    public function __construct(SorterInterface $sortInterfaceObject)
    {
        $this->sortInterfaceObject = $sortInterfaceObject;
    }

    public function sortArr($arr): array
    {
        return $this->sortInterfaceObject->sortArray($arr);
    }
}
