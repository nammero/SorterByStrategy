<?php

namespace App;


class Context
{
    private $sortInterfaceObject;

    public function __construct(SorterInterface $sortInterfaceObject)
    {
        $this->sortInterfaceObject = $sortInterfaceObject;
    }

    public function Sort($arr)
    {
        return $this->sortInterfaceObject->sortArray($arr);
    }
}