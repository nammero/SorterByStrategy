<?php

namespace App;

/**
 * Class Context using Strategy interface
 * @package App
 */
class Context
{
    private $sortInterfaceObject;

    public function __construct(SorterInterface $sortInterfaceObject)
    {
        $this->sortInterfaceObject = $sortInterfaceObject;
    }

    public function Sort($arr): array
    {
        return $this->sortInterfaceObject->sortArray($arr);
    }
}