<?php

class GrandPa
{
    private $name = 'Mark Henry';

    protected function displayGrandPaName()
    {
        return $this->name;
    }
}

class Daddy extends GrandPa
{
    function displayGrandPaName()
    {
        return $this->name;
    }

}

//$daddy = new Daddy;
//echo $daddy->displayGrandPaName(); // Prints 'Mark Henry'

$outsiderWantstoKnowGrandpasName = new GrandPa;
echo $outsiderWantstoKnowGrandpasName->displayGrandPaName();; // Results in a Fatal Error
